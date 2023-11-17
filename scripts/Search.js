document.addEventListener('DOMContentLoaded', () => {
    function filterQuizzes(keyword) {
        const allQuizPreviews = document.querySelectorAll('.quiz-preview');
        const visibleQuizPreviews = [];

        allQuizPreviews.forEach(quizPreview => {
            const keywords = quizPreview.querySelector('.quiz-picture').getAttribute('data-keywords').toLowerCase().split(',');
            const quizInfo = quizPreview.querySelector('.quiz-info').textContent.toLowerCase();

            if (keywords.some(kw => kw.trim() === keyword.toLowerCase()) || quizInfo.includes(keyword.toLowerCase())) {
                visibleQuizPreviews.push(quizPreview);
            } else {
                quizPreview.classList.add('hidden'); // Markiere nicht passende Elemente
            }
        });

        visibleQuizPreviews.forEach((quizPreview, index) => {
            const col = (index % 4) + 1; // Anzahl der Spalten im Raster
            const row = Math.floor(index / 4) + 1; // Anzahl der Reihen im Raster
            quizPreview.style.gridColumn = `${col} / span 1`;
            quizPreview.style.gridRow = `${row} / span 1`;
            quizPreview.classList.remove('hidden'); // Zeige sichtbare Elemente
        });

        const hiddenElements = document.querySelectorAll('.quiz-preview.hidden');
        hiddenElements.forEach(element => {
            element.style.display = 'none';
        });
    }

    const searchInput = document.getElementById('searchInput'); // Annahme: Das Suchfeld hat die ID 'searchInput'

    searchInput.addEventListener('keydown', (event) => {
        if (event.key === 'Enter') {
            const searchTerm = event.target.value.trim().toLowerCase();
            filterQuizzes(searchTerm);
        }
    });

    searchInput.addEventListener('input', (event) => {
        const searchTerm = event.target.value.trim().toLowerCase();
        if (searchTerm === '') {
            location.reload(); // Seite neu laden, wenn Suchbegriff leer ist
        }
    });
});




/* function filterQuizzes(keyword) {
    const allQuizPreviews = document.querySelectorAll('.quiz-preview');
    const visibleQuizPreviews = [];

    allQuizPreviews.forEach(quizPreview => {
        const keywords = quizPreview.querySelector('.quiz-picture').getAttribute('data-keywords').toLowerCase().split(',');
        const quizInfo = quizPreview.querySelector('.quiz-info').textContent.toLowerCase();

        if (keywords.some(kw => kw.trim() === keyword.toLowerCase()) || quizInfo.includes(keyword.toLowerCase())) {
            visibleQuizPreviews.push(quizPreview);
        } else {
            quizPreview.classList.add('hidden'); // Markiere nicht passende Elemente
        }
    });

    visibleQuizPreviews.forEach((quizPreview, index) => {
        const col = (index % 4) + 1; // Anzahl der Spalten im Raster
        const row = Math.floor(index / 4) + 1; // Anzahl der Reihen im Raster
        quizPreview.style.gridColumn = `${col} / span 1`;
        quizPreview.style.gridRow = `${row} / span 1`;
        quizPreview.classList.remove('hidden'); // Zeige sichtbare Elemente
    });

    const hiddenElements = document.querySelectorAll('.quiz-preview.hidden');
    hiddenElements.forEach(element => {
        element.style.display = 'none';
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput'); // Annahme: Das Suchfeld hat die ID 'searchInput'

    searchInput.addEventListener('keydown', (event) => {
        if (event.key === 'Enter') {
            const searchTerm = event.target.value.trim().toLowerCase();
            filterQuizzes(searchTerm);
        }
    });
});







 function filterQuizzes(keyword) {
    const allQuizPreviews = document.querySelectorAll('.quiz-preview');
    const visibleQuizPreviews = [];

    allQuizPreviews.forEach(quizPreview => {
        const keywords = quizPreview.querySelector('.quiz-picture').getAttribute('data-keywords').toLowerCase().split(',');
        const quizInfo = quizPreview.querySelector('.quiz-info').textContent.toLowerCase();

        if (keywords.some(kw => kw.trim() === keyword.toLowerCase()) || quizInfo.includes(keyword.toLowerCase())) {
            visibleQuizPreviews.push(quizPreview);
        } else {
            quizPreview.classList.add('hidden'); // Markiere nicht passende Elemente
        }
    });

    // Verschiebe und zeige die sichtbaren Elemente an den Anfang des Rasters
    visibleQuizPreviews.forEach((quizPreview, index) => {
        const col = (index % 4) + 1; // Anzahl der Spalten im Raster
        const row = Math.floor(index / 4) + 1; // Anzahl der Reihen im Raster
        quizPreview.style.gridColumn = `${col} / span 1`;
        quizPreview.style.gridRow = `${row} / span 1`;
        quizPreview.classList.remove('hidden'); // Zeige sichtbare Elemente
    });

    // Verstecke nicht passende Elemente
    const hiddenElements = document.querySelectorAll('.quiz-preview.hidden');
    hiddenElements.forEach(element => {
        element.style.display = 'none';
    });
}
*/