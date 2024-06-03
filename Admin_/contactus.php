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
  <title>Document</title>
  <style>
/* CSS styles for the Contact Us section */
body{
  font-size: 13px;
}
.whatspro {
  background-color: #f7f7f7;
  padding: 40px;
  text-align: center;
}

.what {
  max-width: 700px;
  margin: 0 auto;
  background-color: #ffffff;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 30px;
}

.title {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
  color: #333333;
}

.input-boxes {
  margin-bottom: 20px;
}

.input-box {
  position: relative;
  margin-bottom: 20px;
}

.input-box input[type="text"],
.input-box textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

.input-box input[type="text"]:focus,
.input-box textarea:focus {
  border-color: #4CAF50;
}

.input-box input[type="text"]::placeholder,
.input-box textarea::placeholder {
  color: #888888;
}

.input-box .button {
  text-align: center;
}

.input-box input[type="submit"] {
  width: 100%;
  padding: 12px;
  border: none;
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.input-box input[type="submit"]:hover {
  background-color: #45a049;
}

.input-box input[type="submit"]:focus {
  outline: none;
}

@media screen and (max-width: 480px) {
  .what {
    width: 100%;
    padding: 20px;
  }
  
  .input-box input[type="text"],
  .input-box textarea {
    padding: 10px;
  }
  
  .input-box input[type="submit"] {
    padding: 10px;
  }
}



  </style>
</head>
<body>
      <section class="whatspro">
      <div class="what">
            <div class="title">Contact Developers</div>
          <form action="" method="post">
            <div class="input-boxes">
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