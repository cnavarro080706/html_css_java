<?php
    // Destroy the session
    session_destroy();

    // Redirect the user to the login page
    header("Location: index.html");
    exit();
?>