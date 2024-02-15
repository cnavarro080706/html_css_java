<?php
    include("login_counter.php");
    // Display the user's name and the display counter
    display_user_info($username, $display_counter);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles\website.css">
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
        <div class="navbar">
            <header class="service-title"><h3>Network Infrastructure Automation</h3></header>
                <!-- <p class="version">v1.0.0</p> -->
                <div class="header-right">
                    <input class="search-bar" type="text" name="searchbox" placeholder="Search">
                    <button class="service-request">Create New Request</button>
                    <button class="service-settings">Settings</button>
                    <button class="service-profile">Profile</button>
                    <button class="service-logout" onclick="if (confirm('Are you sure you want to log out?')) { window.location = 'logout.php' }">Logout</button>
            </div>
        </div>
    </div>
</body>
</html>
