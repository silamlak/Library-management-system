<?php
include 'auth.php';
include 'nav.php';
include 'connection.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <style>
        body{
    font-size: 13px;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            font-size: 16px;
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

        .error-message {
            color: red;
            margin-top: 10px;
            font-size: 14px;
            text-align: center;
        }

        /* Responsive Styles */
        @media screen and (max-width: 480px) {
            .container {
                margin: 50px auto;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <form action="" method="post" class="container">
        <input type="text" name="otp" id="" required placeholder="Enter Verification Code">
        <button type="submit" name="submit_v">Verify</button>
    </form>
     <?php
     
     $ver1=0;
     if (isset($_POST['submit_v'])) {
        $ver2=mysqli_query($db, "SELECT * FROM verify;");
        while ($row=mysqli_fetch_assoc($ver2)) {
            if($_POST['otp'] == $row['otp'])
            {
                mysqli_query($db, "UPDATE student set status='1' where username='$row[username]';");
                $ver1=$ver1+1;
            }
        } 
        if ($ver1==1) {
            ?>
            <script type="text/javascript">
                window.location="student_login.php"
            </script>
            <?php
        }else{
            ?>
            <script type="text/javascript">
                alert("wrong otp")
            </script>
            <?php
        }
     }
     
     ?>
</body>
</html>