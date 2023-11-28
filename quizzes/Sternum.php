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
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/popup.css">
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
                padding-left: 70px;
                padding-top: 7px;
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
                        <img class="quizPicture" src="../bilder/Sternum 1.png" alt="Sternum, Brustbein, Brustkorb, Brust" oncontextmenu="return false;">
                        <div class="label" style="left: 315px; top: 160px;">1</div>
                        <div class="label" style="left: 318px; top: 420px;">2</div>
                        <div class="line" style="top: 668px; transform: translateX(275px) rotate(0deg); width: 60px;"></div>
                        <div class="label" style="left: 405px; top: 645px;">3</div>
                        <div class="line" style="top: 285px; transform: translateX(270px); width: 60px;"></div>
                        <div class="label" style="left: 400px; top: 260px;">4</div>
                        <div class="line" style="top: 115px; transform: translateX(250px) rotate(0deg); width: 100px;"></div>
                        <div class="label" style="left: 425px; top: 93px;">5</div>
                        <div class="line" style="top: 130px; transform: translateX(135px) rotate(0deg); width: 45px;"></div>
                        <div class="label" style="left: 180px; top: 110px;">6</div>
                        <div class="line" style="top: 399px; transform: translateX(140px) rotate(-25deg); width: 70px;"></div>
                        <div class="line" style="top: 450px; transform: translateX(140px) rotate(30deg); width: 70px;"></div>
                        <div class="label" style="left: 190px; top: 400px;">7</div>
                    </div>
                
                <div class="answerFrame">

                    <div class="answerTop">
                    <div><h1 style="font-size: 40px; font-weight:400;">Sternum<h1></div>
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
    <script src="../scripts/Sternum.js"></script>
    </body>
</html>