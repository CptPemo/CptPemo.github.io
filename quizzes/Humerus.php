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
                padding-top: 90px;
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

    </head>
    <body>
        <header class="header">
            <?php include '../header.html';?>           
        </header>

        <main>
            <div class="quizFrame">
                
                    <div class="pictureFrame">
                        <img class="quizPicture" src="../bilder/Humerus anterior.png" oncontextmenu="return false;">
                        <div class="line" style="top: 460px; transform: translateX(180px) rotate(-5deg); width: 60px;"></div>
                        <div class="label" style="left: 160px; top: 445px;">1</div>

                        <div class="line" style="top: 175px; transform: translateX(135px) rotate(0deg); width: 70px;"></div>
                        <div class="label" style="left: 110px; top: 155px;">2</div>

                        <div class="line" style="top: 340px; transform: translateX(188px) rotate(0deg); width: 55px;"></div>
                        <div class="label" style="left: 165px; top: 320px;">3</div>

                        <div class="line" style="top: 200px; transform: translateX(255px) rotate(5deg); width: 120px;"></div>
                        <div class="label" style="left: 375px; top: 180px;">4</div>

                        <div class="line" style="top: 250px; transform: translateX(295px) rotate(0deg); width: 50px;"></div>
                        <div class="label" style="left: 345px; top: 230px;">5</div>

                        <div class="label" style="left: 270px; top: 620px;">6</div>

                        <div class="line" style="top: 675px; transform: translateX(305px) rotate(-5deg); width: 120px;"></div>
                        <div class="label" style="left: 425px; top: 650px;">7</div>

                        <div class="label" style="left: 280px; top: 125px;">8</div>
                        <div class="label" style="left: 235px; top: 870px;">8</div>

                        <div class="line" style="top: 250px; transform: translateX(175px) rotate(0deg); width: 70px;"></div>
                        <div class="label" style="left: 150px; top: 230px;">9</div> 

                        <div class="line" style="top: 135px; transform: translateX(190px) rotate(60deg); width: 40px;"></div>
                        <div class="label" style="left: 170px; top: 90px;">10</div>

                        <div class="line" style="top: 675px; transform: translateX(100px) rotate(5deg); width: 120px;"></div>
                        <div class="label" style="left: 70px; top: 650px;">11</div>

                        <div class="label" style="left: 230px; top: 620px;">12</div>

                        <div class="line" style="top: 740px; transform: translateX(110px) rotate(-5deg); width: 90px;"></div>
                        <div class="label" style="left: 80px; top: 720px;">13</div>

                        <div class="line" style="top: 715px; transform: translateX(150px) rotate(15deg); width: 90px;"></div>
                        <div class="label" style="left: 115px; top: 680px;">14</div>

                        <div class="line" style="top: 750px; transform: translateX(340px); width: 40px;"></div>
                        <div class="label" style="left: 380px; top: 730px;">15</div>

                        <div class="line" style="top: 730px; transform: translateX(280px) rotate(-15deg); width: 80px;"></div>
                        <div class="label" style="left: 355px; top: 700px;">16</div>

                        <div class="line" style="top: 800px; transform: translateX(270px) rotate(90deg); width: 40px;"></div>
                        <div class="label" style="left: 270px; top: 810px;">17</div>

                        <div class="line" style="top: 795px; transform: translateX(200px) rotate(90deg); width: 40px;"></div>
                        <div class="label" style="left: 200px; top: 810px;">18</div>

                        <img class="quizPicture" src="../bilder/Humerus posterior.png">

                        <div class="line" style="top: 1180px; transform: translateX(290px) rotate(0deg); width: 70px;"></div>
                        <div class="label" style="left: 360px; top: 1160px;">19</div>

                        <div class="line" style="top: 1460px; transform: translateX(280px) rotate(-10deg); width: 100px;"></div>
                        <div class="label" style="left: 388px; top: 1430px;">20</div>

                    </div>
                


                <div class="answerFrame">

                    <div class="answerTop">
                    <div><h1 style="font-size: 40px; font-weight:400;">Humerus<h1></div>
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
                        <div class="answer" id="14">
                            14.
                        </div>
                        <div class="answer" id="15">
                            15.
                        </div>
                        <div class="answer" id="16">
                            16.
                        </div>
                        <div class="answer" id="17">
                            17.
                        </div>
                        <div class="answer" id="18">
                            18.
                        </div>
                        <div class="answer" id="19">
                            19.
                        </div>
                        <div class="answer" id="20">
                            20.
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
    <script src="../scripts/Humerus.js"></script>
    </body>
</html>