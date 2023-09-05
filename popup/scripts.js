document.addEventListener('click', (e) => {
    const popupButtonClose = e.target.closest('[data-popup-button-close]');

    if (popupButtonClose) {
        popupButtonClose.closest('.popup-wrapper').style['display'] = 'none';
    }
})