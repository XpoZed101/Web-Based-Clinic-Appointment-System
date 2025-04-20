<?php
    error_reporting(E_ALL); // Enable error reporting
    ini_set('display_errors', 1); // Display errors for debugging

    session_start(); // Start the session
    if (!isset($_SESSION)) {
        die("Session not initialized. Check PHP configuration.");
    }

    unset($_SESSION['sess_adminid']);
    unset($_SESSION['sess_adminemail']);
    unset($_SESSION['admin_loggedin']);
    // session_destroy();
    header("Location: login.php");
?>