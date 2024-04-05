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
                font-size: 20px;
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
                        <img class="quizPicture" src="../bilder/SchaedelbasisInnen.png" oncontextmenu="return false;">
                        <div class="label" style="left: 280px; top: 120px;">1</div>
                        <div class="label" style="left: 380px; top: 135px;">2</div>
                        <div class="line" style="top: 225px; transform: translateX(585px)rotate(105deg); width: 50px;"></div>
                        <div class="label" style="left: 440px; top: 155px;">3</div>
                        <div class="label" style="left: 230px; top: 160px;">4</div>
                        <div class="label" style="left: 440px; top: 310px;">5</div>
                        <div class="label" style="left: 210px; top: 310px;">5</div>
                        <div class="label" style="left: 265px; top: 370px;">6</div>
                        <div class="line" style="top: 513px; transform: translateX(580px) rotate(75deg); width: 60px;"></div>
                        <div class="label" style="left: 20px; top: 380px;">7</div>
                        <div class="label" style="left: 15px; top: 420px;">8</div>
                        <div class="label" style="left: 8px; top: 475px;">9</div>
                        <div class="label" style="left: 0px; top: 560px;">10</div>
                        <div class="label" style="left: 325px; top: 430px;">11</div>
                        <div class="label" style="left: 325px; top: 465px;">12</div>
                        <div class="label" style="left: 320px; top: 540px;">13</div>
                        <div class="label" style="left: 520px; top: 560px;">14</div>
                        <div class="label" style="left: 127px; top: 565px;">15</div>
                        <div class="label" style="left: 150px; top: 578px;">16</div>
                        <div class="label" style="left: 630px; top: 730px;">17</div>
                        <div class="label" style="left: 615px; top: 760px;">18</div>
                        <div class="label" style="left: 315px; top: 675px;">19</div>
                        <div class="label" style="left: 200px; top: 690px;">20</div>
                        <div class="label" style="left: 500px; top: 730px;">21</div>
                        <div class="label" style="left: 420px; top: 780px;">22</div>
                        <div class="label" style="left: 210px; top: 780px;">23</div>
                        <div class="label" style="left: 310px; top: 770px;">24</div>
                        <div class="label" style="left: 312px; top: 852px;">25</div>
                    </div>
                
                <div class="answerFrame">

                    <div class="answerTop">
                    <div><h1 style="font-size: 40px; font-weight:400;">Schädelbasis Innen<h1></div>
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
                        <div class="stop-message" style="display: none;">Das Spiel ist beendet, du hast <span id="green-count-value">0</span> von 7 Punkten erreicht.</div>
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
    <script src="../scripts/Clavicula.js"></script>
    </body>
</html>