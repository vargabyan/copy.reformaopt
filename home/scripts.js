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

const products_swiper = new Swiper('.products_swiper', {
    direction: 'horizontal',
    loop: true,

    navigation: {
        nextEl: '.products_swiper_button-next',
        prevEl: '.products_swiper_button-prev',
    },

});

const reviews_swiper = new Swiper('.reviews_swiper', {
    direction: 'horizontal',
    loop: true,

    navigation: {
        nextEl: '.reviews_swiper-button-prev',
        prevEl: '.reviews_swiper-button-next',
    },

    // slidesPerView: 2,
});