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
  <link rel="stylesheet" href="contact.css">
  <title>contact us</title>
  <style>
   
   body{
  font-size: 13px;
}
  </style>
</head>
<body>

    <section class="csec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.6361994648464!2d37.88511870960218!3d13.12221801150696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164283e460087f9b%3A0x2f715e8089ac6a1a!2sDebark%20University!5e0!3m2!1sen!2snl!4v1683395075330!5m2!1sen!2snl" width="100%" height="200px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="whatspro">
      <div class="what">
            <div class="title">Contact Us</div>
          <form action="" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <input type="text" name="name" placeholder="Enter Full Name" required>
              </div>
              <div class="input-box">
                <input type="text" name="email" placeholder="Enter Email" required>
              </div>
              <div class="input-box">
                <input type="text" name="subject" placeholder="Subject" required>
              </div>
              <div class="input-box">
                <textarea name="body" id="" cols="30" rows="10" required></textarea>
              </div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Submit">
              </div>
        </section>
</body>
</html>


<?php
include 'footer.php';
      use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {


      require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'fikadu026@gmail.com';
                $mail->Password   = 'swwgzubjjuuakqca';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = 465;

                $mail->setFrom($_POST['email'], $_POST['email']);
                $mail->addAddress('fikadu026@gmail.com');

                $mail->isHTML(true);
                $mail->Subject = 'For Any Problem ' . date('y-m-d');
                $mail->Body    = $_POST['body'];
                $mail->AltBody = $_POST['body'];
            
                $mail->send();
              
              
              }
                catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    }}
                    ?>