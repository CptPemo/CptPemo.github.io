<!DOCTYPE html>

<html>
    <head>
        <title>Advanced Anatomy</title>
        <link rel="stylesheet" href="../styles/AdvAna.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/quizGrid.css">
        <link rel="stylesheet" href="../styles/Atlas.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">
        <meta charset="UTF-8">

    </head>

    <body>
        <header class="header">
            <?php include '../header.html';?>           
        </header>

        <main>
            <div class="quizFrame">
                
                    <div class="pictureFrame">
                        <img class="quizPicture" src="../bilder/Atlas.png">
                        <div class="label" style="left: 370px; top: 450px;">1</div>
                        <div class="label" style="left: 410px; top: 255px;">2</div>
                        <div class="line" style="top: 550px; transform: translateX(305px)rotate(90deg); width: 45px;"></div>
                        <div class="label" style="left: 315px; top: 570px;">3</div>
                        <div class="line" style="top: 197px; transform: translateX(285px) rotate(25deg); width: 45px;"></div>
                        <div class="label" style="left: 260px; top: 160px;">4</div>
                        <div class="line" style="top: 424px; transform: translateX(47px) rotate(90deg); width: 60px;"></div>
                        <div class="label" style="left: 65px; top: 450px;">5</div>
                        <div class="label" style="left: 94px; top: 355px;">6</div>
                        <div class="line" style="top: 315px; transform: translateX(120px) rotate(75deg); width: 60px;"></div>
                        <div class="label" style="left: 130px; top: 250px;">7</div>
                        <div class="label" style="left: 315px; top: 300px;">8</div>
                        <div class="line" style="top: 390px; transform: translateX(337px) rotate(25deg); width: 65px;"></div>
                        <div class="line" style="top: 390px; transform: translateX(250px) rotate(-25deg); width: 65px;"></div>
                        <div class="label" style="left: 315px; top: 350px;">9</div>
                        <div class="line" style="top: 455px; transform: translateX(310px) rotate(90deg); width: 35px;"></div>
                        <div class="label" style="left: 310px; top: 405px;">10</div>
                        <div class="line" style="top: 300px; transform: translateX(464px) rotate(-35deg); width: 35px;"></div>
                        <div class="label" style="left: 495px; top: 260px;">11</div>
                    </div>
                
                <div class="answerFrame">

                    <div class="answerTop">
                        <div style="font-size: 40px">Atlas</div>
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
                        <div class="stop-message" style="display: none;">Das Spiel ist beendet.</div>
                        <button class="button-stop" id="stopButton">Quiz beenden</button>
                        <button class="button-stop" id="restartButton"> Quiz neustarten</button>
                        
                        <div class="gratulation"> Gratuliere </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
            <?php include '../footer.html'; ?>
        </footer>  
    
    <script src="../scripts/Atlas.js"></script>
    </body>
</html>