<?php
session_start();

// Include a separate configuration file with database credentials
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Connect to Oracle database
    $conn = oci_connect($dbUsername, $dbPassword, $dbHost);

    if (!$conn) {
        die("Connection failed: " . oci_error());
    // }else{
    //     echo "Connection Established!";
    }

    // Create SQL query to check user credentials
    $query = "SELECT * FROM TLOGIN WHERE USERNAME = :username AND PASSWORD = :password";
    $stmt = oci_parse($conn, $query);
    oci_bind_by_name($stmt, ':username', $inputUsername);
    oci_bind_by_name($stmt, ':password', $inputPassword);

    // Define variables to fetch data
    oci_define_by_name($stmt, 'USERNAME', $fetchedUsername);
    oci_define_by_name($stmt, 'PASSWORD', $fetchedPassword);

    oci_execute($stmt);

    if (oci_fetch($stmt)) {
        // Login successful
        echo "Login successful! Welcome, " . $fetchedUsername;
    } else {
        // Login failed
        echo "Login failed. Invalid username or password.";
    }

    // Close the Oracle connection
    oci_free_statement($stmt);
    oci_close($conn);
}
?>

