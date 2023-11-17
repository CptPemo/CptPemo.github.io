<html>
    <head>
        <title>Advanced Anatomy</title>
        <link rel="stylesheet" href="styles/AdvAna.css">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/kontakt.css">
        <link rel="stylesheet" href="styles/quizGrid.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="bilder/favicon.png">
        <link rel="icon" type="image/png" href="bilder/favicon1.png">
        <meta charset="UTF-8">
    </head>

    <body>
        <header class="header">

            <?php include 'header.html';?>           

        </header>
         
        <main>
        <div class="kontakt">
          <h1>Kontaktformular</h1>
          <h2>Hast du ein Problem an der Webseite festgestellt? Schreibe uns!</h2>
          <form action="php/send_email.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Emailadresse:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="betreff">Betreff:</label><br>
            <input type="text" id="betreff" name="betreff"><br>
            <label for="inhalt">Inhalt:</label><br>
            <textarea id="inhalt" name="inhalt"></textarea><br><br>
            <input type="submit" value="Absenden">
          </form>
        </div>
        
        
        </main>

        <footer class="footer">
            <?php include 'footer.html'; ?>
            </footer>
    </body>
</html>



