// Menu open close
let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.navbar')

menu.onclick = () => {
    menu.classList.toggle('move');
    navbar.classList.toggle('open-menu')
}

window.onscroll = () => {
    menu.classList.remove('move');
    navbar.classList.remove('open-menu')
}
