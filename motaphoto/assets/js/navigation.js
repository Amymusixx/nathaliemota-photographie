// Code pour la navigation et carousel miniature des photos sur la page single.php
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
