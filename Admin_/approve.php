<?php
include "auth.php";
  include "connection.php";
  include "nav.php";
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
  margin-bottom: 50px;
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

label {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

body{
  font-size: 13px;
}
	</style>

</head>
<body>
  <div class="container">
    <br><h3>Approve Request</h3><br><br>
    
    <form class="Approve" action="" method="post">
        <input class="form-control" type="text" name="approve" placeholder="Yes or No" required=""><br>

        <input type="text" name="issue" placeholder="Issue Date yyyy-mm-dd" required="" class="form-control"><br>

        <input type="text" name="return" placeholder="Return Date yyyy-mm-dd" required="" class="form-control"><br>
        <button class="btn btn-default" type="submit" name="submit">Approve</button>
    </form>
  
  </div>

<?php
  if(isset($_POST['submit']))
  {
    mysqli_query($db,"UPDATE  `issue_book` SET  `approve` =  '$_POST[approve]', `issue` =  '$_POST[issue]', `return` =  '$_POST[return]' WHERE username='$_SESSION[name]' and bid='$_SESSION[bid]';");

    mysqli_query($db,"UPDATE books SET quantity = quantity-1 where bid='$_SESSION[bid]' ;");

    $res=mysqli_query($db,"SELECT quantity from books where bid='$_SESSION[bid]';");

    while($row=mysqli_fetch_assoc($res))
    {
      if($row['quantity']==0)
      {
        mysqli_query($db,"UPDATE books SET status='not-available' where bid='$_SESSION[bid]';");
      }
    }
    ?>
      <script type="text/javascript">
        alert("Updated successfully.");
        window.location="request.php"
      </script>
    <?php
  }
?>
</body>
</html>

<?php

include 'footer.php';
?>