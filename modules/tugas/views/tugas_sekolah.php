<!-- main page content -->
<div class="main-container container top-20">
    <div class="row d-flex justify-content-center">
        <div id="parent_tugas">
            <div id="reload_tugas">
                <?php if ($result) : ?>

                    <div class="wrapper-searching-tugas">
                        <div class="wrapper-samaran"></div>
                        <div class="row bg-white">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="text" id="search_tugas" onkeyup="search(this,'div.target_search','#vector_tugas')" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                                    <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="id_pelajaran" value="<?= $id_pelajaran; ?>">
                    <input type="hidden" id="id_kelas" value="<?= $id_kelas; ?>">
                    <?php foreach ($result as $row) : ?>
                        <div class="col-12 showing target_search" id="tugas-<?= $row->id_tugas; ?>">
                            <div class=" row mb-3">
                                <div class="col-12">
                                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <p class="fw-bolder size-15"><?= tampil_text($row->nama, 30); ?></p>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div class="button-action position-absolute d-flex flex-wrap flex-column">
                                                    <?php if ($status_wali == false) : ?>
                                                        <button onclick="hapus_tugas(<?= $row->id_tugas; ?>)" class="btn btn-secondary bg-button rounded-pill" type="button">
                                                            <i class="fa-solid fa-trash" style="font-size: 14px; color: #EC3528;"></i>
                                                        </button>
                                                    <?php endif; ?>
                                                </div>
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
                                                <p class="mb-0 fw-normal size-15" style="width: 75%;"><?= tampil_text($row->keterangan, 50); ?></p>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mx-1">
                                            <a href="<?= base_url('tugas/jawaban_siswa/' . $row->id_kelas . '/' . $row->id_pelajaran . '/' . $row->id_tugas . $wali_kelas); ?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Detail Tugas</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?= vector_default('vector_tugas_kosong.svg', 'Tidak ada tugas', 'Anda belum menambahkan tugas! hubungi pihak sekolah jika terjadi kesalahan', 'vector_tugas', count($result)); ?>
            </div>
        </div>

    </div>
</div>
<!-- main page content ends -->


</main>