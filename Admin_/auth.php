<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['admin_user'])) {
    // Redirect to the login page
    header("Location: admin_login.php");
    exit();
}
?>
