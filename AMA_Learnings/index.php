<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles\login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles\master.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Automation</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <header><h4>Login</h4></header>
            <form name="form" action="login.php" method="POST">
                <div class="field-input">
                    <!-- <label for="username">Username</label> -->
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <i class="bx bxs-user"></i> 
                </div>
                <div class="field-input">
                    <!-- <label for="password">Password</label> -->
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember Me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <div class="domain">
                    <label for="domain">Region</label>
                        <select name="region" id="region" require_once>
                            <option class="dropdown" value="region"></option>
                            <option class="dropdown" value="apac">APAC</option>
                            <option class="dropdown" value="emea">EMEA</option>
                            <option class="dropdown" value="nam">NAM</option>
                            <option class="dropdown" value="latam">LATAM</option>
                        </select>
                </div>
                <input type="submit" class="service-login" value="Login">
            </form>
        </div>
    </div>
</body>
</html>