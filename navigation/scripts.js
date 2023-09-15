document.addEventListener('click', (e) => {
    const navButtonOpenAmdClose = e.target.closest('[data-nav-toggle-open-and-close]');

    if (navButtonOpenAmdClose) {
        const navBar = navButtonOpenAmdClose.closest('.navBar');

        navButtonOpenAmdClose.classList.toggle('nav-toggle-close');
        navBar.classList.toggle('navbar-toggle');
        navBar.querySelector('.navbar_wrapper').classList.toggle('navbar_wrapper-toggle');
        navBar.querySelectorAll('.mobile-action').forEach(DOMElement => {
            DOMElement.classList.toggle('mobile-action-active');
        })
        document.querySelector('body').classList.toggle('body-toggle');

    }
})

document.addEventListener('click', (e) => {
    const buttonLink = e.target.closest('.link-toggle');

    if (window.innerWidth < 768 && buttonLink) {
        const navbarDropdown = buttonLink.closest('.button-toggle').querySelector('.navbar_dropdown');
        navbarDropdown.classList.toggle('navbar_dropdown-active')
    }
})

document.addEventListener('scroll', () => {
    const navBar = document.querySelector('.navBar');

    if (Math.round(scrollY) > 100) {

        navBar.classList.add('navbar-toggle-scroll-toggle');
    } else {

        navBar.classList.remove('navbar-toggle-scroll-toggle');
    }
})