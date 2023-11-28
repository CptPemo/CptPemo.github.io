<?php
session_start();

// Überprüfen, ob der Benutzer angemeldet ist
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Falls nicht, zum Login weiterleiten
    exit();
}

$host_name = 'db5014834209.hosting-data.io';
$database = 'dbs12324971';
$user_name = 'dbu790158';
$password = 'aDseiG3202#';

try {
    $conn = new PDO("mysql:host=$host_name;dbname=$database", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_SESSION['username'];

    $stmt = $conn->prepare("SELECT * FROM benutzer WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Fehler beim Laden der Daten: " . $e->getMessage();
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account-Übersicht</title>
</head>
<body>
    <h2>Account-Übersicht</h2>
    <p>Benutzername: <?php echo $user['username']; ?></p>
    <p>E-Mail: <?php echo $user['email']; ?></p>
    <p>Universität: <?php echo $user['university']; ?></p>

    <a href="logout.php">Ausloggen</a> <!-- Link zum Ausloggen -->
</body>
</html>
