<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    include("db_login.php");
        // Check if the user is logged in
        if(isset($_SESSION['user_id'])) {
            // Get the user ID from the session
            $id = $_SESSION['user_id'];

            // Check if form data is submitted
            if(isset($_POST['submit'])) {
                // Include the database connection
                include("db_conn.php");

                // Initialize an array to store the columns to be updated
                $updates = array();

                // Retrieve form data
                if(isset($_POST['lastname']) && $_POST['lastname'] !== '') {
                    $updates[] = "`LASTNAME`='" . $_POST['lastname'] . "'";
                }
                if(isset($_POST['firstname']) && $_POST['firstname'] !== '') {
                    $updates[] = "`FIRSTNAME`='" . $_POST['firstname'] . "'";
                }
                if(isset($_POST['email']) && $_POST['email'] !== '') {
                    $updates[] = "`EMAIL`='" . $_POST['email'] . "'";
                }
                if(isset($_POST['department']) && $_POST['department'] !== '') {
                    $updates[] = "`DEPARTMENT`='" . $_POST['department'] . "'";
                }

                // Check if any columns need to be updated
                if(!empty($updates)) {
                    // Construct the SET clause of the SQL query
                    $set_clause = implode(',', $updates);

                    // Prepare the SQL query
                    $sql = "UPDATE `tlogin` SET $set_clause WHERE ID=$id";

                    // Execute the SQL query
                    if ($conn2->query($sql) === TRUE) {
                        if ($conn2->affected_rows > 0) {
                            header("Location: dashboard.php?msg=The record updated successfully!");
                            exit(); // Exit to prevent further execution
                        } else {
                            header("Location: dashboard.php?msg=No changes were made."); // Provide a message if no changes were made to the database
                            exit(); // Exit to prevent further execution
                        }
                    } else {
                        echo "Error updating record: " . $conn2->error;
                    }
                } else {
                    header("Location: dashboard.php?msg=No changes were made."); // Provide a message if no form data has been updated
                    exit(); // Exit to prevent further execution
                }
        
                // Close the database connection
                // $conn2->close();
            }
        } else {
            echo "User is not logged in."; // Provide a message if user is not logged in
            exit(); // Exit to prevent further execution
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
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #3498DB">Settings</nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit User Information</h3>
            <p class="text-muted">Click update once done.</p>
        </div>
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $_SESSION['username']?></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <?php
                        // $id = $_SESSION['user_id'];
                        $sql = "SELECT * FROM tlogin WHERE ID=$id";
                        $result = mysqli_query($conn2, $sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="" method="POST" style="width:50vw; min-width:300px;">
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">First Name</label>
                                <input type="text" class="form-control" placeholder="first name" name="firstname" value="<?php echo $row['FIRSTNAME'] ?>">
                            </div>
                            <div class="col-md-6"><label class="labels">Last Name</label>
                                <input type="text" class="form-control" placeholder="surname" name="lastname" value="<?php echo $row['LASTNAME'] ?>">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="enter phone number" name="mobile" value="">
                            </div>
                            <div class="col-md-12"><label class="labels">Session ID</label>
                                <input type="text" class="form-control" placeholder="login session id" name="session" value="<?php echo session_id()?>" disabled>
                            </div>
                            <div class="col-md-12"><label class="labels">User DB Login ID</label>
                                <input type="text" class="form-control" placeholder="dbid" name="user_id" value="<?php echo $row['ID']?>" disabled>
                            </div>
                            <div class="col-md-12"><label class="labels">Email</label>
                                <input type="text" class="form-control" placeholder="" name="email" value="<?php echo $row['EMAIL'] ?>">
                            </div>
                            <div class="col-md-12"><label class="labels">Username</label>
                                <input type="text" class="form-control" placeholder="" name="username" value="<?php echo $row['USERNAME'] ?>" disabled>
                            </div>
                            <div class="col-md-12"><label class="labels">Department</label>
                                <input type="text" class="form-control" placeholder="" name="department" value="<?php echo $row['DEPARTMENT'] ?>">
                            </div>
                            <div class="col-md-12"><label class="labels">Status</label>
                                <input type="text" class="form-control" placeholder="" name="status" value="<?php echo $row['STATUS'] ?>" disabled>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit" name="submit" onclick="return confirm('Are you sure you want to edit the profile?')">Update</button>
                            <a href="dashboard.php"class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>