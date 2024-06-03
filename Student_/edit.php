<?php
include 'auth.php';
	include "connection.php";
	include 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
    <style>
		body{
  font-size: 13px;
}
        /* Styles for the form container */
.form1 {
  max-width: 800px;
  margin: auto;
  padding: 10px;
  background-color: #f2f2f2;
  border-radius: 10px;
}

/* Styles for form inputs */
label, input[type=text], input[type=file] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
}

/* Styles for the submit button */
button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

/* Media query for smaller screens */
@media screen and (max-width: 600px) {
  /* Reduce the width of the form container */
  .form1 {
    max-width: 400px;
  }
  
  /* Reduce the font size of form inputs */
  label, input[type=text], input[type=file] {
    font-size: 14px;
  }
  
  /* Center the submit button */
  button[type=submit] {
    margin: 0 auto;
  }
}

    </style>
</head>
<body>

	<h2>Edit Information</h2>
	<?php
		
		$sql = "SELECT * FROM student WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['name'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$contact=$row['contact'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span>Welcome</span>	
		<h4><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>Full Name: </b></h4></label>
		<input class="form-control" type="text" name="name" value="<?php echo $first; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Contact No</b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$first=$_POST['name'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE student SET pic='$pic', name='$first', username='$username', email='$email', contact='$contact' , password='$password' WHERE username='".$_SESSION['login_user']."';";

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