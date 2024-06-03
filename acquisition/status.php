<?php
  include "connection.php";
  include "nav.php";
  include "auth.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Approve Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
.container {
  width: 50%;
  margin: auto;
  margin-top: 100px;
  padding: 20px;
  background-color: #f2f2f2;
}

h3 {
  text-align: center;
  font-size: 28px;
  font-weight: bold;
}

form {
  display: flex;
  flex-direction: column;
}

input[type="text"], input[type="password"], input[type="date"] {
  margin-bottom: 20px;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #ddd;
  font-size: 18px;
  color: #444;
}

input[type="text"]:focus, input[type="password"]:focus, input[type="date"]:focus {
  outline: none;
  background-color: #fff;
  box-shadow: 0px 0px 5px #999;
}

button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #0066cc;
  color: #fff;
  font-size: 18px;
  cursor: pointer;
}

button:hover {
  background-color: #0052cc;
}
body{
  font-size: 13px;
}
label {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}


	</style>

</head>
<body>
  <div class="container">
    <br><h3>Approve Request</h3><br><br>
    
    <form class="Approve" action="" method="post">
        <input class="form-control" type="text" name="status" placeholder="Yes or No" required=""><br>
        <button class="btn btn-default" type="submit" name="submit">Approve</button>
    </form>
  
  </div>

<?php

if (isset($_POST['submit'])) {
  $status = $_POST['status'];
  $title = $_SESSION['title'];

  $sql = "UPDATE `request` SET `status` = '$status' WHERE title = '$title';";
  mysqli_query($db, $sql);

  if (mysqli_affected_rows($db) > 0) {
    ?>
    <script type="text/javascript">
      alert("Updated successfully.");
      window.location = "acquisition.php";
    </script>
    <?php
  } else {
    ?>
    <script type="text/javascript">
      alert("Please fill the correct title.");
      window.location = "acquisition.php";
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