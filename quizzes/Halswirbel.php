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
                margin-left: 1%;
                padding-top: 75px;
            }

            .quizPicture{
                width: 100%;
            
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
                        <img class="quizPicture" src="../bilder/Halswirbel.png" oncontextmenu="return false;">
                        <div class="line" style="top: 490px; transform: translateX(286px) rotate(-90deg); width: 70px;"></div>
                        <div class="label" style="left: 310px; top: 520px;">1</div>
                        <div class="line" style="top: 250px; transform: translateX(360px) rotate(-55deg); width: 60px;"></div>
                        <div class="label" style="left: 405px; top: 190px;">2</div>
                        <div class="line" style="top: 378px; transform: translateX(380px)rotate(75deg); width: 45px;"></div>
                        <div class="label" style="left: 380px; top: 320px;">3</div>
                        <div class="line" style="top: 160px; transform: translateX(250px) rotate(15deg); width: 65px;"></div>
                        <div class="label" style="left: 225px; top: 125px;">4</div>
                        <div class="line" style="top: 440px; transform: translateX(76px) rotate(90deg); width: 30px;"></div>
                        <div class="line" style="top: 465px; transform: translateX(103px) rotate(-15deg); width: 50px;"></div>
                        <div class="label" style="left: 80px; top: 450px;">5</div>
                        <div class="label" style="left: 175px; top: 392px;">6</div>
                        <div class="line" style="top: 315px; transform: translateX(110px) rotate(90deg); width: 60px;"></div>
                        <div class="label" style="left: 130px; top: 250px;">7</div>
                        <div class="label" style="left: 310px; top: 320px;">8</div>
                        <div class="line" style="top: 465px; transform: translateX(437px) rotate(90deg); width: 35px;"></div>
                        <div class="label" style="left: 441px; top: 475px;">9</div>
                        <div class="line" style="top: 435px; transform: translateX(510px) rotate(90deg); width: 35px;"></div>
                        <div class="label" style="left: 510px; top: 445px;">10</div>
                        <div class="line" style="top: 450px; transform: translateX(474px) rotate(90deg); width: 35px;"></div>
                        <div class="label" style="left: 475px; top: 460px;">11</div>
                        <div class="line" style="top: 470px; transform: translateX(204px) rotate(-45deg); width: 55px;"></div>
                        <div class="label" style="left: 180px; top: 480px;">12</div>
                    </div>
                
                <div class="answerFrame">

                    <div class="answerTop">
                    <div><h1 style="font-size: 40px; font-weight:400;">Halswirbel<h1></div>
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
                        <div class="answer" id="11">
                            11.
                        </div>
                        <div class="answer" id="12">
                            12.
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
    <script src="../scripts/Halswirbel.js"></script>
    </body>
</html>