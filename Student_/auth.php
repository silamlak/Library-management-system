<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['login_user'])) {
    // Redirect to the login page
    header("Location: student_login.php");
    exit();
}
?>
