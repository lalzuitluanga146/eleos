const header = document.getElementById('siteHeader');
const menuButton = document.getElementById('mobileMenuButton');
const mobileMenu = document.getElementById('mobileMenu');

const openIcon = document.getElementById('menuOpenIcon');
const closeIcon = document.getElementById('menuCloseIcon');

const mobileLinks = document.querySelectorAll('.mobile-link');

let menuOpen = false;

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

window.addEventListener('resize', () => {

    if (window.innerWidth >= 1024) {

        closeMenu();

    }

});




///About Image Easter Egg
   const secretImage = document.getElementById('doctor-secret');

    let clicks = 0;
    let resetTimer;

    secretImage.addEventListener('click', () => {

        clicks++;

        clearTimeout(resetTimer);

        resetTimer = setTimeout(() => {
            clicks = 0;
        }, 3000);

        if (clicks >= 5) {
            clicks = 0;
            startFall();
        }
    });

function startFall() {

    const themes = [
        ["❄"], // Snow
        ["⭐"], // Stars
        ["🍁"], // Leaves
        ["🌸"], // Flowers
        ["❤️"]  // Hearts
    ];

    // 15% chance of mixed mode
    const currentTheme = Math.random() < 0.20
        ? ["❄", "⭐", "🍁", "🌸", "❤️"]
        : themes[Math.floor(Math.random() * themes.length)];

    let interval, itemsPerInterval;

    if (window.innerWidth < 640) {
        interval = 100;
        itemsPerInterval = 2;
    } else if (window.innerWidth < 1024) {
        interval = 70;
        itemsPerInterval = 3;
    } else {
        interval = 50;
        itemsPerInterval = 4;
    }

    const duration = 5000;

    const fallInterval = setInterval(() => {

        for (let i = 0; i < itemsPerInterval; i++) {

            const item = document.createElement("div");

            item.className = "snowflake";

            // Uses only one item unless mixed mode is selected
            item.textContent = currentTheme[Math.floor(Math.random() * currentTheme.length)];

            item.style.left = Math.random() * window.innerWidth + "px";
            item.style.fontSize = (8 + Math.random() * 16) + "px";
            item.style.animationDuration = (4 + Math.random() * 4) + "s";
            item.style.animationDelay = Math.random() * 0.8 + "s";
            item.style.opacity = 0.5 + Math.random() * 0.5;

            document.body.appendChild(item);

            setTimeout(() => item.remove(), 6000);
        }

    }, interval);

    setTimeout(() => clearInterval(fallInterval), duration);
}