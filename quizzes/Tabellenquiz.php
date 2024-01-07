<!DOCTYPE html>

<head>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">

<style>
    table{
        font-family: Raleway;
        border-collapse: collapse;
        width: 100%;
        border:1px solid black ;
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
        width: 100%;
    }


    .guess-bar{
        font-family: Raleway;
        width: 60%;
        font-size: 30px;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid black;
        border-radius: 3px;
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
    }

</style>
    
</head>

<body>
    <div><h1 style="font-size: 40px; font-weight:400;">Rotatorenmanschette<h1></div>
    <input class="guess-bar" id="textInput" type="text" placeholder="Los geht's!"> 
    <button class="check-button" id="checkButton"> Check </button>
    <button class="resign-button" id="resignButton"> Resign </button>
    <table class="tabelle" id="RotatorenmanschetteErgebnisse">

        <tr>
            <th>Muskel</th>
            <th>Ursprung</th>
            <th>Ansatz</th>
            <th>Innervation</th>
            <th>Funktion</th>
        </tr>
        <tr>
            <td id="0"></td>
            <td id="1"></td>
            <td id="2"></td>
            <td id="3"></td>
            <td id="4"></td>
        </tr>
        <tr>
            <td id="5"></td>
            <td id="6"></td>
            <td id="7"></td>
            <td id="8"></td>
            <td id="9"></td>
          </tr>
          <tr>
            <td id="10"></td>
            <td id="11"></td>
            <td id="12"></td>
            <td id="13"></td>
            <td id="14"></td>
          </tr>
          <tr>
            <td id="15"></td>
            <td id="16"></td>
            <td id="17"></td>
            <td id="18"></td>
            <td id="19"></td>
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
        <tr>
            <td id="0">M. supraspinatus</td>
            <td id="1">Fossa supraspinata</td>
            <td id="2">Tuberculum majus</td>
            <td id="3">N. suprascapularis</td>
            <td id="4">Abduktion</td>
        </tr>
        <tr>
            <td id="5">M. infraspinatus</td>
            <td id="6">Fossa infraspinata</td>
            <td id="7">Tuberculum majus</td>
            <td id="8">N. suprascapularis</td>
            <td id="9">Adduktion, Außenrotation</td>
          </tr>
          <tr>
            <td id="10">M. teres minor</td>
            <td id="11">Scapula</td>
            <td id="12">Tuberculum majus</td>
            <td id="13">N. axillaris</td>
            <td id="14">Adduktion, Außenrotation</td>
          </tr>
          <tr>
            <td id="15">M. subscapularis</td>
            <td id="16">Facies costalis</td>
            <td id="17">Tuberculum minus</td>
            <td id="18">Nn. subscapulares</td>
            <td id="19">Innenrotation, Adduktion</td>
        </tr>

      </table>
</body>

<script>

    let selectedCell = null; // für rahmen um ausgewählte zelle

    const table = document.getElementById('Rotatorenmanschette');
    const tableResults = document.getElementById('RotatorenmanschetteErgebnisse');

    const answerInput = document.getElementById('textInput');
    const checkButton = document.getElementById('checkButton');

    const answers = [
  { word: "M. supraspinatus", abbreviations: ["M supraspinatus", "m supraspinatus", "m. supraspinatus"] },
  { word: "Fossa supraspinata", abbreviations: [""] },
  { word: "Tuberculum majus", abbreviations: [""] },
  { word: "N. suprascapularis", abbreviations: ["N suprascapularis", "n suprascapularis", "n. suprascapularis"] },
  { word: "Abduktion", abbreviations: [""] },
  { word: "M. infraspinatus", abbreviations: [""] },
  { word: "Fossa infraspinata", abbreviations: [""] },
  { word: "Tuberculum majus", abbreviations: [""] },
  { word: "N. suprascapularis", abbreviations: ["N suprascapularis", "n suprascapularis", "n. suprascapularis"] },
  { word: "Adduktion, Außenrotation", abbreviations: [""] },
  { word: "M. teres minor", abbreviations: ["M teres minor"] },
  { word: "Scapula", abbreviations: [""] },
  { word: "Tuberculum majus", abbreviations: [""] },
  { word: "N. axillaris", abbreviations: [""] },
  { word: "Adduktion, Außenrotation", abbreviations: [""] },
  { word: "M. subscapularis", abbreviations: [""] },
  { word: "Facies costalis", abbreviations: [""] },
  { word: "Tuberculum minus", abbreviations: [""] },
  { word: "Nn. subscapulares", abbreviations: [""] },
  { word: "Adduktion, Innenrotation", abbreviations: [""] }
  
  // Add more answers
];

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

// Füge Event Listener zu den Zellen hinzu
const cells = document.querySelectorAll('td');
cells.forEach((cell, index) => {
  cell.addEventListener('click', () => {
    console.log("Row index: " + cell.closest('tr').rowIndex + " | Column index: " + cell.cellIndex);
    // Speichere den Zellenindex in der globalen Variable
    clickedCellIndex = { row: cell.closest('tr').rowIndex, cell: cell.cellIndex };
    
    console.log(clickedCellIndex);
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

 // Globale Variable zum Speichern des Zellenindex
 let clickedCellIndex = null;


 
// Event Listener für den Check-Button
checkButton.addEventListener('click', () => {
  const inputValue = answerInput.value;
  console.log(inputValue);

  // Überprüfe, ob eine Zelle geklickt wurde
  if (clickedCellIndex !== null) {
    // Extrahiere Zeilen- und Spaltenindizes
    const rowIndex = clickedCellIndex.row;
    const cellIndex = clickedCellIndex.cell;

    // Hier solltest du den entsprechenden Index für die Zelle herausfinden und dann den Inhalt setzen.
    //table.rows[rowIndex].cells[cellIndex].textContent = inputValue;

    
  console.log(inputValue);
  console.log(table.rows[clickedCellIndex.row].cells[clickedCellIndex.cell].textContent);
  if (inputValue === table.rows[clickedCellIndex.row].cells[clickedCellIndex.cell].textContent){
        console.log('noicy');
        tableResults.rows[rowIndex].cells[cellIndex].textContent = inputValue;
    };

    // Zurücksetzen der globalen Variable
    clickedCellIndex = null;
  }

});


resignButton.addEventListener('click', () => {
  
  console.log('resigned');
  tableResults.style.display = 'none';
  table.style.display = 'table';

});

// ...

function checkAnswer() {
  const inputValue = answerInput.value.toLowerCase(); // Benutzereingabe in Kleinbuchstaben umwandeln

  // Überprüfe, ob eine Zelle geklickt wurde
  if (clickedCellIndex !== null) {
    // Extrahiere Zeilen- und Spaltenindizes
    const rowIndex = clickedCellIndex.row;
    const cellIndex = clickedCellIndex.cell;

    // Überprüfe die Benutzerantwort und aktualisiere die Ergebnistabelle
    const correctAnswer = answers.find(answer => {
      const cellContent = table.rows[rowIndex].cells[cellIndex].textContent.toLowerCase(); // Zelleninhalt in Kleinbuchstaben umwandeln
      return answer.word.toLowerCase() === cellContent || answer.abbreviations.includes(cellContent);
    });

    if (correctAnswer) {
      tableResults.rows[rowIndex].cells[cellIndex].textContent = inputValue;
      answerInput.value = '';
      console.log('noicy');

      // ... Rest des Codes ...
    }
    
  } else {
    // ... Rest des Codes ...
  }
}

// ...



    
</script> 
 