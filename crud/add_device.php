<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    include "db_conn.php";
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
        $date_created = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO devices VALUES ('','$hostname','$ipaddress','$os','$devicetype','$ca','$model','$vendor','$deployment','$date_created','')";

    $result = mysqli_query($conn1, $sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully!");
        exit(); // Added exit to stop further execution
    }
    else {
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
            <h3>Add New Device</h3>
            <p class="text-muted">Complete the form below to add a new device</p>
        </div>
        <div class="container d-flex justify-content-center verflow-hidden">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="mb-3">
                    <label class="form-label">Hostname</label>
                    <input type="text" class="form-control" name="hostname" placeholder="leaf01-93180">
                </div>
                <div class="mb-3">
                    <label class="form-label">IP Address</label>
                    <input type="text" class="form-control" name="ipaddress" placeholder="192.168.0.1">
                </div>
                <div class="mb-3">
                    <label class="form-label">OS Type</label>
                    <input type="text" class="form-control" name="ostype" placeholder="nxos">
                </div>
                <div class="mb-3">
                    <label class="form-label">Device Type</label>
                    <input type="text" class="form-control" name="devicetype" placeholder="Layer 3 Switch">
                </div>
                <div class="mb-3">
                    <label class="form-label">Component Architecture</label>
                    <input type="text" class="form-control" name="ca" placeholder="IP Fabric">
                </div>
                <div class="mb-3">
                    <label class="form-label">Model</label>
                    <input type="text" class="form-control" name="model" placeholder="Nexus-N93180YC">
                </div>
                <div class="mb-3">
                    <label class="form-label">Vendor</label>
                    <input type="text" class="form-control" name="vendor" placeholder="Cisco">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deployment</label>
                    <input type="text" class="form-control" name="deployment" placeholder="Completed">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Create New Entry</button>
                    <a href="index.php"class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>