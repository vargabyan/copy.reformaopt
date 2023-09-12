document.addEventListener('click', (e) => {
    const buttonLearnMore = e.target.closest('.additional-information_button-learn-more');

    if (buttonLearnMore) {
        const parentElement = buttonLearnMore.closest('.container-width');
        const topBlock = parentElement.querySelector('.additional-information-top .additional-information-text');
        const bottomBlock = parentElement.querySelector('.additional-information-bottom');
        const opacityBlock = parentElement.querySelector('.additional-information_opacity-text');

        topBlock.style['height'] = 'min-content';
        topBlock.style['overflow'] = 'unset';
        bottomBlock.style['display'] = 'flex';
        buttonLearnMore.style['display'] = 'none';
        opacityBlock.style['display'] = 'none';
    }
})