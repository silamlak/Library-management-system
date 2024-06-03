<?php
include 'connection.php';
include "auth.php";

// Array of available shift days
$shiftDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

if (isset($_POST['submit'])) {


// Retrieve admin records
$query = "SELECT id FROM admin";
$result = mysqli_query($db, $query);

// Shuffle the shift days array
shuffle($shiftDays);

// Loop through admin records and assign unique shift days
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
  $adminId = $row['id'];
  $shiftDay = $shiftDays[$index];

  // Update the shift_day column for the admin
  $updateQuery = "UPDATE admin SET shift_day = '$shiftDay' WHERE id = $adminId";
  mysqli_query($db, $updateQuery);

  $index++;

  // Reset the index to 0 if it exceeds the number of shift days
  if ($index >= count($shiftDays)) {
    $index = 0;
    ?>
			<script type="text/javascript">
				window.location="sdisplay.php"
			</script>
		<?php
  }
}
}

// Close the database connection
mysqli_close($db);
?>
