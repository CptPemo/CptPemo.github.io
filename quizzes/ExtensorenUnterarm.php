<!DOCTYPE html>

<head>
    <title>Anatomie Quiz für Fortgeschrittene | Advanced Anatomy</title>
   
    <meta name="description" content="
    Lerne die menschliche Anatomie anhand von ästhetischen Zeichnungen und systematischen Skizzen. 
    Advanced Anatomy ist eine Plattform für Alle, die Expertenwissen in Anatomie erlangen wollen.">

    <meta name="keywords" content="Anatomie, Quiz, Bildung, lernen, Medizin, Studium, Universität, Lernplattform, Amboss, Kenhub, 3DAnatomy, Fortgeschritten, Testat, Hilfe, Klausur, ">

        <link rel="stylesheet" href="../styles/AdvAna.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/popup.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/quizGrid.css">
        <link rel="stylesheet" href="../styles/quiz.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="../bilder/favicon.png">
    <link rel="icon" type="image/png" href="../bilder/favicon1.png">
        <meta charset="UTF-8">
<style>

    body{
        margin-top: 100px;
    }

    table{
        font-family: Raleway;
        border-collapse: collapse;
        width: 97%;
        border:1px solid black ;
        margin: 1%;
    }

    table, th, td {
        border: 1px solid black;
    }

    
    .guess-bar{
        font-family: Raleway;
    }


    div{
        font-family: Raleway;
    }

    caption,
    th,
    td{
        padding: 1rem;
    }

    caption,
    th{
        text-align: left;
        width: 20%;
    }

    td{
        visibility: visible;
        cursor: pointer;
        height: 30px;
    }

    
    td:hover{

        outline: 2px solid black; /* Fügt einen 2px-Rahmen hinzu, wenn über das Element gehovert wird 

        border:2px solid black;

        visibility: hidden;*/
    }


    table:hover{
        
        visibility:visible;
    }

    caption{
        display: none;
    }

    .tabelleLösungen{
        display: none;
        width: 97%;
        margin: 1%;
    }


    .guess-bar{
        font-family: Raleway;
        width: 60%;
        font-size: 30px;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid black;
        border-radius: 3px;
        margin: 1%;
    }

    .check-button,
    .resign-button{
        font-family: Raleway;
        width: 10%;
        font-size: 30px;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid black;
        border-radius: 3px;
        background-color: white;
        cursor:pointer;
    }
    .resign-button{
        margin-left: 1%;
    }

    .check-button:hover,
    .resign-button:hover{
      background-color: black;
      color: white;
    }

    footer{
        margin-top: 50px;
    }

    .correct-answer {
  visibility: visible !important;
  outline: 2px solid black;
}

#instructions{
  margin-left: 1%;
  font-size: 20px;
}

#previous, #next{
  width: 11%;
  font-size: 15px;
  margin-left: 1%;
  border: 0.5px solid black;
  cursor:pointer;
}
.TopPart{
  position: fixed;
  background-color: white;
  width: 100%;
  margin-top:-18px;
}

.TableSection{
  padding-top: 220px;
}

</style>
    
</head>

