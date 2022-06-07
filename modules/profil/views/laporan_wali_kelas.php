<main class="h-100 pt-0">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('profil'); ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6 class="text-dark">Laporan Wali Kelas</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44"></a>
            </div>
        </div>
    </header>
    <!-- Header ends -->
    <!-- main page content -->
    <div class="main-container container">
        <div class="row mb-3">
            <div class="col-12">
                <div id="calendar" class="my-2 mx-1 shadow-sm"></div>
            </div>
            <div class="col-12 mb-5">
                <a data-bs-toggle="modal" href="#modalPresensiSiswa" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                        <i class="fa-solid fa-calendar-range size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-15 fw-medium">Materi Pelajaran 01</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a data-bs-toggle="modal" href="#modalPresensiSiswa" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                        <i class="fa-solid fa-calendar-range size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-15 fw-medium">Materi Pelajaran 02</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a data-bs-toggle="modal" href="#modalPresensiSiswa" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                        <i class="fa-solid fa-calendar-range size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-15 fw-medium">Materi Pelajaran 03</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a data-bs-toggle="modal" href="#modalPresensiSiswa" class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                        <i class="fa-solid fa-calendar-range size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-15 fw-medium">Materi Pelajaran 04</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- main page content ends -->
</main>

<!-- Modal Presensi Siswa -->
<div class="modal fade" id="modalPresensiSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-4">
                <h5 class="modal-title">Detail Presensi Siswa</h5>
                <button type="button" class="btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-person-circle-check size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Hadir</p>
                                        <p class="fw-normal text-success size-12">30 Siswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-person-circle-xmark size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Sakit</p>
                                        <p class="fw-normal text-danger size-12">30 Siswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-person-circle-exclamation size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Ijin</p>
                                        <p class="fw-normal text-warning size-12">30 Siswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-person-circle-question size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Tidak Hadir</p>
                                        <p class="fw-normal text-secondary size-12">30 Siswa</p>
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
