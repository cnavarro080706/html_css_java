<?php
// session_start();
/* php & mysql DB connection file */
    $servername = "localhost";
    $username = "root"; //mysql username
    $password = ""; // mysql password
    $dbname = "taas";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // check connection
    if (!$conn) {
        die("Connection failed". mysqli_connect_error());
    } 
    // echo "Connected Successfully!";
?>