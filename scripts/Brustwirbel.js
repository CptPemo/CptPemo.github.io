const searchInput = document.getElementById('textInput');
const answers = [
  {word: "Corpus vertebrae" , abbreviations: [""]},
  {word: "Lamina arcus vertebrae" , abbreviations: [""]},
  {word: "Pediculus arcus vertebrae" , abbreviations: [""]},
  {word: "Processus spinosus" , abbreviations: ["Proc spinosus " , "Proc. spinosus"]},              
  {word: "Processus transversus" , abbreviations: ["Proc transversus" , "Proc. transversus"]},
  {word: "Fovea costalis" , abbreviations: [""]}, 
  {word: "Fovea costalis processus transversi" , abbreviations: ["Fovea costalis proc transversi" , "Fovea costalis proc. transversi"]},
  {word: "Foramen vertebrale", abbreviations: [""]},
  {word: "Processus articularis superior" , abbreviations: ["Proc articularis superior" , "Proc. articularis superior"]}, 
  {word: "Processus articularis inferior" , abbreviations: ["Proc articularis inferior" , "Proc. articularis inferior"]} 
];   

searchInput.addEventListener('input', () => {
  const input = searchInput.value.trim().toLowerCase();

  // Überprüfe, ob das Eingabefeld leer ist
  if (input === '') {
    return;
  }

  answers.forEach((answer, index) => {
    const word = answer.word;

    // Ignoriere Groß- und Kleinschreibung nur bei der Eingabe des Benutzers
    const lowerCaseWord = word.toLowerCase();
    const abbreviations = answer.abbreviations.map(abbr => abbr.toLowerCase());

    if (!answers[index].found && (lowerCaseWord === input || abbreviations.includes(input))) {
      // Hier wurde eine Übereinstimmung gefunden, aber nur, wenn das Wort nicht bereits erraten wurde
      searchInput.value = '';

      // Verwende das ursprüngliche Wort, ohne Groß- und Kleinschreibung zu ändern
      const resultElement = document.getElementById(`${index + 1}`);
      resultElement.innerHTML = `${index + 1} ${word}`;
      resultElement.style.fontWeight = 'normal'; // Ändere das font-weight auf "normal"

      // Hier ändern wir das font-weight für <div> Elemente mit der Klasse "answer" und der ID "index+1"
      const answerElement = document.querySelector(`.answer#${index + 1}`);
      if (answerElement) {
        answerElement.style.fontWeight = 'normal';
      }

      answers[index] = { ...answers[index], found: true };
      console.log(answers);

      if (answers.every(item => item.found)) {
        const gratulation = document.querySelector('.gratulation');
        gratulation.style.display = 'block';
        console.log('Gratuliere');
      }
    }
  });
});



/*
const answers = [
  {word: "Corpus vertebrae" abbreviations: [""]}
  {word: "Lamina arcus vertebrae" abbreviations: [""]}
  {word: "Pediculus arcus vertebrae" abbreviations: [""]}
  {word: "Processus spinosus" abbreviations: ["Proc spinosus"]}              
  {word: "Processus transversus" abbreviations: ["Proc transversus" , "Proc. transversus"]}
  {word: "Fovea costalis" abbreviations: [""]} 
  {word: "Fovea costalis processus transversi" abbreviations: ["Fovea costali proc transversi" , "Fovea costalis proc. transversi"]}
  {word: "Foramen vertebrale" abbreviations: [""]}
  {word: "Processus articularis superior" abbreviations: ["Proc articularis superior" , "Proc. articularis superior"]} 
  {word: "Processus articularis inferior" abbreviations: ["Proc articularis inferior" , "Proc. articularis inferior"]} 
];          

*/

/* Alte Wortsammlung
const answers = ['Corpus vertebrae', 'Lamina arcus vertebrae', 'Pediculus arcus vertebrae','Proc. spinosus', 
                 'Proc. transversus','Fovea costalis', 'Fovea costalis proc. transversi', 'Foramen vertebrale', 
                 'Proc. articularis superior', 'Proc. articularis inferior'];  
*/


