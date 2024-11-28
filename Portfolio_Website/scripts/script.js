// Defining baseURL
let slashPosition = window.location.href.lastIndexOf("/");
let formattedURL = window.location.href.substring(0, slashPosition + 1); // +1 om de slash zelf op te nemen
let baseURL = formattedURL;

// Link functions
function sendToLinkedIn() {
    window.location.href = "https://www.linkedin.com/in/stan-verbeek-076b22273/";
}
function sendToGithub() {
    window.location.href = "https://github.com/StanVerbeek04/MyProjects";
}
function goToHome() {
    window.location.href = baseURL += "aboutMe.php"
}
document.addEventListener("DOMContentLoaded", function() {
    // Functies uitvoeren als de pagina volledig is geladen
    loadITPercentage();
    loadSDPercentage();
    LoadYearPercentage();
});

function myFunction() {
    console.log("DOM is geladen en klaar!");
    // Plaats hier je code
}

// Load IT function
function loadITPercentage() {
    // Defining dates
    let ITstartDate = new Date("2020-08-01");
    let ITendDate = new Date("2022-07-1");
    let ITpercentage = calculatePercentage(ITstartDate, ITendDate);
    document.querySelector(".ICTPercentage").textContent = ITpercentage.toFixed(0)+"%";
    document.querySelector("#ICTLevel").style.width = ITpercentage+"%";
}

// Load SD function
function loadSDPercentage() {
    // Defining dates
    let SDstartDate = new Date("2022-08-01");
    let SDendDate = new Date("2025-02-3");
    let SDpercentage = calculatePercentage(SDstartDate, SDendDate);
    document.querySelector(".SDPercentage").textContent = SDpercentage.toFixed(0)+"%";
    document.querySelector("#SDLevel").style.width = SDpercentage+"%";
}
// Load Year function
function LoadYearPercentage() {
    const y = new Date();
    let year = y.getFullYear();
    let nextYear = year+1;
    let YearStartDate = new Date(year+"-01-01");
    let YearEndDate = new Date(nextYear+"-01-1");
    let YearPercentage = calculatePercentage(YearStartDate, YearEndDate);
    document.querySelector(".Year").textContent = year;
    document.querySelector(".yearPercentage").textContent = YearPercentage.toFixed(0)+"%";
    document.querySelector("#yearLevel").style.width = YearPercentage+"%";
}

// Percentage calc function
function calculatePercentage(startDate, endDate) {
    const currentDate = new Date();
    const timeDifferenceInMS = endDate - startDate;
    const currentDifferenceInMS = currentDate - startDate;
    const completionPercentage = (currentDifferenceInMS / timeDifferenceInMS) * 100;
    const roundedPercentage = Math.min(100, completionPercentage);
    return roundedPercentage;
}

// Hamburger menu functions
function openNav() {
    document.getElementById("mySidepanel").style.width = "100%";
}
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}
