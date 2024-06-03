<?php
session_start();
include 'nav.php';
// Assuming you have a database connection established
include 'connection.php';
// Retrieve book information from the database
$query = "SELECT * FROM cata";
$result = mysqli_query($db, $query);

// Store the retrieved book information in an array
$books = array();
while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
    <style>
        body{
  font-size: 13px;
}
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            margin: 50px;
            text-align: center;
        }

        .book-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .book {
            max-width: 300px;
            text-align: center;
        }

        .book-image {
            width: 100%;
            cursor: pointer;
        }

        .book-title {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
    <script>
        function openPDF(pdfURL) {
            window.open(pdfURL, '_blank');
        }
    </script>
</head>
<body>
    <h2>Read Our Books</h2>
    <div class="book-container">
        <?php foreach ($books as $book) : ?>
            <div class="book">
    <img class="book-image" src="../uploads/<?php echo $book['image_file']; ?>" alt="<?php echo $book['book_name']; ?>" onclick="openPDF('../uploads/<?php echo $book['pdf_file']; ?>')">
    <div class="book-title"><?php echo $book['book_name']; ?></div>
</div>
        <?php endforeach; ?>
    </div>
</body>
</html>

<?php
include 'footer.php';

?>
