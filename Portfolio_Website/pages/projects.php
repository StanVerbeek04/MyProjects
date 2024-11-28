<?php
    // Include PHP login check
    include "../includes/head.php"
?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over mij</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <script src="../scripts/script.js" defer></script>
</head>
<body>
    <?php 
        // Include navigation
        include "../includes/htmlHead.php";
    ?>
    <main class="projectMain">
        <section class="projectHeadInfo">
            <h1>
                Projecten
            </h1>
            <p>
                Hier vind je mijn meest recente projecten als IT'er en Software Developer
            </p>
        </section>
        <section class="projectSection">
            <div class="projectInfoWrapper">
                <h2>
                    Ticket Manager Project
                </h2>
                <p>
                    Dit project heb ik ontwikkeld tijdens mijn stage bij Padgin. Tijdens dit project was mijn opdracht om een ticketmanagementsysteem te bouwen, waarin gebruikers van DOCK tickets konden aanmaken. DOCK is de CRM/CMS van Padgin. Ik heb dit project gebouwd met de programmeertalen PHP, JavaScript en SQL.
                </p>
            </div>
            <div class="projectIMGwrapper">
                <img src="../images/ticketManager.png">
            </div>
        </section>
        <section class="projectSection flexRowReverse">
            <div class="projectInfoWrapper">
                <h2>
                    Custom desktops
                </h2>
                <p>
                    Tijdens mijn stage bij F1 Computers heb ik verschillende desktops geassembleerd, waaronder high-end workstations en gaming pc's. Mijn taak bestond uit het nauwkeurig in elkaar zetten van de computers en ervoor te zorgen dat ze gebruiksklaar waren, zodat de gebruiker de pc alleen nog maar hoefde aan te zetten. Dit proces vereiste niet alleen technische vaardigheden, maar ook aandacht voor detail en het streven naar een vlekkeloze gebruikerservaring
                </p>
            </div>
            <div class="projectIMGwrapper">
                <img src="../images/buildPC.jpg">
            </div>
        </section>
    </main>
    <?php 
        include "../includes/htmlFooter.php";
    ?>
</body>
</html>

