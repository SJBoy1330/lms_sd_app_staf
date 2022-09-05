<div class="modal-header border-0">
    <h5 class="modal-title">Tambah Jurnal</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form id="form_tambah_jurnal" method="post" action="<?php echo base_url('func_jurnal/tambah_jurnal_staf'); ?>" class="modal-body">
    <div class="mb-3">
        <label for="exampleFormControlInput3" class="form-label title-3">Tanggal</label>
        <input type="date" onchange="change_tanggal(this)" name="tanggal" value="<?= $real_date; ?>" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Pilih Tanggal">
    </div>
    <label class="form-label title-3">Tugas Staf</label>
    <?php if ($tugas) : ?>
        <?php foreach ($tugas as $row) : ?>
            <div class="form-check">
                <input name="jenis_tugas[]" class="form-check-input" type="checkbox" value="<?= $row->id_jenis_tugas_staf; ?>" <?php if (in_array($row->id_jenis_tugas_staf, $value_jurnal)) {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> <?php if ($status_jurnal == true) {
                                                                                                                                            echo 'disabled';
                                                                                                                                        } ?> <?php if ($tanggal > strtotime(date('Y-m-d H:i:s'))) {
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
                                                                                            } ?> <?php if ($tanggal > strtotime(date('Y-m-d H:i:s'))) {
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
                                                                                                                                                    } ?> <?php if ($tanggal > strtotime(date('Y-m-d H:i:s'))) {
                                                                                                                                                                echo 'disabled';
                                                                                                                                                            } ?>><?= $tugas_lain; ?></textarea>
    </div>
</form>
<div class="modal-footer border-0">
    <button type="button" id="button_submit_jurnal" onclick="submit_form(this,'#form_tambah_jurnal',0,'big')" class="btn btn-block btn-md btn-danger btn-filter" <?php if ($status_jurnal == true) {
                                                                                                                                                                        echo 'disabled';
                                                                                                                                                                    } ?><?php if ($tanggal > strtotime(date('Y-m-d H:i:s'))) {
                                                                                                                                                                            echo 'disabled';
                                                                                                                                                                        } ?>>Simpan</button>
</div>