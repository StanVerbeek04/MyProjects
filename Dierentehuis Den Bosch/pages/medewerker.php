<!--
    Auteur:         Stan Verbeek
    Aanmaakdatum:   11-05-2023

    Login Website Dierentehuis ‘s-Hertogenbosch
 -->
<?php
// Session starten
session_start();

//Checken of gebruiker niet direct naar medewerker pagina navigeert
if (!isset($_POST["username"]))
{
    header("location: login.php");
    exit();
}

// Checken of inloggegevens overeen komen
if ($_POST["username"] == "vrijwilliger" && $_POST["password"] == "I3d3rd13rt3lt")
{
    // In cookie opslaan dat gebruiker is ingelogd
    setcookie("loggedIn", true, time() + 3600, "/");
    // In session opslaan dat de user is ingelogd
    $_SESSION["loginSucces"] = true;
}
else
{
    // Gebruiker opnieuw de gegevens inlaten voeren
    header("location: login.php");
    // In session opslaan dat de niet user is ingelogd
    $_SESSION["loginSucces"] = false;
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/styles.css">
        <title>
            vrijwilliger - Dierentehuis 's-Hertogenbosch
        </title>
    </head>

    <body>
        <header>
            <a href="../index.php" id="logoutButton">
                Uitloggen
            </a>
            <a href="../index.php">
                <img src="../images/logo.svg" alt="Logo Dierentehuis 's-Hertogenbosch" id="hoofdLogo">
            </a>
        </header>
        <main>
            <h1 id="welkomVrijwilliger">
                Welkom vrijwilliger
            </h1>
            <table>
                <tr>
                    <th>Naam</th>
                    <th>Telefoonnummer</th>
                    <th>E-mailadres</th>
                    <th>Werkzaamheden</th>
                </tr>
                <tr>
                    <td>Eliene Holla</td>
                    <td>06-44662246</td>
                    <td>ElieneHolla@outlook.com</td>
                    <td>verzorging honden</td>
                </tr>
                <tr>
                    <td>Philip Boekholt</td>
                    <td>06-82528319</td>
                    <td>PhilipBoekholt@outlook.com</td>
                    <td>verzorging katten</td>
                </tr>
                <tr>
                    <td>Selami Meulenbroeks</td>
                    <td>06-56109212</td>
                    <td>SelamiMeulenbroeks@gmail.com</td>
                    <td>verzorging honden</td>
                </tr>
                <tr>
                    <td>Semira Trines</td>
                    <td>06-89084537</td>
                    <td>SemiraTrines@yahoo.com</td>
                    <td>verzorging katten, gastgezin kat</td>
                </tr>
                <tr>
                    <td>Christian Kroos</td>
                    <td>06-28868799</td>
                    <td>ChristianKroos@hotmail.nl</td>
                    <td>gastgezin kat</td>
                </tr>
                <tr>
                    <td>Doede Smeulders</td>
                    <td>06-86217996</td>
                    <td>DoedeSmeulders@gmail.com</td>
                    <td>verzorging honden, gastgezin hond</td>
                </tr>
                <tr>
                    <td>Siebren Breukers</td>
                    <td>06-94192111</td>
                    <td>SiebrenBreukers@yahoo.com</td>
                    <td>gastgezin hond</td>
                </tr>
                <tr>
                    <td>Jouke Walhout</td>
                    <td>06-93561432</td>
                    <td>JoukeWalhout@gmail.com</td>
                    <td>verzorging katten</td>
                </tr>
                <tr>
                    <td>Hossein Waterman</td>
                    <td>06-44303878</td>
                    <td>HosseinWaterman@outlook.com</td>
                    <td>gastgezin kat</td>
                </tr>
                <tr>
                    <td>Lilia van Antwerpen</td>
                    <td>06-99685607</td>
                    <td>LiliavanAntwerpen@hotmail.nl</td>
                    <td>verzorging honden, verzorging katten</td>
                </tr>
                <tr>
                    <td>Allal Poelsma</td>
                    <td>06-38560634</td>
                    <td>AllalPoelsma@ziggo.nl</td>
                    <td>gastgezin hond</td>
                </tr>
                <tr>
                    <td>Bouke Haalboom</td>
                    <td>06-87883016</td>
                    <td>BoukeHaalboom@yahoo.com</td>
                    <td>gastgezin kat</td>
                </tr>
                <tr>
                    <td>Dio Bramer</td>
                    <td>06-79615938</td>
                    <td>DioBramer@ziggo.nl</td>
                    <td>verzorging katten, gastgezin kat</td>
                </tr>
                <tr>
                    <td>Linda Butter</td>
                    <td>06-28317272</td>
                    <td>LindaButter@ziggo.nl</td>
                    <td>gastgezin hond</td>
                </tr>
                <tr>
                    <td>Jorian de Bot</td>
                    <td>06-88546197</td>
                    <td>JoriandeBot@ziggo.nl</td>
                    <td>verzorging honden, gastgezin hond</td>
                </tr>
            </table>
        </main>
        <footer>
            <figure>
                <img src="../images/dierenlot.jpg" alt="Logo DierenLot" id="dierenlotLogo">
                <img src="../images/cbf.png" alt="Logo CBF" id="cbfLogo">
                <img src="../images/anbi.svg" alt="Logo ANBI" id="anbiLogo">
            </figure>
            <p id="footerCopy">
                &copy;Dierentehuis 's-Hertogenbosch 2015 - 2023
            </p>
        </footer>
    </body>
</html>