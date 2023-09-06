document.addEventListener('click', (e) => {
    const button = e.target.closest('.characteristic_menu_item');

    if (button) {
        const allButton = document.querySelectorAll('.characteristic_menu_item');
        const hiddenBlock = document.querySelectorAll('.characteristic_hidden-item');

        allButton.forEach((DOMElement, index) => {
            if (button === DOMElement) {
                hiddenBlock[index].classList.add('hidden-item-active');
                allButton[index].classList.add('menu_item-active');
            } else {
                hiddenBlock[index].classList.remove('hidden-item-active');
                allButton[index].classList.remove('menu_item-active');
            }
        })
    }
})

document.addEventListener('mouseover', (e) => {
    const CharacteristicColText = e.target.closest('[data-characteristic-col-text]');

    if (CharacteristicColText) {
        const currentCol = CharacteristicColText.closest('.for-price_col');
        const allElementP = currentCol.querySelectorAll('[data-characteristic-col-text]');

        allElementP.forEach((DOMElement, ElemIndex) => {
            if (DOMElement === CharacteristicColText) {
                const currentCharacteristicRow = CharacteristicColText.closest('.for-price_row');
                const allCharacteristicCol = currentCharacteristicRow.querySelectorAll('[data-characteristic-col]');

                allCharacteristicCol.forEach((col) => {
                    const selectCol = col.querySelectorAll('[data-characteristic-col-text]')[ElemIndex];
                    selectCol.classList.add('characteristic_hidden_line-active');
                })
            }
        })
    }
})

document.addEventListener('mouseout', (e) => {
    const CharacteristicColText = e.target.closest('[data-characteristic-col-text]');

    if (CharacteristicColText) {
        const currentCol = CharacteristicColText.closest('.for-price_col');
        const allElementP = currentCol.querySelectorAll('[data-characteristic-col-text]');

        allElementP.forEach((DOMElement, ElemIndex) => {
            if (DOMElement === CharacteristicColText) {
                const currentCharacteristicRow = CharacteristicColText.closest('.for-price_row');
                const allCharacteristicCol = currentCharacteristicRow.querySelectorAll('[data-characteristic-col]');

                allCharacteristicCol.forEach((col) => {
                    const selectCol = col.querySelectorAll('[data-characteristic-col-text]')[ElemIndex];
                    selectCol.classList.remove('characteristic_hidden_line-active');
                })
            }
        })
    }
})