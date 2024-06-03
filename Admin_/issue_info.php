<?php
include "auth.php";
  include "connection.php";
  include "nav.php";
  

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
    .sendmail {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            margin: 20px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

/* Style the table */
table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    table th, table td {
        padding: 8px;
        text-align: left;
        vertical-align: top;
        border-top: 1px solid #ccc;
    }
    table th {
        background-color: #6db6b9e6;
        font-weight: bold;
    }
    table tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
    div.table-wrapper {
        max-height: 300px;
        overflow-y: auto;
    }
    @media screen and (max-width: 800px) {
  table {
    font-size: 8px;
  }
}
body{
  font-size: 13px;
}
	</style>

</head>
<body>

  <div class="lela">


  <div>
    <form action="" method="post">
      <button type="submit" name="submit_m">Send Email</button>
    </form>
  </div>
    <h3 style="text-align: center;">Information of Borrowed Books</h3><br>
  </div>
    <?php
    $c=0;

      if(isset($_SESSION['admin_user']))
      {
        $sql="SELECT student.username,roll,books.bid,books.name,authors,edition,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='Yes' ORDER BY `issue_book`.`return` ASC";
        $res=mysqli_query($db,$sql);
        
        
        echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
        //Table header
        
        echo "<tr style='background-color: #6db6b9e6;'>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Roll No";  echo "</th>";
        echo "<th>"; echo "BID";  echo "</th>";
        echo "<th>"; echo "Book Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Edition";  echo "</th>";
        echo "<th>"; echo "Issue Date";  echo "</th>";
        echo "<th>"; echo "Return Date";  echo "</th>";

      echo "</tr>"; 
      while($row=mysqli_fetch_assoc($res))
      {
        $d=date("Y-m-d");
        if (strtotime($d) > strtotime($row['return'])) 
        {
          $c=$c+1;
          
          mysqli_query($db, "UPDATE issue_book SET approve='EXPIRED' WHERE `return`='$row[return]' AND approve='yes' LIMIT $c;"); 
        }

        echo "<tr>";
          echo "<td>"; echo $row['username']; echo "</td>";
          echo "<td>"; echo $row['roll']; echo "</td>";
          echo "<td>"; echo $row['bid']; echo "</td>";
          echo "<td>"; echo $row['name']; echo "</td>";
          echo "<td>"; echo $row['authors']; echo "</td>";
          echo "<td>"; echo $row['edition']; echo "</td>";
          echo "<td>"; echo $row['issue']; echo "</td>";
          echo "<td>"; echo $row['return']; echo "</td>";
        echo "</tr>";
      }
    echo "</table>";
        echo "</div>";
        
if (isset($_POST['submit_m'])) {
    $t = mysqli_query($db, "SELECT * FROM `issue_book` WHERE approve='yes';");
    $date1 = date_create(date("y-m-d"));
    while ($row = mysqli_fetch_assoc($t)) {
        $date2 = date_create($row['return']);
        $diff = date_diff($date1, $date2);
        $day = $diff->format("%a");
        if ($day == 2) {
            $name_m = $row['username'];
            $bid_m = $row['bid'];
            $sql_m = mysqli_query($db, "SELECT * FROM `student` WHERE username='$row[username]';");
            $to = mysqli_fetch_assoc($sql_m);


            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'fikadu026@gmail.com';
                $mail->Password = 'swwgzubjjuuakqca';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                $mail->setFrom('fikadu026@gmail.com', 'DKU Library');
                $mail->addAddress($to['email']);

                $mail->isHTML(true);
                $mail->Subject = 'Here is the subject ' . time();
                $mail->Body = 'pleasse return the book(ID:"..$bid_m")  in two days <b>';
                $mail->AltBody = 'please';

                $mail->send();
            } catch (Exception $e) {
                ?>
                <script type="text/javascript">
                    alert("Mail Not Sent");
                </script>
                <?php
            } 
        } 
        
    }
}}
?>

</body>
</html>

<?php

include 'footer.php';
?>