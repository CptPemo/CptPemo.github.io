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
            }


            .quizPicture{
                width: 70%;
                padding-left: 65px;
                padding-top: 100px;
            }

            .quizPicture2{
                width: 70%;
                padding-left: 55px;
                padding-top: 70px;
            }

            .label{
                position: absolute;
                font-size: 22px;
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
                        <img class="quizPicture" src="../bilder/Scapula dorsal.png" oncontextmenu="return false;">
                        
                        <div class="label" style="left: 100px; top: 400px;">1</div>

                        <div class="label" style="left: 325px; top: 450px;">2</div>

                        <div class="label" style="left: 220px; top: 170px;">3</div>

                        <div class="label" style="left: 115px; top: 165px;">4</div>

                        <div class="label" style="left: 139px; top: 625px;">5</div>

                        <div class="line" style="top: 289px; transform: translateX(400px) rotate(0deg); width: 40px;"></div>
                        <div class="label" style="left: 440px; top: 270px;">6</div>

                        <div class="label" style="left: 260px; top: 260px;">7</div>

                        <div class="label" style="left: 200px; top: 230px;">8</div>

                        <div class="label" style="left: 200px; top: 375px;">9</div> 

                        <div class="label" style="left: 435px; top: 155px;">10</div>
                        <div class="label" style="left: 200px; top: 840px;">10</div>

                        <div class="line" style="top: 146px; transform: translateX(398px) rotate(40deg); width: 30px;"></div>
                        <div class="label" style="left: 370px; top: 105px;">11</div>

                        <div class="line" style="top: 259px; transform: translateX(430px) rotate(0deg); width: 40px;"></div>
                        <div class="label" style="left: 470px; top: 240px;">12</div>

                        <img class="quizPicture2" src="../bilder/Scapula lateral.png">

                        <div class="label" style="left: 303px; top: 205px;">13</div>

                        <div class="line" style="top: 170px; transform: translateX(325px) rotate(90deg); width: 40px;"></div>
                        <div class="label" style="left: 330px; top: 115px;">14</div>

                        <div class="line" style="top: 342px; transform: translateX(365px) rotate(90deg); width: 40px;"></div>
                        <div class="label" style="left: 370px; top: 360px;">15</div>

                        <div class="label" style="left: 290px; top: 970px;">16</div>

                        <div class="line" style="top: 920px; transform: translateX(340px) rotate(30deg); width: 50px;"></div>
                        <div class="label" style="left: 390px; top: 920px;">17</div>

                        <div class="line" style="top: 1095px; transform: translateX(290px) rotate(0deg); width: 90px;"></div>
                        <div class="label" style="left: 380px; top: 1075px;">18</div>

                    </div>
                


                <div class="answerFrame">

                    <div class="answerTop">
                    <div><h1 style="font-size: 40px; font-weight:400;">Scapula<h1></div>
                        <div class="timerTime" id="timer">Verbleibende Zeit: 200 Sekunden</div>
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
    <script src="../scripts/Scapula.js"></script>
    </body>
</html>