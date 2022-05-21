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
                    <h6>Jawaban Siswa</h6>
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
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                            <button class="input-group-text searhing" id="basic-addon2" style="background-color:#EC3528;;"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-12" style="margin-top: 60px;">
                <a href="<?= base_url('tugas/detail_tugas'); ?>" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                    <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                        <i class="fa-solid fa-graduation-cap size-22 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-15 fw-normal text-dark">Siswa A</p>
                                <p class="mb-0 size-13 fw-normal text-success">Dikumpulkan</p>
                            </div>
                            <div class="col-auto align-self-center ps-0">
                                <button class="btn btn-outline-success btn-value" type="button" data-bs-toggle="modal" data-bs-target="#modalInputNilai">
                                    80
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="<?= base_url('tugas/detail_tugas'); ?>" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-60 shadow-sm rounded-18 avatar-presensi-outline">
                                    <div class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                        <i class="fa-solid fa-graduation-cap size-22 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-15 fw-normal text-dark">Siswa B</p>
                                <p class="mb-0 size-13 fw-normal text-danger">Terlambat dikumpulkan</p>
                            </div>
                            <div class="col-auto align-self-center ps-0">
                                <button class="btn btn-outline-danger btn-value" data-bs-toggle="modal" data-bs-target="#modalInputNilai">
                                    -
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- main page content ends -->

    <!-- Filter Ujian Modal -->
    <div class="modal fade" id="modalInputNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <option selected>Pilih tingkat kelas</option>
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