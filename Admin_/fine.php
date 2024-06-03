<?php
  include "auth.php";
  include "connection.php";
  include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fine Calculation </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">

.lela{
	display: flex;
	flex-direction: column;
	float: right;
}
.srch {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.srch button[type="submit"] {
  display: flex;
  align-items: center;
  background-color: #6db6b9e6;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 30px;
  margin-left: -5px;
  padding: 10px;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
}


.srch {
	display: flex;
	flex-direction: column;
    margin: 20px auto;
	float: right;
}

.navbar-form{
	display: flex;
	justify-content: center;
}

.srch input[type="text"] {
  width: 60%;
  padding: 12px 20px;
  margin: 0px 5px;
  box-sizing: border-box;
  border: 2px solid #6db6b9e6;
  border-radius: 4px;
}

.srch button[type="submit"]:hover {
  background-color: #4d9194e6;
}
.lists{
	margin-top: 150px;
}
h2 {
  text-align: center;
  color: #6db6b9e6;
}

body{
  font-size: 13px;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

th {
  background-color: #6db6b9e6;
  color: #fff;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

@media screen and (max-width: 600px) {
  table {
    font-size: 12px;
  }
}


	</style>
</head>
<body>

	<!--__________________________search bar________________________-->
<div class="lela">
	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="Student username.." required="">
				<button type="submit" name="submit" class="btn btn-default">search
				</button>
		</form>
	</div>
	</div>
		<div class="lists">
		<h2>List Of Students</h2>
		</div>

	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * FROM `fine` where username like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo " Username ";	echo "</th>";
				echo "<th>"; echo " Bid ";  echo "</th>";
				echo "<th>"; echo " Returned ";  echo "</th>";
				echo "<th>"; echo " Days ";  echo "</th>";
				echo "<th>"; echo " Fines in birr ";  echo "</th>";
				echo "<th>"; echo " Status ";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
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
			}
		}
			/*if button is not pressed.*/
		else
		{
	$res=mysqli_query($db,"SELECT * FROM `fine`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo " Username ";	echo "</th>";
				echo "<th>"; echo " Bid ";  echo "</th>";
				echo "<th>"; echo " Returned ";  echo "</th>";
				echo "<th>"; echo " Days ";  echo "</th>";
				echo "<th>"; echo " Fines in birr ";  echo "</th>";
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
		}

	?>

</body>
</html>

<?php
include 'footer.php';

?>