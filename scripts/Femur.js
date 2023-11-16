const searchInput = document.getElementById('textInput');
const stopButton = document.getElementById('stopButton');
const restartButton = document.getElementById('restartButton'); // Add a Restart button
const answers = [
  { word: "Tuberculum adductorium", abbreviations: [""] },
  { word: "Trochanter major", abbreviations: [""] },
  { word: "Facies anterior", abbreviations: [""] },
  { word: "Caput femoris", abbreviations: [""] },
  { word: "Linea intertrochanterica", abbreviations: [""] },
  { word: "Facies patellaris", abbreviations: [""] },
  { word: "Epicondylus medialis", abbreviations: [""] },
  { word: "Corpus femoris", abbreviations: [""] },
  { word: "Trochanter minor", abbreviations: [""] },
  { word: "Collum femoris", abbreviations: [""] },
  { word: "Epicondylus lateralis", abbreviations: [""] },
  { word: "Sulcus popliteus", abbreviations: [""] },
  { word: "Fossa trochanterica", abbreviations: [""] },
  { word: "Trochanter tertius", abbreviations: [""] },
  { word: "Tuberositas glutea", abbreviations: [""] },
  { word: "Linea pectinea", abbreviations: [""] },
  { word: "Linea aspera", abbreviations: [""] },
  { word: "Labium laterale", abbreviations: [""] },
  { word: "Labium mediale", abbreviations: [""] },
  { word: "Condylus medialis", abbreviations: [""] },
  { word: "Facies lateralis", abbreviations: [""] },
  { word: "Facies medialis", abbreviations: [""] },
  { word: "Facies poplitea", abbreviations: [""] },
  { word: "Linea intercondylaris", abbreviations: [""] },
  { word: "Condylus lateralis", abbreviations: [""] },
  { word: "Fossa intercondylaris", abbreviations: [""] },
  { word: "Fovea capitis", abbreviations: [""] },
  { word: "Tuberculum quadratum", abbreviations: [""] },
  { word: "Christa intertrochanterica", abbreviations: [""] },
  { word: "Labium mediale", abbreviations: [""] }
  // Add more answers
];
let timeRemaining = 200; // Ändere dies auf deine gewünschte Zeit
let timerInterval = null;
let timerStarted = false;
let allWordsFound = false; // Hinzugefügte Variable, um den Status aller Wörter zu speichern

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
    startCountdown(); // Starte den Timer, wenn die erste Eingabe erkannt wird
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
        allWordsFound = true; // Setze den Status auf "true", wenn alle Wörter gefunden sind
        const gratulation = document.querySelector('.gratulation');
        gratulation.style.display = 'block';
        console.log('Congratulations');
        // Verberge die Stop-Schaltfläche und zeige die Neustart-Schaltfläche
        stopButton.style.display = 'none';
        restartButton.style.display = 'block';
      }

      const answerLabel = `${index + 1}`;
      const divs = document.querySelectorAll('.label');

      for (const div of divs) {
        if (div.textContent === answerLabel) {
          div.style.fontWeight = '200';
          break;
        }
      }
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
