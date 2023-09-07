const production_swiper = new Swiper('.production_swiper', {
    direction: 'horizontal',
    loop: true,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: '.production_swiper_button-next',
        prevEl: '.production_swiper_button-prev',
    },
});
document.addEventListener('click', (e) => {
    const dataPoductsCkeckbox = e.target.closest('[data-products-ckeckbox]');

    if (dataPoductsCkeckbox) {
        const chackboxs = dataPoductsCkeckbox.querySelectorAll('.products_filter_item')

        chackboxs.forEach((DOMElement) => {
            if (DOMElement.classList.contains('active')) {
                DOMElement.classList.remove('active')
            }
        })

        e.target.classList.add('active');
    }
})

document.addEventListener('DOMContentLoaded', () => {
    const wrapperBlock = document.querySelectorAll('.reviews_item');

    wrapperBlock.forEach((DOMElement) => {
        const ContentTextLength = DOMElement.querySelector('.reviews_item-bottom').textContent.length;

        if (ContentTextLength < 339) {
            DOMElement.querySelector('[data-reviews-button-reade-more]').style['display'] = 'none';
        }
    })
})

const products_showcases_swiper = new Swiper('.products_showcase_swiper', {
    direction: 'horizontal',
    loop: true,

    navigation: {
        nextEl: '.products_showcase_swiper_button-next',
        prevEl: '.products_showcase_swiper_button-prev',
    },

    slidesPerView: 4,
    slidesPerGroup: 4
});