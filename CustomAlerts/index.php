<?php 
  // include svg's
  include "includes/svg.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Alert</title>
    <link rel="stylesheet" href="styles/alert.css">
    <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <h1>Dit is een demo voor mijn custom alert funtie</h1>
        <p>
          Voer een titel in
        </p>

        <input id="alertTitle" placeholder="Titel">
        <p>
          Voer een bericht in
        </p>
        <input id="alertMessage" placeholder="Bericht">

        <p>
          Voer de duratie in secondes
        </p>
        <input id="alertDuration" type="number" placeholder="Voer een duratie in" min="1" value="1">

        <p>
          Selecteer een positie
        </p>
        <select id="alertPosition">
            <option>top-left</option>
            <option selected>top-center</option>
            <option>top-right</option>
            <option>middle-left</option>
            <option>middle-center</option>
            <option>middle-right</option>
            <option>bottom-left</option>
            <option>bottom-center</option>
            <option>bottom-right</option>
        </select>

        <p>
          Selecteer een icoon
        </p>
        <select id="alertIcon">
            <option>Succes</option>
            <option>Error</option>
            <option>Warning</option>
        </select>

        <!-- Run JS function-->
        <button id="showAlert" onclick="showDemo()">Show Demo</button>
    </body>
    <script src="scripts/script.js"></script>
</html>
