<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    include "db_conn.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM `devices` WHERE ID=$id";

    $result = mysqli_query($conn1, $sql);

    if($result) {
        header("Location: index.php?msg=Record deleted successfully!");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
?>