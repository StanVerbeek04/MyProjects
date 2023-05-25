/* 
    Auteur:         Stan Verbeek
    Aanmaakdatum:   28-2-2023

    Script Tandarts Den Bosch
*/
// Functie om antwoorden te berekenen van de enquete
function displayAntwoorden()
{
    // vars aanmaken
    var isBeantwoord = 0;
    var aantalPunten = 0;
    var aantalVragen = 22;

    // For om te checken bij welke vraag je bent
    for (var index = 1; index < aantalVragen; index++)
    {
        // If om te checken of kijken of de huidige vraag gechecked is
        if(document.getElementById("antw" + index).checked)
        {
            // tellen hoeveel vragen zijn beantwoord
            isBeantwoord++;

            // huidig antwoord value opslaan in var
            var antwoord = document.getElementById("antw" + index).value;

            // Checken of antwoord + of - is
            if(antwoord.charAt(0) == "-")
            {
                // eerste min overslaan
                aantalPunten -= parseInt(antwoord.substring(1,3));
            }
            else
            {
                aantalPunten += parseInt(antwoord);
            }
        }
    }
    // Resultaat in p zetten
    var resultaat = document.getElementById("uitkomstEnquete");

    // checken of alle 9 vragen zijn beantwoord
    if(isBeantwoord == 9)
    {
        // juiste advies geven op basis van de punten
        if(aantalPunten > 80)
        {
            resultaat.innerHTML = "U verzorgd uw gebid uitstekend!";

            // Vragen verbergen
            document.getElementById("vragenLijst").style.display = "none";
            document.getElementById("afbeeldingResultaat").style.display = "inline";
        }
        else if(aantalPunten > 60)
        {
            resultaat.innerHTML = "U verzorgd uw gebig goed, maar op sommige gebieden kan het verbeterd worden"

            // Vragen verbergen
            document.getElementById("vragenLijst").style.display = "none";
            document.getElementById("afbeeldingResultaat").style.display = "inline";
        }
        else if(aantalPunten > 20)
        {
            resultaat.innerHTML = "De verzorging van uw gebit is matig, wij raden aan op een controle te gaan bij de tandarts"

            // Vragen verbergen
            document.getElementById("vragenLijst").style.display = "none";
            document.getElementById("afbeeldingResultaat").style.display = "inline";
        }
        else if(aantalPunten < 20)
        {
            resultaat.innerHTML = "U verzorgd uw gebid niet, wij raden aan onmiddelijk een afspraak te maken bij de tandarts"

            // Vragen verbergen
            document.getElementById("vragenLijst").style.display = "none";
            document.getElementById("afbeeldingResultaat").style.display = "inline";
        }
    }
    else
    {
        // Error als niet alle 9 vragen zijn ingevulde
        resultaat.innerHTML = "Vul alle vragen in!";
        setTimeout(() => {
            resultaat.innerHTML = "";
        }, 2000);
    }
}

