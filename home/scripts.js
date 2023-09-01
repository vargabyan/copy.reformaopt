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

const reviews_swiper = new Swiper('.reviews_swiper', {
    direction: 'horizontal',
    loop: true,

    navigation: {
        nextEl: '.reviews_swiper-button-prev',
        prevEl: '.reviews_swiper-button-next',
    },

    slidesPerView: 2,
});

document.addEventListener('click', (e) => {
    const dataReviewsButtonReadeMore = e.target.closest('[data-reviews-button-reade-more]');

    if (dataReviewsButtonReadeMore) {
        const wrapperBlock = dataReviewsButtonReadeMore.closest('.reviews_item');

        wrapperBlock.querySelector('.reviews_item-bottom').style['height'] = '100%';
        dataReviewsButtonReadeMore.style['display'] = 'none';
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