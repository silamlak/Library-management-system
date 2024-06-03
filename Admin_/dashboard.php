<?php
session_start();
include 'nav.php';



?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Dashboard</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>
/* Flex Container */
.allinone {
  width: 100%;
}
body{
  font-size: 13px;
}
.eregud{
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #f5f5f5;
  padding: 20px;
}

.alldash{
    margin: 50px auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

/* Dashboard Title */
.dashboard h1 {
  font-size: 24px;
  color: #333;
  margin: 0;
}

/* Flex Items */
.dashboard {
  background-color: #fff;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Colors */
.total-students:nth-child(1) {
  background-color: #8bc34a;
}

.total-students:nth-child(2) {
  background-color: #2196f3;
}

.total-students:nth-child(3) {
  background-color: #ff9800;
}

.total-students:nth-child(4) {
  background-color: #58626c;
}

.total-students {
  width: 230px;
  height: 170px;
  color: #fff;
  font-size: 24px;
  text-align: center;
  padding: 10px;
  border-radius: 5px;
  margin: 20px;
}

.nums{
  background-color: #1795a8;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 60%;
  border-radius: 10px;
  margin-top: 20px;
}



  </style>
</head>
<body>
    <section class="allinone">
      <div class="eregud">
  <div class="dashboard">
    <h1>Library Dashboard</h1>
  </div>
  <div class="alldash">
    <div class="total-students">
      <?php
      
        // Assuming you have already retrieved the total student count in PHP
        include 'connection.php';
        // Retrieve the number of students
        $query = "SELECT COUNT(*) as total_students FROM student";
        $result = mysqli_query($db, $query);

        if ($result) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result);

        // Get the count of students
        $totalStudents = $row['total_students'];

        // Output the count of students
        echo "Total students "?><br>
        <div class="nums"><?php echo $totalStudents ?></div><?php
        } else {
        // Error handling if the query fails
        echo "Error: " . mysqli_error($connection);
        }
        ?>
    </div>
    <div class="total-students">
      <?php
        // Assuming you have already retrieved the total student count in PHP
        include 'connection.php';
        // Retrieve the number of students
        $query = "SELECT COUNT(*) as total_books FROM books";
        $result = mysqli_query($db, $query);

        if ($result) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result);

        // Get the count of students
        $totalStudents = $row['total_books'];

        // Output the count of students
        echo "Total books "?><br>
        <div class="nums"><?php echo $totalStudents ?></div><?php
        } else {
        // Error handling if the query fails
        echo "Error: " . mysqli_error($connection);
        }
        ?>
    </div>
    <div class="total-students">
      <?php
        // Assuming you have already retrieved the total student count in PHP
        include 'connection.php';
        // Retrieve the number of students
        $query = "SELECT COUNT(*) as total_cata FROM cata";
        $result = mysqli_query($db, $query);

        if ($result) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result);

        // Get the count of students
        $totalStudents = $row['total_cata'];

        // Output the count of students
        echo "Catagory books "?><br>
        <div class="nums"><?php echo $totalStudents ?></div><?php
        } else {
        // Error handling if the query fails
        echo "Error: " . mysqli_error($connection);
        }
        ?>
    </div>
    <div class="total-students">
      <?php
        // Assuming you have already retrieved the total student count in PHP
        include 'connection.php';
        // Retrieve the number of students
        $query = "SELECT COUNT(*) as total_admin FROM admin";
        $result = mysqli_query($db, $query);

        if ($result) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result);

        // Get the count of students
        $totalStudents = $row['total_admin'];

        // Output the count of students
        echo "Total admin "?><br>
        <div class="nums"><?php echo $totalStudents ?></div><?php
        } else {
        // Error handling if the query fails
        echo "Error: " . mysqli_error($connection);
        }
        ?>
    </div>
    </div>
    </div>
  </section>
</body>
</html>
<?php
include 'footer.php';

?>