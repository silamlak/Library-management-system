<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['login_user'])) {
    // Redirect to the login page
    header("Location: index.php");
    exit();
}
?>