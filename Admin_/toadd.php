<?php
include "auth.php";
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
        table {
  border-collapse: collapse;
  width: 100%;
}

/* Style the table headers */
th {
  background-color: #6db6b9e6;
  color: #fff;
  font-weight: bold;
  text-align: center;
  padding: 10px;
}

/* Style the table cells */
td {
  text-align: center;
  padding: 10px;
}

/* Style the table rows */
tr:nth-child(even) {
  background-color: #f2f2f2;
}
@media screen and (max-width: 800px) {
  table {
    font-size: 8px;
  }
}

button[type="submit"] {
  display: flex;
  align-items: center;
  background-color: #6db6b9e6;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 30px;
  margin: 10px 20px;
  padding: 10px;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
}
body{
  font-size: 13px;
}

    </style>
</head>
<body>
<a href="add.php"><button type="submit" name="submit1" class="btn btn-default">Add
			</button></a>
    <div>
		<h2 style="text-align: center;">The books sold recently</h2>
	</div>
</body>
</html>

<?php
			$q=mysqli_query($db,"SELECT * from request where status='yes';");

			if(mysqli_num_rows($q)==0)
			{
				echo "There's no new book";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				
				echo "<th>"; echo "Book-Title";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
				echo "<th>"; echo "Approve Status";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['title']; echo "</td>";
				echo "<td>"; echo $row['author']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
			}

			mysqli_query($db, "UPDATE request set count='yes';");
		
?>

<?php
include 'footer.php';
?>