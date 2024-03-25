<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../stylesheets/nre.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
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
        <div class="content">
            <h1>NRE Training Services</h1>
            <p>This website is still on development, provide your login credentials below and choose your next step.</p>
            <form name="form" action="login.php" method="POST">
                <div class="box">
                    <div class="form">
                        <h2>Sign in</h2>
                        <div class="inputBox">
                            <input type="text" name="username" id="username" required>
                            <span>Username</span>
                            <i></i>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" id="password" required>
                            <span>Password</span>
                            <i></i>
                        </div>
                        <div class="links">
                            <button class="login" type="submit" value="login"><span></span>Login</button>
                            <button class="fpass" type="button"><a href="#"><span></span>Forgot Password</a></button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
</html>