<body>

    <header class="header">
        <?php include '../header.html';?>           
    </header>
    <div class="TopPart">
      <div><h1 style="font-size: 40px; font-weight:400; margin: 1%; cursor: pointer;" onclick="window.location.replace('/MuskelAuswahl.php')">Extensoren des Unterarms<h1></div>
      <input class="guess-bar" id="textInput" type="text" placeholder="Los geht's!"> 
      <button class="check-button" id="checkButton"> Check </button>
      <button class="resign-button" id="resignButton"> Resign </button>
      <p id="instructions">Beginne damit, die Extensoren des Unterarms zu benennen.</p>

    </div>

    <div class="TableSection">
      <table class="tabelle" id="MuskelErgebnisse">
    
        <tr>
            <th>Muskel</th>
            <th>Ursprung</th>
            <th>Ansatz</th>
            <th>Innervation</th>
            <th>Funktion</th>
        </tr>
        <tr id="1">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>

        <tr id="2">
            <td id="cell20"></td>
            <td id="cell21"></td>
            <td id="cell22"></td>
            <td id="cell23"></td>
            <td id="cell24"></td>
        </tr>

        <tr id="3">
            <td id="cell30"></td>
            <td id="cell31"></td>
            <td id="cell32"></td>
            <td id="cell33"></td>
            <td id="cell34"></td>
          </tr>
          <tr id="4">
            <td id="cell40"></td>
            <td id="cell41"></td>
            <td id="cell42"></td>
            <td id="cell43"></td>
            <td id="cell44"></td>
          </tr>
          <tr id="5">
            <td id="cell50"></td>
            <td id="cell51"></td>
            <td id="cell52"></td>
            <td id="cell53"></td>
            <td id="cell54"></td>
          </tr>
          <tr id="6">
            <td id="cell60"></td>
            <td id="cell61"></td>
            <td id="cell62"></td>
            <td id="cell63"></td>
            <td id="cell64"></td>
          </tr>
          <tr id="7">
            <td id="cell70"></td>
            <td id="cell71"></td>
            <td id="cell72"></td>
            <td id="cell73"></td>
            <td id="cell74"></td>
        </tr>
        <tr id="8">
            <td id="cell80"></td>
            <td id="cell81"></td>
            <td id="cell82"></td>
            <td id="cell83"></td>
            <td id="cell84"></td>
        </tr>
        <tr id="9">
            <td id="cell90"></td>
            <td id="cell91"></td>
            <td id="cell92"></td>
            <td id="cell93"></td>
            <td id="cell94"></td>
        </tr>
        <tr id="10">
            <td id="cell100"></td>
            <td id="cell101"></td>
            <td id="cell102"></td>
            <td id="cell103"></td>
            <td id="cell104"></td>
        </tr>
        <tr id="11">
            <td id="cell110"></td>
            <td id="cell111"></td>
            <td id="cell112"></td>
            <td id="cell113"></td>
            <td id="cell114"></td>
        </tr>


      </table>

      <table class="tabelleLösungen" id="Muskel">

        <tr>
            <th>Muskel</th>
            <th>Ursprung</th>
            <th>Ansatz</th>
            <th>Innervation</th>
            <th>Funktion</th>
        </tr>
        <tr id="1">
            <td>M. brachioradialis</td>
            <td>Septum intermusculare</td>
            <td>Proximal des proc. styloideus radii</td>
            <td>N. radialis</td>
            <td>Flexion, Pro/Supination</td>
        </tr>
        <tr id="2">
            <td>M. extensor carpi radialis longus</td>
            <td>Epicondylus lateralis humeri</td>
            <td>Os metacarpi 2</td>
            <td>N. radialis</td>
            <td>Extension, Radialabduktion</td>
        </tr>
        <tr id="3">
            <td>M. extensor carpi radialis brevis</td>
            <td>Epicondylus lateralis humeri</td>
            <td>Os metacarpi 3</td>
            <td>N. radialis</td>
            <td>Extension, Radialabduktion</td>
        </tr>
        <tr id="4">
            <td>M. extensor digitorum</td>
            <td>Epicondylus lateralis humeri</td>
            <td>Dorsalaponeurosen Finger 2-5</td>
            <td>N. radialis</td>
            <td>Extension</td>
        </tr>
        <tr id="5">
            <td>M. extensor digiti minimi</td>
            <td>Epicondylus lateralis humeri</td>
            <td>Dorsalaponeurose 5. Finger</td>
            <td>N. radialis</td>
            <td>Extension</td>
        </tr>

        <tr id="6">
            <td>M. extensor carpi ulnaris</td>
            <td>Epicondylus lateralis humeri</td>
            <td>Os metacarpi 5</td>
            <td>N. radialis</td>
            <td>Extension, Ulnarabduktion</td>
        </tr>

        <tr id="7">
        <td>M. supinator</td>
            <td>Epicondylus lateralis humeri</td>
            <td>Radius</td>
            <td>N. radialis</td>
            <td>Supination</td>
        </tr>
        <tr id="8">
            <td>M. abductor pollicis longus</td>
            <td>Dorsalseite Membrana interossea</td>
            <td>Os metacarpi 1</td>
            <td>N. radialis</td>
            <td>Abduktion, Extension</td>
        </tr>
        <tr id="9">
            <td>M. extensor pollicis brevis</td>
            <td>Dorsalseite Membrana interossea</td>
            <td>Phalanx proximalis 1</td>
            <td>N. radialis</td>
            <td>Extension</td>
        </tr>
        <tr id="10">
            <td>M. extensor pollicis longus</td>
            <td>Dorsalseite Membrana interossea</td>
            <td>Phalanx distalis 1</td>
            <td>N. radialis</td>
            <td>Extension</td>
        </tr>
        <tr id="11">
            <td>M. extensor indicis</td>
            <td>Dorsalseite Membrana interossea</td>
            <td>Radius</td>
            <td>N. radialis</td>
            <td>Extension</td>
        </tr>
      </table>
      <button class="check-button" id="previous" onclick="window.location.replace('FlexorenUnterarm.php')"> <<  Vorheriges Quiz </button>
      <button class="check-button" id="next" onclick="window.location.replace('Handmuskeln.php')"> Nächstes  Quiz >></button>
      <?php include '../popup.html'; ?>
