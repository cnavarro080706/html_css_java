<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- <link rel="stylesheet" href="index.css"> -->

    <title>Network Infrastructure System</title>
</head>
<body>
    <nav class="navbar bg-dark justify-content-center fs-3">
        <p class="align-self-center text-white mt-3 mb-lg-0">Network Infrastructure System &nbsp<sub class="text-white fs-6">version 1.0</sub></p>
        <div class="container-fluid d-flex flex-row-reverse">
            <div class="navbar-nav text-right text-white fs-6">
                <?php
                date_default_timezone_set("Asia/Manila");
                echo "Local time: " . date("F j, Y - h:i:sa");
                ?>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h5 class="mt-1">Dashboard Details</h5></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="userprofile.php">Settings</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php">Devices</a></li>
                        <li><a class="dropdown-item" href="ipam.php">IPAM Services</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.php" onclick="return confirm('Are you sure you want to leave the page?')">Logout</a></li>
                    </ul>
                </li>
            </ul>
                <?php
                include_once "db_login.php";
                ?>
                <a class="navbar-brand" href="userprofile.php"><h6 class="mt-2">Welcome, <?php echo $_SESSION['username'] ?></h6></a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
            if(isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$msg.' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
            }
        ?>
        <div class="card-group">
            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                <div class="card text-bg-success text-white mb-3" style="width: 300px; height: 150px;">
                    <div class="card-body"><h5 class="card-title">Total Devices 
                        <?php
                            $total_devices_post_query = "SELECT * FROM devices";
                            $total_devices_post_query_rum = mysqli_query($conn1, $total_devices_post_query);
                            if ($post_total = mysqli_num_rows($total_devices_post_query_rum))
                            {
                                echo '<h2 class="mt-0">'.$post_total.'</h2>';
                            }
                            else
                            {
                                echo '<h3 class="mt-0"> No Data </h3>';
                            }
                        ?>
                        </h5></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="index.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                <div class="card text-bg-primary text-white mb-3" style="width: 300px; height: 150px;">
                    <div class="card-body"><h5 class="card-title">Total IP Subnets Allocated 
                        <?php
                                $total_ipam_post_query = "SELECT * FROM ipam";
                                $total_ipam_post_query_rum = mysqli_query($conn3, $total_ipam_post_query);
                                if ($post_total = mysqli_num_rows($total_ipam_post_query_rum))
                                {
                                    echo '<h2 class="mt-0">'.$post_total.'</h2>';
                                }
                                else
                                {
                                    echo '<h3 class="mt-0"> No Data </h3>';
                                }
                        ?>
                        </h5></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="ipam.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                <div class="card text-bg-warning text-white mb-3" style="width: 300px; height: 150px;">
                    <div class="card-body"><h5 class="card-title">Registered Users 
                        <?php
                            $total_user_post_query = "SELECT * FROM tlogin";
                            $total_user_post_query_rum = mysqli_query($conn2, $total_user_post_query);
                            if ($post_total = mysqli_num_rows($total_user_post_query_rum))
                            {
                                echo '<h2 class="mt-0">'.$post_total.'</h2>';
                            }
                            else
                            {
                                echo '<h3 class="mt-0"> No Data </h3>';
                            }
                        ?>
                    </h5></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="" disabled>View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                <div class="card text-bg-danger text-white mb-3" style="width: 300px; height: 150px;">
                    <div class="card-body"><h5 class="card-title">Session ID
                        <?php
                            require_once 'db_login.php';
                            $sessionID = session_id();
                            echo '<p class="mt-0 text-success fs-6 mt-3">' .$sessionID. '</p>';
                        ?>  
                    </h5></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="card text-bg-light text-dark border-primary overflow-auto" style="width: 62.5 rem; height: 25rem">
                <div class="card-header boder-primary">
                    <h5 class="card-title">History Logs<h5>
                </div>
                <div class="card-body">
                    <p class="overflow-auto">
                        <?php
                            require_once 'db_login.php';
                            // $sessionID = session_id();
                            // Check if there are any activity logs
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while($row = $result->fetch_assoc()) {
                                    // Format the activity log statement with consistent spacing
                                    $activity_statement = sprintf(
                                    "&emsp;&emsp;<b>%-25s</b>&nbsp user &nbsp<b><i>%-25s</i></b>&nbsp&nbsp with session id of &emsp;<b>%-25s</b>&nbsp&nbsp has <b>%s.</b>",
                                    $row["TIMESTAMP"],
                                    $row["USERNAME"],
                                    $row["SESSION_ID"],
                                    $row["DETAILS"]
                                    );
                                    // Output the activity log statement
                                    echo "<p>" . $activity_statement . "</p>";
                                }
                            } else {
                                echo "No activity logs found.";
                            }
                        ?>
                    </p></h6></h5></div>
                <!-- <a class="small text-primary stretched-link" href="">View Details</a> -->
                <!-- <div class="small text-primary"><i class="fas fa-angle-right"></i></div> -->
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            jqclick
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <footer class="text-dark d-flex flex-column mt-4 fixed-bottom">
        <div class="container text-center">
            <h6><p>Copyright &copy;2024 Designed and Created by <span class="designer">Chris Navarro</span></p></h6>
        </div>
    </footer>
</body>
</html>