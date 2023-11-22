<!DOCTYPE html>

<html>
    <head>
        <title>Advanced Anatomy</title>
        <link rel="stylesheet" href="../styles/AdvAna.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/quizGrid.css">
        <link rel="stylesheet" href="../styles/quiz.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="bilder/favicon.png">
        <link rel="icon" type="image/png" href="bilder/favicon1.png">
        <meta charset="UTF-8">
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MD769R1DSS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MD769R1DSS');
</script>

    </head>

    <body>
        <header class="header">
            <?php include '../header.html';?>           
        </header>

        <main>
            <div class="quizFrame">
                    <div class="pictureFrame">
                        <img class="quizPicture" src="../bilder/Brustwirbel.png">
                        <div class="line" style="top: 540px; transform: translateX(296px) rotate(-90deg); width: 70px;"></div>
                        <div class="label" style="left: 320px; top: 570px;">1</div>
                        <div class="line" style="top: 250px; transform: translateX(360px) rotate(-55deg); width: 60px;"></div>
                        <div class="label" style="left: 405px; top: 190px;">2</div>
                        <div class="line" style="top: 342px; transform: translateX(410px); width: 90px;"></div>
                        <div class="label" style="left: 500px; top: 320px;">3</div>
                        <div class="line" style="top: 140px; transform: translateX(250px) rotate(15deg); width: 80px;"></div>
                        <div class="label" style="left: 225px; top: 105px;">4</div>
                        <div class="line" style="top: 225px; transform: translateX(156px) rotate(90deg); width: 70px;"></div>
                        <div class="label" style="left: 180px; top: 150px;">5</div>
                        <div class="line" style="top: 379px; transform: translateX(165px) rotate(0deg); width: 70px;"></div>
                        <div class="label" style="left: 140px; top: 360px;">6</div>
                        <div class="line" style="top: 265px; transform: translateX(72px) rotate(90deg); width: 80px;"></div>
                        <div class="label" style="left: 100px; top: 300px;">7</div>
                        <div class="label" style="left: 315px; top: 320px;">8</div>
                        <div class="line" style="top: 307px; transform: translateX(165px) rotate(0deg); width: 70px;"></div>
                        <div class="label" style="left: 140px; top: 285px;">9</div>
                    </div>
                
                <div class="answerFrame">

                    <div class="answerTop">
                        <div style="font-size: 40px">Brustwirbel</div>
                        <div class="timerTime" id="timer">Verbleibende Zeit: <span id="output"></span> Sekunden</div>

                        <div>
                            <input class="guess-bar" id="textInput" type="text" placeholder="Los geht's!">
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

        <footer class="footer">
            <?php include '../footer.html'; ?>
        </footer> 
    
    <script src="../scripts/Brustwirbel.js"></script>
    </body>
</html>