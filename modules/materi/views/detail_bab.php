<main class="h-100 py-0">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="materi-SD.html" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Detail Bab</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44">
                    
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->
    
    <!-- main page content -->
    <div class="main-container container top-20 pb-5" style="overflow-x: hidden;">
        <div class="row d-flex justify-content-center align-items-center">
            <ul class="menu position-fixed">
                <div class="toggle">
                    <i class="fa-solid fa-plus-large"></i>
                </div>
                <li style="--i:0;" class="active"><a href="#modalTambahBab" data-bs-toggle="modal" role="button"><img src="<?= base_url()?>assets/icons/tambah-bab.png" width="25" alt=""></a></li>
                <li style="--i:1;"><a href="#modalEditBab" data-bs-toggle="modal" role="button"><img src="<?= base_url()?>assets/icons/edit-bab.png" width="25" alt=""></a></li>
                <li style="--i:2;"><a href="<?= base_url('materi/tambah_materi')?>"><img src="<?= base_url()?>assets/icons/tambah-materi.png" width="30" alt=""></a></li>
                <div class="indicator"></div>
            </ul>
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                        <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-12 fw-normal text-secondary">Mata Pelajaran</p>
                                <p class="mb-0 size-13 fw-medium">Materi Pelajaran 01</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-auto">
                                <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                        <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0 pe-0">
                                <p class="mb-0 size-12 fw-normal text-secondary">Bab Pelajaran</p>
                                <p class="mb-0 size-13 fw-medium">5 Bab</p>
                            </div>

                            <div class="col-auto ps-1">
                                <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-36 rounded-12 avatar-presensi-inline" style="line-height: 39px;">
                                        <i class="fa-solid fa-book-open-cover size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                <p class="mb-0 size-13 fw-medium">6 Materi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row accordion-babpelajaran g-0">
            <div class="col-12">
                <div class="accordion accordion-flush shadow-sm p-0" id="accordionFlushExample" style="border-radius: 10px;">
                    <div class="accordion-item" style="border-radius: 10px;">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-wrap" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border-radius: 10px;">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                                <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Bab Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Fotosintesis</p>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body size-11">
                                <div class="row d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 1 Bab 1 Mapel 1</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 2 Bab 2 Mapel 2</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 3 Bab 3 Mapel 3</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 4 Bab 4 Mapel 4</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 5 Bab 5 Mapel 5</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="accordion accordion-flush shadow-sm p-0" id="accordionFlushExample" style="border-radius: 10px;">
                    <div class="accordion-item" style="border-radius: 10px;">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-wrap" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="border-radius: 10px;">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                                <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Bab Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Fotosintesis</p>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body size-11">
                                <div class="row d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 1 Bab 1 Mapel 1</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 2 Bab 2 Mapel 2</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 3 Bab 3 Mapel 3</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 4 Bab 4 Mapel 4</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 5 Bab 5 Mapel 5</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="accordion accordion-flush shadow-sm p-0" id="accordionFlushExample" style="border-radius: 10px;">
                    <div class="accordion-item" style="border-radius: 10px;">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-wrap" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="border-radius: 10px;">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                                <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Bab Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Fotosintesis</p>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body size-11">
                                <div class="row d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 1 Bab 1 Mapel 1</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 2 Bab 2 Mapel 2</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 3 Bab 3 Mapel 3</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 4 Bab 4 Mapel 4</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 5 Bab 5 Mapel 5</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="accordion accordion-flush shadow-sm p-0" id="accordionFlushExample" style="border-radius: 10px;">
                    <div class="accordion-item" style="border-radius: 10px;">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-wrap" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour" style="border-radius: 10px;">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                                <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Bab Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Fotosintesis</p>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body size-11">
                                <div class="row d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 1 Bab 1 Mapel 1</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 2 Bab 2 Mapel 2</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 3 Bab 3 Mapel 3</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 4 Bab 4 Mapel 4</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 5 Bab 5 Mapel 5</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="accordion accordion-flush shadow-sm p-0" id="accordionFlushExample" style="border-radius: 10px;">
                    <div class="accordion-item" style="border-radius: 10px;">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-wrap" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive" style="border-radius: 10px;">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                                <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Bab Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Fotosintesis</p>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body size-11">
                                <div class="row d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 1 Bab 1 Mapel 1</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 2 Bab 2 Mapel 2</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 3 Bab 3 Mapel 3</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 4 Bab 4 Mapel 4</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-flex">
                                    <div class="col-auto">
                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                        <p class="mb-0 size-14 fw-medium">Materi 5 Bab 5 Mapel 5</p>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <div class="dropdown btn-group dropstart">
                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-reply pe-2"></i>Balas Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi')?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->
    
</main>

<!-- Filter Tambah Bab -->
<!-- <div class="modal fade" id="modalTambahBab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Bab Materi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label title-3">Mata Pelajaran</label>
                    <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                        <option selected>Pilih pelajaran</option>
                        <option value="1">Matematika</option>
                        <option value="2">Ilmu Pengetahuan Sosial</option>
                        <option value="3">Ilmu Pengetahuan Alam</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label title-3">Nama Bab</label>
                    <input type="text" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Isikan nama bab">
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
            </div>
        </div>
    </div>
</div> -->

<!-- Filter Edit Bab -->
<!-- <div class="modal fade" id="modalEditBab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
            <h5 class="modal-title" id="exampleModalLabel">Edit Bab Materi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label title-3">Mata Pelajaran</label>
                    <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                        <option selected>Pilih pelajaran</option>
                        <option value="1" selected>Matematika</option>
                        <option value="2">Ilmu Pengetahuan Sosial</option>
                        <option value="3">Ilmu Pengetahuan Alam</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label title-3">Nama Bab</label>
                    <input type="text" class="form-control form-control-solid form-control-pribadi border-0" value="Bab 1">
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
            </div>
        </div>
    </div>
</div> -->