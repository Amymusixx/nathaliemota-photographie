// Code pour la modale de contact, présente dans le menu d'en tête ainsi que sur la page single.php
var modal = document.getElementById('myModal');
var contactBtn = document.getElementById('contact-btn');
const contactMobile = document.getElementsByClassName('menu-item-13')[1];
const contact = document.getElementById('menu-item-13');
var span = document.getElementsByClassName("modal-close")[0];

contactMobile.onclick = function() {
    span.style.visibility = "visible";
    modal.style.visibility = "visible";
    modal.classList.add('animate__slideInRight');
    modal.classList.remove('animate__slideOutRight');
}
contact.onclick = function() {
    modal.style.visibility = "visible";
    modal.classList.add('animate__slideInRight');
    modal.classList.remove('animate__slideOutRight');
}

span.onclick = function(){
    span.style.visibility = "hidden";
  modal.classList.add('animate__slideOutRight');
  modal.classList.remove('animate__slideInRight');
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.classList.add('animate__slideOutRight');
        modal.classList.remove('animate__slideInRight');
    }
}

contactBtn.onclick = function() {
    span.style.visibility = "visible";
    modal.style.visibility = "visible";
    modal.classList.add('animate__slideInRight');
    modal.classList.remove('animate__slideOutRight');
}
