console.log('Hello World');

const burger = document.querySelector(".burger");
const menuBurger = document.querySelector('.menu-burger');

const modale = document.getElementById('modale');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    menuBurger.classList.toggle('active');
});


// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
const contactMobile = document.getElementsByClassName('menu-item-13')[1];
const contact = document.getElementById('menu-item-13');


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
contactMobile.onclick = function() {
    modal.style.display = "flex";
}
contact.onclick = function() {
    modal.style.display = "flex";
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