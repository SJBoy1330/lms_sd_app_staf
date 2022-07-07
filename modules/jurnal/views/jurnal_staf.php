<main class="h-100 py-0">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('home'); ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Jurnal Staf</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44" data-bs-toggle="modal"
                data-bs-target="#filterCalendar">
                    <i class="fa-regular fa-calendar"></i>
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->

    <!-- main page content -->
    <div class="main-container container position-relative">
        <div class="row">
            <a data-bs-toggle="modal" data-bs-target="#filterTambahJurnal" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid avatar-kontak position-fixed">
                <i class="fa-solid fa-plus-large size-26 text-white mt-1"></i>
            </a>
            <div class="col-12">
                <div class="row mb-3">
                    <a data-bs-toggle="modal" data-bs-target="#">
                        <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="fw-bolder size-15">26 April 2022</p>
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
                                <div class="col-auto ps-0 pe-2 mt-2">
                                    <div class="garis"></div>
                                </div>
                                <div class="col p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-15 text-dark ms-1 me-4">Mengajar kelas X IPA 1</p>
                                </div>
                            </div>

                            <div class="row py-1 px-2 mt-2 mb-2 ">
                                <div class="col-auto ps-0 pe-2 mt-2">
                                    <div class="garis"></div>
                                </div>
                                <div class="col p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-15 text-dark ms-1 me-4">Melakukan penyambutan kepala sekolah baru pagi ini</p>
                                </div>
                            </div>

                            <div class="row py-1 px-2 mt-2 mb-2 ">
                                <div class="col-auto ps-0 pe-2 mt-2">
                                    <div class="garis"></div>
                                </div>
                                <div class="col p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-15 text-dark ms-1 me-4">Malakukan kegiatan observasi ke kedinasan pada siang hari</p>
                                </div>
                            </div>

                            <div class="row py-1 px-2 mt-2 mb-2 ">
                                <div class="col-auto ps-0 pe-2 mt-2">
                                    <div class="garis"></div>
                                </div>
                                <div class="col p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-15 text-dark ms-1 me-4">Meeting bersama kacab pada sore hari di hotel niagara</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->

    <!-- Filter Tambah Jurnal -->
    <div class="modal fade" id="filterTambahJurnal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%); border-radius:0px;">
                <div class="modal-header border-0">
                <h5 class="modal-title">Tambah Jurnal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label title-3">Tanggal</label>
                        <input type="date" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Pilih Tanggal">
                    </div>
                    <label class="form-label title-3">Tugas Staf</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="1">
                        <label class="form-check-label size-15" for="1">
                            Mengajar kelas X IPA 1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="2">
                        <label class="form-check-label size-15" for="2">
                            Melakukan penyambutan kepala sekolah baru pagi ini
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="3">
                        <label class="form-check-label size-15" for="3">
                            Malakukan kegiatan observasi ke kedinasan pada siang hari
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="4">
                        <label class="form-check-label size-15" for="4">
                            Meeting bersama kacab pada sore hari di hotel niagara
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="lain">
                        <label class="form-check-label size-15" for="lain">
                            Tugas lainnya
                        </label>
                    </div>
                    <div class="input-group mt-2" id="showhideText" style="display:none">
                        <textarea class="form-control form-control-solid form-control-pribadi border-0 rounded-start-small size-11" id="lainnya"></textarea>
                    </div>
                    <div class="col-12 mt-3">
                        <button class="btn btn-block btn-md btn-outline-danger btn-tambah-tugas"><i class="fa fa-regular fa-plus me-1"></i> Tambah Tugas</button>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Filter Jurnal Staf -->
    <div class="modal fade" id="filterCalendar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
                <div class="modal-header border-0">
                <h5 class="modal-title">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label title-3">Bulan</label>
                        <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                            <option selected>Pilih bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label title-3">Tahun</label>
                        <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                            <option selected>Pilih tahun</option>
                            <option value="1">2019</option>
                            <option value="2">2020</option>
                            <option value="3">2021</option>
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