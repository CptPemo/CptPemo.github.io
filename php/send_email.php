<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $empfaenger = "info@advancedanatomy.org"; 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $betreff = $_POST['betreff'];
  $inhalt = $_POST['inhalt'];

  $nachricht = "Name: " . $name . "\n";
  $nachricht .= "Emailadresse: " . $email . "\n";
  $nachricht .= "Betreff: " . $betreff . "\n";
  $nachricht .= "Inhalt: " . $inhalt;

  mail($empfaenger, $betreff, $nachricht);

  echo "Vielen Dank! Ihre Nachricht wurde gesendet.";
}
?>
