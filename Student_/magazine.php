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
    <title>megazine</title>
    <style>
        body{
  font-size: 13px;
}
        /* Add responsive CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            font-size: 32px;
        }
        
        h2 {
            text-align: center;
            font-size: 24px;
        }
        
        p {
            text-align: center;
            font-size: 16px;
        }
        
        button {
            display: block;
            margin: 10px auto;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        
        button a {
            color: #fff;
            text-decoration: none;
        }
        
        @media (max-width: 600px) {
            /* Styles for screens smaller than 600px */
            h1 {
                font-size: 24px;
            }
            
            h2 {
                font-size: 20px;
            }
            
            p {
                font-size: 14px;
            }
            
            button {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <h1>Magazines</h1>
    <h2>Here are some links for daily magazine news</h2>
    <p>link for daily magazine news</p>
    <button><a href="https://online.fliphtml5.com/qhkn/ylfh/">The Reporter Ethiopia Magazine</a></button> <br>
    <p>link for daily magazine news</p>
    <button><a href="https://thereportermagazines.com/1708/">The Reporter</a></button><br>
    <p>link for daily magazine news</p>
    <button><a href="https://www.ethiopianreporter.com/news/">The Reporter</a></button><br>
    <p>link for daily magazine for business</p>
    <button><a href="https://www.ethiopianreporter.com/business/">The Reporter For Business</a></button><br>
    <p>link for daily magazine news by Ethiopia Monitor</p>
    <button><a href="https://ethiopianmonitor.com/category/art-culture/">Ethiopia Monitor</a></button><br>
    <p>link for daily magazine Sport by Ethiopia Monitor</p>
    <button><a href="https://ethiopianmonitor.com/category/sport/">Ethiopia Monitor For Sports</a></button><br>
</body>
</html>


<?php
include 'footer.php';

?>