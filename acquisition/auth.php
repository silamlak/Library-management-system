<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['acqua_user'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}
?>
