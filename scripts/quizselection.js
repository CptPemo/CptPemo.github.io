// Funktion, die aufgerufen wird, wenn der Toggle-Switch geklickt wird
function toggleGameMode() {
    var toggle = document.getElementById('gameModeToggle');
    
    if (toggle.checked) {
      loadGameMode('spielmodus2'); // Lade Spielmodus 2, wenn Toggle aktiviert ist
    } else {
      loadGameMode('spielmodus1'); // Lade Spielmodus 1, wenn Toggle deaktiviert ist
    }
  }
  
  // Funktion, um das entsprechende JS basierend auf der Auswahl zu laden
  function loadGameMode(selectedMode) {
    var scriptElement = document.createElement('script');
    if (selectedMode === 'spielmodus1') {
      scriptElement.src = 'spielmodus1.js'; // Passe den Dateinamen entsprechend an
    } else if (selectedMode === 'spielmodus2') {
      scriptElement.src = 'spielmodus2.js'; // Passe den Dateinamen entsprechend an
    }
    
    // Füge das Skript zum Laden des Spielmodus hinzu
    document.body.appendChild(scriptElement);
  }
  