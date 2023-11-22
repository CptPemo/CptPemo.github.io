<!DOCTYPE html>

<html>
    <head>
        <title>Advanced Anatomy</title>
        <link rel="stylesheet" href="../styles/AdvAna.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/quizGrid.css">
        <link rel="stylesheet" href="../styles/Tibia.css">
        <!--<link rel="stylesheet" href="../styles/quiz.css">-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">
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

    </head>
    <body>
        <header class="header">
            <?php include '../header.html';?>           
        </header>

        <main>
            <div class="quizFrame">
                
                    <div class="pictureFrame">
                        <img class="quizPicture" src="../bilder/Tibia anterior.png">

                        <div class="label" style="left: 400px; top: 450px;">1</div>

                        <div class="line" style="top: 175px; transform: translateX(360px) rotate(0deg); width: 40px;"></div>
                        <div class="label" style="left: 400px; top: 155px;">2</div>

                        <div class="line" style="top: 175px; transform: translateX(220px) rotate(0deg); width: 40px;"></div>
                        <div class="label" style="left: 200px; top: 155px;">3</div>

                        <div class="line" style="top: 110px; transform: translateX(333px) rotate(10deg); width: 40px;"></div>
                        <div class="line" style="top: 110px; transform: translateX(270px) rotate(-10deg); width: 40px;"></div>
                        <div class="label" style="left: 310px; top: 85px;">4</div>

                        <div class="line" style="top: 130px; transform: translateX(325px) rotate(-25deg); width: 50px;"></div>
                        <div class="label" style="left: 370px; top: 95px;">5</div>

                        <div class="line" style="top: 130px; transform: translateX(270px) rotate(25deg); width: 40px;"></div>
                        <div class="label" style="left: 250px; top: 99px;">6</div>

                        <div class="label" style="left: 305px; top: 135px;">7</div>

                        <div class="label" style="left: 300px; top: 840px;">8</div>

                        <div class="line" style="top: 903px; transform: translateX(360px) rotate(0deg); width: 30px;"></div>
                        <div class="label" style="left: 390px; top: 883px;">9</div> 

                        <div class="line" style="top: 408px; transform: translateX(255px) rotate(0deg); width: 67px;"></div>
                        <div class="label" style="left: 220px; top: 390px;">10</div>

                        <div class="label" style="left: 295px; top: 237px;">11</div>

                        <div class="line" style="top: 343px; transform: translateX(335px) rotate(0deg); width: 35px;"></div>
                        <div class="label" style="left: 370px; top: 325px;">12</div>

                        <img class="quizPicturePost" src="../bilder/Tibia posterior.png">

                        <div class="label" style="left: 288px; top: 325px;">13</div>

                        <div class="line" style="top: 745px; transform: translateX(358px) rotate(0deg); width: 40px;"></div>
                        <div class="label" style="left: 399px; top: 725px;">14</div>

                        <div class="line" style="top: 1235px; transform: translateX(315px) rotate(10deg); width: 60px;"></div>
                        <div class="line" style="top: 1245px; transform: translateX(315px) rotate(-10deg); width: 60px;"></div>
                        <div class="label" style="left: 375px; top: 1220px;">15</div>

                        <div class="label" style="left: 275px; top: 1100px;">16</div>

                        <div class="line" style="top: 1237px; transform: translateX(252px) rotate(0deg); width: 25px;"></div>
                        <div class="label" style="left: 220px; top: 1220px;">17</div>

                        <div class="line" style="top: 1015px; transform: translateX(250px) rotate(-30deg); width: 60px;"></div>
                        <div class="label" style="left: 220px; top: 1015px;">18</div>

                        <div class="line" style="top: 1045px; transform: translateX(320px) rotate(0deg); width: 60px;"></div>
                        <div class="label" style="left: 380px; top: 1025px;">19</div>

                        <div class="line" style="top: 1430px; transform: translateX(240px) rotate(30deg); width: 55px;"></div>
                        <div class="label" style="left: 205px; top: 1390px;">20</div>

                        <div class="line" style="top: 1470px; transform: translateX(330px) rotate(40deg); width: 60px;"></div>
                        <div class="label" style="left: 380px; top: 1480px;">21</div>

                        

                    </div>
                


                <div class="answerFrame">

                    <div class="answerTop">
                        <div style="font-size: 40px">Tibia</div>
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
                        <div class="answer" id="21">
                            21.
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
    
    <script src="../scripts/Tibia.js"></script>
    </body>
</html>