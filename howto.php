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
   
        <main>
            <h1 style="margin-top:120px; font-family:raleway; font-weight: 400; text-align: center;">Wie spielt man?</h1>
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
            Für jeden Begriff stehen dir 20 Sekunden zur Verfügung.
            </br>
            Ist die Zeit vorbei, bevor du alle Begriffe erraten hast, werden die fehlenden Begriffe in rot eingeblendet. 
            </br>
            Du kannst das Quiz unten neu starten oder auf der <a style="font-weight:600;" href="../AdvAna.php">Hauptseite</a> eine neue Herausforderung suchen! 
            </p>
</br>

            <h2 style="font-family:raleway; font-weight: 400; text-align: center;">Precision-Mode</h2>
            <p style="text-align: center; line-height:25px;">

            Im rechten oberen Bereich des Bildschirms befindet sich das Eingabefeld mit der Aufschrift 'Los geht's!'. 
            </br>
            Hier gibst du einfach den anatomischen Begriff ein, der auf der linken Seite dick markiert ist. 
            </br>
            Es geht bei eins los und springt dann automatisch weiter zur nächsten Zahl wenn du den Begriff richtig eingegeben hast.
            </br>
            Wenn du einen Begriff richtig errätst, erscheint er rechts in der Liste unter dem Eingabefeld. 
            </br>
            Wenn du einen Begriff nicht weißt oder gern zuerst einen anderen erraten möchtest dann klicke die zugehörige Zahl auf der linken Seite an. 
            </br>
            In diesem Modus gibt es kein Zeitlimit.
            </br>
             
            </br>
            Du kannst das Quiz unten neu starten oder auf der <a style="font-weight:600;" href="../AdvAna.php">Hauptseite</a> eine neue Herausforderung suchen! 
            </p>
            <div class="gameMode">
            <button id="spielmodusButton">Spielmodus wählen</button>
        </div>
            <h2 style="font-family:raleway; font-weight: 400; text-align: center;">Weitere Modi werden bald folgen!</h2>
            
        </main>  
        <script>

function ladeUndSetzeGespeichertenSpielmodus() {
    const gespeicherterModus = localStorage.getItem('ausgewaehlterSpielmodus');

    // Überprüfen, ob ein gespeicherter Modus vorhanden ist
    if (gespeicherterModus === 'ModusA') {
        spielModusA(); // Lade Modus A
    } else if (gespeicherterModus === 'ModusB') {
        spielModusB(); // Lade Modus B
    } else {
        // Hier kannst du eine Standardaktion ausführen, falls kein Modus gespeichert ist
        // Zum Beispiel: Lade einen Standardmodus oder frage den Benutzer nach seinem Modus
    }
}

function spielModusA() {
    console.log('Spielmodus A geladen');
}

function spielModusB() {
    console.log('Spielmodus B geladen');
}

function toggleSpielmodus() {
    const aktuellerModus = localStorage.getItem('ausgewaehlterSpielmodus');
    const neuerModus = aktuellerModus === 'ModusA' ? 'ModusB' : 'ModusA'; // Wechsel zwischen Modus A und B

    // Speichere den neuen Spielmodus
    localStorage.setItem('ausgewaehlterSpielmodus', neuerModus);
    console.log(`Spielmodus auf ${neuerModus} geändert`);

    // Lade den neuen Spielmodus
    ladeUndSetzeGespeichertenSpielmodus();

    // Aktualisiere den Text des Buttons entsprechend dem neuen Spielmodus
    document.getElementById('spielmodusButton').textContent = `Spielmodus: ${neuerModus}`;
}

// Event-Listener für den Button zum Wechseln des Spielmodus
document.getElementById('spielmodusButton').addEventListener('click', function() {
    toggleSpielmodus(); // Ändere den Spielmodus und lade den neuen Modus
});

// Initialisiere den gespeicherten Spielmodus, wenn die Seite geladen wird
window.addEventListener('load', function() {
    ladeUndSetzeGespeichertenSpielmodus();
});

        </script>
        <?php include 'popup.html'; ?>

        <footer class="footer">
        <?php include 'footer.html'; ?>
        </footer>
        <script src="../scripts/checkpopup.js"></script>
        <script src="../scripts/Search.js"></script>
    </body>
</html> 