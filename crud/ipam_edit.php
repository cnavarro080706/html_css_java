<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    include "db_login.php";

    // Get the ID from the URL
    $id = $_GET['id'];

    date_default_timezone_set("Asia/Manila");

    if(isset($_POST['submit'])) {
        $ipaddress = $_POST['ipaddress'];
        $mask = $_POST['mask'];
        $status = $_POST['status'];
        $net_type = $_POST['net_type'];
        $subnet_type = $_POST['subnet_type'];
        $city = $_POST['city'];
        $building = $_POST['building'];
        $floor = $_POST['floor'];
        $date_modified = date('Y-m-d H:i:s');

        // Fetch existing values from the database
        $sql_fetch = "SELECT * FROM `ipam` WHERE `ID`='$id'";
        $result_fetch = mysqli_query($conn3, $sql_fetch);
        $row_fetch = mysqli_fetch_assoc($result_fetch);

        // Compare the values with the existing values
        if (
            $row_fetch['IPADDRESS'] != $ipaddress ||
            $row_fetch['MASK'] != $mask ||
            $row_fetch['STATUS'] != $status ||
            $row_fetch['NET_TYPE'] != $net_type ||
            $row_fetch['SUBNET_TYPE'] != $subnet_type ||
            $row_fetch['CITY'] != $city ||
            $row_fetch['BUILDING'] != $building ||
            $row_fetch['FLOOR'] != $floor 
            ) {
            // Changes were made, update the record
            $sql = "UPDATE `ipam` SET `IPADDRESS`='$ipaddress',`MASK`='$mask',`STATUS`='$status',`NET_TYPE`='$net_type',`SUBNET_TYPE`='$subnet_type',`CITY`='$city',`BUILDING`='$building',`FLOOR`='$floor', `DATE_MODIFIED`='$date_modified' WHERE `ID`='$id'";
            $result = mysqli_query($conn3, $sql);

            if($result) {
                header("Location: ipam.php?msg=The record updated successfully!");
                exit(); // Exit to prevent further execution
            } else {
                echo "Failed: " . mysqli_error($conn3);
                exit();
            } 
        } else {
            // No changes were made
            header("Location: ipam.php?msg=No changes were made.");
            exit();
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
            <h3>Edit IP Address Information</h3>
            <p class="text-muted">Click update once done.</p>
        </div>
        <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM ipam WHERE id=$id LIMIT 1";
            $result = mysqli_query($conn3, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center overflow-hidden">
            <form action="" method="POST" style="width:50vw; min-width:300px;">
                <div class="mb-3">
                    <label class="form-label">IP Address</label>
                    <input type="text" class="form-control" name="ipaddress" value="<?php echo $row['IPADDRESS']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mask</label>
                    <input type="text" class="form-control" name="mask" value="<?php echo $row['MASK']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" name="status" value="<?php echo $row['STATUS']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Net Type</label>
                    <input type="text" class="form-control" name="net_type" value="<?php echo $row['NET_TYPE']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Subnet Type</label>
                    <input type="text" class="form-control" name="subnet_type" value="<?php echo $row['SUBNET_TYPE']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="city" value="<?php echo $row['CITY']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Building</label>
                    <input type="text" class="form-control" name="building" value="<?php echo $row['BUILDING']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Floor</label>
                    <input type="text" class="form-control" name="floor" value="<?php echo $row['FLOOR']; ?>">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Are you sure you want to edit the entry?')">Update</button>
                    <a href="ipam.php"class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>