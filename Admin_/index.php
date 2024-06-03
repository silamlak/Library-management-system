<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
  <style>

img{
  border-radius: 50%;
  width: 50px;
  height: 50px;
}
  </style>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <img src="images/lb.jpg" alt="">
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
                </div>
                <ul>
                  <li><a href="index.php" data-after="Home">Home</a></li>
                  <li><a href="contactus.php" data-after="Developers">Contact Developers</a></li>
                <?php
                if(isset($_SESSION['admin_user']))
              {
                ?>

                  <li><a href="dcata.php" data-after="LOGOUT">Read our books</a></li>
                  <li><a href="logout.php" data-after="LOGOUT">LOGOUT</a></li>
                  <?php
              }else
              {   ?>
              <li><a href="admin_login.php" data-after="LOGIN">LOGIN</a></li>
              <li><a href="../index.php" data-after="Back">Back To Home</a></li>
              <?php
              }
              ?>
                </ul>
          </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <?php
                if(isset($_SESSION['admin_user']))
              {
                ?><h1>Hello, Admin <span></span></h1>
        <h1>Welcome to <span></span></h1>
        <h1>DKU library <span></span></h1>
        <?php
              }else
              {   ?>
                  <h1>Hello, <span></span></h1>
        <h1>Login to see<span></span></h1>
        <h1>Admin Status<span></span></h1>
                  <?php
              }
              ?>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <script src="./app.js"></script>
</body>

</html>