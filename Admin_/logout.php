<?php
	session_start();
	if(isset($_SESSION['admin_user']))
	{
		unset($_SESSION['admin_user']);
	}
	header("location:index.php");
?>