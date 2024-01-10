<?php session_start(); // Beginne die Session

if (isset($_SESSION['username'])) {
    // Der Benutzer ist angemeldet, $_SESSION['username'] enthält den Benutzernamen
    $loggedInUser = $_SESSION['username'];
} else {
    // Der Benutzer ist nicht angemeldet
    $loggedInUser = null;
}
?>
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
    <link rel="icon" type="image/png" href="../bilder/favicon.png">
    <link rel="icon" type="image/png" href="../bilder/favicon1.png">
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

        <div style="
                margin-top: 100px;
                font-size: 50px;
                margin-left: 2%"
                >Muskeln</div>
            <section class="quiz-grid">
                <button class="quiz-preview">
                    <a href="quizzes/Rotatorenmanschette Kopie.php">
                        <div style="font-size: 30px;">Rotatorenmanschette</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Glutealmuskeln.php">
                        <div style="font-size: 30px;">Glutealmuskeln</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/PelvitrochantaereMuskulatur.php">
                        <div style="font-size: 30px;">Pelvitrochantäre Muskulatur</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Adduktoren.php">
                        <div style="font-size: 30px;">Adduktoren</div>
                    </a>
                </button>


            </section>
            
        </main>  

        <?php include 'popup.html'; ?>

        <footer class="footer">
        <?php include 'footer.html'; ?>
        </footer>
        <script src="../scripts/checkpopup.js"></script>
        <script src="../scripts/Search.js"></script>
    </body>
</html> 