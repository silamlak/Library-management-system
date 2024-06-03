<?php 
session_start();
	include "connection.php";
	include "nav.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
				          body{
  font-size: 13px;
}
/* Style for the update section */
.update {
  background-color: #f2f2f2;
  padding: 50px;
}

/* Style for the wrapper */
.update .wrapper {
  max-width: 500px;
  margin: 0 auto;
}

/* Style for the h1 tag */
.update h1 {
  font-size: 36px;
  text-align: center;
  margin-bottom: 30px;
}

/* Style for the form inputs */
.update input[type="text"] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

/* Style for the submit button */
.update button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

/* Hover effect for the submit button */
.update button[type="submit"]:hover {
  background-color: #45a049;
}

	</style>
</head>
<body>
    <section class="update">
	<div class="wrapper">
		<div>
			<h1>Change Your Password</h1>
		</div>
		<div>
		<form action="" method="post" >
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<button class="btn btn-default" type="submit" name="submit" >Update</button>
		</form>

	</div>
    </section>
	
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE admin SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                alert("The Password Updated Successfully.");
              </script> 

				<?php
			}
		}
	?></div>
</body>
</html>
<?php	
include 'footer.php';

?>