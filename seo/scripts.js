document.addEventListener('click', (e) => {
    const seoButton = e.target.closest('[data-seo-button]');

    if (seoButton) {
        const seoBlock = seoButton.closest('.seo');

        seoBlock.querySelector('.seo_container').classList.add('seo_container_open');
        seoButton.classList.remove('seo_button-active');
    }
})

document.addEventListener('DOMContentLoaded', () => {
    const seoButton = document.querySelector('[data-seo-button]');
    const seoContainer = document.querySelector('.seo_container');

    if (seoContainer) {
        const sepContentTextLength = seoContainer.textContent.length

        if (sepContentTextLength > 391) {

            seoButton.classList.add('seo_button-active');
        }
    }
})