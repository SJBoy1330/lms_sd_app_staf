function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#imagePreview").css(
                "background-image",
                "url(" + e.target.result + ")"
            );
            $("#imagePreview").hide();
            $("#imagePreview").fadeIn(650);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function () {
    readURL(this);
});

$("#upload").click(function(){
    $("#upload-file").trigger('click');
});

function toPelajaran(){
    $('.header-materi').html(`<h5 class="modal-title" id="pelajaranModalLabel">Materi Pelajaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>`);
    $('.body-materi').html(`<div class="card mb-4" onclick="toBab()">
            <div class="card-body">
                <div class="row">
                    <div class="col align-self-center">
                        <p class="mb-0 size-15 fw-medium">Pelajaran 01</p>
                        <p class="mb-0 size-13 fw-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices accumsan adipiscing neque elementum. Tincidunt a in justo a elit.</p> 
                    </div>
                </div>
            </div>
        </div>`);
}

function toBab() {
    $('.header-materi').html(`<h5 class="modal-title" id="pelajaranModalLabel"><span class="pe-3" onclick="toPelajaran()"><i class="fa-regular fa-chevron-left"></i></span>Materi Pelajaran</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>`);
    $('.body-materi').html(`<div class="card mb-4" onclick="toMateri()">
            <div class="card-body">
                <div class="row">
                    <div class="col align-self-center">
                        <p class="mb-0 size-15 fw-medium">Bab 01</p>
                        <p class="mb-0 size-13 fw-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices accumsan adipiscing neque elementum. Tincidunt a in justo a elit.</p> 
                    </div>
                </div>
            </div>
        </div>`);
}

function toMateri() {
    $('.header-materi').html(`<h5 class="modal-title" id="pelajaranModalLabel"><span class="pe-3" onclick="toBab()"><i class="fa-regular fa-chevron-left"></i></span>Materi Pelajaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>`);
    $('.body-materi').html(`<div class="card mb-4"">
            <div class="card-body">
                <div class="row">
                    <div class="col align-self-center">
                        <p class="mb-0 size-15 fw-medium">Materi 01</p>
                        <p class="mb-0 size-13 fw-normal text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices accumsan adipiscing neque elementum. Tincidunt a in justo a elit.</p> 
                    </div>
                </div>
            </div>
        </div>`);
}