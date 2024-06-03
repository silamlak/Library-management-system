<?php
  include "auth.php";
  include "connection.php";
  include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">

body{
  font-size: 13px;
}
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
	margin-top: 200px;
}
h2 {
  text-align: center;
  color: #6db6b9e6;
}

/* Style the table */
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

	</style>
</head>
<body>

	<!--__________________________search bar________________________-->
<div class="lela">
	<div class="srch">
	<form class="navbar-form" method="post" name="form1">
			
			<input class="form-control" type="text" name="roll" placeholder="Enter Roll" required="">
			<button type="submit" name="submit1" class="btn btn-default">Delete
			</button>
	</form>
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
			$q=mysqli_query($db,"SELECT name,username,roll,email,contact FROM `student` where username like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Full Name";	echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "Roll";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['roll']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT name,username,roll,email,contact FROM `student`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Full Name";	echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "Roll";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['roll']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}
		if(isset($_POST['submit1']))
		{
			if(isset($_SESSION['admin_user']))
			{
				mysqli_query($db,"DELETE from student where roll = '$_POST[roll]'; ");
				?>
					<script type="text/javascript">
						alert("Delete Successful.");
					</script>
				<?php
			}
		}

	?>
</body>
</html>

<?php
include 'footer.php';
?>