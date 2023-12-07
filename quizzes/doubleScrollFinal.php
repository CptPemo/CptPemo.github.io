<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gleichzeitiges Scrollen</title>

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
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden; /* Verhindert den Body-Overflow */
    }

    #wrapper {
      display: flex;
      height: 100%;
      overflow: hidden;
    }

    #left-side, #right-side {
      flex: 1;
      overflow-y: auto; /* Zeigt die vertikale Scrollleiste auf der linken Seite an, wenn nötig */
      box-sizing: border-box;
      width: 50%;
    }

    #left-side::-webkit-scrollbar {
      width: 0 !important; /* Versteckt den Scrollbalken auf der linken Seite für Webkit-Browser */
    }

    #left-side {
      scrollbar-width: thin; /* Zeigt die vertikale Scrollleiste auf der linken Seite an, wenn nötig (für Firefox) */
      scrollbar-color: transparent transparent; /* Setzt die Scrollbar-Farbe auf transparent (für Firefox) */
    }

    #right-side {
      overflow-y: auto; /* Zeigt die vertikale Scrollleiste auf der rechten Seite an, wenn nötig */
    }

    #content {
      flex: 1;
      overflow-y: auto;
      padding: 10px; /* Beispielinhalt, der unter den beiden Seiten liegt */
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

            .pictureFrame{
                display: inline-block;
                width: 650px;
                position: relative;
                margin-left: 1%;
                padding-top: 0px;
                padding-bottom:0px;
            }
  </style>
</head>
<body>
<header class="header">
            <?php include '../header.html';?>           
</header>



      <div id="wrapper">
        <div id="left-side">
          <img class="quizPicture" src="../bilder/Os sacrum anterior.png" oncontextmenu="return false;">

          <div class="line" style="top: 120px; transform: translateX(150px) rotate(0deg); width: 350px;"></div>
          <div class="line" style="top: 120px; transform: translateX(140px) rotate(90deg); width: 20px;"></div>
          <div class="line" style="top: 120px; transform: translateX(490px) rotate(90deg); width: 20px;"></div>
          <div class="label" style="left: 315px; top: 80px;">1</div>

          <div class="line" style="top: 220px; transform: translateX(60px) rotate(0deg); width: 70px;"></div>
          <div class="line" style="top: 240px; transform: translateX(100px) rotate(-25deg); width: 90px;"></div>
          <div class="line" style="top: 230px; transform: translateX(180px) rotate(65deg); width: 20px;"></div>
          <div class="line" style="top: 268px; transform: translateX(98px) rotate(65deg); width: 20px;"></div>
          <div class="line" style="top: 231px; transform: translateX(123px) rotate(65deg); width: 25px;"></div>
          <div class="label" style="left: 40px; top: 200px;">2</div>

          <div class="line" style="top: 420px; transform: translateX(420px) rotate(90deg); width: 220px; "></div>
          <div class="line" style="top: 310px; transform: translateX(435px); width: 95px;"></div>
          <div class="line" style="top: 370px; transform: translateX(415px); width: 115px;"></div>
          <div class="line" style="top: 445px; transform: translateX(395px); width: 135px;"></div>
          <div class="line" style="top: 530px; transform: translateX(375px); width: 155px;"></div>
          <div class="line" style="top: 415px; transform: translateX(530px); width: 25px;"></div>
          <div class="label" style="left: 553px; top: 393px;">3</div>

          <div class="line" style="top: 170px; transform: translateX(420px) rotate(0deg); width: 150px;"></div>
          <div class="label" style="left: 570px; top: 150px;">4</div>

          <div class="line" style="top: 283px; transform: translateX(350px) rotate(0deg); width: 200px;"></div>
          <div class="label" style="left: 550px; top: 260px;">5</div>

          <div class="label" style="left: 480px; top: 200px;">6</div>

          <div class="line" style="top: 600px; transform: translateX(318px) rotate(0deg); width: 80px;"></div>
          <div class="label" style="left: 395px; top: 580px;">7</div>

          <div class="line" style="top: 372px; transform: translateX(125px) rotate(-35deg); width: 150px;"></div>
          <div class="line" style="top: 412px; transform: translateX(135px) rotate(-2deg); width: 175px;"></div>
          <div class="line" style="top: 442px; transform: translateX(180px) rotate(25deg); width: 135px;"></div>
          <div class="line" style="top: 475px; transform: translateX(120px)rotate(35deg); width: 210px;"></div>
          <div class="line" style="top: 415px; transform: translateX(100px); width: 40px;"></div>
          <div class="label" style="left: 80px; top: 393px;">8</div>

          <img class="quizPicture" src="../bilder/Os sacrum posterior.png" oncontextmenu="return false;">
        
          <div class="line" style="top: 1290px; transform: translateX(280px) rotate(90deg); width: 90px;"></div>
          <div class="label" style="left: 315px; top: 1330px;">9</div>

          <div class="line" style="top: 1300px; transform: translateX(240px) rotate(-50deg); width: 60px;"></div>
          <div class="label" style="left: 220px; top: 1315px;">10</div>

          <div class="line" style="top: 820px; transform: translateX(265px) rotate(-45deg); width: 40px;"></div>
          <div class="label" style="left: 300px; top: 770px;">4</div>

          <div class="line" style="top: 1070px; transform: translateX(460px) rotate(0deg); width: 60px;"></div>
          <div class="label" style="left: 520px; top: 1050px;">11</div>

          <div class="line" style="top: 1060px; transform: translateX(335px) rotate(0deg); width: 40px;"></div>
          <div class="label" style="left: 375px; top: 1040px;">12</div>

          <div class="line" style="top: 1140px; transform: translateX(150px) rotate(0deg); width: 100px;"></div>
          <div class="line" style="top: 1181px; transform: translateX(150px) rotate(45deg); width: 115px;"></div>
          <div class="line" style="top: 1102px; transform: translateX(150px) rotate(-50deg); width: 100px;"></div>
          <div class="label" style="left: 115px; top: 1120px;">13</div>

          <div class="line" style="top: 960px; transform: translateX(410px) rotate(0deg); width: 170px;"></div>
          <div class="label" style="left: 580px; top: 940px;">14</div>

          <div class="line" style="top: 1020px; transform: translateX(490px) rotate(0deg); width: 90px;"></div>
          <div class="label" style="left: 580px; top: 1000px;">15</div>

          <div class="line" style="top: 910px; transform: translateX(296px) rotate(90deg); width: 80px;"></div>
          <div class="label" style="left: 320px; top: 830px;">16</div>
        </div>


        <div id="right-side">
          <div class="answerTop">
            <div><h1 style="font-size: 40px; font-weight:400;">Os sacrum<h1></div>
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
                <div class="stop-message" style="display: none;">Das Spiel ist beendet.</div>
                <button class="button-stop" id="stopButton">Quiz beenden</button>
                <button class="button-stop" id="restartButton"> Quiz neustarten</button>
                
                <div class="gratulation"> Gratuliere </div>
        </div>
      </div>
