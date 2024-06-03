<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            margin: 20px 0;
        }
        
        .container {
            max-width: 500px;
            margin: 150px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .container h1 {
            font-size: 24px;
        }
        
        .container a {
            display: block;
            padding: 10px;
            text-align: center;
            margin-bottom: 10px;
            text-decoration: none;
            color: #333;
            background-color: #f9f9f9;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }
        
        .container a:hover {
            background-color: #eaeaea;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login as</h1>
        <h1><a href="Student_/student_login.php">Student</a></h1>
        <h1><a href="Admin_/admin_login.php">Admin</a></h1>
        <h1><a href="acquisition/login.php">acquisition</a></h1>
    </div>
</body>
</html>
