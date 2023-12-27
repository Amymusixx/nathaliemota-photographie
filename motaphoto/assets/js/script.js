console.log('Hello World');

const burger = document.querySelector(".burger");
const menuBurger = document.querySelector('.menu-burger');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    menuBurger.classList.toggle('active');
});