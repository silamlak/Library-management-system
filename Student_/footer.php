<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
  line-height: 1.5;
  overflow-x: hidden;
  font-family: 'Poppins', sans-serif;
}
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
.ccfooter{
  max-width: 100%;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.ccfooter{
  background-color: #262626;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: green;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

.foot {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.foot p {
  margin: 0;
}


    </style>
</head>
<body>
<footer class="footer">
      <div class="ccfooter">
        <div class="row">
          <div class="footer-col">
            <h4>Dku library</h4>
            <ul>
              <li><a href="about.php">about us</a></li>
              <li><a href="developers.php">developers</a></li>
              <li><a href="privacy.php">privacy policy</a></li>
              <li><a href="contactus.php">contact us</a></li>
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
              <a href="https://www.facebook.com/checkpoint/828281030927956/?next=https%3A%2F%2Fwww.facebook.com%2FDebarkuniversityandcollegeofficial%2F"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.youtube.com/channel/UC1c9RSu3ssvfdZnhH7gkUnw"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="https://dku.edu.et/"><i class="fab fa-google"></i></a>
            </div>
          </div>
        </div>
      </div>
        
        <div class="foot">
  <p>&copy; 2023 DKU Library. All rights reserved.</p>
</div>

   </footer>
</body>
</html>