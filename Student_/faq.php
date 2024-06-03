<?php
session_start();
include 'nav.php';

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FAQ</title>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel="stylesheet" href="faq.css">
<style>
  body{
  font-size: 13px;
}
</style>
</head>
<body>



 <!--DOCTYPE html-->
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--==title===========================-->
        <title>FAQ</title>
        <!--==CSS=============================-->
        <link rel="stylesheet" href="css/style.css">
        <!--==poppins-font====================-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    </head>
    <body>
    
        
        <section id="faq">
        
            <!-- Heading -->
            <div class="faq-heading">
                <h3>FAQ</h3>
                    <p>
                       <br/> &#8212; just a few things!</strong></p>
            </div>
        
            <!-- Container -->
            <div class="faq-content">
                <!-- faq -->
                <div class="faq-box-container">
        
                    <div class="faq-box">
                        <div class="faq-box-question active">
                                <h4>What is a library &#8220;management system?&#8221;</h4>
                                <span class="faq-box-icon"></span>
                        </div>
                        <div class="faq-box-answer" style="max-height: 100px;">
                            <p>A library management system is a software application designed to help libraries manage their resources, including books, journals, and other materials, as well as patrons who borrow those materials.</p>
                        </div>
                    </div>
        
                    <div class="faq-box">
                        <div class="faq-box-question">
                                <h4>What are the benefits of  &#8220;using a library management system?&#8221;</h4>
                                <span class="faq-box-icon"></span>
                        </div>
                        <div class="faq-box-answer">
                            <p>Some of the benefits of using a library management system include improved organization and access to resources, increased efficiency in managing library operations, and better service to patrons.</p>
                        </div>
                    </div>
        
                    <div class="faq-box">
                        <div class="faq-box-question">
                                <h4>What features should I look&#8220; for in a library management system? &#8221;</h4>
                                <span class="faq-box-icon"></span>
                        </div>
                        <div class="faq-box-answer">
                            <p>Some important features to look for in a library management system include cataloging and classification tools, circulation management tools, reporting and analytics capabilities, and integration with other library systems and databases.</p>
                        </div>
                    </div>
        
        
                    <div class="faq-box">
                        <div class="faq-box-question">
                                <h4>How do library management systems handle digital resources?</h4>
                                <span class="faq-box-icon"></span>
                        </div>
                        <div class="faq-box-answer">
                            <p>Library management systems can handle digital resources in a variety of ways, including by providing access to e-books, managing digital lending and borrowing, and tracking usage of digital resources.</p>
                        </div>
                    </div>
        
                    <div class="faq-box">
                        <div class="faq-box-question">
                                <h4>How secure are library management systems?</h4>
                                <span class="faq-box-icon"></span>
                        </div>
                        <div class="faq-box-answer">
                            <p>Library management systems typically include security features to protect library data, such as user authentication and access controls. However, it is important to choose a system with strong security features and to follow best practices for data security and privacy.</p>
                        </div>
                    </div>
                
                </div>
                <div class="faq-img">
                    <img src="images/3.jpg" alt="FAQs - White Label Website">
                </div>
            </div>
        
        </section>
    
    
    
        <script>
    var faq = document.getElementsByClassName("faq-box-question");
    var i;
    for (i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");
            /* Toggle between hiding and showing the active panel */
            var body = this.nextElementSibling;
            if (body.style.maxHeight === "100px") {
                body.style.maxHeight = "0px";
            } else {
                body.style.maxHeight = "100px";
            }
        });
    }
        </script>
    
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

</body>
</html>

<?php
include 'footer.php';

?>