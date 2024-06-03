<?php
  session_start();
  include "connection.php";

  include "nav.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Login</title>
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
        <img src="images/si.jpg" alt="">
        <div class="text">
          <span class="text-1">Welcome back<br> Admin</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Signin</div>
          <form action="" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" placeholder="Enter Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>

  <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $row= mysqli_fetch_assoc($res);

      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
           
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
                 
        <?php
      }
      else
      {
        /*-------------if username & password matches---*/

        $_SESSION['admin_user'] = $_POST['username']; 
        $_SESSION['admin_pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="profile.php"
          </script>
        <?php
      }
    }

  ?>

<div class="text"><a href="update_password.php">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Signin">
              </div>
              <div class="text sign-up-text">Don't Have an account? <a href="flip">Sigin now</label></div>
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