</div>
<footer class="footer">
    <?php include '../footer.html'; ?>
</footer> 
</body>

<script>

    let selectedCell = null; // für rahmen um ausgewählte zelle

    const table = document.getElementById('Muskel');
    const tableResults = document.getElementById('MuskelErgebnisse');

    const answerInput = document.getElementById('textInput');
    const checkButton = document.getElementById('checkButton');

    var musclecounter = 0;
    const instructions = document.getElementById('instructions');

/*
checkButton.addEventListener('click', () => {
    const inputValue = answerInput.value;
    console.log('Input value:', inputValue);

    const Msupra = table.rows[2].cells[3].textContent;
    console.log(Msupra);
    if (inputValue === Msupra){
        console.log("geilo");
    }
});*/
// Globale Variable zum Speichern des Zellenindex
let clickedCellIndex = null;

// Füge Event Listener zu den Zellen hinzu
const cells = document.querySelectorAll('td');
cells.forEach((cell, index) => {
  cell.addEventListener('click', () => {
    console.log("Row index: " + cell.closest('tr').rowIndex + " | Column index: " + cell.cellIndex);
    // Speichere den Zellenindex in der globalen Variable
    clickedCellIndex = { row: cell.closest('tr').rowIndex, cell: cell.cellIndex};
    
    console.log("Row ID: " + cell.parentElement.id + " | Cell ID: " + cell.id);
     // Entferne den dicken Rahmen von der zuletzt ausgewählten Zelle, falls vorhanden
     if (selectedCell) {;
        selectedCell.style.border = '1px solid black'; 
      }

      // Setze die zuletzt ausgewählte Zelle auf die aktuelle Zelle
      selectedCell = cell;

      // Füge einen dicken Rahmen zur aktuellen Zelle hinzu
    cell.style.border = '3px solid black';

    console.log(clickedCellIndex.row);
  });
});


 

// Event Listener für den Resign-Button
resignButton.addEventListener('click', () => {
  
  console.log('resigned');
  tableResults.style.display = 'none';
  table.style.display = 'table';

});

// Event Listener für das Texteingabefeld
answerInput.addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    // Wenn die Enter-Taste gedrückt wurde, überprüfe die Eingabe
    checkAnswer();
  }
});

// Event Listener für den Check-Button
checkButton.addEventListener('click', () => {
  // Überprüfe die Eingabe
  checkAnswer();
});

