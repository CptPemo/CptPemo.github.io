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
                >Knochen</div>

            <section class="quiz-grid">
                <button class="quiz-preview">
                    <a href="quizzes/Atlas.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen, Halswirbel, Hals">
                            <img class="thumbnail" src="thumbnails/AtlasThumbnail.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Atlas</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Axis.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen, Halswirbel, Hals">
                            <img class="thumbnail" src="thumbnails/AxisThumbnail.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Axis</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Halswirbel.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen">
                            <img class="thumbnail" src="thumbnails/HalswirbelThumbnail.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Halswirbel</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Brustwirbel.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen">
                            <img class="thumbnail" src="bilder/Brustwirbel.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Brustwirbel</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Lendenwirbel.php">
                        <div class="quiz-picture" data-keywords="Wirbel, Wirbelsäule, Knochen">
                            <img class="thumbnail" src="thumbnails/LendenwirbelThumbnail.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Lendenwirbel</div>
                    </a>
                </button>
                <button class="quiz-preview">
                    <a href="quizzes/Ossacrum.php" >
                        <div class="quiz-picture" data-keywords="Wirbel, Knochen, untere Extremität, Bewegungsapparat, Becken, Wirbelsäule">
                            <img class="thumbnail" src="thumbnails/OssacrumThumbnail.png" oncontextmenu="return false;">
                        </div>
                        <div class="quiz-info">Os sacrum</div>
                    </a>
                </button>
                <button class="quiz-preview">
                    <a href="quizzes/Sternum.php">
                        <div class="quiz-picture" data-keywords="Brust, Thorax, Knochen, Brustbein">
                            <img class="thumbnail" src="thumbnails/SternumThumbnail.png" oncontextmenu="return false;">
                        </div>
                        <div class="quiz-info">Sternum</div>
                    </a>  
                </button> 

                <button class="quiz-preview">
                    <a href="quizzes/Clavicula.php">
                        <div class="quiz-picture" data-keywords="Brust, Thorax, Knochen, Schlüsselbein">
                            <img class="thumbnail" src="thumbnails/ClaviculaThumbnail.png" oncontextmenu="return false;">
                        </div>
                        <div class="quiz-info">Clavicula</div>
                    </a>  
                </button> 

                <button class="quiz-preview">
                    <a href="quizzes/Scapula.php">
                        <div class="quiz-picture" data-keywords="Schulter, Skelett, Knochen, Arm, Schulterblatt">
                            <img class="thumbnail" src="thumbnails/ScapulaThumbnail.png" oncontextmenu="return false;">
                        </div>
                        <div class="quiz-info">Scapula</div>
                    </a>
                </button>
                <button class="quiz-preview">
                    <a href="quizzes/Humerus.php">
                        <div class="quiz-picture" data-keywords="Knochen, obere Extremität, Arm, Oberarm, Oberarmknochen">
                            <img class="thumbnail" src="thumbnails/HumerusThumbnail.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Humerus</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Ulna.php">
                        <div class="quiz-picture" data-keywords="Knochen, obere Extremität, Arm, Oberarm, Oberarmknochen">
                            <img class="thumbnail" src="thumbnails/UlnaThumbnail.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Ulna</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Radius.php">
                        <div class="quiz-picture" data-keywords="Knochen, obere Extremität, Arm, Oberarm, Oberarmknochen">
                            <img class="thumbnail" src="thumbnails/RadiusThumbnail.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Radius</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Hand.php">
                        <div class="quiz-picture" data-keywords="Knochen, obere Extremität, Arm, Oberarm, Oberarmknochen">
                            <img class="thumbnail" src="thumbnails/HandThumbnail.png" oncontextmenu="return false;">     
                        </div>
                        <div class="quiz-info">Hand</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Oscoxae.php">
                        <div class="quiz-picture" data-keywords="Knochen, Bewegungsapparat, Bein, untere Extremität, Hüfte">
                            <img class="thumbnail" src="thumbnails/OscoxaeThumbnail.png" oncontextmenu="return false;">
                        </div>
                        <div class="quiz-info">Os coxae</div>
                    </a>  
                </button> 

                <button class="quiz-preview">
                    <a href="quizzes/Femur.php">
                        <div class="quiz-picture" data-keywords="Knochen, Bewegungsapparat, untere Extremität, Bein, Oberschenkel">
                            <img class="thumbnail" src="thumbnails/FemurThumbnail.png" oncontextmenu="return false;">
                        </div>
                        <div class="quiz-info">Femur</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Tibia.php" >
                        <div class="quiz-picture" data-keywords="Knochen, untere Extremität, Bewegungsapparat, Bein, Schienbein">
                            <img class="thumbnail" src="thumbnails/TibiaThumbnail.png" oncontextmenu="return false;">
                        </div>
                        <div class="quiz-info">Tibia</div>
                    </a>
                </button>

                <button class="quiz-preview">
                    <a href="quizzes/Fussdorsal.php" >
                        <div class="quiz-picture" data-keywords="Knochen, untere Extremität, Bewegungsapparat, Bein, Schienbein">
                            <img class="thumbnail" src="thumbnails/FussThumbnail.png" oncontextmenu="return false;">
                        </div>
                        <div class="quiz-info">Fuß</div>
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