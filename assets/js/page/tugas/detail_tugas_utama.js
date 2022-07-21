// Tab Tugas & Ujian staf
function openCity(evt, cityName) {
    var i, tabcontent_staf, tablinks_staf;
    tabcontent_staf = document.getElementsByClassName("tabcontent-staf");
    for (i = 0; i < tabcontent_staf.length; i++) {
        tabcontent_staf[i].style.display = "none";
    }
    tablinks_staf = document.getElementsByClassName("tablinks-staf");
    for (i = 0; i < tablinks_staf.length; i++) {
        tablinks_staf[i].className = tablinks_staf[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();