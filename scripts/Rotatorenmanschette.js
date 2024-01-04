const searchInput = document.getElementById('textInput');
const table = document.querySelector('table');
const stopButton = document.getElementById('stopButton');
const restartButton = document.getElementById('restartButton');

let wordCount = 0;
const correctWords = [
  "Muskel", "Ursprung", "Ansatz", "Innervation", "Funktion",
  "M. supraspinatus", "Fossa supraspinata", "Tuberculum majus", "N. suprascapularis", "Abduktion",
  "M. infraspinatus", "Fossa infraspinata", "Tuberculum majus", "N. suprascapularis", "Adduktion, Außenrotation"
  // Weitere Wörter hier hinzufügen
];

searchInput.addEventListener('input', () => {
  const input = searchInput.value.trim().toLowerCase();

  if (input === '' || wordCount >= 15 || !correctWords.includes(input)) {
    return;
  }

  wordCount++;

  // Zielzellenindex basierend auf der Anzahl der gefundenen Wörter
  const targetIndex = wordCount * 2 - 2;

  const foundRow = table.insertRow(targetIndex);
  const numberCell = foundRow.insertCell(0);
  const wordCell = foundRow.insertCell(1);

  numberCell.textContent = wordCount.toString();
  wordCell.textContent = input;

  // Mache die hinzugefügte Zeile sichtbar
  foundRow.style.display = 'table-row';
  // Mache die Tabelle und Zellen sichtbar, falls noch nicht geschehen
  table.style.display = 'table';
  numberCell.style.display = 'table-cell';
  wordCell.style.display = 'table-cell';

  searchInput.value = '';

  if (wordCount >= 15) {
    const gratulation = document.querySelector('.gratulation');
    gratulation.style.display = 'block';
    console.log('Congratulations');
    stopButton.style.display = 'none';
    restartButton.style.display = 'block';
  }
});

stopButton.addEventListener('click', stopQuiz);
restartButton.addEventListener('click', () => {
  location.reload();
});

function stopQuiz() {
  const stopMessage = document.querySelector('.stop-message');
  stopMessage.style.display = 'block';

  stopButton.style.display = 'none';
  restartButton.style.display = 'block';
}
