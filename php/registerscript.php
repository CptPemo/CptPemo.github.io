<?php
$host_name = 'db5014834209.hosting-data.io';
$database = 'dbs12324971';
$user_name = 'dbu790158';
$password = 'aDseiG3202#';

try {
    $conn = new PDO("mysql:host=$host_name;dbname=$database", $user_name, $password);
    // Fehlermodus auf Ausnahmen setzen
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Daten aus dem Formular erhalten
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Passwort sicher hashen
    $university = $_POST['university'];

    // Überprüfe, ob Benutzername oder E-Mail bereits vorhanden sind
    $sqlCheckExisting = "SELECT COUNT(*) AS count FROM benutzer WHERE username = :username OR email = :email";
    $stmtCheckExisting = $conn->prepare($sqlCheckExisting);
    $stmtCheckExisting->bindParam(':username', $username);
    $stmtCheckExisting->bindParam(':email', $email);
    $stmtCheckExisting->execute();
    $result = $stmtCheckExisting->fetch(PDO::FETCH_ASSOC);

    if ($result['count'] > 0) {
        echo "Es existiert bereits ein Account mit dieser Emailadresse oder Benutzernamen";
    } else {
        // Benutzername und E-Mail sind eindeutig, fahre mit der Registrierung fort

        // SQL-Abfrage zum Einfügen der Daten in die Datenbank
        $sql = "INSERT INTO benutzer (username, email, password, university) VALUES ('$username', '$email', '$password', '$university')";

        // Vorbereiten und Ausführen der SQL-Abfrage
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        echo "Registrierung erfolgreich!";

        // Generiere einen Bestätigungs-Token
        $token = bin2hex(random_bytes(32)); // Zufälliger 32-Byte-Token

        // Speichere den Token in der Datenbank
        $sqlToken = "UPDATE benutzer SET registration_token = :token WHERE email = :email";
        $stmtToken = $conn->prepare($sqlToken);
        $stmtToken->bindParam(':token', $token);
        $stmtToken->bindParam(':email', $email);
        $stmtToken->execute();

        // Sende die Bestätigungs-E-Mail
        $to = $email;
        $subject = 'Bestätigung der Accounterstellung';
        $message = "Bitte klicke auf den folgenden Link, um deine Accounterstellung zu bestätigen: http://advancedanatomy.org/php/bestaetigen.php?token=$token";
        $headers = 'From: noreply@advancedanatomy.org';

        mail($to, $subject, $message, $headers);
    }

} catch(PDOException $e) {
    echo "Fehler beim Speichern der Daten: " . $e->getMessage();
}

// Verbindung zur Datenbank schließen
$conn = null;
?>
