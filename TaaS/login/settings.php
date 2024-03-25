<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    include_once("login.php");
        // Check if the user is logged in
        if(isset($_SESSION['user_id'])) {
            // Get the user ID from the session
            $id = $_SESSION['user_id'];

            // Check if form data is submitted
            if(isset($_POST['submit'])) {
                // Initialize an array to store the columns to be updated
                $updates = array();

                // Retrieve form data
                if(isset($_POST['lastname']) && $_POST['lastname'] !== '') {
                    $updates[] = "`lastname`='" . $_POST['lastname'] . "'";
                }
                if(isset($_POST['firstname']) && $_POST['firstname'] !== '') {
                    $updates[] = "`firstname`='" . $_POST['firstname'] . "'";
                }
                if(isset($_POST['email']) && $_POST['email'] !== '') {
                    $updates[] = "`email`='" . $_POST['email'] . "'";
                }
                // Check if any columns need to be updated
                if(!empty($updates)) {
                    // Construct the SET clause of the SQL query
                    $set_clause = implode(',', $updates);

                    // Prepare the SQL query
                    $sql = "UPDATE `users` SET $set_clause WHERE id=$id";

                    // Execute the SQL query
                    if ($conn->query($sql) === TRUE) {
                        if ($conn->affected_rows > 0) {
                            header("Location: ../index/nre_main.php?msg=The record updated successfully!");
                            exit(); // Exit to prevent further execution
                        } else {
                            header("Location: ../index/nre_main.php?msg=No changes were made."); // Provide a message if no changes were made to the database
                            exit(); // Exit to prevent further execution
                        }
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    header("Location: ../index/nre_main.php?msg=No changes were made."); // Provide a message if no form data has been updated
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
        <link rel="stylesheet" href="../stylesheets/nre.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NRE Training As a Service</title>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="../img/NRE_logo.png" class="logo">
                <ul>
                    <li><a href="../login/settings.php">settings</a></li>
                    <li><a href="../faqs/faqs.php">FAQs</a></li>
                    <li> <a href="../index/nre_main.php" onclick="if (confirm('Are you sure you want to go back to home page?')) { window.location = '../index/nre_main.php' }">Home</a></li>
                </ul>
            </div>
            <!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #3498DB">Settings</nav> -->
            <div class="container text-light">
                <div class="text-center mb-4">
                    <h3>Edit User Information</h3>
                    <p class="text-light">Click update once done.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 border-right custom-text-color">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><div class="font-weight-bold text-white"><?php echo $_SESSION['username']?></div></div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <?php
                                include_once "connection.php";
                                $sql = "SELECT * FROM `users` WHERE id=$id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            <form action="" method="POST" style="width:50vw; min-width:300px;">
                            <div class="row mt-2">
                                <div class="col-md-4"><label class="labels">First Name</label>
                                    <input type="text" class="form-control" placeholder="first name" name="firstname" value="<?php echo $row['firstname'] ?>">
                                </div>
                                <div class="col-md-4"><label class="labels">Last Name</label>
                                    <input type="text" class="form-control" placeholder="surname" name="lastname" value="<?php echo $row['lastname'] ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8"><label class="labels">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="enter phone number" name="mobile" value="">
                                </div>
                                <div class="col-md-8"><label class="labels">Session ID</label>
                                    <input type="text" class="form-control" placeholder="login session id" name="session" value="<?php echo session_id()?>" disabled>
                                </div>
                                <div class="col-md-8"><label class="labels">User DB Login ID</label>
                                    <input type="text" class="form-control" placeholder="dbid" name="user_id" value="<?php echo $row['id']?>" disabled>
                                </div>
                                <div class="col-md-8"><label class="labels">Email</label>
                                    <input type="text" class="form-control" placeholder="" name="email" value="<?php echo $row['email'] ?>">
                                </div>
                                <div class="col-md-8"><label class="labels">Username</label>
                                    <input type="text" class="form-control" placeholder="" name="username" value="<?php echo $row['username'] ?>" disabled>
                                </div>
                                <div class="col-md-8"><label class="labels">Status</label>
                                    <input type="text" class="form-control" placeholder="" name="status" value="<?php echo $row['status'] ?>" disabled>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-4 text-center">
                                <button class="btn btn-primary profile-button me-2" type="submit" name="submit" onclick="return confirm('Are you sure you want to edit the profile?')">Update</button>
                                <a href="../index/nre_main.php"class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    </body>
</html>