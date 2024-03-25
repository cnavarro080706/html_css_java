<?php
include("connection.php");

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Create a query to select the login column from the database
    $stmt = $conn1->prepare("SELECT login FROM tlogin WHERE username = ?");

    // Bind the parameter to the prepared statement
    $stmt->bind_param("s", $username);

    // Execute the prepared statement
    $stmt->execute();

    // Get the result of the prepared statement
    $result = $stmt->get_result();

    // Check if the query was successful
    if (!$result) {
        die('Query failed: ' . $conn1->error);
    }

    // Fetch the login value from the result
    $row = $result->fetch_assoc();
    $login = $row['login'];

    // Increment the display counter
    $display_counter = $login + 1;

    // Update the login value in the database
    $update_stmt = $conn1->prepare("UPDATE tlogin SET login = ? WHERE username = ?");
    $update_stmt->bind_param("ss", $display_counter, $username);
    $update_stmt->execute();

    // Close the update statement
    $update_stmt->close();

    // Close the database connection
//    $conn->close();

    // Call the function with the necessary parameters
    display_user_info($username, $display_counter);
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}

function display_user_info($username, $display_counter) {
    // Use JavaScript to display the user's name and the visit counter on a single line
    echo "<h5 id='user-info'></h5>";
    echo "<script>
        var userInfo = 'Welcome, ' + '<i>' + '$username' + '</i>' + '! You have refreshed this page ' + '<strong>' + '$display_counter' + '</strong>' + ' times.';
        document.getElementById('user-info').innerHTML = userInfo;
    </script>";
}
?>