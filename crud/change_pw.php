<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    session_start();
    include "db_conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- <link rel="stylesheet" href="index.css"> -->

    <title>Network Infrastructure System</title>
</head>
<body>
    <div clas="py-5">
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center
                min-vh-100">
                <div class="col-12 col-md-8 col-lg-4">
                    <?php
                        if(isset($_SESSION['status']))
                        {
                            ?>
                            <div class="alert alert-success">
                                <h6><?php echo $_SESSION['status']; ?></h6>
                            </div>
                            <?php
                            unset($_SESSION['status']);
                        }
                    ?>
                <div class="card shadow-sm border-primary">
                    <div class="card-header">
                        <h5>Forgot Password?</h5>
                    </div>
                    <div class="card-body">
                    <div class="mb-4">
                        <p class="mb-2">Enter your details below. </p>
                    </div>
                    <form method="POST" action="reset_pw.php">
                        <input type="hidden" name="token_password" value="<?php if(isset($_GET['token'])){echo $_GET['token'];}?>">
                        <div class="form-group mb-3">
                        <label for="change_pw" class="form-label">Email Address</label>
                        <input type="text" id="email" class="form-control mb-3" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>"placeholder="Your Email" required>
                        <label for="change_pw" class="form-label">New Password</label>
                        <input type="password" id="new_password" class="form-control mb-3" name="new_password" placeholder="Enter New Password" required>
                        <label for="change_pw" class="form-label">Confirm Password</label>
                        <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Confirm New Password" required>
                        </div>
                        <div class="mb-3 d-grid">
                        <button type="submit" value="submit" name="pw_update" class="btn btn-primary">
                            Change Password
                        </button>
                        </div>
                        <span>Do you recall your password? <a href="login.php">sign in</a></span>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            jqclick
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <footer class="text-dark d-flex flex-column mt-4 fixed-bottom">
        <div class="container text-center">
            <h6><p>Copyright &copy;2024 Designed and Created by <span class="designer">Chris Navarro</span></p></h6>
        </div>
    </footer>
</body>
</html>