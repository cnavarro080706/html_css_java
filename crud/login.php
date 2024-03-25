<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
    // Include the database connection
    include("db_conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">


    <title>Network Infrastructure System</title>
</head>
<body>
    <div class="container-fluid">
        <form class="mx-auto" action="db_login.php" method="POST" name="form">
            <h4 class="text-center mb-5">Network Infrastructure System<sub class="fs-6">version 1.0</sub></h4>  
            <h4 class="text-center"><strong>Login</strong></h4>  
            <?php if(isset($_GET['error']) && $_GET['error'] === 'auth_failure'): ?>
                <div class="alert alert-danger mt-3" role="alert">Incorrect username/password.</div>
            <?php endif; ?>  
            <div class="mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Username</strong></label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" required>
                </div>
            </div>
            <div class="mb-3 mt-4">
                <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Password</strong></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <a class="text-decoration-none" href="reset_pw.php"><div id="emailHelp" class="form-text mt-4"><strong>Forget password?</strong></div></a>
                </div>
            </div>
            <fieldset class="row mt-4">
                <legend class="col-form-label col-sm-2 pt-0"><strong>Department</strong></legend>
                <select class="form-select" name="department" aria-label="Default select example" style="font-size: 14px;">
                    <option selected>Open this select menu</option>
                    <option value="it">IT Department</option>
                    <option value="hr" disabled>HR</option>
                    <option value="sales" disabled>Sales</option>
                </select>
            </fieldset>
            <button type="submit" class="btn btn-primary mt-4" value="login">Login</button>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <footer class="text-white d-flex flex-column mt-4 fixed-bottom">
                <div class="container text-center">
                    <h6><p>Copyright &copy;2024 Designed and Created by <span class="designer">Chris Navarro</span></p></h6>
                </div>
        </footer>
        </form> 
    </div>
</body>
</html>