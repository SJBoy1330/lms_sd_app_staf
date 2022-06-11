function materi(evt, materi) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        tablinks[i].className = tablinks[i].className.replace(" border-danger", " ");
        tablinks[i].className = tablinks[i].className.replace(" text-danger", "");

    }
    document.getElementById(materi).style.display = "block";
    evt.currentTarget.className += " border-danger text-danger";

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
}

function hapus(el){
    document.getElementById('video').removeChild(el);
}

function edit(){
 $('#btnedit').addClass('d-none');
    $('#btnsave').removeClass('d-none');

    $('#isimapel').addClass('d-none');
    $('#inputmapel').removeClass('d-none');

    $('#isimateri').addClass('d-none');
    $('#inputmateri').removeClass('d-none');

    $('#isibab').addClass('d-none');
    $('#inputbab').removeClass('d-none');

    $('#isipembuat').addClass('d-none');
    $('#inputpembuat').removeClass('d-none');

    $('.awalbtn').addClass('d-none');
    $('.xbtn').removeClass('d-none');

}

function save(){
    $('#btnsave').addClass('d-none');
    $('#btnedit').removeClass('d-none');

    $('#inputmapel').addClass('d-none');
    $('#isimapel').removeClass('d-none');

    $('#inputmateri').addClass('d-none');
    $('#isimateri').removeClass('d-none');

    $('#inputbab').addClass('d-none');
    $('#isibab').removeClass('d-none');

    $('#inputpembuat').addClass('d-none');
    $('#isipembuat').removeClass('d-none');

    $('.xbtn').addClass('d-none');
    $('.awalbtn').removeClass('d-none');
}

function tambahdownloadvideo(){
    $('#formdowmloadvideo').removeClass('d-none');
    $('#btntambahdownloadvideo').addClass('d-none');
    $('#btnsavedownloadvideo').removeClass('d-none');
}

function savedownloadvideo(){
    $('#formdowmloadvideo').addClass('d-none');
    $('#btntambahdownloadvideo').removeClass('d-none');
    $('#btnsavedownloadvideo').addClass('d-none');
}

function tambahvideo(){
    $('#formvideo').removeClass('d-none');
    $('#btntambahvideo').addClass('d-none');
    $('#btnsavevideo').removeClass('d-none');
}

function savevideo(){
    $('#formvideo').addClass('d-none');
    $('#btntambahvideo').removeClass('d-none');
    $('#btnsavevideo').addClass('d-none');
}