const products_swiper = new Swiper('.products_swiper', {
    direction: 'horizontal',
    loop: true,

    navigation: {
        nextEl: '.products_swiper_button-next',
        prevEl: '.products_swiper_button-prev',
    },

    slidesPerView: 4,
});