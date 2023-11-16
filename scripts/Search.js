function filterQuizzes(keyword) {
    const allQuizPreviews = document.querySelectorAll('.quiz-preview');

    allQuizPreviews.forEach(quizPreview => {
        const keywords = quizPreview.querySelector('.quiz-picture').getAttribute('data-keywords').toLowerCase().split(',');
        const quizInfo = quizPreview.querySelector('.quiz-info').textContent.toLowerCase();

        if (keywords.some(kw => kw.trim() === keyword.toLowerCase()) || quizInfo.includes(keyword.toLowerCase())) {
            quizPreview.style.display = 'block';
        } else {
            quizPreview.style.display = 'none';
        }
    });
}

