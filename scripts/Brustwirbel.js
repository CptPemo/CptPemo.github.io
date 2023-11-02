const answers = ['Corpus vertebrae', 'Lamina arcus vertebrae', 'Pediculus arcus vertebrae','Proc. spinosus', 
                 'Proc. transversus','Fovea costalis', 'Fovea costalis proc. transversi', 'Foramen vertebrale', 
                 'Proc. articularis superior', 'Proc. articularis inferior'];          


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