<!-- 

<footer class="footer">
    <?php include '../footer.html'; ?>
</footer> -->

  <script>
    const leftSide = document.getElementById('left-side');
    const rightSide = document.getElementById('right-side');

    let isLeftScrolling = false;
    let isRightScrolling = false;

    leftSide.addEventListener('scroll', () => {
      if (!isRightScrolling) {
        isLeftScrolling = true;
        rightSide.scrollTop = leftSide.scrollTop;
      }
      isRightScrolling = false;
    });

    rightSide.addEventListener('scroll', () => {
      if (!isLeftScrolling) {
        isRightScrolling = true;
        leftSide.scrollTop = rightSide.scrollTop;
      }
      isLeftScrolling = false;
    });

    leftSide.addEventListener('wheel', (event) => {
      if (leftSide.scrollTop === 0 && event.deltaY < 0) {
        event.preventDefault();
        rightSide.scrollTop += event.deltaY;
      } else if (leftSide.scrollHeight - leftSide.scrollTop === leftSide.clientHeight && event.deltaY > 0) {
        event.preventDefault();
        rightSide.scrollTop += event.deltaY;
      }
    });

    rightSide.addEventListener('wheel', (event) => {
      if (rightSide.scrollTop === 0 && event.deltaY < 0) {
        event.preventDefault();
        leftSide.scrollTop += event.deltaY;
      } else if (rightSide.scrollHeight - rightSide.scrollTop === rightSide.clientHeight && event.deltaY > 0) {
        event.preventDefault();
        leftSide.scrollTop += event.deltaY;
      }
    });
  </script>
   <script src="../scripts/checkpopup.js"></script>
    <script src="../scripts/Ossacrum.js"></script>
</body>
</html>
