<?php
session_start();

$host_name = 'db5014834209.hosting-data.io';
$database = 'dbs12324971';
$user_name = 'dbu790158';
$password = 'aDseiG3202#';

try {
    $conn = new PDO("mysql:host=$host_name;dbname=$database", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM benutzer WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Authentifizierung erfolgreich
            $_SESSION['username'] = $username;
            header("Location: ../user.php"); // Weiterleitung zur Dashboard-Seite nach erfolgreicher Anmeldung
            // Nach erfolgreicher Authentifizierung
            $_SESSION['username'] = $username; // Setze den Benutzernamen in der Session

        } else {
            echo "Ungültige Anmeldeinformationen.";
        }
    }
} catch(PDOException $e) {
    echo "Fehler beim Login: " . $e->getMessage();
}

$conn = null;
?>
