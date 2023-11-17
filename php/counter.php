<?php
$counterFile = 'txt/besucherzahl.txt'; // Datei, um die Besucherzahl zu speichern

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