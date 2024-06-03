<?php
include "auth.php";
	include "nav.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<style type="text/css">
				          body{
  font-size: 13px;
}
	.profile_info {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.form1 {
  margin: 0 auto;
  max-width: 600px;
}

.form1 label {
  display: block;
  margin-top: 20px;
  font-size: 18px;
}

.form1 input[type="text"], 
.form1 input[type="file"] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
}

.form1 button[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.form1 button[type="submit"]:hover {
  background-color: #3e8e41;
}
@media (max-width: 767px) {
        .profile_info h4 {
            margin-top: 20px;
        }

        .form1 label {
            font-size: 18px;
            margin-top: 20px;
        }

        .form1 button {
            margin-top: 30px;
        }
    }

	</style>
</head>
<body>

	<h2>Edit Information</h2>
	<?php
		
		$sql = "SELECT * FROM acquisition WHERE username='$_SESSION[acqua_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['fullname'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
		}

	?>

	<div class="profile_info">
		<span>Welcome,</span>	
		<h4><?php echo $_SESSION['acqua_user']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>Full Name: </b></h4></label>
		<input class="form-control" type="text" name="fullname" value="<?php echo $first; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<br>
		<div>
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$first=$_POST['fullname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE acquisition SET fullname='$first', username='$username', password='$password', email='$email', pic='$pic' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
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