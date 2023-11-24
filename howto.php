<!DOCTYPE html>

<html>
    <head>
          
    <title>Anatomie Quiz für Fortgeschrittene | Advanced Anatomy</title>
    <link rel="stylesheet" href="styles/AdvAna.css">
    <link rel="stylesheet" href="styles/popup.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/quizGrid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="bilder/favicon.png">
    <link rel="icon" type="image/png" href="bilder/favicon1.png">
    <meta charset="UTF-8">

    <meta name="description" content="
    Lerne die menschliche Anatomie anhand von ästhetischen Zeichnungen und systematischen Skizzen. 
    Advanced Anatomy ist eine Plattform für Alle, die Expertenwissen in Anatomie erlangen wollen.">

    <meta name="keywords" content="Anatomie, Quiz, Bildung, lernen, Medizin, Studium, Universität, Lernplattform, Amboss, Kenhub, 3DAnatomy, Fortgeschritten, Testat, Hilfe, Klausur, ">

    </head>
    <body>
        <header class="header">

            <?php include 'header.html';?>           

        </header>
   
        <main style="height:550px;" >
            <h1 style="margin-top:150px; font-family:raleway; font-weight: 400; text-align: center;">Wie spielt man?</h1>
            <h2 style="font-family:raleway; font-weight: 400; text-align: center;">Rapid-Mode</h2>
            <p style="text-align: center; line-height:25px;">

            Im rechten oberen Bereich des Bildschirms befindet sich das Eingabefeld mit der Aufschrift 'Los geht's!'. 
            </br>
            Hier gibst du einfach die anatomischen Begriffe ein, die dir zu den markierten Stellen einfallen. 
            </br>
            Wenn du einen Begriff richtig errätst, erscheint er in der Liste unter dem Eingabefeld. 
            </br>
            Außerdem wird die zugehörige Zahl auf der linken Seite kleiner, sodass du weißt, dass du diesen bereits richtig erraten hast. 
            </br>
            Für jede markierte Stelle stehen dir 20 Sekunden zur Verfügung.
            </br>
            Ist die Zeit vorbei, bevor du alle Begriffe erraten hast, werden die fehlenden Begriffe rot markiert. 
            </br>
            Du kannst das Quiz unten neu starten oder auf der <a style="font-weight:600;" href="../AdvAna.php">Hauptseite</a> eine neue Herausforderung suchen! 
            </p>
            <h2 style="font-family:raleway; font-weight: 400; text-align: center;">Weitere Modi werden bald folgen!</h2>
            
        </main>  

        <?php include 'popup.html'; ?>

        <footer class="footer">
        <?php include 'footer.html'; ?>
        </footer>
        <script src="../scripts/checkpopup.js"></script>
        <script src="../scripts/Search.js"></script>
    </body>
</html> 