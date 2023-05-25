<!DOCTYPE html>
<!-- 
    Auteur:         Stan Verbeek
    Aanmaakdatum:   11-05-2023

    Website Dierentehuis ‘s-Hertogenbosch
 -->

<html> 
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/styles.css">
        <title>
            Home - Dierentehuis 's-Hertogenbosch
        </title>
    </head>

    <body> 
        <header>
            <!-- Logo dierentehuis -->
            <a href="./index.php">
                <img src="images/logo.svg" alt="Logo Dierentehuis 's-Hertogenbosch" id="hoofdLogo">
            </a>

            
            <!-- Doneer button -->
            <button id="doneerButton">
                Doneer
            </button>

            <!-- Login knop -->
            <a href="./pages/login.php" id="loginButton">
                Inloggen
            </a>
        </header>
        <main>
            <?php
            // Include navigatie
            include "includes/nav.php";
            ?>


            <!-- Figure met banner -->
            <figure id="banner">
                <img src="images/banner.jpg" alt="Banner">
            </figure>

            <!-- Article met buttons voor adopteren -->
            <article id="adoptArticle">
                <button>
                    Adopteer een kat
                </button>

                <button>
                    Adopteer een hond
                </button>

                <button>
                    Dier gevonden
                </button>

                <button>
                    Steun ons
                </button>

                <button>
                    Afstand doen huisdier
                </button>

                <button>
                    Vrijwilliger worden

                </button>
            </article>

            <!-- section met laatste nieuws spotlight en contact -->
            <section>
                <!-- Article met laatste nieuws -->
                <article>
                    <h1>
                        LAATSTE NIEUWS
                    </h1>
                    <hr>
                    <p>
                        Dinsdag 2 mei: wegwerkzaamheden Maastrichtseweg<br>
                        25-04-2023
                    </p>
                    <p>
                        DierenLot en CBF erkenning<br>
                        16-02-2023
                    </p>
                </article>

                <!-- article met spotlight -->
                <article>
                    <h1>
                        SPOTLIGHT
                    </h1>
                    <hr>
                    <h2>
                        Telefonische bereikbaarheid 12 mei
                    </h2>
                    <p>
                        Op vrijdag 12 mei wordt ons telefoniesysteem vernieuwd. Dit kan ervoor zorgen dat wij gedurende onze telefonische openingstijden minder goed bereikbaar zijn. Onze excuses voor het ongemak.
                    </p>
                </article>

                <!-- article met contact info -->
                <article>
                    <h1>
                        CONTACT
                    </h1>
                    <hr>
                    <h3>
                        ADRES
                    </h3>
                    <p>
                        Oosterplasweg 41<br>
                        5215 HT 's-Hertogenbosch<br>
                        info@dierentehuisdenbosch.nl
                    </p>
                    <h3>
                        TELEFONISCH BEREIKBAAR
                    </h3>
                    <p>
                        Maandag t/m vrijdag:<br>
                        &nbsp;&nbsp;10:00 - 12:00<br>
                        &nbsp;&nbsp;13:00 - 16:00<br>
                        Zaterdag:<br>
                        &nbsp;&nbsp;9:00 - 12:00
                    </p>
                    <p>
                        <span id="telefoon">
                            073 641 24 17
                        </span>
                    </p>
                    <h3>
                        OPENINGSTIJDEN VOOR BEZOEKERS
                    </h3>
                    <p>
                        maandag t/m zaterdag: op afspraak<br>
                        zondag: gesloten
                    </p>

                </article>
            </section>
        </main>

        <?php
        // Include footer
        include "includes/footer.php";
        ?>
        
    </body>
</html> 