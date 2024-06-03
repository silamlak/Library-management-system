<?php
include "auth.php";
include "connection.php";
include "nav.php";

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
  <link rel="stylesheet" href="regsi.css"> 
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
          <span class="text-1">Welcome admin<br> Register</span>
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
  $sql = "SELECT username FROM `admin`";
  $res = mysqli_query($db, $sql);

  while ($row = mysqli_fetch_assoc($res)) {
      if ($row['username'] == $_POST['username']) {
          $count = $count + 1;
      }
  }
  
  if ($count == 0) {
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
          mysqli_query($db, "INSERT INTO `admin` VALUES('', '$_POST[name]', '$_POST[username]', '$_POST[email]', '$_POST[contact]', '$_POST[password]', 'p.jpg', '');");
          ?>
          <script type="text/javascript">
              alert("Registration successful");
          </script>
          <?php
      } else {
        // Display name and password errors
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

              <div class="button input-box">
                <input type="submit" name="submit" value="Register">
              </div>
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

