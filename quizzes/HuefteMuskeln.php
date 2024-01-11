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
        <div><h1 style="font-size: 40px; font-weight:400; margin: 1%; cursor: pointer;" onclick="window.location.replace('/MuskelAuswahl.php')">Muskeln des Hüftgelenks<h1></div>
        <input class="guess-bar" id="textInput" type="text" placeholder="Los geht's!"> 
        <button class="check-button" id="checkButton"> Check </button>
        <button class="resign-button" id="resignButton"> Resign </button>
        <p id="instructions">Beginne damit, die Muskeln des Hüftgelenks zu benennen.</p>
    </div>

    <div class="TableSection">
    <table class="tabelle" id="RotatorenmanschetteErgebnisse">

        <tr>
            <th>Muskel</th>
            <th>Ursprung</th>
            <th>Ansatz</th>
            <th>Innervation</th>
            <th>Funktion</th>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="infraspinatus">
            <td id="cell20"></td>
            <td id="cell21"></td>
            <td id="cell22"></td>
            <td id="cell23"></td>
            <td id="cell24"></td>
          </tr>
          <tr id="teresminor">
            <td id="cell30"></td>
            <td id="cell31"></td>
            <td id="cell32"></td>
            <td id="cell33"></td>
            <td id="cell34"></td>
          </tr>
          <tr id="subscapulares">
            <td id="cell40"></td>
            <td id="cell41"></td>
            <td id="cell42"></td>
            <td id="cell43"></td>
            <td id="cell44"></td>
          </tr>
          <tr id="">
            <td id="cell50"></td>
            <td id="cell51"></td>
            <td id="cell52"></td>
            <td id="cell53"></td>
            <td id="cell54"></td>
          </tr>
          <tr id="">
            <td id="cell60"></td>
            <td id="cell61"></td>
            <td id="cell62"></td>
            <td id="cell63"></td>
            <td id="cell64"></td>
          </tr>
          <tr id="">
            <td id="cell70"></td>
            <td id="cell71"></td>
            <td id="cell72"></td>
            <td id="cell73"></td>
            <td id="cell74"></td>
          </tr>
          <tr id="">
            <td id="cell80"></td>
            <td id="cell81"></td>
            <td id="cell82"></td>
            <td id="cell83"></td>
            <td id="cell84"></td>
          </tr>
          <tr id="">
            <td id="cell90"></td>
            <td id="cell91"></td>
            <td id="cell92"></td>
            <td id="cell93"></td>
            <td id="cell94"></td>
          </tr>
          <tr id="">
            <td id="cell100"></td>
            <td id="cell101"></td>
            <td id="cell102"></td>
            <td id="cell103"></td>
            <td id="cell104"></td>
          </tr>
          <tr id="">
            <td id="cell110"></td>
            <td id="cell111"></td>
            <td id="cell112"></td>
            <td id="cell113"></td>
            <td id="cell114"></td>
          </tr>
          <tr id="">
            <td id="cell120"></td>
            <td id="cell121"></td>
            <td id="cell122"></td>
            <td id="cell123"></td>
            <td id="cell124"></td>
          </tr>
          <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        <tr id="supraspinatus">
            <td id="cell10"></td>
            <td id="cell11"></td>
            <td id="cell12"></td>
            <td id="cell13"></td>
            <td id="cell14"></td>
        </tr>
        


      </table>

      <table class="tabelleLösungen" id="Rotatorenmanschette">

        <tr>
            <th>Muskel</th>
            <th>Ursprung</th>
            <th>Ansatz</th>
            <th>Innervation</th>
            <th>Funktion</th>
        </tr>
        <tr id="">
            <td id="1">M. psoas major</td>
            <td id="2">Wirbelkörper, Processus costales</td>
            <td id="3">Trochanter minor</td>
            <td id="4">N. femoralis</td>
            <td id="5">Flexion, Außenrotation</td>
           </tr>
           <tr id="">
            <td id="1">M. iliacus</td>
            <td id="2">Fossa iliaca, Spina iliaca anterior inferior</td>
            <td id="3">Trochanter minor</td>
            <td id="4">N. femoralis</td>
            <td id="5">Flexion, Außenrotation</td>
           </tr>
           <tr id="supraspinatus">
            <td id="supraspinatus1">M. gluteus maximus</td>
            <td id="supraspinatus2">Os ilium</td>
            <td id="supraspinatus3">Fascia lata</td>
            <td id="supraspinatus4">N. gluteus inferior</td>
            <td id="supraspinatus5">Extension, Außenrotation</td>
        </tr>
        <tr id="infraspinatus">
            <td id="infraspinatus1">M. gluteus medius</td>
            <td id="infraspinatus2">Os ilium</td>
            <td id="infraspinatus3">Trochanter major</td>
            <td id="infraspinatus4">N. gluteus superior</td>
            <td id="infraspinatus5">Abduktion</td>
          </tr>
          <tr id="teresminor">
            <td id="teresminor1">M. gluteus minimus</td>
            <td id="teresminor2">Os ilium</td>
            <td id="teresminor3">Trochanter major</td>
            <td id="teresminor4">N. gluteus major</td>
            <td id="teresminor5">Abduktion</td>
          </tr>
          <tr id="subscapulares">
            <td id="subscapulares1">M. tensor fasciae latae</td>
            <td id="subscapulares2">Spina iliaca anterior superior</td>
            <td id="subscapulares3">Tractus iliotibialis</td>
            <td id="subscapulares4">N. gluteus superior</td>
            <td id="subscapulares5">Abduktion</td>
        </tr>
        <tr id="supraspinatus">
            <td id="supraspinatus1">M. piriformis</td>
            <td id="supraspinatus2">Os sacrum</td>
            <td id="supraspinatus3">Trochanter major</td>
            <td id="supraspinatus4">Plexus sacralis</td>
            <td id="supraspinatus5">Abduktion, Außenrotation</td>
        </tr>
        <tr id="infraspinatus">
            <td id="infraspinatus1">M. gemellus superior</td>
            <td id="infraspinatus2">Spina ischiadica</td>
            <td id="infraspinatus3">Fossa trochanterica</td>
            <td id="infraspinatus4">Plexus sacralis</td>
            <td id="infraspinatus5">Außenrotation</td>
          </tr>
          <tr id="teresminor">
            <td id="teresminor1">M. gemellus inferior</td>
            <td id="teresminor2">Tuber ischiadicum</td>
            <td id="teresminor3">Fossa trochanterica</td>
            <td id="teresminor4">Plexus sacralis</td>
            <td id="teresminor5">Außenrotation</td>
          </tr>
          <tr id="subscapulares">
            <td id="subscapulares1">M. obturatorius internus</td>
            <td id="subscapulares2">Membrana obturatoria</td>
            <td id="subscapulares3">Fossa trochanterica</td>
            <td id="subscapulares4">Plexus sacralis</td>
            <td id="subscapulares5">Außenrotation</td>
        </tr>
        <tr id="obturext">
            <td id="obturext1">M. obturatorius externus</td>
            <td id="obturext2">Membrana obturatoria</td>
            <td id="obturext3">Fossa trochanterica</td>
            <td id="obturext4">N. obturatorius</td>
            <td id="obturext5">Außenrotation</td>
        </tr>
        <tr id="quadrat">
            <td id="quadrat1">M. quadratus femoris</td>
            <td id="quadrat2">Tuber ischiadicum</td>
            <td id="quadrat3">Crista intertrochanterica</td>
            <td id="quadrat4">N. gluteus inferior</td>
            <td id="quadrat5">Adduktion, Außenrotation</td>
        </tr>
        <tr id="supraspinatus">
            <td id="supraspinatus1">M. pectineus</td>
            <td id="supraspinatus2">Pecten ossis pubis</td>
            <td id="supraspinatus3">Linea pectinea femoris</td>
            <td id="supraspinatus4">N. femoralis</td>
            <td id="supraspinatus5">Adduktion</td>
        </tr>
        <tr id="infraspinatus">
            <td id="infraspinatus1">M. adductor longus</td>
            <td id="infraspinatus2">Ramus superior ossis pubis</td>
            <td id="infraspinatus3">Linea aspera</td>
            <td id="infraspinatus4">N. obturatorius</td>
            <td id="infraspinatus5">Adduktion</td>
          </tr>
          <tr id="teresminor">
            <td id="teresminor1">M. adductor brevis</td>
            <td id="teresminor2">Ramus inferior ossis pubis</td>
            <td id="teresminor3">Linea aspera</td>
            <td id="teresminor4">N. obturatorius</td>
            <td id="teresminor5">Adduktion</td>
          </tr>
          <tr id="subscapulares">
            <td id="subscapulares1">M. adductor magnus</td>
            <td id="subscapulares2">Ramus inferior ossis pubis</td>
            <td id="subscapulares3">Linea aspera</td>
            <td id="subscapulares4">N. obturatorius</td>
            <td id="subscapulares5">Adduktion</td>
        </tr>
        <tr id="obturext">
            <td id="obturext1">M. gracilis</td>
            <td id="obturext2">Ramus inferior ossis pubis</td>
            <td id="obturext3">Pes anserinus superficialis</td>
            <td id="obturext4">N. obturatorius</td>
            <td id="obturext5">Adduktion</td>
        </tr>
        <tr id="supraspinatus">
            <td id="supraspinatus1">M. rectus femoris</td>
            <td id="supraspinatus2">Spina iliaca anterior inferior</td>
            <td id="supraspinatus3">Tuberositas tibiae</td>
            <td id="supraspinatus4">N. femoralis</td>
            <td id="supraspinatus5">Flexion</td>
        </tr>
           <tr id="">
            <td id="1">M. sartorius</td>
            <td id="2">Spina iliaca anterior superior</td>
            <td id="3">Pes anserinus superficialis</td>
            <td id="4">N. femoralis</td>
            <td id="5">Flexion</td>
           </tr>
           <tr id="">
            <td id="1">M. semitendinosus</td>
            <td id="2">Tuber ischiadicum</td>
            <td id="3">Pes anserinus superficialis</td>
            <td id="4">N. ischiadicus</td>
            <td id="5">Extension</td>
           </tr>
           <tr id="">
            <td id="1">M. semimenbranosus</td>
            <td id="2">Tuber ischiadicum</td>
            <td id="3">medialer Tibiakondylus</td>
            <td id="4">N. ischiadicus</td>
            <td id="5">Extension</td>
           </tr>
           <tr id="">
            <td id="1">M. biceps femoris - Caput longum</td>
            <td id="2">Tuber ischiadicum</td>
            <td id="3">lateraler Tibiakondylus</td>
            <td id="4">N. ischiadicus</td>
            <td id="5">Extension</td>
           </tr>
           <tr id="">
            <td id="1">M. biceps femoris - Caput breve</td>
            <td id="2">Linea aspera</td>
            <td id="3">lateraler Tibiakondylus</td>
            <td id="4">N. ischiadicus</td>
            <td id="5">Extension</td>
           </tr>

      </table>
      <button class="check-button" id="previous" onclick="window.location.replace('Adduktoren.php')"> <<  Vorheriges Quiz </button>
      <button class="check-button" id="next" onclick="window.location.replace('KnieMuskeln.php')"> Nächstes  Quiz >></button>
      <?php include '../popup.html'; ?>
