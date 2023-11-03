const searchInput = document.getElementById('textInput');
const stopButton = document.getElementById('stopButton');
const restartButton = document.getElementById('restartButton'); // Add a Restart button
const answers = [
  {word: "Corpus vertebrae" , abbreviations: [""]},
  {word: "Lamina arcus vertebrae" , abbreviations: [""]},
  {word: "Pediculus arcus vertebrae" , abbreviations: [""]},
  {word: "Processus spinosus" , abbreviations: ["Proc spinosus" , "Proc. spinosus"]},              
  {word: "Processus transversus" , abbreviations: ["Proc transversus" , "Proc. transversus"]},
  {word: "Fovea costalis" , abbreviations: [""]}, 
  {word: "Fovea costalis processus transversi" , abbreviations: ["Fovea costalis proc transversi" , "Fovea costalis proc. transversi"]},
  {word: "Foramen vertebrale", abbreviations: [""]},
  {word: "Processus articularis superior" , abbreviations: ["Proc articularis superior" , "Proc. articularis superior" , "Proc. articularis sup" , "Proc articularis sup"]}, 
  {word: "Processus articularis inferior" , abbreviations: ["Proc articularis inferior" , "Proc. articularis inferior" , "Proc. articularis inf" , "Proc articularis inf"]} 
  // Add more answers
];
let timeRemaining = 60; // Change this to your desired time
let timerInterval = null;
let timerStarted = false;

function startCountdown() {
  timerStarted = true; // Set timerStarted to true when the timer starts
  timerInterval = setInterval(updateTimer, 1000);
}

function updateTimer() {
  const timerElement = document.getElementById('timer');

  if (timeRemaining <= 10) {
    timerElement.style.color = 'red';
  } else {
    timerElement.style.color = 'black';
  }

  timerElement.textContent = `Time Left: ${timeRemaining} seconds`;

  if (timeRemaining <= 0) {
    stopQuiz();
  } else {
    timeRemaining--;
  }
}

searchInput.addEventListener('input', () => {
  const input = searchInput.value.trim().toLowerCase();

  if (!timerStarted) {
    startCountdown(); // Start the timer when the first input is detected
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
        const gratulation = document.querySelector('.gratulation');
        gratulation.style.display = 'block';
        console.log('Congratulations');
        // Hide the Stop button and show the Restart button
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
  location.reload(); // Reload the page when the Restart button is clicked
});

function stopQuiz() {
  clearInterval(timerInterval);
  answers.forEach((answer, index) => {
    if (!answer.found) {
      const answerElement = document.getElementById(`${index + 1}`);
      answerElement.innerHTML = `<span style="color: red">${index + 1}  ${answer.word}</span>`;
    }
  });

  const stopMessage = document.querySelector('.stop-message');
  stopMessage.style.display = 'block';
  searchInput.disabled = true;

  // Hide the Stop button and show the Restart button
  stopButton.style.display = 'none';
  restartButton.style.display = 'block';
}

// Initially hide the Restart button
restartButton.style.display = 'none';

// Call the startCountdown function to begin the timer when typing starts