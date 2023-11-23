const searchInput = document.getElementById('textInput');
const stopButton = document.getElementById('stopButton');
const restartButton = document.getElementById('restartButton'); // Add a Restart button
const answers = [
  { word: "Limbus acetabuli", abbreviations: [""] },
  { word: "Fossa acetabuli", abbreviations: [""] },
  { word: "Facies lunata", abbreviations: [""] },
  { word: "Incisura acetabuli", abbreviations: [""] },
  { word: "Foramen obturatum", abbreviations: [""] },
  { word: "Corpus ossis pubis", abbreviations: [""] },
  { word: "Ramus superior ossis pubis", abbreviations: [""] },
  { word: "Ramus inferior ossis pubis", abbreviations: [""] },
  { word: "Facies symphysialis", abbreviations: [""] },
  { word: "Tuberculum pubicum", abbreviations: [""] },
  { word: "Crista pubica", abbreviations: [""] },
  { word: "Pecten ossis pubis", abbreviations: [""] },
  { word: "Linea arcuata ossis ilii", abbreviations: [""] },
  { word: "Eminentia iliopubica", abbreviations: [""] },
  { word: "Sulcus obturatorius", abbreviations: [""] },
  { word: "Corpus ossis ilii", abbreviations: [""] },
  { word: "Sulcus supraacetabularis", abbreviations: [""] },
  { word: "Facies glutea", abbreviations: [""] },
  { word: "Fossa iliaca", abbreviations: [""] },
  { word: "Tuberositas iliaca", abbreviations: [""] },
  { word: "Facies auricularis", abbreviations: [""] },
  { word: "Crista iliaca", abbreviations: [""] },
  { word: "Spina iliaca anterior superior", abbreviations: [""] },
  { word: "Labium externum", abbreviations: [""] },
  { word: "Labium internum", abbreviations: [""] },
  { word: "Linea intermedia", abbreviations: [""] },
  { word: "Tuberculum iliacum", abbreviations: [""] },
  { word: "Spina iliaca posterior superior", abbreviations: [""] },
  { word: "Spina iliaca posterior inferior", abbreviations: [""] },
  { word: "Spina iliaca anterior inferior", abbreviations: [""] },
  { word: "Linea glutea inferior", abbreviations: [""] },
  { word: "Linea glutea anterior", abbreviations: [""] },
  { word: "Linea glutea posterior", abbreviations: [""] },
  { word: "Corpus ossis ischii", abbreviations: [""] },
  { word: "Ramus ossis ischii", abbreviations: [""] },
  { word: "Spina ischiadica", abbreviations: [""] },
  { word: "Incisura ischiadica major", abbreviations: [""] },
  { word: "Incisura ischiadica minor", abbreviations: [""] },
  { word: "Tuber ischiadicum", abbreviations: [""] }
  // Add more answers
];
let countEntries = answers.length; // Anzahl der Einträge im Array
let multipliedCount = countEntries * 20; // Multipliziert die Anzahl der Einträge mit 20

let timeRemaining = multipliedCount; // Ändere dies auf deine gewünschte Zeit
let timerInterval = null;
let timerStarted = false;
let allWordsFound = false; // Hinzugefügte Variable, um den Status aller Wörter zu speichern

document.getElementById('output').textContent = multipliedCount;

function startCountdown() {
  timerStarted = true; // Setze timerStarted auf true, wenn der Timer gestartet wird
  timerInterval = setInterval(updateTimer, 1000);
}

function updateTimer() {
  const timerElement = document.getElementById('timer');

  if (timeRemaining <= 10) {
    timerElement.style.color = 'red';
  } else {
    timerElement.style.color = 'black';
  }

  timerElement.textContent = `Verbleibende Zeit: ${timeRemaining} Sekunden`;

  if (timeRemaining <= 0 || allWordsFound) {
    stopQuiz();
  } else {
    timeRemaining--;
  }
}

searchInput.addEventListener('input', () => {
  const input = searchInput.value.trim().toLowerCase();

  if (!timerStarted) {
    startCountdown();
  }

  if (input === '') {
    return;
  }

  answers.forEach((answer, index) => {
    const word = answer.word;
    const lowerCaseWord = word.toLowerCase();
    const abbreviations = answer.abbreviations.map(abbr => abbr.toLowerCase());

    if (!answers[index].found && (lowerCaseWord === input || abbreviations.includes(input))) {
      searchInput.value = '';
      document.getElementById(`${index + 1}`).innerHTML = `${index + 1}  ${word}`;
      answers[index] = { ...answers[index], found: true };

      if (answers.every(item => item.found)) {
        allWordsFound = true;
        const gratulation = document.querySelector('.gratulation');
        gratulation.style.display = 'block';
        console.log('Congratulations');
        stopButton.style.display = 'none';
        restartButton.style.display = 'block';
      }

      const answerLabel = `${index + 1}`;
      const divs = document.querySelectorAll('.label');

      // Iteriere durch alle Labels und entferne das Fettdruck-Styling
      divs.forEach(div => {
        if (div.textContent === answerLabel) {
          div.style.fontWeight = 'normal'; // Setze auf 'normal', um das Fettdruck-Styling zu entfernen
        }
      });
    }
  });
});


stopButton.addEventListener('click', stopQuiz);
restartButton.addEventListener('click', () => {
  location.reload(); // Lade die Seite neu, wenn die Neustart-Schaltfläche geklickt wird
});

function stopQuiz() {
  clearInterval(timerInterval); // Stoppe den Timer, wenn der Benutzer auf "Stop" klickt
  answers.forEach((answer, index) => {
    if (!answer.found) {
      const answerElement = document.getElementById(`${index + 1}`);
      answerElement.innerHTML = `<span style="color: red">${index + 1}  ${answer.word}</span>`;
    }
  });

  const stopMessage = document.querySelector('.stop-message');
  stopMessage.style.display = 'block';
  searchInput.disabled = true;

  // Verberge die Stop-Schaltfläche und zeige die Neustart-Schaltfläche
  stopButton.style.display = 'none';
  restartButton.style.display = 'block';
}

// Anfangs die Neustart-Schaltfläche ausblenden
restartButton.style.display = 'none';

// Rufe die startCountdown-Funktion auf, um den Timer zu starten, wenn die Eingabe beginnt