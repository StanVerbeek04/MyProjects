<!DOCTYPE html>
<!--
    Auteur:         Stan Verbeek
    Aanmaakdatum:   28-2-2023

    Website Tandarts Den Bosch
 -->

    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8">
            <link rel="stylesheet" href="/REA_T3T4/Praktijk/Thema3/Praktijk_opdracht/styles/styles.css">
            <script src="/REA_T3T4/Praktijk/Thema3/Praktijk_opdracht/scripts/script.js"defer></script>
            <title>
                Tandarts Den Bosch | Enquête
            </title>
        </head>

    <body>
        <!-- Include van menu en header -->
        <?php
        include ("/inetpub/wwwroot/REA_T3T4/Praktijk/Thema3/Praktijk_opdracht/includes/header.php");
        ?>

        <!-- Vragenlijst -->
       <section id="vragenLijst">
           <h2>
               Tandgezondheid enquête
           </h2>

            <!-- Vraag 1 -->
           <h3>
               Vraag 1
           </h3>
           <h3>
               Hoe vaak poets je per dag?
           </h3>

            <!-- Vragen met input -->
           <label for="antw1">
               Meer dan 2x per dag
           </label>
           <input type="radio" name="vrg1" id="antw1" value="10" required>

           <label for="antw2">
               1x per dag
           </label>
           <input type="radio" name="vrg1" id="antw2" value="5" required>

           <label for="antw3">
               Minder 1x per dag
           </label>
           <input type="radio" name="vrg1" id="antw3" value="-10" required>

           <!-- Vraag 2 -->
           <h3>
               Vraag 2
           </h3>
           <h3>
               Gebruik je na iedere maaltijd of minimaal 1 keer per dag?
           </h3>

           <!-- Vragen met input -->
           <label for="antw4">
               Rager
           </label>
           <input type="radio" name="vrg2" id="antw4" value="10" required>

           <label for="antw5">
               Tandenstoker
           </label>
           <input type="radio" name="vrg2" id="antw5" value="5" required>

           <label for="antw6">
               niks
           </label>
           <input type="radio" name="vrg2" id="antw6" value="-5" required>

           <!-- Vraag 3 -->
           <h3>
               Vraag 3
           </h3>
           <h3>
               Ga je ieder halfjaar naar een mondhygieniste om je tandplak te laten verwijderen?
           </h3>

           <!-- Vragen met input -->
           <label for="antw7">
               ja
           </label>
           <input type="radio" name="vrg3" id="antw7" value="10" required>

           <label for="antw8">
               minder dan 1x per jaar
           </label>
           <input type="radio" name="vrg3" id="antw8" value="5" required>

           <label for="antw9">
               nee
           </label>
           <input type="radio" name="vrg3" id="antw9" value="0" required>

           <!-- Plaatje toevoegen -->
           <br>
           <img class="vragenImages" src="../images/tand.jpg" alt="Tandart plaatje">

           <!-- Vraag 4 -->
           <h3>
               Vraag 4
           </h3>
           <h3>
               Gebruik je een electrische tandenborstel?
           </h3>

           <!-- Vragen met input -->
           <label for="antw10">
               ja
           </label>
           <input type="radio" name="vrg4" id="antw10" value="10" required>

           <label for="antw11">
               nee
           </label>
           <input type="radio" name="vrg4" id="antw11" value="5" required>


           <!-- Vraag 5 -->
           <h3>
               Vraag 5
           </h3>
           <h3>
               Gebruik je een tandpasta met fluoride?
           </h3>

           <!-- Vragen met input -->
           <label for="antw12">
               ja
           </label>
           <input type="radio" name="vrg5" id="antw12" value="10" required>

           <label for="antw13">
               nee
           </label>
           <input type="radio" name="vrg5" id="antw13" value="5" required>


           <!-- Vraag 6 -->
           <h3>
               Vraag 6
           </h3>
           <h3>
               Heb je wel eens last van een stinkende adem?
           </h3>

           <!-- Vragen met input -->
           <label for="antw14">
               ja
           </label>
           <input type="radio" name="vrg6" id="antw14" value="10" required>

           <label for="antw15">
               nee
           </label>
           <input type="radio" name="vrg6" id="antw15" value="0" required>

           <!-- Plaatje toevoegen -->
           <br>
           <img class="vragenImages" src="../images/gebid.png" alt="Tandart plaatje">


           <!-- Vraag 7 -->
           <h3>
               Vraag 7
           </h3>
           <h3>
               Gebruik je wel eens een tongschraper?
           </h3>

           <!-- Vragen met input -->
           <label for="antw16">
               ja
           </label>
           <input type="radio" name="vrg7" id="antw16" value="10" required>

           <label for="antw17">
               nee
           </label>
           <input type="radio" name="vrg7" id="antw17" value="5" required>

           <!-- Vraag 8 -->
           <h3>
               Vraag 8
           </h3>
           <h3>
               Heb je weleens last van bloedend tandvlees?
           </h3>

           <!-- Vragen met input -->
           <label for="antw18">
               nee
           </label>
           <input type="radio" name="vrg8" id="antw18" value="10" required>

           <label for="antw19">
               ja
           </label>
           <input type="radio" name="vrg8" id="antw19" value="-10" required>

           <!-- Vraag 9 -->
           <h3>
               Vraag 9
           </h3>
           <h3>
               Poets je minimaal 2 minuten en werk je alles grondig af?
           </h3>

           <!-- Vragen met input -->
           <label for="antw20">
               ja
           </label>
           <input type="radio" name="vrg9" id="antw20" value="10" required>

           <label for="antw21">
               nee
           </label>
           <input type="radio" name="vrg9" id="antw21" value="5" required>

            <!-- Button om resultaten te laten zien -->
           <article>
               <button onclick="displayAntwoorden()" name="button" id="antwoorden">Print resultaat</button>
           </article>

       </section>
        <section>
            <!-- p met resultaat -->
            <h1 id="uitkomstEnquete"></h1>
            <img id="afbeeldingResultaat" src="../images/antwoordImage.jpg" alt="Tandarts">

        </section>
        </main>

        <!-- Import footer -->
        <?php
        include ("/inetpub/wwwroot/REA_T3T4/Praktijk/Thema3/Praktijk_opdracht/includes/footer.php");
        ?>
    </body>
</html> 
