<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    include "db_conn.php";
    date_default_timezone_set("Asia/Manila");

    if(isset($_POST['submit'])) {
        $ipaddress       = $_POST['ipaddress'];
        $mask            = $_POST['mask'];
        $status          = $_POST['status'];
        $city            = $_POST['city'];
        $building        = $_POST['building'];
        $floor           = $_POST['floor'];
        $device          = $_POST['device'];
        $description     = $_POST['description'];
        $date_created    = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO ipam VALUES ('','$ipaddress','$mask','$status','$city','$building','$floor','$device','$description','$date_created','')";

    $result = mysqli_query($conn3, $sql);

    if($result) {
        header("Location: ipam.php?msg=New record created successfully!");
    }
    else {
        echo "Failed: " . mysqli_error($conn3);
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
    <nav class="navbar navbar-light justify-content-center fs-3 mb-3" style="background-color: #3498DB">IP Address Management</nav>
    
    <div class="container">
        <div class="text-center">
            <h3>Add New IP Address</h3>
            <p class="text-muted">Complete the form below to add a new ip address entry</p>
        </div>
        <div class="container d-flex justify-content-center overflow-hidden">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="mb-3">
                    <label class="form-label">IP Address</label>
                    <input type="text" class="form-control" name="ipaddress" placeholder="10.10.10.0">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mask</label>
                    <input type="text" class="form-control" name="mask" placeholder="24">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" name="status" placeholder="available">
                </div>
                <div class="mb-3">
                    <label class="form-label">Net Type</label>
                    <input type="text" class="form-control" name="device" placeholder="Campus">
                </div>
                <div class="mb-3">
                    <label class="form-label">Subnet Type</label>
                    <input type="text" class="form-control" name="description" placeholder="LAN">
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="city" placeholder="Pasig">
                </div>
                <div class="mb-3">
                    <label class="form-label">Building</label>
                    <input type="text" class="form-control" name="building" placeholder="XYZ Data Center">
                </div>
                <div class="mb-3">
                    <label class="form-label">Floor</label>
                    <input type="text" class="form-control" name="floor" placeholder="GF">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Create New Entry</button>
                    <a href="ipam.php"class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>