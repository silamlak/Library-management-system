<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>home page</title>

  <style>
    .hours{
      margin-top: 50px;
      font-size: 30px;
    }
    #hours-table {
      min-width: 400px;
      margin: 0 auto;
      border-collapse: collapse;
    }
    
    #hours-table th, #hours-table td {
      padding: 10px;
      font-size: 20px;
      text-align: center;
      border: 1px solid #ccc;
    }
    
    #hours-table th {
      background-color: #f2f2f2;
    }

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
          <a href="#hero">
            <img src="images/lb.jpg" alt="">
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            
            <li><a href="index.php" data-after="Home">Home</a></li>
            <li><a href="about.php" data-after="About">About Us</a></li>
            <li><a href="contactus.php" data-after="Contact">Contact Us</a></li>
            <li><a href="faq.php" data-after="FAQ">FAQ</a></li>
            <li><a href="dcata.php" data-after="Catalog">Catalog</a></li>
            <?php
            if(isset($_SESSION['login_user']))
            {?>
              <li><a href="logout.php" data-after="Logout">Logout</a></li>
        <?php
            }else{
              ?>
                <li><a href="student_login.php" data-after="Login">login</a></li>
                <li><a href="../index.php" data-after="Backhome">Back To Home</a></li>
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
                if(isset($_SESSION['login_user']))
              {
                ?><h1>Hello, Student <span></span></h1>
        <h1>Welcome to <span></span></h1>
        <h1>DKU library <span></span></h1>
        <?php
              }else
              {   ?>
                  <h1>Hello, <span></span></h1>
        <h1>Login to see<span></span></h1>
        <h1>Users Status<span></span></h1>
        <a href="registration.php" type="button" class="cta">Register</a>
                  <?php
              }
              ?>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Wel<span>co</span>me</h1>
      <h1 class="hours">Library Hours</h1>
      <table id="hours-table">
    <tr>
      <th>Day</th>
      <th>Hours</th>
    </tr>
    <tr>
      <td>Monday - Sunday</td>
      <td>Open 24 hours</td>
    </tr>
  </table>
        </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/book.png" /></div>
          <h2>BOOKS</h2>
          <p>Our library has a vast collection of books covering a wide range of subjects and genres, including fiction, non-fiction, academic, and more. You can browse our shelves or search our online catalog to find the books you need</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/book.png" /></div>
          <h2>DIGITAL LIBRARY</h2>
          <p> In addition to our physical books, we also offer access to a variety of digital resources, including e-books, online journals, databases, and more. These resources can be accessed from anywhere, at any time, with an internet connection</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/book.png" /></div>
          <h2>BORROW BOOKS</h2>
          <p> Members of our library can borrow books for a set period, allowing you to take them home and read them at your leisure. You can borrow up to a certain number of books at a time, depending on your membership level</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->


  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>DKU</span> LI<span>B</span>RARY</h1>
      </div>
      <h2>Unlock Your Imagination at our the Library</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2015 Dku University. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>