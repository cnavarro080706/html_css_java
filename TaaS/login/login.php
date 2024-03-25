<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    session_start();

    // Include the database connection
    include("connection.php");

    // this is to capture the username and password variable from index.php form
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // this is to query mysql the login table if username and password are available
        // use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT `id`, `username` FROM `users` WHERE username = ? AND password = ? ");
        // $sql = "select * from tlogin where username = '$username' and password = '$password'";
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        // storing the result in the result variable the connection object and sql query
        $result = $stmt->get_result();

        // Check if a user with the given credentials exists
        if($result->num_rows == 1) 
        {
            // Fetch user data
            $user_data = $result->fetch_assoc();

            // Store user ID in session
            $_SESSION['user_id'] = $user_data['id'];

            // Store username in session
            $_SESSION['username'] = $user_data['username'];

            // Store session ID
            $session_id = session_id();

            // Redirect to index/nre_main.php
            header("Location: ../index/nre_main.php?msg=You have logged in successfully!");
            exit();
        } else {
            header("Location: login.php?error=auth_failure");
            exit();
        }
}
?>

