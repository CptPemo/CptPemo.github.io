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
        <link rel="stylesheet" href="../styles/popup.css">
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
                padding-top: 140px;
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
                        <img class="quizPicture" src="../bilder/Axis kranial.png" oncontextmenu="return false;">
                        <div class="label" style="left: 390px; top: 220px;">1</div>
                        <div class="label" style="left: 510px; top: 885px;">1</div>
                        <div class="line" style="top: 240px; transform: translateX(335px)rotate(0deg); width: 50px;"></div>
                        <div class="label" style="left: 415px; top: 250px;">2</div>
                        <div class="line" style="top: 290px; transform: translateX(370px)rotate(-35deg); width: 50px;"></div>
                        <div class="label" style="left: 500px; top: 335px;">3</div>
                        <div class="line" style="top: 358px; transform: translateX(448px)rotate(0deg); width: 50px;"></div>
                        <div class="label" style="left: 500px; top: 368px;">4</div>
                        <div class="line" style="top: 391px; transform: translateX(410px)rotate(0deg); width: 88px;"></div>
                        <div class="label" style="left: 500px; top: 450px;">5</div>
                        <div class="line" style="top: 473px; transform: translateX(423px)rotate(0deg); width: 75px;"></div>
                        <div class="label" style="left: 310px; top: 485px;">6</div>
                        <div class="label" style="left: 310px; top: 340px;">7</div>
                        <img class="quizPicture" src="../bilder/Axis lateral.png">
                        <div class="label" style="left: 280px; top: 681px;">8</div>
                        <div class="line" style="top: 700px; transform: translateX(232px)rotate(0deg); width: 45px;"></div>
                        <div class="label" style="left: 140px; top: 735px;">9</div>
                        <div class="line" style="top: 755px; transform: translateX(167px)rotate(0deg); width: 27px;"></div>
                        <div class="label" style="left: 280px; top: 770px;">10</div>
                        <div class="line" style="top: 790px; transform: translateX(253px)rotate(0deg); width: 25px;"></div>
                        <div class="label" style="left: 130px; top: 930px;">11</div>
                        <div class="line" style="top: 950px; transform: translateX(167px)rotate(0deg); width: 40px;"></div>
                        <div class="label" style="left: 245px; top: 1000px;">12</div>
                        <div class="line" style="top: 985px; transform: translateX(243px)rotate(90deg); width: 40px;"></div>
                        <div class="label" style="left: 300px; top: 985px;">13</div>
                        <div class="line" style="top: 950px; transform: translateX(260px)rotate(70deg); width: 80px;"></div>
                        
                    </div>
                
                <div class="answerFrame">

                    <div class="answerTop">
                    <div><h1 style="font-size: 40px; font-weight:400;">Axis<h1></div>
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
                        <div class="answer" id="13">
                            13.
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
    <script src="../scripts/Axis.js"></script>
    </body>
</html>