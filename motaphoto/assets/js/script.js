console.log('Hello World');
"https://code.jquery.com/jquery-3.4.1.min.js"

const burger = document.querySelector(".burger");
const menuBurger = document.querySelector('.menu-burger');

const modale = document.getElementById('modale');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    menuBurger.classList.toggle('active');
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
}
contact.onclick = function() {
    modal.style.display = "flex";
    modal.classList.add('animate__slideInRight');
}

contactBtn.onclick = function() {
    modal.style.display = "flex";
    modal.classList.add('animate__slideInRight');
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}