/*
function checkAnswer(input) {
    const lowerCaseInput = input.toLowerCase(); // Um Groß- und Kleinschreibung zu ignorieren
    for (const entry of wordDatabase) {
        if (entry.word.toLowerCase() === lowerCaseInput) {
            return true; // Die Antwort ist korrekt
        }
        for (const abbreviation of entry.abbreviations) {
            if (abbreviation.toLowerCase() === lowerCaseInput) {
                return true; // Die Abkürzung ist korrekt
            }
        }
*/



/* Alter Code

const searchInput = document.getElementById('textInput');
  
  searchInput.addEventListener('input', () => {
    const input = searchInput.value //.trim().toLowerCase();
    

    answers.forEach(item => {
      const itemText = item //.trim().toLowerCase();
      
      if (itemText === input) {
        
        searchInput.value = '';

        
        const answerIndex = answers.indexOf(input);
        document.getElementById(`${answerIndex + 1}`).innerHTML = `${answerIndex + 1}  ${input}`; // darstellen der richtigen Antwort
        answers[`${answerIndex}`] = false;
        console.log(answers);
        if(answers.every(item => item === false)){  //Wenn alle Worte erraten sind, Gratulationsnachricht.
          const gratulation =  document.querySelector('.gratulation')
          gratulation.style.display = 'block';
          console.log('Gratuliere');
        }
        


        const answerLabel = `${answerIndex + 1}`; // Label wird nicht mehr fett gedruckt.
        const divs = document.querySelectorAll('.label');

        for (const div of divs) {  
            if (div.textContent === answerLabel) {
            div.style.fontWeight = '200'; 
            break; // Sobald das gesuchte Div gefunden wurde, Schleife abbrechen
            }
      }

      }
    });
  });

*/
/* CHATGPT funktionstüchtig
const searchInput = document.getElementById('textInput');
const answers = [
  {word: "Corpus vertebrae" , abbreviations: [""]},
  {word: "Lamina arcus vertebrae" , abbreviations: [""]},
  {word: "Pediculus arcus vertebrae" , abbreviations: [""]},
  {word: "Processus spinosus" , abbreviations: ["Proc spinosus ", "Proc. spinosus"]},              
  {word: "Processus transversus" , abbreviations: ["Proc transversus" , "Proc. transversus"]},
  {word: "Fovea costalis" , abbreviations: [""]}, 
  {word: "Fovea costalis processus transversi" , abbreviations: ["Fovea costali proc transversi" , "Fovea costalis proc. transversi"]},
  {word: "Foramen vertebrale", abbreviations: [""]},
  {word: "Processus articularis superior" , abbreviations: ["Proc articularis superior" , "Proc. articularis superior"]}, 
  {word: "Processus articularis inferior" , abbreviations: ["Proc articularis inferior" , "Proc. articularis inferior"]} 
];   

searchInput.addEventListener('input', () => {
  const input = searchInput.value.trim().toLowerCase();

  answers.forEach((answer, index) => {
    const word = answer.word.toLowerCase();
    const abbreviations = answer.abbreviations.map(abbr => abbr.toLowerCase());

    if (word === input || abbreviations.includes(input)) {
      // Hier wurde eine Übereinstimmung gefunden
      searchInput.value = '';

      // Deine weiteren Aktionen hier
      document.getElementById(`${index + 1}`).innerHTML = `${index + 1}  ${word}`;
      // ...

      answers[index] = { ...answers[index], found: true };
      console.log(answers);

      if (answers.every(item => item.found)) {
        const gratulation = document.querySelector('.gratulation');
        gratulation.style.display = 'block';
        console.log('Gratuliere');
      }
    }
  });
});
*/

/* Alter code -----
function checkWord() {
    const input = document.getElementById("textInput").value;
    const resultElement = document.getElementById("result");    
  
    if (answers.includes(input)) {
        const answerIndex = answers.indexOf(input);
        document.getElementById(`${answerIndex + 1}`).innerHTML = `${answerIndex + 1}  ${input}`; // darstellen der richtigen Antwort



        const answerLabel = `${answerIndex + 1}`; // Label wird nicht mehr fett gedruckt.
        const divs = document.querySelectorAll('.label');

        for (const div of divs) {  
            if (div.textContent === answerLabel) {
            div.style.fontWeight = '200'; 
            break; // Sobald das gesuchte Div gefunden wurde, Schleife abbrechen
            }
      }
          
    } 
  }*/
