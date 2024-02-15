<?php
session_start();
/* php & mysql DB connection file */
    $servername = "localhost";
    $username = "cn02945"; //mysql username
    $password = "admin"; // mysql password
    $dbname = "login";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed".$conn->connect_error);
    } 
?>