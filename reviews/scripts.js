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