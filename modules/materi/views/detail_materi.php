<!-- Begin page -->
<main class="h-100 py-0">

    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('materi')?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Detail Materi</h6>
                </div>
            </div>
            <div class="col-auto">
                <button id="btnedit" class="btn " onclick="edit()">
                    <i class="fa-solid fa-pen-to-square"></i>
                </button>
                <button id="btnsave" class="btn d-none" onclick="save()">
                    <i class="fa-solid fa-check"></i>
                </button>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card mb-3">
                    <div class="col-auto position-absolute avatar-detail-kbm">
                        <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                            <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body detail-kbm">
                        <div class="row">
                            <div class="col align-self-center ps-4 text-detail-kbm">
                                <p class="mb-0 size-15 fw-medium">Mata Pelajaran</p>
                                <p id="isimapel" class="fw-normal text-secondary size-12">Bahasa Indonesia</p>
                                <input id="inputmapel" type="text" class="d-none size-12 form-control form-control-pribadi border-0" style="height: 40px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-auto">
                <div class="card mb-3">
                    <div class="col-auto position-absolute avatar-detail-kbm">
                        <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                            <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                <i class="fa-solid fa-layer-group size-22 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body detail-kbm">
                        <div class="row">
                            <div class="col align-self-center ps-4 text-detail-kbm">
                                <p class="mb-0 size-15 fw-medium">Bab Pelajaran</p>
                                <p id="isibab" class="fw-normal text-secondary size-12">Bab 1</p>
                                <input id="inputbab" type="text" class="d-none size-12 form-control form-control-pribadi border-0" style="height: 40px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-6 mx-auto">
                <div class="card mb-3">
                    <div class="col-auto position-absolute avatar-detail-kbm">
                        <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                            <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                    <i class="fa-solid fa-chalkboard-user size-20 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body detail-kbm">
                        <div class="row">
                            <div class="col align-self-center ps-4 text-detail-kbm">
                                <p class="mb-0 size-15 fw-medium">Pembuat Materi</p>
                                <p id="isipembuat" class="fw-normal text-secondary size-12">Drs. Hendrawati Kusumaningsih Sa...</p>
                                <input id="inputpembuat" type="text" class="d-none size-12 form-control form-control-pribadi border-0" style="height: 40px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 mx-auto">
                <div class="card mb-3">
                    <div class="col-auto position-absolute avatar-detail-kbm">
                        <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                            <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                    <i class="fa-solid fa-book-open-cover size-20 text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body detail-kbm">
                        <div class="row">
                            <div class="col align-self-center ps-4 text-detail-kbm">
                                <p class="mb-0 size-15 fw-medium">Materi</p>
                                <p id="isimateri" class="fw-normal text-secondary size-12">Materi 1 Bab 1 Mapel 1</p>
                                <input id="inputmateri" type="text" class="d-none size-12 form-control form-control-pribadi border-0" style="height: 40px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tab d-flex my-3">
                    <button class=" size-12  tablinks border-0  rounded-0 border-bottom border-danger text-danger   form-control"
                            onclick="materi(event, 'video')">Video
                    </button>
                    <button class=" size-12  tablinks  border-0 rounded-0 border-bottom    form-control"
                            onclick="materi(event, 'download')">Download
                    </button>
                </div>

                <div id="video" class="tabcontent">
                    <div class="row mb-3">
                        <div class="mb-3">
                            <iframe class="video-detail-materi" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                        </div>
                        <div class="col-12">
                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                                    <i class="fa-solid fa-circle-play size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-normal">Video Pembelajaran 01</p>
                                            <p class="text-muted text-secondary size-12">10 Menit 2 detik</p>
                                        </div>
                                        <div class="col-auto align-self-center ms-2">
                                            <button class="btn awalbtn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                            <button class="btn xbtn d-none btn-secondary bg-dropdown bg-button rounded-pill">
                                                <i class="fa-solid fa-xmark"  style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                                    <i class="fa-solid fa-circle-play size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-normal">Video Pembelajaran 02</p>
                                            <p class="text-muted text-secondary size-12">8 Menit 2 detik</p>
                                        </div>
                                        <div class="col-auto align-self-center ms-2">
                                            <button class="btn awalbtn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                            <button class="btn xbtn d-none btn-secondary bg-dropdown bg-button rounded-pill">
                                                <i class="fa-solid fa-xmark"  style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                                    <i class="fa-solid fa-circle-play size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-normal">Video Pembelajaran 03</p>
                                            <p class="text-muted text-secondary size-12">7 Menit 2 detik</p>
                                        </div>
                                        <div class="col-auto align-self-center ms-2">
                                            <button class="btn awalbtn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                            <button class="btn xbtn d-none btn-secondary bg-dropdown bg-button rounded-pill">
                                                <i class="fa-solid fa-xmark"  style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-none" id="formvideo">
                            <div class="row">
                                <div class="col-6">
                                    <label for="judul" class="form-label size-15 fw-bold">Judul</label>
                                    <input type="text" class="form-control form-control-pribadi border-0" id="judul" placeholder="isikan judul">
                                </div>
                                <div class="col-6">
                                    <label for="url" class="form-label size-15 fw-bold">Link URL</label>
                                    <input type="text" class="form-control form-control-pribadi border-0" id="url" placeholder="isikan link url">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center d-flex justify-content-center my-3">
                            <a id="btntambahvideo" onclick="tambahvideo()" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                <i class="fa-solid fa-plus-large size-26 text-white mt-1"></i>
                            </a>
                            <a id="btnsavevideo" onclick="savevideo()" class="d-none avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                <i class="fa-solid fa-check size-26 text-white mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="download" class="tabcontent" style="display: none">
                    <div class="row mb-3">
                        <div class="col-12">
                            <a href="#" class="card my-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                                    <i class="fa-solid fa-download size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-normal">Video Pembelajaran 01</p>
                                            <p class="text-muted text-secondary size-12">50 Mb</p>
                                        </div>
                                        <div class="col-auto align-self-center ms-2">
                                            <button class="btn awalbtn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                            <button class="btn xbtn d-none btn-secondary bg-dropdown bg-button rounded-pill">
                                                <i class="fa-solid fa-xmark"  style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card my-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                                    <i class="fa-solid fa-download size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-normal">Video Pembelajaran 02</p>
                                            <p class="text-muted text-secondary size-12">60 Mb</p>
                                        </div>
                                        <div class="col-auto align-self-center ms-2">
                                            <button class="btn awalbtn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                            <button class="btn xbtn d-none btn-secondary bg-dropdown bg-button rounded-pill">
                                                <i class="fa-solid fa-xmark"  style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="card my-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                                    <i class="fa-solid fa-download size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-13 fw-normal">Video Pembelajaran 03</p>
                                            <p class="text-muted text-secondary size-12">65 Mb</p>
                                        </div>
                                        <div class="col-auto align-self-center ms-2">
                                            <button class="btn awalbtn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                            <button class="btn xbtn d-none btn-secondary bg-dropdown bg-button rounded-pill">
                                                <i class="fa-solid fa-xmark"  style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-none" id="formdowmloadvideo">
                            <div class="row">
                                <div class="col-6">
                                    <label for="videojudul" class="form-label size-15 fw-bold">Judul</label>
                                    <input type="text" class="form-control form-control-pribadi border-0" id="videojudul" placeholder="isikan judul">
                                </div>
                                <div class="col-6">
                                    <label for="file" class="form-label size-15 fw-bold">File</label>
                                    <label for="file" class="form-control form-control-pribadi bg-f5f5f5 border-0">Pilih file</label>
                                    <input class="d-none" type="file" id="file" title="foo">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center d-flex justify-content-center my-3">
                            <a id="btntambahdownloadvideo" onclick="tambahdownloadvideo()" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                <i class="fa-solid fa-plus-large size-26 text-white mt-1"></i>
                            </a>
                            <a id="btnsavedownloadvideo" onclick="savedownloadvideo()" class="d-none avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                <i class="fa-solid fa-check size-26 text-white mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->