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
    const checkbox = e.target.closest('.products_showcase_filter_item');

    if (checkbox) {
        const dataProductsCheckbox = checkbox.closest('[data-products-showcase-ckeckbox]');
        const allCheckbox = dataProductsCheckbox.querySelectorAll('.products_showcase_filter_item');

        allCheckbox.forEach((DOMElement) => {
            if (DOMElement.classList.contains('products_showcase_active')) {
                DOMElement.classList.remove('products_showcase_active')
            }
        })

        e.target.classList.add('products_showcase_active');
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


document.addEventListener('DOMContentLoaded', () => {
    let slidesPerView = 4;
    let slidesPerGroup = 4;

    function action() {
        if (window.innerWidth < 786) {

            slidesPerView = 2;
            slidesPerGroup = 2;
        } else {

            slidesPerView = 4;
            slidesPerGroup = 4;
        }
    }

    action()
    window.addEventListener('resize', action);

    const products_showcases_swiper = new Swiper('.products_showcase_swiper', {
        direction: 'horizontal',
        loop: true,

        navigation: {
            nextEl: '.products_showcase_swiper_button-next',
            prevEl: '.products_showcase_swiper_button-prev',
        },

        slidesPerView,
        slidesPerGroup,
    });
})

