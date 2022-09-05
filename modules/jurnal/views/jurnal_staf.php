<!-- main page content -->
<div class="main-container container position-relative">
    <div class="row">
        <a data-bs-toggle="modal" data-bs-target="#filterTambahJurnal" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid avatar-kontak position-fixed">
            <i class="fa-solid fa-plus-large size-26 text-white mt-1"></i>
        </a>
        <div class="col-12" id="parent_jurnal_staf">
            <div class="row mb-3" id="reload_jurnal_staf">
                <?php if ($result) : ?>
                    <?php foreach ($result as $row) : ?>
                        <a data-bs-toggle="modal" class="card_jurnal_staf" data-bs-target="#" id="card-jurnal-<?= $row->id_jurnal_staf; ?>">
                            <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3" style="min-height: 106px;">
                                <div class="row mb-3">
                                    <div class="col">
                                        <p class="fw-bolder size-15"><?= $row->nice_tanggal; ?></p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="button-action position-absolute d-flex flex-wrap flex-column">
                                            <button type="button" onclick="modal_edit(<?= $row->id_jurnal_staf; ?>)" data-bs-toggle="modal" data-bs-target="#editJurnal" class="btn btn-secondary bg-button rounded-pill mb-2" type="button">
                                                <i class="fa-solid fa-pen-to-square" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                            <button type="button" onclick="hapus_jurnal_staf(<?= $row->id_jurnal_staf; ?>)" class="button_hapus btn btn-secondary bg-button rounded-pill" type="button">
                                                <i class="fa-solid fa-trash" style="font-size: 14px; color: #EC3528;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($row->tugas) : ?>
                                    <?php foreach ($row->tugas as $val) : ?>
                                        <div class="row py-1 px-2 mt-2 mb-2 ">
                                            <div class="col-auto ps-0 pe-2 mt-2">
                                                <div class="garis"></div>
                                            </div>
                                            <div class="col p-0 d-flex align-items-start flex-column">
                                                <p class="mb-0 fw-normal size-15 text-dark ms-1 me-4"><?= tampil_text($val->tugas, 20); ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <?php if ($row->tugas_lain) : ?>
                                    <div class="row py-1 px-2 mt-2 mb-2 ">
                                        <div class="col-auto ps-0 pe-2 mt-2">
                                            <div class="garis"></div>
                                        </div>
                                        <div class="col p-0 d-flex align-items-start flex-column">
                                            <p class="mb-0 fw-normal size-15 text-dark ms-1 me-4"><?= $row->tugas_lain; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <?= vector_default('vector_jurnal_staf_kosong.svg', 'Tidak ada jurnal', 'Anda belum menambahkan jurnal staf, silahkan tambahkan atau hubungi pihak sekolah!'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- main page content ends -->

<!-- Filter Tambah Jurnal -->
<div class="modal fade" id="filterTambahJurnal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content" id="body_from_tambah" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%); border-radius:0px;">
            <div class="modal-header border-0">
                <h5 class="modal-title">Tambah Jurnal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="parent_modaling" style="height : 100%">
                <div id="reload_modaling" style="height : 100%">
                    <form id="form_tambah_jurnal" method="post" action="<?php echo base_url('func_jurnal/tambah_jurnal_staf'); ?>" class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label title-3">Tanggal</label>
                            <input type="date" onchange="change_tanggal(this)" name="tanggal" value="<?= date('Y-m-d'); ?>" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Pilih Tanggal">
                        </div>
                        <label class="form-label title-3">Tugas Staf</label>
                        <?php if ($tugas) : ?>
                            <?php foreach ($tugas as $row) : ?>
                                <div class="form-check">
                                    <input name="jenis_tugas[]" class="form-check-input" type="checkbox" value="<?= $row->id_jenis_tugas_staf; ?>" <?php if (in_array($row->id_jenis_tugas_staf, $value_jurnal)) {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?> <?php if ($status_jurnal == true) {
                                                                                                                                                                echo 'disabled';
                                                                                                                                                            } ?>>
                                    <label class="form-check-label size-15" for="1">
                                        <?= $row->nama; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" onclick="lain()" <?php if ($tugas_lain != null) {
                                                                                                            echo 'checked';
                                                                                                        } ?> <?php if ($status_jurnal == true) {
                                                                                                                    echo 'disabled';
                                                                                                                } ?>>
                            <label class="form-check-label size-15" for="lain">
                                Tugas lainnya
                            </label>
                        </div>
                        <div class="input-group mt-2" id="showhideText" <?php if ($tugas_lain == null) {
                                                                            echo 'style="display:none"';
                                                                        } ?>>
                            <textarea name="tugas_lain" class="form-control form-control-solid form-control-pribadi border-0 rounded-start-small size-11" id="lainnya" <?php if ($status_jurnal == true) {
                                                                                                                                                                            echo 'disabled';
                                                                                                                                                                        } ?>><?= $tugas_lain; ?></textarea>
                        </div>
                    </form>
                    <div class="modal-footer border-0" style="position: absolute; bottom: 0px; width: 100%;">
                        <button type="button" id="button_submit_jurnal" onclick="submit_form(this,'#form_tambah_jurnal',0,'big')" class="btn btn-block btn-md btn-danger btn-filter" <?php if ($status_jurnal == true) {
                                                                                                                                                                                            echo 'disabled';
                                                                                                                                                                                        } ?>>Simpan</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>


<!-- Filter edit Jurnal -->
<div class="modal fade" id="editJurnal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content" id="body_from_tambah" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%); border-radius:0px;">

        </div>
    </div>
</div>

<!-- Filter Jurnal Staf -->
<div class="modal fade" id="filterCalendar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="GET" action="<?= base_url('jurnal/jurnal_staf') ?>" class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Bulan</label>
                    <select id="select_bulan" class=" form-select form-select form-select-pribadi border-0" name="bulan" aria-label="Default select example">
                        <?php if (month_from_number()) : ?>
                            <?php foreach (month_from_number() as $row => $bln) : ?>
                                <option value="<?= $row; ?>" <?php if ($row == $bulan) {
                                                                    echo 'selected';
                                                                } ?>><?= $bln; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Tahun</label>
                    <select id="select_tahun" class="form-select form-select form-select-pribadi border-0" name="tahun" aria-label="Default select example">
                        <?php for ($i = (date('Y') - 3); $i <= (date('Y') + 6); $i++) { ?>
                            <option value="<?= $i; ?>" <?php if ($i == $tahun) {
                                                            echo 'selected';
                                                        } ?>><?= $i; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" onclick="reset_tanggal()" class="btn btn-danger btn-sm btn-reset">Reset</button>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</button>
            </div>
        </form>
    </div>
</div>
</main>