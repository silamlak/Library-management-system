<?php
include 'auth.php';
include 'nav.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Request Form</title>
    <style>
        body{
    font-size: 13px;
}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Book Request Form</h2>
    <form action="" method="post">
        <label for="title">Book Title:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required><br>

        <label for="details">Additional Details:</label><br>
        <textarea name="details" id="details" rows="4" cols="30"></textarea><br>

        <input type="submit" value="Submit Request" name="submit">
    </form>
</body>
</html>

<?php
			if(isset($_POST['submit']))
            {
                mysqli_query($db,"INSERT INTO request VALUES ('', '$_POST[title]', '$_POST[author]', '$_POST[details]','','no') ;");
                ?>
                  <script type="text/javascript">
                    alert("Request Sent Successfully.");
                  </script>
        
                <?php
        
              }
		?>
<?php
include 'footer.php';

?>