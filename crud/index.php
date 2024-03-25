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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
            <a class="navbar-brand" href="#"><h5 class="mt-1">Network Devices</h5></a>
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
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" id="search" name="search" type="text" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                </form>
            </div>
        </div>
    </nav>
    <div class="table-responsive-sm ms-5 me-5" style="max-height: 650px; overflow-y: auto;">
        <div class="table-responsive-sm">
            <?php
                if(isset($_GET['msg'])) {
                    $msg = $_GET['msg']; 
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$msg.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
            ?>
            <div class="container-fluid d-flex justify-content-between align-items-center mb-2">
                <a href="add_device.php" class="btn btn-primary">Create New Request</a>
                <div class="d-flex ms-auto">
                    <form id="importForm" class="me-2">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importModal">
                        Import CSV
                        </button>
                    </form>
                    <form action="device_export.php" method="POST">
                    <input type="submit" name="export_csv" class="btn btn-success" value="Export">
                    </form>
                </div>
            </div>
            <!-- Import Modal -->
            <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="importModalLabel">Import CSV</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="uploadFormModal" method="POST" action="device_import.php" enctype="multipart/form-data">
                                <input type="file" class="form-control" id="fileInput" name="file" accept=".csv">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="uploadButton">Upload</button>
                                </div>
                            </form>
                        </div>
        
                    </div>
                </div>
            </div>
            <table class="table table-hover text-center table-striped table-sm" id="deviceTable">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Hostname</th>
                        <th scope="col">IP Address</th>
                        <th scope="col">OS Type</th>
                        <th scope="col">Device Type</th>
                        <th scope="col">CA</th>
                        <th scope="col">Model</th>
                        <th scope="col">Vendor</th>
                        <th scope="col">Deployment</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Date Modified</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="overflow-auto">
                    <?php
                        include "db_conn.php";
                        $sql = "SELECT * FROM devices ORDER BY HOSTNAME ASC";
                        $result = mysqli_query($conn1, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['ID'] ?></td>
                                <td><?php echo $row['HOSTNAME'] ?></td>
                                <td><?php echo $row['IPADDRESS'] ?></td>
                                <td><?php echo $row['OS_TYPE'] ?></td>
                                <td><?php echo $row['DEVICE_TYPE'] ?></td>
                                <td><?php echo $row['CA'] ?></td>
                                <td><?php echo $row['MODEL'] ?></td>
                                <td><?php echo $row['VENDOR'] ?></td>
                                <td><?php echo $row['DEPLOYMENT'] ?></td>
                                <td><?php echo $row['DATE_CREATED'] ?></td>
                                <td><?php echo $row['DATE_MODIFIED'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['ID'] ?>" class="btn btn-primary me-1"><i class="fas fa-edit"></i>
                                    <a href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger me-1" onclick="return confirm('Are you sure you want to remove this device?')"><i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        // Define jqclick function for handling click events on page buttons
        function jqclick() {
        // Example: Handle click event for buttons with class "page-button"
            $('.page-button').click(function() {
                // Your button click handler logic here
            });
        }
        $(document).ready(function() {
            // Call jqclick function to set up click event handlers
            jqclick();
            // Search/filter feature
            $('#search').keyup(function() {
                search_table($(this).val());
            });

            function search_table(value) {
                $('#deviceTable tbody tr').each(function() { // only search in tbody rows
                    var found = 'false';
                    $(this).each(function() { // exclude last td (Action)
                        if ($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0) {
                            found = 'true';
                            return 'false';
                        }
                    });
                    if (found == 'true') {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <footer class="text-dark d-flex flex-column mt-4 fixed-bottom">
        <div class="container text-center">
            <h6><p>Copyright &copy;2024 Designed and Created by <span class="designer">Chris Navarro</span></p></h6>
        </div>
    </footer>
</body>
</html>