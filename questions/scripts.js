document.addEventListener('click', (e) => {
    const questionButton = e.target.closest('[data-question-button]');
    if (questionButton) {
        const questionsWrapperBlock = questionButton.closest('.questions_item');
        const questionsContentLineBlock = questionsWrapperBlock.querySelector('.questions_content-line');
        const questionsContentAnswerBlock = questionsWrapperBlock.querySelector('.questions_content-answer');

        questionsContentLineBlock.classList.toggle('active');
        questionsContentAnswerBlock.classList.toggle('active');

        const arrow = questionsWrapperBlock.querySelector('.questions_content-question');

        if (arrow.classList.contains('questions_content-arrow-up')) {

            arrow.classList.remove('questions_content-arrow-up');
            arrow.classList.add('questions_content-arrow-down');
        } else if (arrow.classList.contains('questions_content-arrow-down')) {

            arrow.classList.remove('questions_content-arrow-down');
            arrow.classList.add('questions_content-arrow-up');
        }

    }
})