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
    <title>Document</title>
    <style>
		*{
			margin: 0;
            padding: 0;
		}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
        }

        .request {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .request p {
            margin: 0;
        }

        .request strong {
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .request {
                padding: 5px;
            }
        }
		body{
  font-size: 13px;
}
    </style>
</head>
<body>
<div class="lela">
	<div class="srch">
		<br>
		<form method="post" action="" name="form1">
            <input type="text" name="title" id="" placeholder=" enter title">
			<button class="btn btn-default" name="submit" type="submit">Status</button><br>
		</form>
	</div>

	<h3 style="text-align: center;">Request of Book</h3>
</body>
</html>

<?php
if (isset($_SESSION['acqua_user'])) {

			$q=mysqli_query($db,"SELECT * from request where status='' ;");

			if(mysqli_num_rows($q)==0)
			{
				echo "There's no pending request";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				
				echo "<th>"; echo "Book-Title";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
				echo "<th>"; echo "Details";  echo "</th>";
				echo "<th>"; echo "Approve Status";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['title']; echo "</td>";
				echo "<td>"; echo $row['author']; echo "</td>";
				echo "<td>"; echo $row['details']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
			
}}
else
 {
	echo "you need first log in to see info";
}
?>
<?php
if(isset($_POST['submit']))
	{
		$_SESSION['title']=$_POST['title'];
		?>
			<script type="text/javascript">
				window.location="status.php"
			</script>
		<?php
	}

	?>

<?php
include 'footer.php';

?>