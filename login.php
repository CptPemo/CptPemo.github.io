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

<style>
.loginscreen{
  margin-top:100px;
  align-items: center;
  text-align:justify;
}
  </style>


    </head>
    <body>
        <header class="header">

            <?php include 'header.html';?>           

        </header>
   
        <main>
        <div class="loginscreen">

        <h2>Login</h2>
    <form action="../php/loginscript.php" method="post">
        <label for="username">Benutzername:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Einloggen">
    </form>




        </div>

        </main> 
        <?php include 'popup.html'; ?>

        <footer class="footer">
        <?php include 'footer.html'; ?>
        </footer>
        <script src="../scripts/checkpopup.js"></script>
        <script src="../scripts/Search.js"></script>
    </body>
</html> 