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
            <img src="../img/NRE_logo.png" class="logo">
            <ul>
                <li><a href="../main/nre.php">Home</a></li>
                <li><a href="../login/nre_login.php">Login</a></li>
                <li><a href="../contacts/nre_contacts.php">Contacts</a></li>
                <li><a href="../about/nre_about.php">About</a></li>
            </ul>
        </div>
        <div class="container">
            <?php
                // Check if the message parameter exists in the URL
                if (isset($_GET['msg'])) {
                    // Output the message
                    echo "<div class='alert alert-info'>" . htmlspecialchars($_GET['msg']) . "</div>";
                }
            ?>
        </div>
        <div class="main_content">
            <h1>NRE Training Services</h1>
            <p>This website is still on ongoing update, press either the buttons below to choose your next step.</p>
            <div class="main_button">
                <button type="button"><span></span><a href="../about/nre_about.php">ABOUT NRE TaaS</a></button>
                <button type="button"><span></span> REQUEST AN ACCESS</button>
            </div>
        </div>
    </div>
    <footer class="d-flex text-dark d-flex flex-column mt-4 fixed-bottom">
        <div class="container text-center text-white">
            <p>All Rights Reserved, <a href="#">nre.training.services@hotmail.com</a></p>
            <h6><p>Copyright &copy;2024 Designed and Created by Chris Navarro </p></h6>
        </div>
    </footer> 
</body>
</html>