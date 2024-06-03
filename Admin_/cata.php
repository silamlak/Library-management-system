<?php
include "auth.php";
include "nav.php";


// Assuming you have a database connection established
include 'connection.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $bookName = $_POST['bookName'];
    $author = $_POST['author'];
    $imageFile = $_FILES['imageFile']['name'];
    $pdfFile = $_FILES['pdfFile']['name'];

    // Upload image file
    $imagePath = '../uploads' . $imageFile;
    move_uploaded_file($_FILES['imageFile']['tmp_name'], $imagePath);

    // Upload PDF file
    $pdfPath = '../uploads' . $pdfFile;
    move_uploaded_file($_FILES['pdfFile']['tmp_name'], $pdfPath);

    // Insert book information into the database
    $query = "INSERT INTO cata (book_name, author, image_file, pdf_file) VALUES ('$bookName', '$author', '$imageFile', '$pdfFile')";
    mysqli_query($db, $query);

    // Display success message or perform other actions
    echo "Book information stored successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <style>
                  body{
  font-size: 13px;
}
        body {
            font-family: Arial, sans-serif;
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
        input[type="file"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Add Book</h2>
    <form method="post" enctype="multipart/form-data">
        <label>Book Name:</label>
        <input type="text" name="bookName" required><br><br>

        <label>Author:</label>
        <input type="text" name="author" required><br><br>

        <label>Image File:</label>
        <input type="file" name="imageFile" required><br><br>

        <label>PDF File:</label>
        <input type="file" name="pdfFile" required><br><br>

        <input type="submit" value="Add Book">
    </form>
</body>
</html>
<?php

include "footer.php";
?>