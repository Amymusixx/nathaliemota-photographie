console.log('Hello World');
"https://code.jquery.com/jquery-3.4.1.min.js"

const burger = document.querySelector(".burger");
const menuBurger = document.querySelector('.menu-burger');
const modale = document.getElementById('modale');
const header = document.getElementById('header');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    menuBurger.classList.toggle('active');
    menuBurger.classList.toggle('animate__slideInRight');
    header.classList.toggle('header-burger');
});


// Récupérer les éléments (la modale, le bouton de contact, bouton d'ouverture, span de fermeture)
var modal = document.getElementById('myModal');
var contactBtn = document.getElementById('contact-btn');
const contactMobile = document.getElementsByClassName('menu-item-13')[1];
const contact = document.getElementById('menu-item-13');
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
contactMobile.onclick = function() {
    modal.style.display = "flex";
    modal.classList.toggle('animate__slideInRight');
}
contact.onclick = function() {
    modal.style.display = "flex";
    modal.classList.toggle('animate__slideInRight');
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

contactBtn.onclick = function() {
    modal.style.display = "flex";
    modal.classList.toggle('animate__slideInRight');
}



const arrowLeft = document.querySelector('.arrow-left');
const arrowRight = document.querySelector('.arrow-right');
const nextThumb = document.querySelector('.next-thumbnail');
const prevThumb = document.querySelector('.prev-thumbnail');


arrowLeft.addEventListener('mouseover', () => {
  prevThumb.classList.add('show-thumbnail');
});

arrowLeft.addEventListener('mouseout', () => {
  prevThumb.classList.remove('show-thumbnail');
});

arrowRight.addEventListener('mouseover', () => {
  nextThumb.classList.add('show-thumbnail');
});

arrowRight.addEventListener('mouseout', () => {
  nextThumb.classList.remove('show-thumbnail');
});