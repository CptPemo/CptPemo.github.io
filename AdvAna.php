<!DOCTYPE html>

<html>
    <head>
            <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MD769R1DSS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MD769R1DSS');
</script>
    <title>Anatomie Quiz für Fortgeschrittene | Advanced Anatomy</title>
    <link rel="stylesheet" href="styles/AdvAna.css">
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
            <section class="quiz-grid">
                <button class="quiz-preview">
                    <a href="quizzes/Atlas.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen, Halswirbel, Hals">
                            <img class="thumbnail" src="thumbnails/AtlasThumbnail.png" >     
                        </div>
                        <div class="quiz-info">Atlas</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Axis.html">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen, Halswirbel, Hals">
                            <img class="thumbnail" src="thumbnails/AxisThumbnail.png" >     
                        </div>
                        <div class="quiz-info">Axis</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Halswirbel.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen">
                            <img class="thumbnail" src="thumbnails/HalswirbelThumbnail.png" >     
                        </div>
                        <div class="quiz-info">Halswirbel</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Brustwirbel.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen">
                            <img class="thumbnail" src="bilder/Brustwirbel.png">     
                        </div>
                        <div class="quiz-info">Brustwirbel</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Lendenwirbel.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen">
                            <img class="thumbnail" src="thumbnails/LendenwirbelThumbnail.png">     
                        </div>
                        <div class="quiz-info">Lendenwirbel</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Sternum.php">
                        <div class="quiz-picture" data-keywords="Brust, Thorax, Knochen, Brustbein">
                            <img class="thumbnail" src="thumbnails/SternumThumbnail.png">
                        </div>
                        <div class="quiz-info">Sternum</div>
                    </a>  
                </button> 

                <button class="quiz-preview">
                    <a href="quizzes/Scapula.php">
                        <div class="quiz-picture" data-keywords="Schulter, Skelett, Knochen, Arm, Schulterblatt">
                            <img class="thumbnail" src="thumbnails/ScapulaThumbnail.png">
                        </div>
                        <div class="quiz-info">Scapula</div>
                    </a>
                </button>
                <button class="quiz-preview">
                    <a href="quizzes/Humerus.php">
                        <div class="quiz-picture" data-keywords="Knochen, obere Extremität, Arm, Oberarm, Oberarmknochen">
                            <img class="thumbnail" src="thumbnails/HumerusThumbnail.png">     
                        </div>
                        <div class="quiz-info">Humerus</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Oscoxae.php">
                        <div class="quiz-picture" data-keywords="Knochen, Bewegungsapparat, untere Extremität, Hüfte">
                            <img class="thumbnail" src="thumbnails/OscoxaeThumbnail.png">
                        </div>
                        <div class="quiz-info">Os coxae</div>
                    </a>  
                </button> 

                <button class="quiz-preview">
                    <a href="quizzes/Femur.php">
                        <div class="quiz-picture" data-keywords="Knochen, Bewegungsapparat, untere Extremität, Bein, Oberschenkel">
                            <img class="thumbnail" src="thumbnails/FemurThumbnail.png">
                        </div>
                        <div class="quiz-info">Femur</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Tibia.php" >
                        <div class="quiz-picture" data-keywords="Knochen, untere Extremität, Bewegungsapparat, Bein, Schienbein">
                            <img class="thumbnail" src="thumbnails/TibiaThumbnail.png">
                        </div>
                        <div class="quiz-info">Tibia</div>
                    </a>
                </button>
            </section>
            <?php
$counterFile = 'besucherzahl.txt'; // Datei, um die Besucherzahl zu speichern

// Überprüfen, ob die Datei existiert
if (file_exists($counterFile)) {
    // Datei lesen und aktuellen Zählerstand erhalten
    $count = file_get_contents($counterFile);
    $count = intval($count);
    $count++;

    // Zählerstand erhöhen und in die Datei schreiben
    file_put_contents($counterFile, $count);

} else {
    // Wenn die Datei nicht existiert, Zähler auf 1 setzen und Datei erstellen
    $count = 1;
    file_put_contents($counterFile, $count);


}
?>
        </main>   


        <footer class="footer">
        <?php include 'footer.html'; ?>
        </footer>
        <script src="../scripts/Search.js"></script>
    </body>
</html> 