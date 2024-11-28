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
    <main class="aboutMeMain">  
            <div class="home">
                <article class="left">
                    <div class="infoHolder">
                        <h1>Welkom,<br>Ik ben Stan Verbeek</h1>
                        <h2>Software Developer<br>Allround IT'er</h2>
                        <div class="socialsHolder">
                            <img onclick="sendToLinkedIn()" src="../images/linkedin.png">
                            <img onclick="sendToGithub()" src="../images/github.png">
                        </div>
                    </div>
                </article>
                <article class="right">
                    <img id="pictureStan" src="../images/stan.jpg">
                </article>
            </div>
            <section>
                <h1 id="aboutMeScroll">
                    Over mij
                </h1>
                <p class="aboutMeInfo">
                Welkom op mijn portfoliowebsite! Mijn naam is Stan Verbeek, een gepassioneerde 20-jarige student met een afgeronde opleiding als Allround Medewerker Systems en Devices. Momenteel bevind ik me in mijn tweede jaar van de opleiding Software Development. Mijn enthousiasme voor technologie en mijn streven naar innovatie motiveren me om constant te groeien en mijn vaardigheden te verbeteren
                </p>
            </section>
            <section>
                <h2 class="headH2">
                    Mijn ervaringen
                </h2> 
                <div id="experienceWrapper">
                    <div class="experienceSides">
                        <div class="headerBox">
                            <h3>Opleidingen</h3>
                        </div>
                        <div class="experienceBox">
                            <div class="experienceBoxHead">
                                <span class="experienceDate">08-2022 | Heden</span>
                            </div>
                            <div class="experienceTitle">
                                <h3>MBO 4 - Software Developer</h3>
                            </div>
                            <div class="experienceContent">
                                <p>Koning Willem 1 College - Afdeling ICT Acedemie in Den Bosch</p>
                            </div>
                        </div>
                        <div class="experienceBox lastExperienceBox">
                            <div class="experienceBoxHead">
                                <span class="experienceDate">08-2020 | 07-2022</span>
                            </div>
                            <div class="experienceTitle">
                                <h3>MBO 3 - Allround Medewerker IT Systems and Devices</h3>
                            </div>
                            <div class="experienceContent">
                                <p>Koning Willem 1 College - Afdeling ICT Acedemie in Den Bosch</p>
                            </div>
                        </div>
                    </div>
                    <div class="experienceSides">
                        <div class="headerBox">
                            <h3>Ervaringen</h3>
                        </div>
                        <div class="experienceBox">
                            <div class="experienceBoxHead">
                                <span class="experienceDate">08-2023 | Heden</span>
                            </div>
                            <div class="experienceTitle">
                                <h3>Software Developer - Padgin</h3>
                            </div>
                            <div class="experienceContent">
                                <p>Padgin te Geldermalsen - Stagair <br> Opleiding Software Developer</p>
                            </div>
                        </div>
                        <div class="experienceBox lastExperienceBox">
                            <div class="experienceBoxHead">
                                <span class="experienceDate">08-2021 | 02-2022</span>
                            </div>
                            <div class="experienceTitle">
                                <h3>IT beheer - F1 Computers Culemborg</h3>
                            </div>
                            <div class="experienceContent">
                                <p>F1 Computers - Stagair <br> Opleiding Allround Medewerker IT </p>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="headH2">
                    Statistieken
                </h2> 
                <div id=skillWrapper>
                    <div class="skillSides">
                        <div class="headerBox">
                            <h3>Coding skills</h3>
                        </div>
                        <div class="skillBox">
                            <div class="skillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType">HTML</span>
                                    <span class="skillLevel">82%</span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel HTMLLevel">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType">CSS</span>
                                    <span class="skillLevel">88%</span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel CSSLevel">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType">JavaScript</span>
                                    <span class="skillLevel">92%</span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel jsLevel">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType">SQL</span>
                                    <span class="skillLevel">40%</span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel sqlLevel">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType">PHP</span>
                                    <span class="skillLevel">92%</span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel phpLevel">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a id="quizText" href="https://www.w3schools.com/quiztest/" target="_blank">W3schools quiz resultaten</a>
                    </div>
                    <div class="skillSides">
                        <div class="headerBox">
                            <h3>Timeline</h3>
                        </div>
                        <div class="skillBox">
                            <div class="skillRow timelineSkillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType">ICT Beheer</span>
                                    <span class="skillLevel ICTPercentage">0%</span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel">
                                        <div id="ICTLevel"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skillRow timelineSkillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType SD">Software Developer</span>
                                    <span class="skillLevel SDPercentage">0%</span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel">
                                        <div id="SDLevel"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skillRow timelineSkillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType Year"></span>
                                    <span class="skillLevel yearPercentage"></span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel">
                                        <div id="yearLevel"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skillRow timelineSkillRow">
                                <div class="skillLevelWrapper">
                                    <span class="skillType">School (8 uur per dag)</span>
                                    <span class="skillLevel">33%</span>
                                </div>
                                <div class="skillIndicator">
                                    <div class="skillIndicatorLevel sqlLevel">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php 
        include "../includes/htmlFooter.php";
    ?>
</body>
</html>

