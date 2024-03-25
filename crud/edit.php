<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
include "db_login.php";
$id = $_GET['id'];
date_default_timezone_set("Asia/Manila");

if(isset($_POST['submit'])) {
    $hostname   = $_POST['hostname'];
    $ipaddress  = $_POST['ipaddress'];
    $os         = $_POST['ostype'];
    $devicetype = $_POST['devicetype'];
    $ca         = $_POST['ca'];
    $model      = $_POST['model'];
    $vendor     = $_POST['vendor'];
    $deployment = $_POST['deployment'];
    $date_modified = date('Y-m-d H:i:s');

    $sql = "SELECT * FROM `devices` WHERE ID=$id";

    $result_select = mysqli_query($conn1, $sql);
    $row = mysqli_fetch_assoc($result_select);
    // Compare submitted values with existing values
    if (
        $hostname   == $row['HOSTNAME'] &&
        $ipaddress  == $row['IPADDRESS'] &&
        $os         == $row['OS_TYPE'] &&
        $devicetype == $row['DEVICE_TYPE'] &&
        $ca         == $row['CA'] &&
        $model      == $row['MODEL'] &&
        $vendor     == $row['VENDOR'] &&
        $deployment == $row['DEPLOYMENT']
    ) {
        // No changes were made
        header("Location: index.php?msg=No changes were made.");
        exit();
    }

    // Update the record in the database
    $sql_update = "UPDATE `devices` SET `HOSTNAME`='$hostname',`IPADDRESS`='$ipaddress',`OS_TYPE`='$os',`DEVICE_TYPE`='$devicetype',`CA`='$ca',`MODEL`='$model',`VENDOR`='$vendor',`DEPLOYMENT`='$deployment', `DATE_MODIFIED`='$date_modified'  WHERE `ID`=$id";
    $result_update = mysqli_query($conn1, $sql_update);

    if($result_update) {
        header("Location: index.php?msg=The record updated successfully!");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn1);
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>Network Infrastructure System</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-3" style="background-color: #3498DB">Network Devices</nav>
    
    <div class="container">
        <div class="text-center">
            <h3>Edit Device Information</h3>
            <p class="text-muted">Click update once done.</p>
        </div>
        <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM devices WHERE id=$id LIMIT 1";
            $result = mysqli_query($conn1, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center overflow-hidden">
            <form action="" method="POST" style="width:50vw; min-width:300px;">
                <div class="mb-3">
                    <label class="form-label">Hostname</label>
                    <input type="text" class="form-control" name="hostname" value="<?php echo $row['HOSTNAME']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">IP Address</label>
                    <input type="text" class="form-control" name="ipaddress" value="<?php echo $row['IPADDRESS']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">OS Type</label>
                    <input type="text" class="form-control" name="ostype" value="<?php echo $row['OS_TYPE']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Device Type</label>
                    <input type="text" class="form-control" name="devicetype" value="<?php echo $row['DEVICE_TYPE']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Component Architecture</label>
                    <input type="text" class="form-control" name="ca" value="<?php echo $row['CA']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Model</label>
                    <input type="text" class="form-control" name="model" value="<?php echo $row['MODEL']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Vendor</label>
                    <input type="text" class="form-control" name="vendor" value="<?php echo $row['VENDOR']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deployment</label>
                    <input type="text" class="form-control" name="deployment" value="<?php echo $row['DEPLOYMENT']; ?>">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Are you sure you want to edit the device?')">Update</button>
                    <a href="index.php"class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>