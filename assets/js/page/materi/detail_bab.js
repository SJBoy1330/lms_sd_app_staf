function toggle_menu() {
    let menuToggle = document.querySelector('.toggle');
    let menu = document.querySelector('.menu');
    let indicator = document.querySelector('.indicator');
    menu.classList.toggle('active')
    menuToggle.classList.toggle('active')
    const list = document.querySelectorAll('li');
    function activeLink() {
        list.forEach((item) => item.classList.remove('active'));
        this.classList.add('active');
        indicator.classList.remove('d-none');
    }

    list.forEach((item) => item.addEventListener('click', activeLink))
}



function edit_bab() {
    var trio_menu = document.querySelector('#trio_menu');
    var action_menu = document.querySelector('#action_menu');
    var inputan = document.querySelectorAll('.input_judul_bab');
    var text = document.querySelectorAll('.text_judul_bab');
    inputan.forEach((input) => {
        input.classList.remove("d-none");
    });

    text.forEach((msg) => {
        msg.classList.add("d-none");
    });

    trio_menu.classList.add('d-none');
    action_menu.classList.remove('d-none');
}


function batal_edit_bab() {
    var trio_menu = document.querySelector('#trio_menu');
    var action_menu = document.querySelector('#action_menu');
    var inputan = document.querySelectorAll('.input_judul_bab');
    var text = document.querySelectorAll('.text_judul_bab');
    inputan.forEach((input) => {
        input.classList.add("d-none");
    });

    text.forEach((msg) => {
        msg.classList.remove("d-none");
    });

    trio_menu.classList.remove('d-none');
    action_menu.classList.add('d-none');
}