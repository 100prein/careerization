<?php
session_start(); // start session

// check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // redirect to login page
    exit();
}

// logout user
if (isset($_GET['logout'])) {
    session_unset(); // unset all session variables
    session_destroy(); // destroy session
    header('Location: login.php'); // redirect to login page
    exit();
}
?>