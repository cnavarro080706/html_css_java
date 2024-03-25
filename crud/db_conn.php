<?php
    // session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname1 = "devices";
    $dbname2 = "login";
    $dbname3 = "ipam";

    $conn1 = mysqli_connect($servername, $username, $password, $dbname1);
    $conn2 = mysqli_connect($servername, $username, $password, $dbname2);
    $conn3 = mysqli_connect($servername, $username, $password, $dbname3);

    if(!$conn1 or !$conn2 or !$conn3){
        die("Connection failed!" . mysqli_connect_error());
    }
    // echo "Connected Successfully!";
?>