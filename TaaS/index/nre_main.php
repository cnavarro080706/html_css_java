<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../stylesheets/nre.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRE Training As a Service</title>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="../img/nre_logo.png" class="logo">
            <div class="d-flex flex-column justify-content-center">
                <?php
                        include_once "../login/login.php";
                        ?>
                        <a class="navbar-brand d-flex text-left" href="../login/settings.php"><h6 class="text-light mb-0 ms-2">Welcome,&nbsp;<i class="text-info"><?php echo $_SESSION['username'] ?></i></h6></a>
                <div class="navbar-nav text-left text-white ms-2" style="font-size: 12px;">
                    <?php
                    date_default_timezone_set("Asia/Manila");
                    echo "" . date("F j, Y - h:i:sa");
                    ?>
                </div>
            </div>
            <ul class="ms-auto">
                <li><a href="../login/settings.php">settings</a></li>
                <li><a href="../faqs/faqs.php">FAQs</a></li>
                <li> <a href="../main/nre.php" onclick="if (confirm('Are you sure you want to log out?')) { window.location = 'logout.php' }">Logout</a></li>
            </ul>
        </div>
            <div class="container">
                <?php
                    // Check if the message parameter exists in the URL
                    if (isset($_GET['msg'])) {
                        // Output the message with a close button
                        echo '<div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                                <div class="me-2"></div>' . $_GET['msg'] . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    }
                ?>
            </div>
            <div class="content">
            <h1>NRE Training Services</h1>
            <p>This website is still on development, press either the buttons below to choose your next step.</p>
                <div class="domain">
                    <div class="data_center">
                        <a href="../datacenter/datacenter.php"><img class="image-overlay" src="../img/dc.png"></a>
                        <div class="text-box"><p>The <b><a href="../datacenter/datacenter.html">DATA CENTER</a></b> area is the area where servers and application systems are deployed to provide data and application services for internal and external users.</p></div>
                    </div>
                    <div class="peripheral">
                        <a href="../campus/campus.php"><img class="image-overlay" src="../img/campus.jpg"></a>
                        <div class="text-box"><p><b><a href="../campus/campus.html">CAMPUS</a></b> Networks generally follow the principles of hierarchical, regional and modular design.Campus networks can be divided into small campus networks, medium campus networks, and large campus networks.</p></div>
                    </div>
                    <div class="perimeter">
                        <a href="../perimeter/perimeter.php"><img class="image-overlay" src="../img/perimeter.png"></a>
                        <div class="text-box"><p>The Network <b><a href="../perimeter/perimeter.html">PERIMETER</a></b> is the boundary between the private locally managed enterprise network and public networks such as the internet.</p></div>
                    </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    <footer class="d-flex text-dark d-flex flex-column mt-4 fixed-bottom">
        <div class="container text-center text-white">
            <p>All Rights Reserved, <a href="#">nre.training.services@hotmail.com</a></p>
            <p>Copyright &copy;2024 Designed and Created by Chris Navarro</p>
        </div>
    </footer>
</body>
</html>