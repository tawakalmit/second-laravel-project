const burger = document.querySelector('#burger');
const sidebar = document.querySelector('#sidebar');
const x = document.querySelector('#x');
const faded = document.querySelector('#faded');

burger.addEventListener('click', () => {
    sidebar.classList.toggle('gone');
    faded.classList.toggle('faded');
})

x.addEventListener('click', () => {
    sidebar.classList.toggle('gone');
    faded.classList.toggle('faded');
})

faded.addEventListener('click', () => {
    sidebar.classList.remove('gone');
    faded.classList.remove('faded');
})