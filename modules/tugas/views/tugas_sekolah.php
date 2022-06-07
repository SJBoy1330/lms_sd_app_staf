<main class="h-100 py-0">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('tugas/tugas_sekolah'); ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Tugas Sekolah</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44"></a>
            </div>
        </div>
    </header>
    <!-- Header ends -->
    
    <!-- main page content -->
    <div class="main-container container top-20">
        <div class="row">
            <div class="wrapper-searching-tugas mb-3">
                <div class="wrapper-samaran"></div> 
                <div class="row bg-white" style="width: 100vw;">
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                            <button class="input-group-text searhing" id="basic-addon2" style="background-color:#EC3528;;"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center ps-0">
                        <button class="btn btn-secondary bg-button filter-tugas border-0">
                            <i class="fa-solid fa-arrow-down-short-wide" style="color: #EC3528;"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12" style="margin-top: 60px;">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="fw-bolder size-15">Tugas 1</p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="button-action position-absolute d-flex flex-wrap flex-column">
                                        <button class="btn btn-secondary bg-button rounded-pill mb-2" type="button">
                                            <i class="fa-solid fa-pen-to-square" style="font-size: 14px; color: #EC3528;"></i>
                                        </button>
                                        <button class="btn btn-secondary bg-button rounded-pill" type="button">
                                            <i class="fa-solid fa-trash" style="font-size: 14px; color: #EC3528;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-1 px-2 mt-2 mb-2 ">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Mata Pelajaran</p>
                                    <p class="mb-0 fw-normal size-15">Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="row py-1 px-2 mb-3">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-regular fa-memo-pad size-20 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Keterangan</p>
                                    <p class="mb-0 fw-normal size-15">Tugas Bahasa Indonesia</p>
                                </div>
                            </div>

                            <div class="row mt-4 mx-1">
                                <a href="<?= base_url('tugas/jawaban_siswa');?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Detail Tugas</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->

    <!-- Filter Ujian Modal -->
    <div class="moddivl fade" id="filterTingkatKelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
                <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label title-3">Pilih Tingkat Kelas</label>
                        <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                            <option selected>Pilih pelajaran</option>
                            <option value="1">1 - A</option>
                            <option value="2">1 - B</option>
                            <option value="3">1 - C</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</a>
                </div>
            </div>
        </div>
    </div>
    
</main>