<!-- main page content -->
<div class="main-container container top-20">
    <div class="row">
        <div class="wrapper-searching-tugas mb-3">
            <div class="wrapper-samaran"></div>
            <div class="row bg-white" style="width: 100vw;">
                <div class="col-12">
                    <div class="input-group">
                        <input type="text" id="search_siswa" onkeyup="search(this,'div.target_search','#vector_siswa')" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                        <button class="input-group-text searhing" id="basic-addon2" style="background-color:#EC3528;;"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card-body tabcontent-staf" id="detail_tugas" style="padding: 6px 0px;">
                cekcekcek
            </div>
            <div class="card-body tabcontent-staf" id="daftar_siswa" style="padding: 6px 0px;">
                <?php if ($result) : ?>
                    <?php foreach ($result as $row) : ?>
                        <?php if ($row->kode_status == 0) {
                            $css_outline = 'btn-outline-warning';
                            $css_text = 'text-warning';
                        } elseif ($row->kode_status == 1) {
                            $css_outline = 'btn-outline-success';
                            $css_text = 'text-success';
                        } else {
                            $css_outline = 'btn-outline-danger';
                            $css_text = 'text-danger';
                        } ?>
                        <div class="card mb-3 target_search">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 rounded-circle avatar-pesan">
                                            <img src="<?= $row->foto; ?>" alt="">
                                        </div>
                                    </div>
                                    <a href="<?= base_url('tugas/detail_tugas/' . $row->id_siswa . '/' . $id_tugas); ?>" class="col align-self-center ps-0">
                                        <p class="mb-0 size-15 fw-normal text-dark"><?= tampil_text($row->nama, 18); ?></p>
                                        <p class="mb-0 size-13 fw-normal <?= $css_text; ?>"><?= $row->status; ?></p>
                                    </a>
                                    <div class="col-auto align-self-center ps-0">
                                        <button class="btn <?= $css_outline; ?> btn-value" type="button" data-bs-toggle="modal" data-bs-target="#modalInputNilai">
                                            <?= ifnull($row->nilai, ' - '); ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>
                <?= vector_default('vector_jawaban_kosong.svg', 'Tidak ada siswa terkait', 'Belum ada siswa terkait dengan kelas ini! hubungi admin jika terdapat kesalahan!', 'vector_siswa', count($result)); ?>
            </div>

        </div>
    </div>
</div>
<!-- main page content ends -->

<!-- Filter Ujian Modal -->
<div class="modal fade" id="modalInputNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Nilai Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input type="number" class="form-control form-control-solid form-control-pribadi border-0" placeholder=" Masukan nilai siswa" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
            </div>
        </div>
    </div>
</div>

</main>