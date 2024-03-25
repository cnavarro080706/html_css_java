<?php
include("connection.php");

// this is to capture the variables from website.php form
if(isset($_POST["hostname"]) && isset($_POST['ipaddress']) && isset($_POST['os']) && isset($_POST['devicetype']) && isset($_POST['ca']) && isset($_POST['model']) && isset($_POST['vendor']) && isset($_POST['deployment'])){
    $hostname=$_POST['hostname'];
    $ipaddress=$_POST['ipaddress'];
    $os=$_POST['os'];
    $devicetype=$_POST['devicetype'];
    $ca=$_POST['ca'];
    $model=$_POST['model'];
    $vendor=$_POST['vendor'];
    $deployment=$_POST['deployment'];

    // Prepare and execute the SQL Update
    $query = "INSERT INTO devices VALUES ('','$hostname','$ipaddress','$os','$devicetype','$ca','$model','$vendor','$deployment')";
    mysqli_query($conn2, $query);

    echo
    "<script> 
        alert('Data Inserted Successfully!'); 
        window.history.go(-1);
    </script>";

}
?>