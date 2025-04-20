<?php
    session_start(); // Start the session
    unset($_SESSION['sess_adminid']);
    unset($_SESSION['sess_adminemail']);
    unset($_SESSION['admin_loggedin']);
    // session_destroy();
    header("Location: login.php");
?>