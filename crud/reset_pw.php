<!-- 
    Created by: Chris Navarro
    Date Started: February 28, 2024
    Date Completed: March 30, 2024
-->
<?php
session_start();
include("db_conn.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// $mail = new PHPMailer(true);

function send_password_reset($get_name, $get_email, $token)
{
    //Server settings
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                         //Enable verbose debug output
    $mail->isSMTP();                                               //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                      //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                      //Enable SMTP authentication
    $mail->Username   = 'mit7231.demo.2024@outlook.com';           //SMTP username
    $mail->Password   = 'Lorly20$$';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mit7231.demo.2024@outlook.com', 'Administrator');
    $mail->addAddress($get_email);                                  //Add a recipient

    //Content
    $mail->isHTML(true);                                            //Set email format to HTML
    $mail->Subject = 'Password Reset Notification';
    $email_template = "
        <h4> Good day! $get_name, </h4><br>
        <h4> Password reset request has been initiated from your account.</h4>
        <br><br>
        <a href='http://localhost/html_css_java/crud/change_pw.php?token=$token&email=$get_email'> Click Me </a>
        <br>
        <h5>Regards,</h5>
        <h5>Admin</h5>

   ";

    $mail->Body = $email_template;
     // Send the email
    if (!$mail->send()) {
        echo 'Error sending email: ' . $mail->ErrorInfo;
    } else {
        echo 'Email sent successfully!';
    }
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $email = $conn2->real_escape_string($email);
    $token = md5(rand());                                    // Generating random token

    $check_email = "SELECT `EMAIL`, `USERNAME` FROM `tlogin` WHERE `EMAIL`='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn2, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) 
        {
            $row = mysqli_fetch_array($check_email_run);
            $get_name = $row['USERNAME'];
            $get_email = $row['EMAIL'];

            $new_token = "UPDATE `tlogin` SET `PASSWORD_HASH`='$token' WHERE `EMAIL`='$get_email' LIMIT 1";
            $new_token_run = mysqli_query($conn2, $new_token);

            if ($new_token_run) {
                send_password_reset($get_name, $get_email, $token);
                $_SESSION['status'] = "An email was sent to your registered email address.";
                header("Location: reset_pw.php");
                exit();
            } else {
                $_SESSION['status'] = "Error in retrieving the token.";
                header("Location: reset_pw.php");
                exit();
        }
    } else {
        $_SESSION['status'] = "No Email Found.";
        header("Location: reset_pw.php");
        exit();
    }
}

// This is for the change_pw.php to check if the button is click.
if(isset($_POST['pw_update']))
{
    $email              = mysqli_real_escape_string($conn2, $_POST['email']);
    $new_password       = mysqli_real_escape_string($conn2, $_POST['new_password']);
    $confirm_password   = mysqli_real_escape_string($conn2, $_POST['confirm_password']);
    $token              = mysqli_real_escape_string($conn2, $_POST['token_password']);

    if(!empty($token))
    {
        if(!empty($email) && !empty($new_password) && !empty($confirm_password))
        {
            // Checking the token if valid or invalid
            $check_token     = "SELECT `PASSWORD_HASH` FROM `tlogin` WHERE `PASSWORD_HASH`='$token' LIMIT 1";
            $check_token_run = mysqli_query($conn2, $check_token);

            if(mysqli_num_rows($check_token_run) > 0)
            {
                if($new_password == $confirm_password)
                {
                     $update_password = "UPDATE `tlogin` SET `PASSWORD`='$new_password' WHERE `PASSWORD_HASH`='$token' LIMIT 1";
                     $update_password_run = mysqli_query($conn2, $update_password);
                     if($update_password_run)
                     {
                        $_SESSION['status'] = "New Password is Successfully Updated!";
                        header("Location: change_pw.php");
                        exit();  
                     }
                     else
                     {
                        $_SESSION['status'] = "Error in updating password, please try again later.";
                        header("Location: change_pw.php?token=$token&email=$email");
                        exit();   
                     }  
                }
                else    
                {
                    $_SESSION['status'] = "New Password and Confirm Password does not match.";
                    header("Location: change_pw.php?token=$token&email=$email");
                    exit(); 
                }  
            }
        
            else
            {
                $_SESSION['status'] = "Invalid Token.";
                header("Location: change_pw.php?token=$token&email=$email");
                exit(); 
            }
        }
        else
        {
            $_SESSION['status'] = "All Fields are Mandatory.";
            header("Location: change_pw.php?token=$token&email=$email");
            exit();
        }
    }
    else
    {
    $_SESSION['status'] = "No Token Found.";
    header("Location: change_pw.php");
    exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Network Infrastructure System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
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
                    <div class="form-group mb-4">
                        <p class="mb-2">Enter your registered email ID to reset the password
                        </p>
                    </div>
                    <form method="POST" action="">
                        <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                        </div>
                        <div class="mb-3 d-grid">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">
                            Reset Password
                        </button>
                        </div>
                        <span>Don't have an account? <a href="login.php">sign in</a></span>
                    </form>
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
    </div>
  </body>

</html>
