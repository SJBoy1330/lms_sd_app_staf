<!-- main page content -->
<div class="main-container container top-20 pb-5" style="overflow-x: hidden;">
    <div class="row d-flex justify-content-center align-items-center">
        <ul class="menu position-fixed">
            <div class="toggle">
                <i class="fa-solid fa-plus-large"></i>
            </div>
            <li style="--i:0;"><a href="#modalTambahBab" data-bs-toggle="modal" role="button"><img src="<?= base_url() ?>assets/icons/tambah-bab.png" width="25" alt=""></a></li>
            <li style="--i:1;"><a href="#modalEditBab" data-bs-toggle="modal" role="button"><img src="<?= base_url() ?>assets/icons/edit-bab.png" width="25" alt=""></a></li>
            <li style="--i:2;"><a href="<?= base_url('materi/tambah_materi') ?>"><img src="<?= base_url() ?>assets/icons/tambah-materi.png" width="30" alt=""></a></li>
            <div class="indicator d-none"></div>
        </ul>
        <div class="col-12" id="display_detail">
            <div class="card mb-3" id="reload_detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                    <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-12 fw-normal text-secondary">Mata Pelajaran</p>
                            <p class="mb-0 size-14 fw-normal"><?= $result->detail->nama_pelajaran; ?></p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-auto">
                            <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                    <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0 pe-0">
                            <p class="mb-0 size-12 fw-normal text-secondary">Bab Pelajaran</p>
                            <p class="mb-0 size-13 fw-normal"><?= $result->detail->jumlah_bab; ?> Bab</p>
                        </div>

                        <div class="col-auto ps-1">
                            <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                <div class="avatar avatar-36 rounded-12 avatar-presensi-inline" style="line-height: 39px;">
                                    <i class="fa-solid fa-book-open-cover size-20 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                            <p class="mb-0 size-13 fw-normal"><?= $result->detail->jumlah_materi; ?> Materi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row accordion-babpelajaran g-0" id="display_bab">
        <div id="reload_bab">
            <?php if ($result->result) : ?>
                <?php foreach ($result->result as $row) : ?>
                    <div class="col-12 mb-3">
                        <div class="accordion accordion-flush shadow-sm p-0" id="accordion-<?= $row->id_bab; ?>" style="border-radius: 10px;">
                            <div class="accordion-item" style="border-radius: 10px;">
                                <h2 class="accordion-header" id="flush-heading-<?= $row->id_bab; ?>">
                                    <button class="accordion-button collapsed text-wrap" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $row->id_bab; ?>" aria-expanded="false" aria-controls="collapse-<?= $row->id_bab; ?>" style="border-radius: 10px;">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                                    <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                                        <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col align-self-center ps-0">
                                                <p class="mb-1 size-12 fw-normal text-secondary">Bab Pelajaran</p>
                                                <p class="mb-0 size-14 fw-normal"><?= $row->nama_bab; ?></p>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapse-<?= $row->id_bab; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $row->id_bab; ?>" data-bs-parent="#accordion-<?= $row->id_bab; ?>">
                                    <div class="accordion-body size-11">
                                        <?php if ($row->materi) : ?>
                                            <?php foreach ($row->materi as $mt) : ?>
                                                <div class="row d-flex">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                                            <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 37px;">
                                                                <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="<?= base_url('materi/detail_materi/' . $mt->id_materi); ?>" class="col align-self-center ps-0">
                                                        <p class="mb-0 size-12 fw-normal text-secondary">Materi Pelajaran</p>
                                                        <p class="mb-0 size-14 fw-normal text-dark"><?= $mt->judul; ?></p>
                                                    </a>
                                                    <div class="col-auto align-self-center ps-0">
                                                        <div class="dropdown btn-group dropstart">
                                                            <button class="btn btn-secondary bg-dropdown bg-button rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa-solid fa-sliders-simple" style="font-size: 14px; color: #EC3528;"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item my-2 size-15" href="<?= base_url('materi/edit_materi/' . $mt->id_materi) ?>"><i class="fa-solid fa-pen-to-square pe-2"></i>Edit Materi</a></li>
                                                                <li><a class="dropdown-item my-2 size-15" href="#"><i class="fa-solid fa-trash pe-2"></i>Hapus Materi</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <?= vector_default('vector_kbm_kosong.svg', 'Tidak ada materi', 'Sekolah belum menyediakan materi untuk anda, hubungi guru anda atau pihak sekolah jika terjadi kesalahan!') ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <?= vector_default('vector_bab_kosong.svg', 'Tidak ada bab', 'Tidak ada data Bab dan Materi tersedia, hubungi admin sekolah jika terjadi kesalahan!'); ?>
            <?php endif; ?>
        </div>

    </div>
</div>
<!-- main page content ends -->

</main>

<!-- Filter Tambah Bab -->
<div class="modal fade" id="modalTambahBab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" id="form_tambah_bab" action="<?= base_url('func_materi/tambah_bab'); ?>" class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Bab</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3" id="req_nama_bab">
                    <label class="form-label title-3">Nama Bab</label>
                    <input type="hidden" name="id_pelajaran" id="id_pelajaran" value="<?= $id_pelajaran; ?>">
                    <input type="text" name="nama_bab" id="nama_bab" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Isikan nama bab">
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" id="tambah_bab" onclick="submit_form(this,'#form_tambah_bab')" class="btn btn-block btn-md btn-danger btn-filter">Tambah</a>
            </div>
        </form>
    </div>
</div>

<!-- Filter Edit Bab -->
<div class="modal fade" id="modalEditBab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Edit Bab Materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label title-3">Mata Pelajaran</label>
                    <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                        <option selected>Pilih pelajaran</option>
                        <option value="1" selected>Matematika</option>
                        <option value="2">Ilmu Pengetahuan Sosial</option>
                        <option value="3">Ilmu Pengetahuan Alam</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label title-3">Nama Bab</label>
                    <input type="text" class="form-control form-control-solid form-control-pribadi border-0" value="Bab 1">
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
            </div>
        </div>
    </div>
</div>