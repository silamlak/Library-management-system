<?php
session_start();
include 'nav.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
      body{
  font-size: 13px;
}
    </style>
    <link rel="stylesheet" href="about.css">
</head>
<body>
<div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container">
    <div class="responsive-container-block leftSide">
      <p class="text-blk heading">
        About us
      </p>
      <p class="text-blk subHeading">
      Welcome to our library! Our library has been serving the community for over 7 years, providing a wide range of resources and services to support learning, research, and discovery. We are dedicated to promoting literacy, lifelong learning, and community engagement.

Our collection includes a diverse range of materials, from books and periodicals to audiovisual materials and digital resources. We strive to maintain a collection that reflects the diverse interests and needs of our community, and we are always looking for new and innovative ways to expand and enhance our resources.</p>
      <p class="text-blk heading">
      Goal
      </p>
      <p class="text-blk subHeading">
      Our goal is to foster a love for reading, promote lifelong learning, and provide a welcoming environment that empowers individuals to explore, discover, and connect with knowledge. </p>
      <p class="text-blk heading">
        Vision
      </p>
      <p class="text-blk subHeading">
      Our vision is to be a vibrant community hub, recognized for its exceptional resources, innovative programs, and inclusive services. We aim to inspire intellectual curiosity, foster a sense of belonging, and contribute to the personal and educational growth of our patrons.</p>
      <p class="text-blk heading">
       Mission
      </p>
      <p class="text-blk subHeading">
      Our mission is to provide a diverse collection of materials, both physical and digital, that cater to the needs and interests of our community. We strive to offer a welcoming space that encourages discovery, intellectual engagement, and collaboration.
       Through our dedicated staff and innovative programs, we aim to promote literacy, critical thinking, and cultural enrichment. We are committed to fostering a lifelong love for reading, supporting educational endeavors, and empowering individuals to navigate and thrive in the information age.</p>
    </div>
    <div class="responsive-container-block rightSide">
      <img class="number1img" src="./images/1.jpg">
      <img class="number2img" src="./images/2.jpg">
      <img class="number3img" src="./images/3.jpg">
      <img class="number5img" src="./images/4.jpg">
      <iframe allowfullscreen="allowfullscreen" class="number4vid" src="./images/library.mp4">
      </iframe>
      <img class="number7img" src="./images/5.jpg">
      <img class="number6img" src="./images/6.jpg">
    </div>
  </div>
</div>

<footer class="footer">
      <div class="ccfooter">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">developers</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">contact us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="faq.php">Borrowing</a></li>
              <li><a href="faq.php">returns</a></li>
              <li><a href="faq.php">order status</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>We Provide</h4>
            <ul>
              <li><a href="#">Books</a></li>
              <li><a href="#">Digital</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Others</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
   </footer>
</body>
</html>

<?php
include 'footer.php';

?>