<?php

require_once 'db_conn.php';

$successMessage = ""; // Initialize success message variable
$errorMessage = ""; // Initialize error message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {

    // Your existing code for validating file and moving it
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $allowedExtensions = ['csv'];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));

    if (!in_array($fileExtension, $allowedExtensions)) {
      $errorMessage = 'Only CSV files are allowed.';
    } elseif ($fileSize > 1048576) {
      $errorMessage = 'File size exceeds limit (1 MB).';
    } elseif ($fileError !== 0) {
      switch ($fileError) {
        case UPLOAD_ERR_INI_SIZE:
          $errorMessage = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
          break;
        case UPLOAD_ERR_FORM_SIZE:
          $errorMessage = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
          break;
        case UPLOAD_ERR_PARTIAL:
          $errorMessage = 'The uploaded file was only partially uploaded.';
          break;
        case UPLOAD_ERR_NO_FILE:
          $errorMessage = 'No file was uploaded.';
          break;
        case UPLOAD_ERR_NO_TMP_DIR:
          $errorMessage = 'Missing a temporary folder.';
          break;
        case UPLOAD_ERR_CANT_WRITE:
          $errorMessage = 'Failed to write file to disk.';
          break;
        case UPLOAD_ERR_EXTENSION:
          $errorMessage = 'A PHP extension stopped the file upload.';
          break;
      }
    } else {
      // Move the file and process CSV data
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["file"]["name"]);

      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $fileHandle = fopen($target_file, 'r');
        // Initialize error flag
        $errorDetected = false;

        while (($row = fgetcsv($fileHandle, 1000, ',')) !== false) {
            // Skip the header row (optional, adjust as needed)
            if (ftell($fileHandle) === ftell(fopen($target_file, 'r')) + 1) {
                continue;
            }
            // Assign values directly from the $row array
            $hostname       = isset($row[0]) ? $row[0] : null;
            $ipAddress      = isset($row[1]) ? $row[1] : null;
            $osType         = isset($row[2]) ? $row[2] : null;
            $deviceType     = isset($row[3]) ? $row[3] : null;
            $ca             = isset($row[4]) ? $row[4] : null;
            $model          = isset($row[5]) ? $row[5] : null;
            $vendor         = isset($row[6]) ? $row[6] : null;
            $deployment     = isset($row[7]) ? $row[7] : null;

            // Check if required fields are missing
            if (empty($hostname) || empty($ipAddress) || empty($osType) || empty($deviceType) || empty($ca) || empty($model) || empty($vendor) || empty($deployment)) {
                $errorMessage = "Error: Missing required fields. Please make sure all fields are filled.";
                $errorDetected = true;
                break; // Exit the loop once an error is detected
            }

            // Create SQL query with prepared statements for better security
            $sql = "INSERT INTO `devices` (HOSTNAME, IPADDRESS, OS_TYPE, DEVICE_TYPE, CA, MODEL, VENDOR, DEPLOYMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            try {
                $stmt = $conn1->prepare($sql);
                $stmt->bind_param('ssssssss', $hostname, $ipAddress, $osType, $deviceType, $ca, $model, $vendor, $deployment);
                
                // Execute the query
                if ($stmt->execute()) {
                    $successMessage = "Data inserted successfully.";
                } else {
                    $errorMessage = "Failed to insert data.";
                    $errorDetected = true;
                    break; // Exit the loop once an error is detected
                }
            } catch (PDOException $e) {
                $errorMessage = "Error: " . $e->getMessage();
                $errorDetected = true;
                break; // Exit the loop once an error is detected
            }
        }

        fclose($fileHandle);
      } else {
        $errorMessage = "Failed to move uploaded file.";
      }
    }
  } else {
    $errorMessage = "No file uploaded.";
  }

  // Check if any error was detected
  if ($errorDetected) {
    // Handle the error, maybe redirect to index.php with the error message
    header("Location: index.php?msg=" . urlencode($errorMessage));
    exit();
  }

  // Redirect to index.php with success message
  header("Location: index.php?msg=" . urlencode($successMessage));
  exit();
}

?>
