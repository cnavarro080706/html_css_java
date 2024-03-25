<?php

    include("connection.php");
    // this is to capture the username and password variable from index.php form
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['region'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $region = $_POST['region'];

        // this is to query mysql the login table if username and password are available
        // use prepared statements to prevent SQL injection
        $stmt = $conn1->prepare("SELECT * FROM tlogin WHERE username = ? AND password = ? AND region = ? ");
        // $sql = "select * from tlogin where username = '$username' and password = '$password'";
        $stmt->bind_param("sss", $username, $password, $region);
        $stmt->execute();
        // storing the result in the result variable the connection object and sql query
        $result = $stmt->get_result();

        if($result->num_rows ==1) {
            $_SESSION['username'] = $username; // Store the username in a session variable
            header("Location: website.php");
            exit();
        } else {
            header("Location: index.php?Login=failed"); // Redirect with a failure message
            exit();    
        }
}
?>

