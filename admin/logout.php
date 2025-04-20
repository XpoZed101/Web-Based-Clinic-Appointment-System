<?php
    error_reporting(E_ALL); // Enable error reporting
    ini_set('display_errors', 1); // Display errors for debugging

    session_start(); // Start the session

    // Check if session is initialized
    if (session_status() !== PHP_SESSION_ACTIVE) {
        die("Session is not active. Check your PHP configuration.");
    }

    // Unset session variables if they exist
    if (isset($_SESSION['sess_adminid'])) {
        unset($_SESSION['sess_adminid']);
    }
    if (isset($_SESSION['sess_adminemail'])) {
        unset($_SESSION['sess_adminemail']);
    }
    if (isset($_SESSION['admin_loggedin'])) {
        unset($_SESSION['admin_loggedin']);
    }

    // session_destroy(); // Uncomment if you want to destroy the session completely
    header("Location: login.php");
    exit; // Ensure no further code is executed
?>