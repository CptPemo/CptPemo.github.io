<!DOCTYPE html>

<html>
    <head>
    <title>Anatomie Quiz für Fortgeschrittene | Advanced Anatomy</title>
<meta name="description" content="
    Lerne die menschliche Anatomie anhand von ästhetischen Zeichnungen und systematischen Skizzen. 
    Advanced Anatomy ist eine Plattform für Alle, die Expertenwissen in Anatomie erlangen wollen.">

    <meta name="keywords" content="Anatomie, Quiz, Bildung, lernen, Medizin, Studium, Universität, Lernplattform, Amboss, Kenhub, 3DAnatomy, Fortgeschritten, Testat, Hilfe, Klausur, ">

        <link rel="stylesheet" href="../styles/AdvAna.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/popup.css">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/quizGrid.css">
        <link rel="stylesheet" href="../styles/quiz.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="../bilder/favicon.png">
    <link rel="icon" type="image/png" href="../bilder/favicon1.png">
        <meta charset="UTF-8">

        <style>

            .pictureFrame{
                display: inline-block;
                width: 650px;
                position: relative;
                margin-left: 1%;
                padding-top: 110px;
                padding-left: 70px;
            }
  
  
            .quizPicture{
                width: 80%;
                
            }

            .label{
                position: absolute;
                font-size: 24px;
                font-weight: 600;
                padding: 5px;
                text-align: center;
            }

        </style>
    </head>

    <body>
        <header class="header">
            <?php include '../header.html';?>           
        </header>

        <main>
            <div class="quizFrame">
                
                    <div class="pictureFrame">
                        <img class="quizPicture" src="../bilder/Lendenwirbel.png" oncontextmenu="return false;">
                        <div class="label" style="left: 315px; top: 500px;">1</div>
                        <div class="line" style="top: 290px; transform: translateX(249px) rotate(90deg); width: 100px;"></div>
                        <div class="label" style="left: 360px; top: 200px;">2</div>
                        <div class="line" style="top: 397px; transform: translateX(335px); width: 55px;"></div>
                        <div class="label" style="left: 460px; top: 375px;">3</div>
                        <div class="line" style="top: 140px; transform: translateX(270px) rotate(0deg); width: 80px;"></div>
                        <div class="label" style="left: 425px; top: 115px;">4</div>
                        <div class="line" style="top: 285px; transform: translateX(469px) rotate(90deg); width: 42px;"></div>
                        <div class="label" style="left: 550px; top: 230px;">5</div>
                        <div class="line" style="top: 285px; transform: translateX(350px) rotate(-45deg); width: 50px;"></div>
                        <div class="label" style="left: 460px; top: 240px;">6</div>
                        <div class="line" style="top: 255px; transform: translateX(318px) rotate(90deg); width: 40px;"></div>
                        <div class="label" style="left: 400px; top: 200px;">7</div>
                        <div class="label" style="left: 315px; top: 380px;">8</div>
                        <div class="line" style="top: 300px; transform: translateX(95px) rotate(45deg); width: 70px;"></div>
                        <div class="label" style="left: 150px; top: 240px;">9</div>
                        <div class="line" style="top: 250px; transform: translateX(160px) rotate(90deg); width: 60px;"></div>
                        <div class="label" style="left: 244px; top: 185px;">10</div>
                    </div>
                
                <div class="answerFrame">
                    <div class="answerTop">
                    <div><h1 style="font-size: 40px; font-weight:400;">Lendenwirbel<h1></div>
                        <div class="timerTime" id="timer">Verbleibende Zeit: <span id="output"></span> Sekunden</div>
                        <div>
                            <input class="guess-bar" id="textInput" type="text" placeholder="Los geht's!">
                            <!-- <button onclick="checkWord()">Überprüfen</button> -->
                            <p id="result"></p>
                        </div>
                    </div>

                    <div class="answerBlock">


                        <div class="answer" id="1">
                            1.
                        </div>
                        <div class="answer" id="2">
                            2.
                        </div>
                        <div class="answer" id="3">
                            3.
                        </div>
                        <div class="answer" id="4">
                            4.
                        </div>
                        <div class="answer" id="5">
                            5.
                        </div>
                        <div class="answer" id="6">
                            6.
                        </div>
                        <div class="answer" id="7">
                            7.
                        </div>
                        <div class="answer" id="8">
                            8.
                        </div>
                        <div class="answer" id="9">
                            9.
                        </div>
                        <div class="answer" id="10">
                            10.
                        </div>
                        <div class="stop-message" style="display: none;">Das Spiel ist beendet.</div>
                        <button class="button-stop" id="stopButton">Quiz beenden</button>
                        <button class="button-stop" id="restartButton"> Quiz neustarten</button>
                        
                        <div class="gratulation"> Gratuliere </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include '../popup.html'; ?>

        <footer class="footer">
            <?php include '../footer.html'; ?>
        </footer> 
    <script src="../scripts/checkpopup.js"></script>
    <script src="../scripts/Lendenwirbel.js"></script>
    </body>
</html>