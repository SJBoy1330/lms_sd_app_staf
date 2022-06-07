<main class="h-100 py-0">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('kbm/kbm')?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Edit KBM</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44"></a>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label title-3">Tanggal</label>
                    <input type="text" class="form-control form-control-solid form-control-edit-kbm" value="09 - 04 - 2022" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label title-3">Bab</label>
                    <input type="text" class="form-control form-control-solid form-control-edit-kbm" value="XI IPA 1" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label title-3">Mata Pelajaran</label>
                    <input type="text" class="form-control form-control-solid form-control-edit-kbm" value="Bahasa Indonesia" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label title-3">Link Google Meet / Zoom Meet</label>
                    <input type="text" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Isikan URL">
                </div>

                <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                    <div class="row mb-3">
                        <div class="col">
                            <p class="fw-bolder size-15">Tugas Anda</p>
                        </div>
                        <div class="col-auto align-self-center">
                            <a data-bs-toggle="modal" href="#modalTambahMateri" role="button" class="label-biru fw-bold size-13"><i class="fa-regular fa-plus"></i> Tambah Materi</a>
                        </div>
                    </div>
    
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                            <i class="fa-solid fa-file size-22 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="mb-0 size-14 fw-normal">Materi 1 Bab 1 Mapel 1</p>
                                </div>
                                <div class="col-auto align-self-center text-end ms-3">
                                    <button class="btn btn-md bg-cancel rounded-circle"><i class="fa-solid fa-xmark size-26 text-danger"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-11 mt-auto mx-auto pt-4 pb-5">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center d-grid">
                        <a href="index-SD.html" class="btn btn-lg shadow-sm btn-pribadi">Simpan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->
    
    <!-- Filter Jurnal Staf -->
    <div class="modal fade" id="modalTambahMateri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
                <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label title-3">Bab</label>
                        <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                            <option selected>Pilih Bab</option>
                            <option value="1">Bab 1</option>
                            <option value="2">Bab 2</option>
                            <option value="3">Bab 3</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label title-3">Mata Pelajaran</label>
                        <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                            <option selected>Pilih Mata Pelajaran</option>
                            <option value="1">Mapel 1</option>
                            <option value="2">Mapel 2</option>
                            <option value="3">Mapel 3</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
                </div>
            </div>
        </div>
    </div>
</main>