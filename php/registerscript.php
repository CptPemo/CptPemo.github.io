<?php
// Verbindung zur Datenbank herstellen (PDO mit MySQL)
$servername = "db5014834209.hosting-data.io";
$database = "dbs12324971";
$username = "dbu790158";
$password = "aDseiG3202#";
$dbname = "Logindaten";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Fehlermodus auf Ausnahmen setzen
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Daten aus dem Formular erhalten
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Passwort sicher hashen
    $university = $_POST['university'];

    // SQL-Abfrage zum Einfügen der Daten in die Datenbank
    $sql = "INSERT INTO benutzer (username, email, password, university) VALUES ('$username', '$email', '$password', '$university')";
    
    // Vorbereiten und Ausführen der SQL-Abfrage
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo "Registrierung erfolgreich!";
} catch(PDOException $e) {
    echo "Fehler beim Speichern der Daten: " . $e->getMessage();
}

// Verbindung zur Datenbank schließen
$conn = null;
?>
