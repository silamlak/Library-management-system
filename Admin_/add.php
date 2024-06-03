<?php
  include "auth.php";
  include "connection.php";
  include "nav.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
          body{
  font-size: 13px;
}
	/* Center the form and give it some padding */
  .cctv {
        max-width: 400px;
        margin: 50px auto;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5%;
    }

    .cctv h2 {
        text-align: center;
        margin-bottom: 20px;
        
    }

    .book input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .book button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #6db6b9;
        color: #fff;
        border: none;
        cursor: pointer;
        margin-bottom: 20px;
    }

    @media (min-width: 768px) {
        .cctv {
            max-width: 600px;
        }
    }


	</style>


</head>
<body>

<div id="main">
  <div class="cctv">
    <h2><b>Add New Books</b></h2>
    
    <form class="book" action="" method="post">

        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
        <input type="text" name="department" class="form-control" placeholder="Department" required=""><br>

        <button class="btn btn-default" type="submit" name="submit">ADD</button>
    </form>
</div>
<?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['login_user']))
      {
        mysqli_query($db,"INSERT INTO books VALUES ('', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;");
        ?>
          <script type="text/javascript">
            alert("Book Added Successfully.");
          </script>

        <?php

      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    }
?>
</div>

</body>
<?php
include 'footer.php';

?>