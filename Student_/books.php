<?php
session_start();
  include "connection.php";
  include "nav.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
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
body{
  font-size: 13px;
}

.srch {
	display: flex;
	flex-direction: column;
    margin: auto;
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

table {
  border-collapse: collapse;
  width: 100%;
  height: 1000px;

  margin-bottom: 30px;
  
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}


th {
  background-color: #6db6b9e6;
  color: white;
}

@media screen and (max-width: 800px) {
  table {
    font-size: 8px;
  }
  .list{
	text-align: center;
  }
}
	</style>

</head>
<body>
	<!--___________________search bar________________________-->
    <section class="lela">
	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search books.." required="">
				<button type="submit" name="submit" class="btn btn-default">search
				</button>
		</form>
	</div>
	<!--___________________request book__________________-->
	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
				<input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="">
				<input class="form-control" type="text" name="name" placeholder="Enter Book name" required="">
				<button type="submit" name="submit1" class="btn btn-default">Request
				</button>
		</form>
	</div>
	</section>

	<div class="lists"><h2>List Of Books</h2></div>
    
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No book found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`department` ASC;");
			echo "<div class='scroll'>";
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	
			
			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
			
		echo "</table>";
		echo "</div>";
		}

		if(isset($_POST['submit1']))
		{
			if(isset($_SESSION['login_user']))
			{
				mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[login_user]', '$_POST[bid]', '$_POST[name]', '', '', '');");
				?>
					<script type="text/javascript">
						window.location="request.php"
					</script>
				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
						alert("You must login to Request a book");
					</script>
				<?php
			}
		}

	?>
</div>
</body>
</html>

<?php
include 'footer.php';

?>