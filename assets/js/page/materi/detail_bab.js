let menuToggle = document.querySelector('.toggle');
let menu = document.querySelector('.menu');
let indicator = document.querySelector('.indicator');
menuToggle.onclick = function () {
    menu.classList.toggle('active')
    menuToggle.classList.toggle('active')
}

const list = document.querySelectorAll('li');
function activeLink() {
    list.forEach((item) => item.classList.remove('active'));
    this.classList.add('active');
    indicator.classList.remove('d-none');
}

list.forEach((item) => item.addEventListener('click', activeLink))