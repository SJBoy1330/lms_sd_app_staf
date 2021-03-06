<!-- Header ends -->
<div class="main-container container">
    <div class="row">
        <div class="col-12">
            <a class="row">
                <a data-bs-toggle="modal" data-bs-target="#">
                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3 mb-3">
                        <div class="row py-1 px-2 mt-2 mb-2 ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-graduation-cap size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Nama Siswa</p>
                                <p class="mb-0 fw-normal size-15"><?= $result->detail->nama; ?></p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mb-2">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-calendar-week size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Tanggal Pengumpulan</p>
                                <p class="mb-0 fw-normal size-15"><?= $result->detail->nice_tanggal; ?></p>
                            </div>
                        </div>

                        <div class="row py-1 px-2">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-regular fa-memo-pad size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Status</p>
                                <p class="mb-0 fw-normal size-15" style="color: #EC3528">Terlambat dikumpulkan</p>
                                <p class="mb-0 fw-normal size-15" style="color: #00DFA3">Telah dikumpulkan</p>
                            </div>
                        </div>
                    </div>
                </a>
            </a>

            <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                <div class="row mb-3">
                    <div class="col">
                        <p class="fw-bolder size-15">Tugas Siswa A</p>
                    </div>
                    <div class="col-auto align-self-center"></div>
                </div>

                <a href="#modalPDF" data-bs-toggle="modal" role="button" class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded-10 bg-document">
                                    <i class="fa-solid fa-file-pdf size-30 text-danger"></i>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-14 fw-normal">tugas_ba.pdf</p>
                                <p class="mb-0 size-12 fw-normal text-secondary">PDF document</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#modalWord" data-bs-toggle="modal" role="button" class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded-10 bg-document">
                                    <i class="fa-solid fa-file-word size-30 text-primary"></i>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-14 fw-normal">tugas_il.docx</p>
                                <p class="mb-0 size-12 fw-normal text-secondary">Word document</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" data-bs-toggle="modal" role="button" class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded-10 bg-document">
                                    <i class="fa-solid fa-file-excel size-30 text-success"></i>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-14 fw-normal">tugas_ner.docx</p>
                                <p class="mb-0 size-12 fw-normal text-secondary">Excel document</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" data-bs-toggle="modal" role="button" class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded-10 bg-document">
                                    <i class="fa-solid fa-file-video size-30" style="color: #5153FF;"></i>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-14 fw-normal">tugas_ha.mp4</p>
                                <p class="mb-0 size-12 fw-normal text-secondary">Video document</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#modalGambar" data-bs-toggle="modal" role="button" class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 rounded-10 bg-document">
                                    <i class="fa-solid fa-file-image size-30 text-warning"></i>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-14 fw-normal">tugas_me.png</p>
                                <p class="mb-0 size-12 fw-normal text-secondary">Gambar document</p>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="row mt-4 mx-1">
                    <button class="btn btn-block btn-md btn-danger btn-detail-tolak">Tolak Tugas</button>
                </div>
                <div class="row mt-2 mx-1">
                    <button class="btn btn-block btn-md btn-success btn-detail-terima" data-bs-toggle="modal" href="#modalInputNilai">Terima Tugas</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Moda Input Nilai -->
<div class="modal fade" id="modalInputNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Input Nilai Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Nilai</label>
                    <input type="number" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Isikan nilai siswa" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gambar -->
<div class="modal fade" id="modalGambar" tabindex="-1" aria-labelledby="detailSuratIjinModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content detail_tugas">
            <div class="modal-header border-0">
                <div class="row" style="width: 100vw;">
                    <div class="col-auto">
                        <a href="<?= base_url('tugas/detail_tugas') ?>" target="_self" class="btn btn-44">
                            <i class="fa-solid fa-chevron-left text-white"></i>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center text-center">
                        <p class="size-14 text-white">tugas_bahasa_indo.png</p>
                    </div>
                    <div class="col-auto">
                        <a href="#" target="_self" class="btn btn-44">
                            <i class="fa-regular fa-download text-white" style="font-size: 20px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="image-preview" style="background-image: url('<?= base_url(); ?>assets/img/categories5.png');">
                </div>
            </div>
            <div class="modal-footer border-0"></div>
        </div>
    </div>
</div>

<!-- Modal PDF -->
<div class="modal fade" id="modalPDF" tabindex="-1" aria-labelledby="detailSuratIjinModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content detail_tugas">
            <div class="modal-header border-0">
                <div class="row" style="width: 100vw;">
                    <div class="col-auto">
                        <a href="<?= base_url('tugas/detail_tugas') ?>" target="_self" class="btn btn-44">
                            <i class="fa-solid fa-chevron-left text-white"></i>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center text-center">
                        <p class="size-14 text-white">tugas_bahasa_indo.pdf</p>
                    </div>
                    <div class="col-auto">
                        <a href="#" target="_self" class="btn btn-44">
                            <i class="fa-regular fa-download text-white" style="font-size: 20px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="image-preview-pdf">
                    <img src="<?= base_url(); ?>assets/images/pdf.svg" width="125" alt="">
                </div>
            </div>
            <div class="modal-footer border-0"></div>
        </div>
    </div>
</div>

<!-- Modal Word -->
<div class="modal fade" id="modalWord" tabindex="-1" aria-labelledby="detailSuratIjinModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content detail_tugas">
            <div class="modal-header border-0">
                <div class="row" style="width: 100vw;">
                    <div class="col-auto">
                        <a href="<?= base_url('tugas/detail_tugas') ?>" target="_self" class="btn btn-44">
                            <i class="fa-solid fa-chevron-left text-white"></i>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center text-center">
                        <p class="size-14 text-white">tugas_bahasa_indo.docx</p>
                    </div>
                    <div class="col-auto">
                        <a href="#" target="_self" class="btn btn-44">
                            <i class="fa-regular fa-download text-white" style="font-size: 20px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="image-preview-word">
                    <img src="<?= base_url(); ?>assets/images/doc.svg" width="125" alt="">
                </div>
            </div>
            <div class="modal-footer border-0"></div>
        </div>
    </div>
</div>
</main>