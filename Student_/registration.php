<?php
session_start();
include "connection.php";
include 'nav.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function isPasswordValid($password) {
    $errors = array();

    // Check if the password contains at least one special character
    if (!preg_match('/[^A-Za-z0-9]/', $password)) {
        $errors[] = "Password must contain at least one special character.";
    }

    // Check if the password contains at least one number
    if (!preg_match('/[0-9]/', $password)) {
        $errors[] = "Password must contain at least one number.";
    }

    // Check if the password contains at least one uppercase letter
    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password must contain at least one uppercase letter.";
    }

    // Check if the password is greater than 8 characters
    if (strlen($password) <= 8) {
        $errors[] = "Password must be greater than 8 characters.";
    }

    return $errors;
}



function isNameValid($name) {
  if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      return "Name should contain only alphabets";
  }
  return "";
}

function isValidPhoneNumber($phoneNumber) {
  // Remove any non-digit characters from the phone number
  $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

  // Check if the phone number matches the Ethiopian format
  if (preg_match('/^2519\d{8}$/', $phoneNumber)) {
    return true;
  }

  return false;
}


?>



<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="gersi.css"> 

<style>
   body{
    font-size: 13px;
}
</style>
</head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/s.jpg" alt="">
        <div class="text">
          <span class="text-1">Welcome user<br> Register here</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Register</div>
          <form action="" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user-circle"></i>
                <input type="text" name="name" placeholder="Enter Full Name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-id-card"></i>
                <input type="text" name="roll" placeholder="Enter Roll" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter Email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-address-book"></i>
                <input type="text" name="contact" placeholder="Contact Number" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <?php
if (isset($_POST['submit'])) {
    $count = 0;
    $sql = "SELECT username FROM `student`";
    $res = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($res)) {
        if ($row['username'] == $_POST['username']) {
            $count = $count + 1;
        }
    }

    if ($count == 0) {
        // Validate the password
        $passwordErrors = isPasswordValid($_POST['password']);
        $nameError = isNameValid($_POST['name']);
        $phoneNumber = $_POST['contact'];

        // Validate the phone number
        if (!isValidPhoneNumber($phoneNumber)) {
          $phoneError = "Invalid Ethiopian phone number. Please enter a valid Ethiopian phone number.";
        } else {
          $phoneError = "";
        }
    
        if (empty($passwordErrors) && empty($nameError) && empty($phoneError)) {
            // Insert the data into the database
            mysqli_query($db, "INSERT INTO `STUDENT` VALUES('$_POST[name]', '$_POST[username]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]',  '$_POST[password]','0', 'p.jpg');");
            $otp = rand(10000, 99999);
            $date = date("y-m-d");
            mysqli_query($db, "INSERT INTO verify VALUES('$_POST[username]', '$otp', '$date');");

            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'fikadu026@gmail.com';
                $mail->Password   = 'swwgzubjjuuakqca';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = 465;

                $mail->setFrom('fikadu026@gmail.com', 'DKU lIBRARY');
                $mail->addAddress($_POST['email']);

                $mail->isHTML(true);
                $mail->Subject = 'For Login Verification ' . date('y-m-d');
                $mail->Body    = 'Your Verification code is <b>' . $otp . '</b>';
                $mail->AltBody = $otp;

                $mail->send();
                ?>
                <script type="text/javascript">
                    window.location = "verify.php";
                </script>
                <?php
            } catch (Exception $e) {
            }
        } else {
          if (!empty($nameError)) {
            echo $nameError . "<br>";
          }
          foreach ($passwordErrors as $error) {
            echo $error . "<br>";
          }
          echo $phoneError . "<br>";
        }
      } else {
        echo "The username already exists.<br>";
      }
    }
    ?>

              <div class="text"><a href="update_password.php">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Signup">
              </div>
              <div class="text sign-up-text">Have an account? <a href="student_login.php">Sigin now</a></div>
            </div>
        </form>
      </div>
    </div>
    </div>
  </div>
</body>
</html>
          
  <?php
include 'footer.php';

?>