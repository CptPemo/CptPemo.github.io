<?php
$host_name = 'db5014834209.hosting-data.io';
$database = 'dbs12324971';
$user_name = 'dbu790158';
$password = 'aDseiG3202#';

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Verbindung zur Datenbank herstellen
    $conn = new PDO("mysql:host=$host_name;dbname=$database", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        
        // Überprüfe, ob der Token in der Datenbank vorhanden ist
        $sqlCheckToken = "SELECT * FROM benutzer WHERE registration_token = :token";
        $stmtCheckToken = $conn->prepare($sqlCheckToken);
        $stmtCheckToken->bindParam(':token', $token);
        $stmtCheckToken->execute();
        $user = $stmtCheckToken->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Token gefunden, Account bestätigt
            // Setze den Account als aktiv (zum Beispiel mit einer zusätzlichen Spalte 'aktiv' in der Tabelle)
            $sqlActivateAccount = "UPDATE benutzer SET aktiv = 1 WHERE registration_token = :token";
            $stmtActivateAccount = $conn->prepare($sqlActivateAccount);
            $stmtActivateAccount->bindParam(':token', $token);
            $stmtActivateAccount->execute();

            // Lösche den Token aus der Datenbank, da er nicht mehr benötigt wird
            $sqlDeleteToken = "UPDATE benutzer SET registration_token = NULL WHERE registration_token = :token";
            $stmtDeleteToken = $conn->prepare($sqlDeleteToken);
            $stmtDeleteToken->bindParam(':token', $token);
            $stmtDeleteToken->execute();

            if ($stmtDeleteToken->rowCount() > 0) {
                echo "Account erfolgreich aktiviert!";
            } else {
                echo "Fehler beim Löschen des Tokens.";
            }
        } else {
            echo "Ungültiger oder abgelaufener Token.";
        }
    } else {
        echo "Kein Token übergeben.";
    }

} catch(PDOException $e) {
    echo "Verbindung zur Datenbank fehlgeschlagen: " . $e->getMessage();
}
?>
