<?php
  include 'auth.php';
  include "connection.php";
  include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fine Calculation </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

body{
  font-size: 13px;
}
/* Set the font family and size for the table */
table {
  font-family: Arial, sans-serif;
  font-size: 14px;
  width: 100%;
  border-collapse: collapse;
}

/* Style the table header */
th {
  background-color: #6db6b9e6;
  color: #fff;
  font-weight: bold;
  padding: 8px;
  text-align: left;
  border: 1px solid #ddd;
}

/* Style the table rows */
tr {
  background-color: #f2f2f2;
}

/* Style the table cells */
td {
  padding: 8px;
  border: 1px solid #ddd;
}

/* Style the first column to be a bit wider */
td:first-child {
  width: 20%;
}

/* Style the last column to be a bit narrower */
td:last-child {
  width: 10%;
}
@media screen and (max-width: 800px) {
  table {
    font-size: 8px;
  }
}

	</style>
</head>
<body>


	<!--__________________________search bar________________________-->
<div class="lela">

	<h2>List Of Students</h2>
	<?php

	$res=mysqli_query($db,"SELECT * FROM `fine` where username='$_SESSION[login_user]' ;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo " Username ";	echo "</th>";
				echo "<th>"; echo " Bid ";  echo "</th>";
				echo "<th>"; echo " Returned ";  echo "</th>";
				echo "<th>"; echo " Days ";  echo "</th>";
				echo "<th>"; echo " Fines in Birr ";  echo "</th>";
				echo "<th>"; echo " Status ";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['returned']; echo "</td>";
				echo "<td>"; echo $row['day']; echo "</td>";
				echo "<td>"; echo $row['fine']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		

	?>
</div>
</body>
</html>

<?php
include 'footer.php';

?>