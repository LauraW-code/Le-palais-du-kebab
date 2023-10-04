const bouton = document.getElementsByClassName('toggle-button')[0];
const links = document.getElementsByClassName('navbar-links')[0];
bouton.addEventListener('click',() => {
    links.classList.toggle('active');
})