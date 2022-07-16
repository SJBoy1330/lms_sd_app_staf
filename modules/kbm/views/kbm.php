<main class="h-100 py-0">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home') ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>KBM</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44" data-bs-toggle="modal"
                data-bs-target="#filterCalendar"><i class="fa-regular fa-calendar"></i></a>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden mb-3 p-3">
                            <div class="badge-keterangan-aktif">
                                <p class="text-white size-12">Aktif</p>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="fw-bolder size-15">Sabtu, 09 April 2022</p>
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
                                            <i class="fa-solid fa-building-user size-18 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Kelas</p>
                                    <p class="mb-0 fw-normal size-15">XI IPA 1</p>
                                </div>
                            </div>
                            <div class="row py-1 px-2 mb-3">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 44px;">
                                            <i class="fa-solid fa-clock size-22 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Waktu</p>
                                    <p class="mb-0 fw-normal size-15">10:00 - 12:00</p>
                                </div>
                            </div>

                            <div class="row mt-4 mx-1">
                                <div class="col-6 px-1">
                                    <a href="<?= base_url('kbm/edit_kbm')?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Edit KBM</a>
                                </div>
                                <div class="col-6 px-1">
                                    <a href="<?= base_url('kbm/detail_kbm')?>" class="btn btn-block btn-md fw-normal btn-detail-kbm">Detail KBM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden mb-3 p-3">
                            <div class="badge-keterangan-nonaktif">
                                <p class="text-white size-12">Tidak Aktif</p>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="fw-bolder size-15">Sabtu, 09 April 2022</p>
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
                                            <i class="fa-solid fa-building-user size-18 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Kelas</p>
                                    <p class="mb-0 fw-normal size-15">XI IPA 1</p>
                                </div>
                            </div>
                            <div class="row py-1 px-2 mb-3">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 44px;">
                                            <i class="fa-solid fa-clock size-22 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Waktu</p>
                                    <p class="mb-0 fw-normal size-15">10:00 - 12:00</p>
                                </div>
                            </div>

                            <div class="row mt-4 mx-1">
                                <div class="col-6 px-1">
                                    <a href="<?= base_url('kbm/edit_kbm')?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Edit KBM</a>
                                </div>
                                <div class="col-6 px-1">
                                    <a href="<?= base_url('kbm/detail_kbm')?>" class="btn btn-block btn-md fw-normal btn-detail-kbm">Detail KBM</a>
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

<!-- Filter KBM -->
<div class="modal fade" id="filterCalendar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
            <h5 class="modal-title">Filter KBM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Tanggal</label>
                    <input type="date" class="form-control form-control-solid form-control-pribadi border-0">
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
            </div>
        </div>
    </div>
</div>