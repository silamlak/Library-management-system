<?php
session_start();
include 'nav.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Details</title>
  <style>
    		          body{
  font-size: 13px;
}
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .admin-card {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
    }

    .admin-card h2 {
      margin-top: 0;
    }

    .admin-card p {
      margin: 5px 0;
    }

    .admin-card hr {
      margin: 10px 0;
      border: none;
      border-top: 1px solid #ccc;
    }
    .shift {
      margin: 20px;
    }

    .shift button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .shift button:hover {
      background-color: #45a049;
    }

    /* Animation */
    .shift button {
      position: relative;
      overflow: hidden;
    }

    .shift button:before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.3);
      transition: left 0.3s ease;
    }

    .shift button:hover:before {
      left: 100%;
    }
  </style>
</head>
<body>

<div class="shift">
    <form action="sfit.php" method="post">
    <button name="submit" value="shift">Change Shift</button>
    </form>
</div>
  <?php
  include 'connection.php';

  // Retrieve admin records with assigned shift days
  $query = "SELECT * FROM admin WHERE shift_day IS NOT NULL";
  $result = mysqli_query($db, $query);

  // Check if there are any records
  if (mysqli_num_rows($result) > 0) {
    // Loop through each row
    while ($row = mysqli_fetch_assoc($result)) {
      $adminId = $row['id'];
      $name = $row['name'];
      $username = $row['username'];
      $shiftDay = $row['shift_day'];

      // Display the admin details
      echo '<div class="admin-card">';
      echo '<h2>Admin Details</h2>';
      echo '<p><strong>Name:</strong> ' . $name . '</p>';
      echo '<p><strong>Username:</strong> ' . $username . '</p>';
      echo '<p><strong>Shift Day:</strong> ' . $shiftDay . '</p>';
      echo '</div>';
    }
  } else {
    echo 'No admins found.';
  }

  // Close the database connection
  mysqli_close($db);
  ?>
</body>
</html>
<?php

include 'footer.php';

?>