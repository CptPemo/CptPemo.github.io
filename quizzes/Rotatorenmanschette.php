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
    }

    footer{
        margin-top: 50px;
    }

</style>
    
</head>

<body>

    <header class="header">
        <?php include '../header.html';?>           
    </header>

    <div><h1 style="font-size: 40px; font-weight:400; margin: 1%;">Rotatorenmanschette<h1></div>
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
            <td id="11"></td>
            <td id="12"></td>
            <td id="13"></td>
            <td id="14"></td>
            <td id="15"></td>
        </tr>
        <tr>
            <td id="21"></td>
            <td id="22"></td>
            <td id="23"></td>
            <td id="24"></td>
            <td id="25"></td>
          </tr>
          <tr>
            <td id="31"></td>
            <td id="32"></td>
            <td id="33"></td>
            <td id="34"></td>
            <td id="35"></td>
          </tr>
          <tr>
            <td id="41"></td>
            <td id="42"></td>
            <td id="43"></td>
            <td id="44"></td>
            <td id="45"></td>
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
            <td id="11">M. supraspinatus</td>
            <td id="12">Fossa supraspinata</td>
            <td id="13">Tuberculum majus</td>
            <td id="14">N. suprascapularis</td>
            <td id="15">Abduktion</td>
        </tr>
        <tr>
            <td id="21">M. infraspinatus</td>
            <td id="22">Fossa infraspinata</td>
            <td id="23">Tuberculum majus</td>
            <td id="24">N. suprascapularis</td>
            <td id="25">Adduktion, Außenrotation</td>
          </tr>
          <tr>
            <td id="31">M. teres minor</td>
            <td id="32">Scapula</td>
            <td id="33">Tuberculum majus</td>
            <td id="34">N. axillaris</td>
            <td id="35">Adduktion, Außenrotation</td>
          </tr>
          <tr>
            <td id="41">M. subscapularis</td>
            <td id="42">Facies costalis</td>
            <td id="43">Tuberculum minus</td>
            <td id="44">Nn. subscapulares</td>
            <td id="45">Innenrotation, Adduktion</td>
        </tr>

      </table>
      <?php include '../popup.html'; ?>

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


</script> 
 