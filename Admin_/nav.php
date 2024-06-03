<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/library.png" type="image/png">
  <title>dku library</title>
      <link rel="stylesheet" href="nav.css"> 
      <style>
        body{
          overflow-x: hidden;
        }
        .img-crcl{
          border-radius: 50%;
        }
      </style>
</head>

<body>

<?php
include 'connection.php';
$n=mysqli_query($db, "SELECT COUNT(count) as total from request where count='no';");
$count=mysqli_fetch_assoc($n);

?>

  <section class="nav-bar">
  <div class="nav-container">
    <div class="brand">
      <a href="index.php"><img src="images/lb.jpg"></a>
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
              <a href="dcata.php">Read Our Books</a>
            </li>
            <li>
              <a href="magazine.php">Our Magazine</a>
            </li>
            <li>
          <a href="contactus.php">Contact Developers</a>
        </li>
          <?php
        if(isset($_SESSION['admin_user']))
        {
          ?>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="sdisplay.php">Shifts</a></li>
           <li><a href="student.php">Users</a></li>
           </li><li><a href="registrationn.php">Add New Librarian</a></li>
           <li>
              <a href="issue_info.php">Issue Information</a>
            </li>
            <li>
              <a href="request.php">Book Request</a>
            </li>
            <?php
        }else
        {  ?> 
          
            <?php
        }
      ?>
          </ul>
        </li>
        <li>
          <a href="#!">Circulation</a>
			    <ul class="nav-dropdown">
          <li>
              <a href="books.php">Catalog</a>
            </li>
            <?php
        if(isset($_SESSION['admin_user']))
        {
          ?>
                          <li><a href="fine.php">Fine</a></li>
                          <li><a href="add.php">Add Books</a></li>
                          <li><a href="cata.php">Add Books For Read</a></li>
                          <li><a href="expired.php">Expired List</a></li>
          <?php
        }else
        {   


        }
      ?>
            
          </ul>
        </li>
        <?php
        if(isset($_SESSION['admin_user']))
        {
          ?>
          <li><a href="toadd.php"><span class="glyphicon glyphicon-envelope"></span>
          <span class="badge bg-green"><?php echo $count['total']; ?></span></a></li>
          <li><a href="profile.php">
                    <div style="color: white">
                      <?php
                        echo "<img class='img-crcl profile_img' height=30 width=30 src='images/".$_SESSION['admin_pic']."'>";
                        echo " ".$_SESSION['admin_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout</a></li>
          <?php
        }else
        {   ?>
            <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"> Login</a></li>
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