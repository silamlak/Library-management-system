<?php
	session_start();
	if(isset($_SESSION['acqua_user']))
	{
		unset($_SESSION['acqua_user']);
	}
	header("location:acquisition.php");
?>