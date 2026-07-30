const header = document.getElementById('siteHeader');
const menuButton = document.getElementById('mobileMenuButton');
const mobileMenu = document.getElementById('mobileMenu');

const openIcon = document.getElementById('menuOpenIcon');
const closeIcon = document.getElementById('menuCloseIcon');

const mobileLinks = document.querySelectorAll('.mobile-link');

let menuOpen = false;

function updateHeader() {

    if (window.scrollY > 20) {

        header.classList.remove('bg-transparent');

        header.classList.add(
            'bg-white/70',
            'backdrop-blur-lg',
        );

    } else {

        header.classList.add('bg-transparent');

        header.classList.remove(
            'bg-white/70',
            'backdrop-blur-lg',
        );
    }

}

function openMenu() {

    menuOpen = true;

    mobileMenu.classList.remove('hidden');

    openIcon.classList.add('hidden');

    closeIcon.classList.remove('hidden');

}

function closeMenu() {

    menuOpen = false;

    mobileMenu.classList.add('hidden');

    closeIcon.classList.add('hidden');

    openIcon.classList.remove('hidden');

}

menuButton.addEventListener('click', () => {

    menuOpen ? closeMenu() : openMenu();

});

mobileLinks.forEach(link => {

    link.addEventListener('click', closeMenu);

});

document.addEventListener('click', (e) => {

    if (
        menuOpen &&
        !mobileMenu.contains(e.target) &&
        !menuButton.contains(e.target)
    ) {
        closeMenu();
    }

});

window.addEventListener('scroll', updateHeader);

window.addEventListener('load', updateHeader);

window.addEventListener('resize', () => {

    if (window.innerWidth >= 1024) {

        closeMenu();

    }

});