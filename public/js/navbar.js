let lastScrollPosition = 0;
const menu = document.querySelector('.menu');

window.addEventListener('scroll', () => {
    const currentScrollPosition = window.pageYOffset;

    if (currentScrollPosition === 0) {
        menu.classList.remove('menu-visible');
        menu.classList.remove('menu-hidden');
    } else if (currentScrollPosition > lastScrollPosition) {
        menu.classList.remove('menu-visible');
        menu.classList.add('menu-hidden');
    } else {
        menu.classList.remove('menu-hidden');
        menu.classList.add('menu-visible');
    }

    lastScrollPosition = currentScrollPosition;
});

