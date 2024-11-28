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
<header>
    <nav>
        <img id="hmLogo" onclick="goToHome()">
        <ul>
            <li>
                <a href="aboutMe.php">Over mij</a>
            </li>
            <li>
                <a href="projects.php">Projecten</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
        <button class="openbtn" onclick="openNav()">&#9776;</button>
    </nav>
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="aboutMe.php">Over mij</a>
        <a href="projects.php">Projecten</a>
        <a href="contact.php">Contact</a>
    </div>
</header>