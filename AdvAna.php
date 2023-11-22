<!DOCTYPE html>

<html>
    <head>
        <?php include '../head.html';?> 
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