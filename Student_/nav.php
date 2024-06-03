<?php

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>dku library</title>
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/library.png" type="image/png">
      <link rel="stylesheet" href="nav.css"> 
</head>

<body>

  <section class="nav-bar">
  <div class="nav-container">
    <div class="brand">
      <a href="index.php"><img src="images/lb.jpg" alt=""></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="#">About</a>
          <ul class="nav-dropdown">
            <li>
              <a href="about.php">About Us</a>
            </li>
            <li>
              <a href="developers.php">Developers</a>
            </li>
            <li>
              <a href="faq.php">FAQ</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Circulation</a>
			    <ul class="nav-dropdown">
            <li>
              <a href="books.php">Catalog</a>
            </li>
            <li>
              <a href="request.php">Book Request</a>
            </li>
            <li>
              <a href="issue_info.php">Issue Information</a>
            </li>
            <?php
        if(isset($_SESSION['login_user']))
        {
          ?>
                  <li><a href="fine.php">Fine</a></li>
                  <li><a href="requestbook.php">Book Request For</a></li>
                  <li>
              <a href="expired.php">Expired List</a>
            </li>
          <?php
        }else
        { }
      ?>
                <li><a href="dcata.php">Read Books</a></li>
                <li><a href="magazine.php">Our Magazin</a></li>
            
          </ul>
        </li>
        <li>
          <a href="contactus.php">Contact Us</a>
        </li>
        <?php
        if(isset($_SESSION['login_user']))
        {
          ?>
          <li><a href="profile.php">
                    <div style="color: white">
                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";
                        echo " ".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
          <?php
        }else
        {   ?>


            <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
            
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGNUP</span></a></li>

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


<?php
include 'connection.php';
      if(isset($_SESSION['login_user']))
      {
        $day=0;

        $exp='<p>EXPIRED</p>';
        $res= mysqli_query($db,"SELECT * FROM `issue_book` where username ='$_SESSION[login_user]' and approve ='$exp' ;");
      
      while($row=mysqli_fetch_assoc($res))
      {
        $d= strtotime($row['return']);
        $c= strtotime(date("Y-m-d"));
        $diff= $c-$d;

        if($diff>=0)
        {
          $day= $day+floor($diff/(60*60*24)); 
        } //Days
        
      }
      $_SESSION['fine']=$day*10;
    }
    ?>