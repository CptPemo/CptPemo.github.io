function adjustFontSizeImmediately() {
  const labelElements = document.querySelectorAll('.label');

  labelElements.forEach(label => {
      label.style.cursor = 'pointer'; // Ändert den Mauszeiger, wenn über das Label geschwebt wird
      label.style.fontWeight = 'normal'; // Setzt die Schriftgröße auf normal
  });
}

// Aufruf der Funktion sofort nach dem Laden des Skripts
adjustFontSizeImmediately();

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





