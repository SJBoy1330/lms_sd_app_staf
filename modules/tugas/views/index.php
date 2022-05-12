<div class="main-container container">
    <div class="row">
        <div class="wrapper-searching-tugas">
            <div class="wrapper-samaran"></div> 
            <div class="row bg-white">
                <div class="col-10">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                        <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center ps-0">
                    <button class="btn btn-secondary filter-tugas border-0" data-bs-toggle="modal" data-bs-target="#filterTugasModal">
                        <i class="fa-regular fa-filter" style="color: #EC3528;"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12">
            <a class="row mb-3">
                <a data-bs-toggle="modal" data-bs-target="#">
                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bolder size-15">Tugas 1</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <p class="fw-normal size-14">Ditugaskan</p>
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
                                <p class="mb-0 fw-bold size-15">Bahasa Indonesia</p>
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
                                <p class="mb-0 fw-bold size-15">Tugas Bahasa Indonesia</p>
                            </div>
                        </div>

                        <div class="row mt-4 mx-1">
                            <a href="<?= base_url('tugas/detail_tugas')?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Detail Tugas</a>
                        </div>

                    </div>
                </a>
            </a>

            <a class="row mb-3">
                <a data-bs-toggle="modal" data-bs-target="#">
                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bolder size-15">Tugas 2</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <p class="label-merah fw-normal size-14">Tidak ada</p>
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
                                <p class="mb-0 fw-bold size-15">Matematika</p>
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
                                <p class="mb-0 fw-bold size-15">Tugas Matematika</p>
                            </div>
                        </div>

                        <div class="row mt-4 mx-1">
                            <a href="<?= base_url('tugas/detail_tugas')?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Detail Tugas</a>
                        </div>

                    </div>
                </a>
            </a>

            <a class="row mb-3">
                <a data-bs-toggle="modal" data-bs-target="#">
                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bolder size-15">Tugas 3</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <p class="label-hijau fw-normal size-14">Diserahkan</p>
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
                                <p class="mb-0 fw-bold size-15">Ilmu Pengetahuan Sosial</p>
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
                                <p class="mb-0 fw-bold size-15">Tugas Ilmu Pengetahuan Sosial
                            </div>
                        </div>

                        <div class="row mt-4 mx-1">
                            <a href="<?= base_url('tugas/detail_tugas')?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Detail Tugas</a>
                        </div>

                    </div>
                </a>
            </a>
        </div>
    </div>
</div>

<!-- Filter Ujian Modal -->
<div class="modal fade" id="filterTugasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
            <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Mata Pelajaran</label>
                    <select class="form-select form-select" aria-label="Default select example">
                        <option selected>Pilih pelajaran</option>
                        <option value="1">Bahasa Indonesia</option>
                        <option value="2">Ilmu Pengetahuan Sosial</option>
                        <option value="3">Ilmu Pengetahuan Alam</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</a>
            </div>
        </div>
    </div>
</div>