// Toggle Main Full Screen Menu
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

// Menu Navigation
// Loop through Menu Item Links to Display Sub Menu
const menuItem = document.querySelectorAll('.menu-navigation-list > li');

menuItem.forEach((item) => {
    let subNavItem = item.childNodes[1].nextSibling;
    item.addEventListener('mouseover', (e) => {
        item.childNodes[0].classList.add('active');

        // append a chevron to the DOM
        item.childNodes[0].insertBefore('<i class="fas fa-chevron-right"></i>');


        let parentGuest = document.getElementById("one");
        let childGuest = document.createElement("li");
        childGuest.id = "two"; 
        parentGuest.parentNode.appendChild(childGuest);
    });
    item.addEventListener('mouseleave', (e) => {        
        item.childNodes[0].classList.remove('active');
    });
});