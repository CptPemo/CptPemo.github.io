function ladeUndSetzeGespeichertenSpielmodus() {
  const gespeicherterModus = localStorage.getItem('ausgewaehlterSpielmodus');
  
  // Überprüfen, ob ein gespeicherter Modus vorhanden ist
  if (gespeicherterModus === 'ModusA') {
      spielModusA(); // Lade Modus A
  } else if (gespeicherterModus === 'ModusB') {
      spielModusB(); // Lade Modus B
  } else {
      // Hier kannst du eine Standardaktion ausführen, falls kein Modus gespeichert ist
      // Zum Beispiel: Lade einen Standardmodus oder frage den Benutzer nach seinem Modus
  }
}

// Aufruf der Funktion, um den gespeicherten Spielmodus zu laden und umzusetzen, wenn die Seite geladen wird
window.addEventListener('load', function() {
  ladeUndSetzeGespeichertenSpielmodus();
});





// Modus A
function spielModusA() {
  



  const searchInput = document.getElementById('textInput');
const stopButton = document.getElementById('stopButton');
const restartButton = document.getElementById('restartButton'); // Add a Restart button
const answers = [
  { word: "Arcus anterior", abbreviations: ["Arcus ant"] },
  { word: "Arcus posterior", abbreviations: ["Arcus post"] },
  { word: "Tuberculum anterius", abbreviations: [""] },
  { word: "Tuberculum posterius", abbreviations: [""] },
  { word: "Processus transversus", abbreviations: ["Proc transversus", "Proc. transversus"] },
  { word: "Foramen transversarium", abbreviations: [""] },
  { word: "Facies articularis superior", abbreviations: ["Facies articularis sup"] },
  { word: "Foramen vertebrale", abbreviations: [""] },
  { word: "Massae laterales", abbreviations: [""] },
  { word: "Fovea dentis", abbreviations: [""] },
  { word: "Sulcus arteriae vertebralis", abbreviations: ["Sulcus a vertebralis", "Sulcus a. vertebralis"] },
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


console.log("Spielmodus A geladen");
}

// Modus B
function spielModusB() {
  
  // Hier kommt der Code für Spielmodus B


// Event-Listener für die Labels, um das Schriftgewicht zu ändern
const labelElements = document.querySelectorAll('.label');
labelElements.forEach(label => {
  label.addEventListener('mouseover', () => {
    label.style.cursor = 'pointer'; // Ändert den Mauszeiger, wenn über das Label geschwebt wird
     
  });

  label.addEventListener('mouseout', () => {
    label.style.cursor = 'default'; // Setzt den Mauszeiger auf den Standardwert zurück
  });

  label.addEventListener('click', () => {
    const number = parseInt(label.dataset.number);

    if (!label.dataset.found && !answers[number - 1].found) {
      resetLabelWeights(); // Zurücksetzen des Schriftgewichts vor der Hervorhebung des ausgewählten Labels
      label.style.fontWeight = 'bold';
      selectNumber(number);

      const answerDiv = document.getElementById(number);
      if (answerDiv) {
        answerDiv.style.fontWeight = 'bold';
        label.style.fontWeight = 'bold'; // Setze auch das Label auf fett
      }
    }
  });
});



function resetLabelWeights() {
  const labels = document.querySelectorAll('.label');
  labels.forEach(label => {
    label.style.fontWeight = 'normal';
  });

  const answers = document.querySelectorAll('.answer');
  answers.forEach(answer => {
    answer.style.fontWeight = 'normal';
  });
}  
const searchInput = document.getElementById('textInput');
const stopButton = document.getElementById('stopButton');
const restartButton = document.getElementById('restartButton');


const answers = [
  { word: "Arcus anterior", abbreviations: ["Arcus ant"] },
  { word: "Arcus posterior", abbreviations: ["Arcus post"] },
  { word: "Tuberculum anterius", abbreviations: [""] },
  { word: "Tuberculum posterius", abbreviations: [""] },
  { word: "Processus transversus", abbreviations: ["Proc transversus", "Proc. transversus"] },
  { word: "Foramen transversarium", abbreviations: [""] },
  { word: "Facies articularis superior", abbreviations: ["Facies articularis sup"] },
  { word: "Foramen vertebrale", abbreviations: [""] },
  { word: "Massae laterales", abbreviations: [""] },
  { word: "Fovea dentis", abbreviations: [""] },
  { word: "Sulcus arteriae vertebralis", abbreviations: ["Sulcus a vertebralis", "Sulcus a. vertebralis"] },
  // Add more answers
];


const timerElement = document.getElementById('timer');
timerElement.style.display = 'none';

window.onload = function() {
  selectNumber(1);
};

let allWordsFound = false;
document.getElementById('output').textContent = answers.length * 20;

function selectNumber(number) {
  selectedNumber = number;
  console.log(`Ausgewählte Zahl: ${selectedNumber}`);

  const labels = document.querySelectorAll('.label');

  labels.forEach(label => {
    label.style.fontWeight = 'normal';
  });

  const selectedLabel = document.querySelector(`.label[data-number="${number}"]`);
  if (selectedLabel) {
    selectedLabel.style.fontWeight = 'bold';
  }
}

searchInput.addEventListener('input', () => {
  const input = searchInput.value.trim().toLowerCase();

  if (input === '') {
    return;
  }

  answers.forEach((answer, index) => {
    const word = answer.word;
    const lowerCaseWord = word.toLowerCase();
    const abbreviations = answer.abbreviations.map(abbr => abbr.toLowerCase());

    if (selectedNumber - 1 === index && !answers[index].found && (lowerCaseWord === input || abbreviations.includes(input))) {
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

      divs.forEach(div => {
        if (div.textContent === answerLabel) {
          div.style.fontWeight = 'normal';
          div.dataset.found = 'true'; // Markiere die gefundene Antwort
        }
      });

      if (answers[index].found) {
        const nextLabel = document.querySelector(`.label[data-number="${selectedNumber + 1}"]`);
        if (nextLabel && !nextLabel.dataset.found) {
          nextLabel.click();
        }
      }
    }
  });
});

stopButton.addEventListener('click', stopQuiz);
restartButton.addEventListener('click', () => {
  location.reload();
});

function stopQuiz() {
  answers.forEach((answer, index) => {
    if (!answer.found) {
      const answerElement = document.getElementById(`${index + 1}`);
      answerElement.innerHTML = `<span style="color: red">${index + 1}  ${answer.word}</span>`;
    }
  });

  const stopMessage = document.querySelector('.stop-message');
  stopMessage.style.display = 'block';
  searchInput.disabled = true;

  stopButton.style.display = 'none';
  restartButton.style.display = 'block';

  let greenCount = 0;
  let redCount = 0;

  answers.forEach(answer => {
    if (answer.found) {
      greenCount++;
    } else {
      redCount++;
    }
  });

  document.getElementById('green-count-value').textContent = greenCount;

  return { green: greenCount, red: redCount };
};

restartButton.style.display = 'none';



console.log("Spielmodus B geladen");

}


