document.addEventListener('click', (e) => {
    const popupButtonClose = e.target.closest('[data-popup-button-close]');

    if (popupButtonClose) {
        popupButtonClose.closest('.popup-wrapper').style['display'] = 'none';
    }
})

document.addEventListener('click', (e) => {
    const popupButtonClose = e.target.closest('[data-popup-city-mini-button-close]');

    if (popupButtonClose) {
        popupButtonClose.closest('.popup-city-mini').style['display'] = 'none';
    }
})