const searchInput = document.getElementById('textInput');
const stopButton = document.getElementById('stopButton');
const restartButton = document.getElementById('restartButton'); // Add a Restart button
const answers = [
  { word: "Proc. palatinus maxillae", abbreviations: ["Proc palatinus maxillae", "Processus palatinus maxillae"] },
  { word: "Lamina horizontalis ossis palatini", abbreviations: ["Lamina horizontalis"] },
  { word: "Foramen infraorbitale", abbreviations: [""] },
  { word: "Tuber maxillae", abbreviations: [""] },
  { word: "Os zygomaticum", abbreviations: [""] },
  { word: "Fissura orbitalis inferior", abbreviations: [""] },
  { word: "Vomer", abbreviations: [""] },
  { word: "Choanen", abbreviations: ["Choane"] },
  { word: "Foramen incisivum", abbreviations: ["Fossa incisiva"] },
  { word: "Foramen palatinum majus", abbreviations: [""] },
  { word: "Foramina palatina minora", abbreviations: ["Foramen palatinum minus"] },
  { word: "Spina nasalis posterior", abbreviations: [""] },
  { word: "Lamina medialis processus pterigoidei", abbreviations: ["Lamina medialis proc pterigoidei"] },
  { word: "Lamina lateralis processus pterigoidei", abbreviations: ["Lamina lateralis proc pterigoidei"] },
  { word: "Hamulus", abbreviations: [""] },
  { word: "Fossa scaphoidea", abbreviations: [""] },
  { word: "Foramen lacerum", abbreviations: [""] },
  { word: "Crista infratemporalis", abbreviations: [""] },
  { word: "Foramen ovale", abbreviations: [""] },
  { word: "Foramen spinosum", abbreviations: [""] },
  { word: "Fissura sphenopetrosa", abbreviations: [""] },
  { word: "Sulcus tubae auditivae", abbreviations: [""] },
  { word: "Apertura externa canalis carotici", abbreviations: [""] },
  { word: "Fossa jugularis", abbreviations: [""] },
  { word: "Porus acusticus externus", abbreviations: [""] },
  { word: "Proc. styloideus", abbreviations: ["Proc styloideus", "Processus styloideus"] },
  { word: "Vagina processus styloidei", abbreviations: ["Vagina proc. styloidei","Vagina proc styloidei"] },
  { word: "Foramen stylomastoideum", abbreviations: [""] },
  { word: "Proc. mastoideus", abbreviations: ["Proc mastoideus", "Processus mastoideus"] },
  { word: "Fossa mandibularis", abbreviations: [""] },
  { word: "Tuberculum articulare", abbreviations: [""] },
  { word: "Proc. zygomaticus ossis temporalis", abbreviations: ["Proc zygomaticus ossis temporalis","Processus zygomaticus ossis temporalis","Proc zygomaticus","Proc. zygomaticus", "Processus zygomaticus"] },
  { word: "Corpus ossis sphenoidalis", abbreviations: [""] },
  { word: "Foramen magnum", abbreviations: [""] },
  { word: "Condyli occipitales", abbreviations: ["Condylus occipitalis"] },
  { word: "Canalis condylaris", abbreviations: [""] },
  { word: "Crista occipitalis externa", abbreviations: [""] },
  { word: "Protuberantia occipitalis externa", abbreviations: [""] }
  
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


