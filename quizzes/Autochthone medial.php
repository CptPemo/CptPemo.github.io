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
      <div><h1 style="font-size: 40px; font-weight:400; margin: 1%; cursor: pointer;" onclick="window.location.replace('/MuskelAuswahl.php')">Autochthone Rückenmuskulatur - medialer Trakt<h1></div>
      <input class="guess-bar" id="textInput" type="text" placeholder="Los geht's!"> 
      <button class="check-button" id="checkButton"> Check </button>
      <button class="resign-button" id="resignButton"> Resign </button>
      <p id="instructions">Beginne damit, die Autochthone Rückenmuskeln zu benennen.</p>

    </div>

    <div class="TableSection">
      <table class="tabelle" id="MuskelErgebnisse">
    
        <tr>
            <th>Muskel</th>
            <th>Ursprung</th>
            <th>Ansatz</th>
            <th>Funktion</th>
        </tr>
        <tr id="1">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>

        <tr id="2">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="3">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="4">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="5">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="6">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="7">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="8">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="9">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="10">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="11">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="12">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="13">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>
        <tr id="14">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
        </tr>

        

      </table>

      <table class="tabelleLösungen" id="Muskel">

        <tr>
            <th>Muskel</th>
            <th>Ursprung</th>
            <th>Ansatz</th>
            <th>Funktion</th>
        </tr>
        <tr id="1">
            <td>Mm. interspinales cervicis</td>
            <td>C2-TH1</td>
            <td>nächst höherer Processus Spinosi</td>
            <td>Dorsalextension</td>
        </tr>
        <tr id="2">
            <td>Mm. interspinales thoracis</td>
            <td>TH2, TH3, TH9-L1</td>
            <td>nächst höherer Processus Spinosi</td>
            <td>Dorsalextension</td>
        </tr>
        <tr id="3">
            <td>Mm. interspinales lumborum</td>
            <td>L2-L5</td>
            <td>nächst höherer Processus Spinosi</td>
            <td>Dorsalextension</td>
        </tr>
        <tr id="4">
            <td>M. spinalis capitis</td>
            <td>C6-TH2</td>
            <td>Protuberantia occipitalis externa</td>
            <td>Dorsalextension, Lateralflexion ypsilaterale Seite</td>
        </tr>
        <tr id="5">
            <td>M. spinalis cervicis</td>
            <td>C6-TH2</td>
            <td>Processus spinosi 4-5 Wirbel darüber</td>
            <td>Dorsalextension, Lateralflexion ypsilaterale Seite</td>
        </tr>
        <tr id="6">
            <td>M. spinalis thoracis</td>
            <td>TH10-L3</td>
            <td>Prcessus spinosi 7-8 Wirbel darüber</td>
            <td>Dorsalextension, Lateralflexion ypsilaterale Seite</td>
        </tr>
        <tr id="7">
            <td>Mm. rotatores breves</td>
            <td>Processus transversi C3-L4</td>
            <td>nächst höherer Processus Spinosi</td>
            <td>Rotation kontralaterale Seite</td>
        </tr>
        <tr id="8">
            <td>Mm. rotatores longi</td>
            <td>Processus transversi C4-L5</td>
            <td>übernächst höherer Processus Spinosi</td>
            <td>Rotation kontralaterale Seite</td>
        </tr>
        <tr id="9">
            <td>M. multifidus cervicis</td>
            <td>TH1-TH4, Procc. articulares C5-C7</td>
            <td>Processus Spinosi 3-5 Wirbel höher</td>
            <td>Dorsalextension, Lateralfelxion ypsilateral, Rotation kontralateral</td>
        </tr>
        <tr id="10">
            <td>M. multifidus thoracis</td>
            <td>TH3-TH12, Procc. mammillares L1-L4</td>
            <td>Processus Spinosi 3-5 Wirbel höher</td>
            <td>Dorsalextension, Lateralfelxion ypsilateral, Rotation kontralateral</td>
        </tr>
        <tr id="11">
            <td>M. multifidus lumborum</td>
            <td>Procc. mammillares L3-L5, S1-S4, Crista iliaca</td>
            <td>Processus Spinosi 3-5 Wirbel höher</td>
            <td>Dorsalextension, Lateralfelxion ypsilateral, Rotation kontralateral</td>
        </tr>
        <tr id="12">
            <td>M. semispinalis capitis</td>
            <td>Procc. transversi C4-TH6</td>
            <td>Os occipitale</td>
            <td>Dorsalextension, Lateralfelxion ypsilateral, Rotation kontralateral</td>
        </tr>
        <tr id="13">
            <td>M. semispinalis cervicis</td>
            <td>Procc. transversi TH1-TH6</td>
            <td>Processus spinosi 5-7 Wirbel höher</td>
            <td>Dorsalextension, Lateralflexion ypsilateral, Rotation kontralateral</td>
        </tr>
        <tr id="14">
            <td>M. semispinalis thoracis</td>
            <td>Procc. transversi TH6-TH12</td>
            <td>Processus spinosi C6, C7, TH1-TH5</td>
            <td>Dorsalextension, Lateralfelxion und Rotation ypsilateral, </td>
        </tr>
        
       
       

       
        
      </table>
      <button class="check-button" id="previous" onclick="window.location.replace('ExtensorenUnterarm.php')"> <<  Vorheriges Quiz </button>
      <button class="check-button" id="next" onclick="window.location.replace('Glutealmuskeln.php')"> Nächstes  Quiz >></button>
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
            if(clickedCellIndex.row > 14){ // muss manuell angepasst werden, je nach Tabellengröße

                // muss manuell angepasst werden, je nach Tabellengröße
                const nextCellId = 'cell' + (rowIndex - 13) + (cellIndex - 3); // Annahme: Zellen haben IDs wie "cell0", "cell1", ...
                const nextCell = document.getElementById(nextCellId);
                clickedCellIndex.cell = clickedCellIndex.cell - 3;
                clickedCellIndex.row = clickedCellIndex.row - 13;

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
    if (inputValue == "Mm. interspinales cervicis") {
      tableResults.rows[1].cells[0].textContent = "Mm. interspinales cervicis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "Mm. interspinales thoracis") {
      tableResults.rows[2].cells[0].textContent = "Mm. interspinales thoracis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "Mm. interspinales lumborum") {
      tableResults.rows[3].cells[0].textContent = "M. flexor pollicis brevis - Caput superficiale";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. spinalis capitis") {
      tableResults.rows[4].cells[0].textContent = "M. spinalis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
  
    if (inputValue == "M. spinalis cervicis") {
      tableResults.rows[5].cells[0].textContent = "M. spinalis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
  
    if (inputValue == "M. spinalis thoracis") {
      tableResults.rows[6].cells[0].textContent = "M. spinalis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
  
    if (inputValue == "Mm. rotatores breves") {
      tableResults.rows[7].cells[0].textContent = "Mm. rotatores breves";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "Mm. rotatores longi") {
      tableResults.rows[8].cells[0].textContent = "Mm. rotatores longi";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. multifidus cervicis") {
      tableResults.rows[9].cells[0].textContent = "M. multifidus cervicis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. multifidus thoracis") {
      tableResults.rows[10].cells[0].textContent = "M. multifidus thoracis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. multifidus lumborum") {
      tableResults.rows[11].cells[0].textContent = "M. multifidus lumborum";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. semispinalis capitis") {
      tableResults.rows[12].cells[0].textContent = "M. semispinalis capitis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. semispinalis cervicis") {
      tableResults.rows[13].cells[0].textContent = "M. semispinalis cervicis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. semispinalis thoracis") {
      tableResults.rows[14].cells[0].textContent = "M. semispinalis thoracis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (musclecounter >= 14) {
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
 