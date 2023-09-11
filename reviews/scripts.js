document.addEventListener('DOMContentLoaded', () => {
    let slidesPerView = 4;

    function action() {
        if (window.innerWidth < 786) {

            slidesPerView = 1;
        } else {

            slidesPerView = 2;
        }
    }

    action()
    window.addEventListener('resize', action);

    const reviews_swiper = new Swiper('.reviews_swiper', {
        direction: 'horizontal',
        loop: true,

        navigation: {
            nextEl: '.reviews_swiper-button-prev',
            prevEl: '.reviews_swiper-button-next',
        },

        slidesPerView,
    });
})

document.addEventListener('click', (e) => {
    const dataReviewsButtonReadeMore = e.target.closest('[data-reviews-button-reade-more]');

    if (dataReviewsButtonReadeMore) {
        const wrapperBlock = dataReviewsButtonReadeMore.closest('.reviews_item');

        wrapperBlock.querySelector('.reviews_item-bottom').style['height'] = '100%';
        dataReviewsButtonReadeMore.style['display'] = 'none';
    }
})