function checkAnswer() {
  const inputValue = answerInput.value;

  // Überprüfe, ob eine Zelle geklickt wurde
  if (clickedCellIndex !== null) {
    // Extrahiere Zeilen- und Spaltenindizes
    const rowIndex = clickedCellIndex.row;
    const cellIndex = clickedCellIndex.cell;

    // Überprüfe die Benutzerantwort und aktualisiere die Ergebnistabelle
    if (inputValue === table.rows[rowIndex].cells[cellIndex].textContent) {
      tableResults.rows[rowIndex].cells[cellIndex].textContent = inputValue;
      answerInput.value = '';
      // Berechne den Index für die nächste Zelle in derselben Zeile
      const nextCellIndex = cellIndex + 1;
      // Überprüfe, ob die nächste Zelle existiert
      if (nextCellIndex < table.rows[rowIndex].cells.length) {
        
        clickedCellIndex.cell = clickedCellIndex.cell + 1;
        simulateCellClick(rowIndex, nextCellIndex);
  

        }else{
            // Sprung in die nächste Zeile
            const nextCellId = 'cell' + (rowIndex + 1) + (cellIndex - 3); // Annahme: Zellen haben IDs wie "cell0", "cell1", ...
            const nextCell = document.getElementById(nextCellId);
            clickedCellIndex.cell = clickedCellIndex.cell - 3;
            clickedCellIndex.row = clickedCellIndex.row + 1;
            
            // wenn letzte Tabellenzelle in letzter Tabellenzeile erreicht ist
            if(clickedCellIndex.row > 11){ // muss manuell angepasst werden, je nach Tabellengröße

                // muss manuell angepasst werden, je nach Tabellengröße
                const nextCellId = 'cell' + (rowIndex - 10) + (cellIndex - 3); // Annahme: Zellen haben IDs wie "cell0", "cell1", ...
                const nextCell = document.getElementById(nextCellId);
                clickedCellIndex.cell = clickedCellIndex.cell - 3;
                clickedCellIndex.row = clickedCellIndex.row - 10;

                if (nextCell) {
                // Setze den Rahmeneffekt zurück, wenn eine Zelle zuvor ausgewählt wurde
                if (selectedCell) {
                 selectedCell.style.border = '1px solid black';
                }

                // Setze die ausgewählte Zelle auf die nächste Zelle
                 selectedCell = nextCell;

                // Hervorhebe die nächste Zelle mit einem dicken Rahmen
                selectedCell.style.border = '3px solid black';

                // Fokussiere das Texteingabefeld für die neue Zelle
                 answerInput.focus();

                console.log(selectedCell);
                console.log(clickedCellIndex);

                }
            }

             if (nextCell) {
            // Setze den Rahmeneffekt zurück, wenn eine Zelle zuvor ausgewählt wurde
                if (selectedCell) {
            selectedCell.style.border = '1px solid black';
            }

             // Setze die ausgewählte Zelle auf die nächste Zelle
              selectedCell = nextCell;

             // Hervorhebe die nächste Zelle mit einem dicken Rahmen
             selectedCell.style.border = '3px solid black';

            // Fokussiere das Texteingabefeld für die neue Zelle
             answerInput.focus();

             console.log(selectedCell);
            console.log(clickedCellIndex);

            }
            
        }
    }
    
  }else{
    // Wenn noch kein Feld angeklickt wurde
    console.log(musclecounter);
    if (inputValue == "M. brachioradialis") {
      tableResults.rows[1].cells[0].textContent = "M. brachioradialis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. extensor carpi radialis longus") {
      tableResults.rows[2].cells[0].textContent = "M. extensor carpi radialis longus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. extensor carpi radialis brevis") {
      tableResults.rows[3].cells[0].textContent = "M. extensor carpi radialis brevis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. extensor digitorum") {
      tableResults.rows[4].cells[0].textContent = "M. extensor digitorum";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
  
    if (inputValue == "M. extensor digiti minimi") {
      tableResults.rows[5].cells[0].textContent = "M. extensor digiti minimi";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
  
    if (inputValue == "M. extensor carpi ulnaris") {
      tableResults.rows[6].cells[0].textContent = "M. extensor carpi ulnaris";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
  
    if (inputValue == "M. supinator") {
      tableResults.rows[7].cells[0].textContent = "M. supinator";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. abductor pollicis longus") {
      tableResults.rows[8].cells[0].textContent = "M. abductor pollicis longus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. extensor pollicis brevis") {
      tableResults.rows[9].cells[0].textContent = "M. extensor pollicis brevis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. extensor pollicis longus") {
      tableResults.rows[10].cells[0].textContent = "M. extensor pollicis longus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. extensor indicis") {
      tableResults.rows[11].cells[0].textContent = "M. pronator quadratus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (musclecounter >= 11) {
      document.getElementById("instructions").innerHTML = "Klicke nun auf die Felder und gib die richtige Antwort ein. Die Auswahl springt dann automatisch.";
    }
}
}

function simulateCellClick(rowIndex, cellIndex) {
  // Setze den Rahmeneffekt zurück, wenn eine Zelle zuvor ausgewählt wurde
  
    const nextCellId = 'cell' + (rowIndex) + (cellIndex); // Annahme: Zellen haben IDs wie "cell0", "cell1", ...
    const nextCell = document.getElementById(nextCellId);

  if (nextCell) {
    // Setze den Rahmeneffekt zurück, wenn eine Zelle zuvor ausgewählt wurde
    if (selectedCell) {
      selectedCell.style.border = '1px solid black';
    }

    // Setze die ausgewählte Zelle auf die nächste Zelle
    selectedCell = nextCell;

    // Hervorhebe die nächste Zelle mit einem dicken Rahmen
    selectedCell.style.border = '3px solid black';

    // Fokussiere das Texteingabefeld für die neue Zelle
    answerInput.focus();

    console.log(selectedCell);
    console.log(clickedCellIndex);
  }
}


</script> 
 