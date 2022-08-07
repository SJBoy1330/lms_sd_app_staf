<!-- Header ends -->
<div class="main-container container top-20">
    <div class="row mt-3">
        <div class="col-12">
            <?php if ($result) : ?>
                <?php foreach ($result as $row) : ?>
                    <a href="<?= base_url('tugas/tugas_sekolah/' . $row->id_kelas . '/' . $row->id_pelajaran . $wali_kelas); ?>" class="card mb-3 showing">
                        <div class="card-body bg-tugas-pelajaran">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                            <i class="fa-solid fa-building-user size-18 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="mb-0 size-13 fw-medium text-dark"><?= $row->pelajaran; ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <?= vector_default('vector_kbm_kosong.svg', 'Tidak ada pelajaran terkait', 'Tidak ada pelajaran anda yang terkait dengan kelas ini, hubungi pihak sekolah jika terjadi kesalahan !'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</main>