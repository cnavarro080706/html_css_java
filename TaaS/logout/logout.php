<?php
// Destroy the session
    session_destroy();

    // Redirect the user to the login page with a logout message
    header("Location: ../main/nre.php?msg=" . urlencode("You have logged out successfully!"));
    exit();
?>
