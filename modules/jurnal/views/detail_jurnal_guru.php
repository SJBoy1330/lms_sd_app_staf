<main class="py-0">
        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <a href="<?= base_url('jurnal'); ?>" class="btn btn-44">
                        <i class="fa-solid fa-chevron-left text-dark"></i>
                    </a>
                </div>
                <div class="col text-center">
                    <div class="logo-small">
                        <h6>Detail Jurnal Guru</h6>
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
        <div class="row mb-3">
            <div class="col-12">
                <div class="row mb-3">
                    <a href="#">
                        <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden mb-3 p-3">
                            <div class="row py-1 px-2 mb-2 ">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Mata Pelajaran</p>
                                    <p class="mb-0 fw-bold size-15">Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="row py-1 px-2 mb-2">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-solid fa-building-user size-18 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Kelas</p>
                                    <p class="mb-0 fw-bold size-15">XI IPA 1</p>
                                </div>
                            </div>
                            <div class="row py-1 px-2 ">
                                <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-solid fa-clock size-22 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                    <p class="mb-0 fw-normal size-13 text-secondary">Waktu</p>
                                    <p class="mb-0 fw-bold size-15">10:00 - 12:00</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="row mb-2 px-1">
                    <div class="col">
                        <h6 class="title">Materi</h6>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="label-merah">Edit Jurnal</a>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control form-control-solid border-0 bg-tugas" style="height: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet quam odio sit nullam sit non facilisis pellentesque. Quis faucibus non libero magna venenatis duis in.</textarea>
                </div>

                <div class="ps-1">
                    <label for="exampleFormControlInput3" class="form-label title-3">Kegiatan Guru</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control form-control-solid border-0 bg-tugas" style="height: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet quam odio sit nullam sit non facilisis pellentesque. Quis faucibus non libero magna venenatis duis in.</textarea>
                </div>

                <div class="ps-1">
                    <label for="exampleFormControlInput3" class="form-label title-3">Kegiatan Siswa</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control form-control-solid border-0 bg-tugas" style="height: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet quam odio sit nullam sit non facilisis pellentesque. Quis faucibus non libero magna venenatis duis in.</textarea>
                </div>

                <div class="ps-1">
                    <label for="exampleFormControlInput3" class="form-label title-3">Kejadian Kelas</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control form-control-solid border-0 bg-tugas" style="height: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet quam odio sit nullam sit non facilisis pellentesque. Quis faucibus non libero magna venenatis duis in.</textarea>
                </div>

                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="#" class="btn shadow-sm btn-presensi mb-2">Simpan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->

    <!-- Filter Ujian Modal -->
    <div class="modal fade" id="filterTambahJurnal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%); border-radius:0px;">
                <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jurnal</h5>
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
                        <button class="btn btn-block btn-md btn-outline-danger btn-filter">Tambah Tugas</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Filter Tanggal</h5>
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
    </main>
