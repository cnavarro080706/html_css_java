<?php
session_start();
/* php & mysql DB connection file */
    $servername = "localhost";
    $username = "devuser"; //mysql username
    $password = "devpasswd"; // mysql password
    $dbname1 = "login";
    $dbname2 = "devices";

    // create connection
    $conn1 = mysqli_connect($servername, $username, $password, $dbname1);
    $conn2 = mysqli_connect($servername, $username, $password, $dbname2);
    // check connection
    // if ($conn1 -> connect_error) {
    //     die("Connection failed".$conn->connect_error);
    // }
    // mysql_select_db('database1', $conn1);
    // mysql_select_db('database2', $conn2);

?>
