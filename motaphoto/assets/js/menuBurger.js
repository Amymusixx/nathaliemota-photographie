// Code pour le menu burger sur l'affichage mobile 
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
