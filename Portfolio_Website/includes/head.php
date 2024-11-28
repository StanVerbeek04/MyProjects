<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    } 
    if ($_SERVER['REMOTE_ADDR'] != "62.163.124.120") {
        // Send user to login page if $_SESSION['logged_in'] is not true
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            header('Location: ../index.php');
            exit();
        }
    }
?>