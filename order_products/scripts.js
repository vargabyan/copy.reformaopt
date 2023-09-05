const swiper_thumbnail = new Swiper('.order-product_swiper-thumbnail', {
    direction: 'horizontal',
    loop: true,

    slidesPerView: 4,
});

const orderProduct_swiper = new Swiper('.order-product_swiper', {

    direction: 'horizontal',
    loop: true,

    navigation: {
        nextEl: '.order-product_swiper-button-next',
        prevEl: '.order-product_swiper-button-prev',
    },

    thumbs: {
        swiper: swiper_thumbnail,
    },
});

document.addEventListener('click', (e) => {
    const dataParamsCheckboxItemWithout = e.target.closest('[data-params_checkbox_item-without]');
    const dataParamsCheckboxItemWith = e.target.closest('[data-params_checkbox_item-with]');

    if (dataParamsCheckboxItemWithout) {
        const productParamsCheckbox = dataParamsCheckboxItemWithout.closest('.product_params_checkbox');

        productParamsCheckbox.querySelector('[data-params_checkbox_item-with]').classList.add('params_checkbox-active');
        productParamsCheckbox.querySelector('[data-params_checkbox_item-without]').classList.remove('params_checkbox-active');
    }
    if (dataParamsCheckboxItemWith) {
        const productParamsCheckbox = dataParamsCheckboxItemWith.closest('.product_params_checkbox');

        productParamsCheckbox.querySelector('[data-params_checkbox_item-with]').classList.remove('params_checkbox-active');
        productParamsCheckbox.querySelector('[data-params_checkbox_item-without]').classList.add('params_checkbox-active');
    }
})

document.addEventListener('click', (e) => {
    const pipsButtonDecrement = e.target.closest('[data-pips_button_decrement]');
    const pipsButtonIncrement = e.target.closest('[data-pips_button_increment]');

    if (pipsButtonDecrement) {
        const productPipsButtonsWrapper = pipsButtonDecrement.closest('.product_pips_buttons-wrapper');
        const productPipsValue = productPipsButtonsWrapper.querySelector('.product_pips-value');

        productPipsValue.value = +productPipsValue.value + 1
    }
    if (pipsButtonIncrement) {
        const productPipsButtonsWrapper = pipsButtonIncrement.closest('.product_pips_buttons-wrapper');
        const productPipsValue = productPipsButtonsWrapper.querySelector('.product_pips-value');

        productPipsValue.value = +productPipsValue.value + 1
    }
})