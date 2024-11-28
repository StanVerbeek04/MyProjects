<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    } 
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        // Send user to login page if $_SESSION['logged_in'] is not true
        header('Location: ../index.php');
        exit();
    }
?>
<footer>
    <div class="footerSocials">
        <img onclick="sendToLinkedIn()" src="../images/linkedin.png">
        <img onclick="sendToGithub()" src="../images/github.png">
    </div>
    <p>
        &copy;Copyright 2024, Stan Verbeek
    </p>
</footer>