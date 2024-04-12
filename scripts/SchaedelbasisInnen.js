const searchInput = document.getElementById('textInput');
const stopButton = document.getElementById('stopButton');
const restartButton = document.getElementById('restartButton'); // Add a Restart button
const answers = [
  { word: "Sinus frontalis", abbreviations: ["sinus frontalis"] },
  { word: "Foramen ceacum", abbreviations: [""] },
  { word: "Lamina cribrosa", abbreviations: [""] },
  { word: "Crista galli", abbreviations: [""] },
  { word: "Fossa cranii anterior", abbreviations: [""] },
  { word: "Ala minor ossis sphenoidalis", abbreviations: [""] },
  { word: "Canalis opticus", abbreviations: [""] },
  { word: "Fossa hypophysialis", abbreviations: [""] },
  { word: "Sulcus caroticus", abbreviations: [""] },
  { word: "Processus clinoideus anterior", abbreviations: [""] },
  { word: "Sulcus praechiasmaticus", abbreviations: [""] },
  { word: "Foramen rotundum", abbreviations: [""] },
  { word: "Foramen ovale", abbreviations: [""] },
  { word: "Foramne spinosum", abbreviations: [""] },
  { word: "Porus acusticus internus", abbreviations: [""] },
  { word: "Fossa cranii media", abbreviations: [""] },
  { word: "Hiatus canalis nervi petrosi minoris", abbreviations: [""] },
  { word: "Hiatus canalis nervi petrosi majoris", abbreviations: [""] },
  { word: "Foramen Lacerum", abbreviations: [""] },
  { word: "Foramen magnum", abbreviations: [""] }, //Nummer 20
  { word: "Clivus", abbreviations: [""] },
  { word: "Dorsum sellae", abbreviations: [""] },
  { word: "Processus clinoideus posterior", abbreviations: [""] },
  { word: "Canalis nervi hypoglossi", abbreviations: [""] },
  { word: "Foramen jugulare", abbreviations: [""] },
  { word: "Sulcus sinus sigmoidei", abbreviations: [""] },
  { word: "Sulcus sinus petrosi superiores", abbreviations: [""] },
  { word: "Fossa cranii posterior", abbreviations: [""] },
  { word: "Crista occipitalis interna", abbreviations: [""] },
  { word: "Protuberantia occiptalis interna", abbreviations: [""] },
  { word: "Sulcus sinus transversi", abbreviations: [""] }

  
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

  // Funktion um richtige und falsche Antwort zu zählen

  let greenCount = 0;
  let redCount = 0;

  answers.forEach(answer => {
    if (answer.found) {
      greenCount++;
    } else {
      redCount++;
    }
  });

  // Aktualisiere den Wert im HTML-Element
  document.getElementById('green-count-value').textContent = greenCount;

  return { green: greenCount, red: redCount };
}

// Anfangs die Neustart-Schaltfläche ausblenden
restartButton.style.display = 'none';

// Rufe die startCountdown-Funktion auf, um den Timer zu starten, wenn die Eingabe beginnt