</div>

<footer class="footer">
    <?php include '../footer.html'; ?>
</footer> 
</body>

<script>

    let selectedCell = null; // für rahmen um ausgewählte zelle

    const table = document.getElementById('Rotatorenmanschette');
    const tableResults = document.getElementById('RotatorenmanschetteErgebnisse');

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
            if(clickedCellIndex.row > 23){ // muss manuell angepasst werden, je nach Tabellengröße

                // muss manuell angepasst werden, je nach Tabellengröße
                const nextCellId = 'cell' + (rowIndex - 22) + (cellIndex - 3); // Annahme: Zellen haben IDs wie "cell0", "cell1", ...
                const nextCell = document.getElementById(nextCellId);
                clickedCellIndex.cell = clickedCellIndex.cell - 3;
                clickedCellIndex.row = clickedCellIndex.row - 22;

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
    if (inputValue == "M. psoas major") {
      tableResults.rows[1].cells[0].textContent = "M. psoas major";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. iliacus") {
      tableResults.rows[2].cells[0].textContent = "M. iliacus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. gluteus maximus") {
      tableResults.rows[3].cells[0].textContent = "M. gluteus maximus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. gluteus medius") {
      tableResults.rows[4].cells[0].textContent = "M. gluteus medius";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. gluteus minimus") {
      tableResults.rows[5].cells[0].textContent = "M. gluteus minimus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. tensor fasciae latae") {
      tableResults.rows[6].cells[0].textContent = "M. tensor fasciae latae";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. piriformis") {
      tableResults.rows[7].cells[0].textContent = "M. piriformis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. gemellus superior") {
      tableResults.rows[8].cells[0].textContent = "M. gemellus superior";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. gemellus inferior") {
      tableResults.rows[9].cells[0].textContent = "M. gemellus inferior";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. obturatorius internus") {
      tableResults.rows[10].cells[0].textContent = "M. obturatorius internus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. obturatorius externus") {
      tableResults.rows[11].cells[0].textContent = "M. obturatorius externus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. quadratus femoris") {
      tableResults.rows[12].cells[0].textContent = "M. quadratus femoris";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. pectineus") {
      tableResults.rows[13].cells[0].textContent = "M. pectineus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. adductor longus") {
      tableResults.rows[14].cells[0].textContent = "M. adductor longus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. adductor brevis") {
      tableResults.rows[15].cells[0].textContent = "M. adductor brevis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. adductor magnus") {
      tableResults.rows[16].cells[0].textContent = "M. adductor magnus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. gracilis") {
      tableResults.rows[17].cells[0].textContent = "M. gracilis";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. rectus femoris") {
      tableResults.rows[18].cells[0].textContent = "M. rectus femoris";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. sartorius") {
      tableResults.rows[19].cells[0].textContent = "M. sartorius";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. semitendinosus") {
      tableResults.rows[20].cells[0].textContent = "M. semitendinosus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. semimembranosus") {
      tableResults.rows[21].cells[0].textContent = "M. semimembranosus";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. biceps femoris - Caput longum") {
      tableResults.rows[22].cells[0].textContent = "M. biceps femoris - Caput longum";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    if (inputValue == "M. biceps femoris - Caput breve") {
      tableResults.rows[23].cells[0].textContent = "M. biceps femoris - Caput breve";
      answerInput.value = '';
      musclecounter = musclecounter + 1;
    }
    
    if (musclecounter >= 23) {
      document.getElementById("instructions").innerHTML = "Klicke nun auf die Felder und gib die richtige Antwort ein. Die Funktion bezieht sich auf das Hüftgelenk.";
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
 