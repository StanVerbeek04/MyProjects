<!DOCTYPE html>
<?php
// Session starten
session_start();
?>
<!--
    Auteur:         Stan Verbeek
    Aanmaakdatum:   11-05-2023

    Login Website Dierentehuis ‘s-Hertogenbosch
 -->

<html> 
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/styles.css">
<!--        <script src="../scripts/script.js"defer></script>-->
        <title>
            Login - Dierentehuis 's-Hertogenbosch
        </title>
    </head>

    <body>
        <header>
            <a href="../index.php" id="logoutButton">
                Terug
            </a>
            <a href="../index.php">
                <img src="../images/logo.svg" alt="Logo Dierentehuis 's-Hertogenbosch" id="hoofdLogo">
            </a>
        </header>
        <main>
            <form method="post" action="medewerker.php">
                <p>
                    Inloggen als vrijwilliger
                </p>
                <input placeholder="Gebruikersnaam" name="username" required>
                <input placeholder="Wachtwoord" type="password" name="password" required>
                <button>
                    Login
                </button>
                <?php
                if(isset($_SESSION["loginSucces"]))
                {
                    if ($_SESSION["loginSucces"] === false)
                    {
                        // Gebruiker laten zien dat ze niet de juiste login gegevens hebben ingevoerd
                        echo "<span id='wrongLoggin'>Onjuiste gebruikersnaam of wachtwoord</span>";

                        // Text na 2 seconden laten verdwijnen
                        echo "<script> setTimeout(function(){ document.getElementById('wrongLoggin').style.display = 'none';}, 2000);</script>";
                    }
                }
                ?>
            </form>
        </main>
    </body>
</html> 