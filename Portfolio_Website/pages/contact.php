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
    <main id="contactMain">
        <section>
            <div>
                <h1>Contact informatie</h1>
            </div>
            <div class="contactInfoWrapper">
                <div class="contactTile">
                    <img src="../images/email.png">
                    <h3>
                        Email
                    </h3>
                    <p>
                        <a href="mailto:stanverbeek04@outlook.com">stanverbeek04@outlook.com</a>
                    </p>
                </div>
                <div class="contactTile">
                    <img src="../images/phone-call.png">
                    <h3>
                        Telefoon
                    </h3>
                    <p>
                        <a href="tel:0600000000">06-14101706</a>
                    </p>
                </div>
                <div class="contactTile">
                    <img src="../images/land-layer-location.png">
                    <h3>
                        Adress
                    </h3>
                    <p>
                        <!-- Open meteren in maps -->
                        <a href="https://www.google.com/maps/place/Meteren+Netherlands" target="_blank">Meteren</a>
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php 
        include "../includes/htmlFooter.php";
    ?>
</body>
</html>

