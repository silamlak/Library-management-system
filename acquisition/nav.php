<?php


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>dku library</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="images/library.png" type="image/png">
      <link rel="stylesheet" href="nav.css"> 
      <style>
        .img-circle{
          border-radius: 50%;
        }
      </style>
</head>

<body>

  <section class="nav-bar">
  <div class="nav-container">
    <div class="brand">
      <a href="acquisition.php"><img src="images/lb.jpg"></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="acquisition.php">Home</a>
        </li>
        <li>
          <a href="#!">Circulation</a>
			    <ul class="nav-dropdown">
            <?php
          if(isset($_SESSION['acqua_user']))
        {
          ?>
            <li>
              <a href="books.php">Catalog</a>
            </li>
            <li>
              <a href="acquisition.php">Book Request</a>
            </li>
            <li>
              <a href="registrationn.php">Register acquire</a>
            </li>   
            <?php
        }else
        {   ?> 
        <li>
              <a href="../index.php">Back to home</a>
            </li>
            <?php
        }
      ?>     
          </ul>
        </li>
        <?php
        if(isset($_SESSION['acqua_user']))
        {
          ?>
          <li><a href="profile.php">
                    <div style="color: white">
                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['acqua_pic']."'>";
                        echo " ".$_SESSION['acqua_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php">LOGOUT</a></li>
          <?php
        }else
        {   ?>
            <li><a href="login.php">LOGIN</a></li>
            <?php
        }
      ?>
      </ul>
    </nav>
  </div>
</section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
      (function($) { 
        $(function() { 
          $('nav ul li a:not(:only-child)').click(function(e) {
            $(this).siblings('.nav-dropdown').toggle();
            $('.dropdown').not($(this).siblings()).hide();
            e.stopPropagation();
          });
          $('html').click(function() {
            $('.nav-dropdown').hide();
          });
          $('#nav-toggle').click(function() {
            $('nav ul').slideToggle();
          });
          $('#nav-toggle').on('click', function() {
            this.classList.toggle('active');
          });
        }); 
      })(jQuery);</script>
</body>

</html>