<!DOCTYPE html>
<!-- 
    Auteur:         Stan Verbeek
    Aanmaakdatum:   28-2-2023

    Website Tandarts Den Bosch
 -->

<html lang="NL"> 
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/styles.css">
        <script src="./scripts/script.js"defer></script>
        <title>
            Tandarts Den Bosch | Home
        </title>
    </head>

    <body>

    <?php
    include ("/inetpub/wwwroot/REA_T3T4/Praktijk/Thema3/Praktijk_opdracht/includes/header.php");
    ?>

            <article id="banner">
                <h1>
                    TANDARTS DEN BOSCH
                </h1>
                <h2>
                    Uw tandarts in Den Bosch e.o. voor reguliere tandheelkunde en implantaten
                </h2>
                <p>
                    Betrouwbaar. Bereikbaar. Betaalbaar.
                </p>

                <button id="button1">
                    INSCHRIJVEN
                </button>

                <button id="button2">
                    AFSPRAAK MAKEN
                </button>
            </article>

            <article id="afspraakArticle">
                <h2>
                    TANDARTS DEN BOSCH NEEMT NOG PATIËNTEN AAN!
                </h2>
                <p>
                    U kunt zich eenvoudig online inschrijven bij onze praktijk. Uiteraard staan we u ook graag telefonisch te woord. 
                </p>

                <figure>
                    <img src="images/tandarts.png" alt="Tandart Afbeelding">
                </figure>
            </article>

            <article id="meerInfoArticle">
                <p>
                    EEN BREED SCALA AAN TANDHEELKUNDIGE BEHANDELINGEN
                </p>
                <button>
                    MEER INFO
                </button>
            </article>
            
        </main>
            <!-- Import footer -->
            <?php
            include ("/inetpub/wwwroot/REA_T3T4/Praktijk/Thema3/Praktijk_opdracht/includes/footer.php");
            ?>
    </body>
</html> 