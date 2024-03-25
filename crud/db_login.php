<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
session_start(); // Start the session

// Include the database connection
include("db_conn.php");

// Function to log user activity
function log_user_activity($session_id,$user_id, $username, $action, $details, $conn2) {
    date_default_timezone_set("Asia/Manila");
    $timestamp = date("Y-m-d H:i:s"); // Current timestamp

    // SQL INSERT statement to insert log entry into activity_log table
    $sql = "INSERT INTO activity_log (TIMESTAMP, SESSION_ID,USER_ID, USERNAME, ACTION, DETAILS) VALUES ('$timestamp', '$session_id','$user_id', '$username', '$action', '$details')";

    if ($conn2->query($sql) === TRUE) {
        // Log entry inserted successfully
    } else {
        // Error occurred while inserting log entry
        echo "Error: " . $sql . "<br>" . $conn2->error;
    }
}

// Check if the form is submitted
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['department'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $department = $_POST['department'];

    // Prepare and execute the SQL query
    $stmt = $conn2->prepare("SELECT `ID`, `USERNAME`, `DEPARTMENT` FROM tlogin WHERE `USERNAME` = ? AND `PASSWORD` = ? AND `DEPARTMENT` = ?");
    $stmt->bind_param("sss", $username, $password, $department);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the given credentials exists
    if($result->num_rows == 1) {
        // Fetch user data
        $user_data = $result->fetch_assoc();

        // Store user ID in session
        $_SESSION['user_id'] = $user_data['ID'];

        // Store username in session
        $_SESSION['username'] = $user_data['USERNAME'];

        // Store session ID
        $session_id = session_id();

        // Log user login activity
        log_user_activity($session_id,$_SESSION['user_id'],$_SESSION['username'], "login", "successfully logged in ", $conn2);

        // Redirect to dashboard.php
        header("Location: dashboard.php?msg=You have logged in successfully!");
        exit();
    } else {
        header("Location: login.php?error=wrong username or password");
        exit();
    }
}

// Retrieve user activity logs from the database
$sql = "SELECT * FROM activity_log ORDER BY TIMESTAMP DESC"; // Assuming TIMESTAMP is the column storing the timestamp of the activity log
$result = $conn2->query($sql);

?>