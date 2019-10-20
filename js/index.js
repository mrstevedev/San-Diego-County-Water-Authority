const hamburgerToggle = document.querySelector('.hamburger');
const mainNavMenu = document.querySelector('.menu');
const body = document.querySelector('body');
hamburgerToggle.addEventListener('click', () => {
    hamburgerToggle.classList.toggle('is-active');
    mainNavMenu.classList.toggle('show');
        body.classList.toggle('hidden');
    
});

// Toggle Info Button 
const infoToggler = document.querySelector('.info-toggle-btn');
const infoCard = document.querySelector('.info-card');
infoToggler.addEventListener('click', () => {
    infoCard.classList.toggle('visible');
});
