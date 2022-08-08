<!-- main page content -->
<div class="main-container container">
    <a href="#" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid avatar-kontak position-fixed" data-bs-toggle="modal" data-bs-target="#modalEdit">
        <i class="fa-solid fa-gear text-white size-26 mt-1"></i>
    </a>
    <div class="row mt-3">
        <div class="col-12  mx-auto">
            <div class="row mb-3">
                <div class="col-12 mx-auto">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row scrollmenu">
                                <div class="col d-flex justify-content-center align-items-center flex-column">
                                    <?php
                                    if (strtotime($tanggal) > strtotime(date('Y-m-d')) || strtotime($tanggal) < strtotime(date('Y-m-d'))) {
                                        $action = 'class="avatar avatar-50 rounded-18 avatar-offline"';
                                    } else {
                                        if ($presensi_setting->presensi_mapel == true) {
                                            if ($result->detail->presensi == true) {
                                                $action = 'href="' . base_url('kbm/presensi_siswa/' . $id_pelajaran . '/' . $id_kelas . '?tanggal=' . date('Y-m-d')) . '" class="avatar avatar-50 rounded-18 avatar-presensi-inline"';
                                            } else {
                                                $action = 'data-bs-toggle="modal" data-bs-target="#presensiModalMapel" class="avatar avatar-50 rounded-18 avatar-presensi-inline button_get_lokasi"';
                                            }
                                        } else {
                                            $action = 'href="' . base_url('kbm/presensi_siswa/' . $id_pelajaran . '/' . $id_kelas . '?tanggal=' . date('Y-m-d')) . '" class="avatar avatar-50 rounded-18 avatar-presensi-inline"';
                                        }
                                    }
                                    ?>
                                    <a <?= $action; ?>>
                                        <div class="circle-bg-top"></div>
                                        <div class="circle-bg-bottom"></div>
                                        <i class="fa-solid fa-calendar-check size-22 text-white"></i>
                                    </a>
                                    <p class="mt-2 mb-0 size-12 fw-medium">Presensi</p>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center flex-column">
                                    <?php
                                    if (strtotime($tanggal) > strtotime(date('Y-m-d'))) {
                                        $inline = 'class="avatar avatar-50 rounded-18 avatar-offline"';
                                    } else {
                                        $inline = 'href="' . base_url('jurnal/detail_jurnal_guru/' . $id_pelajaran . '/' . $id_kelas . '?tanggal=' . date('Y-m-d')) . '" class="avatar avatar-50 rounded-18 avatar-presensi-inline"';
                                    }


                                    ?>
                                    <a <?= $inline; ?>>
                                        <div class="circle-bg-top"></div>
                                        <div class="circle-bg-bottom"></div>
                                        <i class="fa-solid fa-book-user size-22 text-white"></i>
                                    </a>
                                    <p class="mt-2 mb-0 size-12 fw-medium">Jurnal Guru</p>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center flex-column">
                                    <?php
                                    if (strtotime($tanggal) > strtotime(date('Y-m-d'))) {
                                        $video = 'class="avatar avatar-50 rounded-18 avatar-offline"';
                                    } else {
                                        $video = 'href="' . base_url('jurnal/detail_jurnal_guru/' . $id_pelajaran . '/' . $id_kelas . '?tanggal=' . date('Y-m-d')) . '" class="avatar avatar-50 rounded-18 avatar-presensi-inline"';
                                    }


                                    ?>
                                    <a href="#" class="avatar avatar-50 rounded-18 avatar-offline">
                                        <div class="circle-bg-top"></div>
                                        <div class="circle-bg-bottom"></div>
                                        <i class="fa-solid fa-bell-school-slash size-22 text-white"></i>
                                    </a>
                                    <p class="mt-2 mb-0 size-12 fw-medium">Offline</p>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center flex-column">
                                    <a href="#" class="avatar avatar-50 rounded-18 avatar-presensi-inline">
                                        <div class="circle-bg-top"></div>
                                        <div class="circle-bg-bottom"></div>
                                        <i class="fa-solid fa-messages size-22 text-white"></i>
                                    </a>
                                    <p class="mt-2 mb-0 size-12 fw-medium">Pesan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden mb-3 p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bolder size-15">Keterangan KBM</p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mt-2 mb-2 ">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                        <i class="fa-solid fa-calendar-week size-22 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Tanggal</p>
                                <p class="mb-0 fw-normal size-15"><?= $result->detail->nice_tanggal ?></p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mb-3">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                        <i class="fa-solid fa-building-user size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Kelas</p>
                                <p class="mb-0 fw-normal size-15"><?= $result->detail->nama_kelas; ?></p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mb-3">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                        <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Mata Pelajaran</p>
                                <p class="mb-0 fw-normal size-15"><?= $result->detail->nama_pelajaran ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 mx-auto">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row py-1 px-2 mb-3">
                        <div class="d-flex col-auto align-items-center ps-0 pe-2">
                            <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                    <i class="fa-solid fa-calendar-check size-22 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                            <p class="mb-0 fw-bolder size-15">Presensi Siswa</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-auto ps-4 pe-1">
                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                    <i class="fa-solid fa-person-circle-check size-18 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-1">
                            <p class="mb-0 size-12 fw-medium">Hadir</p>
                            <p class="fw-normal text-secondary size-12">30 Siswa</p>
                        </div>

                        <div class="col-auto ps-4 pe-1">
                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                    <i class="fa-solid fa-person-circle-minus size-18 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-1">
                            <p class="mb-0 size-12 fw-medium">Sakit</p>
                            <p class="fw-normal text-secondary size-12">30 Siswa</p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-auto ps-4 pe-1">
                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                    <i class="fa-solid fa-person-circle-exclamation size-18 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-1">
                            <p class="mb-0 size-12 fw-medium">Ijin</p>
                            <p class="fw-normal text-secondary size-12">30 Siswa</p>
                        </div>

                        <div class="col-auto ps-4 pe-1">
                            <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                    <i class="fa-solid fa-person-circle-question size-18 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-1">
                            <p class="mb-0 size-12 fw-medium">Tidak Hadir</p>
                            <p class="fw-normal text-secondary size-12">30 Siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3">
                <div class="row mb-3">
                    <div class="col">
                        <p class="fw-bolder size-15">Tugas Anda</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <a data-bs-toggle="modal" href="#modalTambahMateri" role="button" class="label-biru fw-bold size-13"><i class="fa-regular fa-plus"></i> Tambah Materi</a>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-50 shadow-sm rounded-15 avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                        <i class="fa-solid fa-file size-22 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                <p class="mb-0 size-14 fw-normal">Materi 1 Bab 1 Mapel 1</p>
                            </div>
                            <div class="col-auto align-self-center text-end ms-3">
                                <button class="btn btn-md bg-cancel rounded-circle"><i class="fa-solid fa-xmark size-26 text-danger"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- main page content ends -->
</main>

<!-- Modal Edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title">Edit KBM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label title-3">Meet Online</label>
                            <div class="input-group select-group">
                                <span class="input-group-addon d-flex justify-content-center align-items-center">
                                    <i class="fa-regular fa-video ps-3 pe-1"></i>
                                </span>
                                <select class="form-select form-select form-select-pribadi border-0 ps-2">
                                    <option>Pilih</option>
                                    <option value="C">Zoom Meeting</option>
                                    <option value="D">Google Meet</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label title-3">Link Url</label>
                            <input type="text" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Link Url" style="height: 44px;">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch mb-2">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label size-14 fw-normal">Aktifkan Chatting Grup</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
            </div>
        </div>
    </div>
</div>

<!-- Filter Tambah Materi -->
<div class="modal fade" id="modalTambahMateri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title">Tambah Materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Bab</label>
                    <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                        <option selected>Pilih Bab</option>
                        <option value="1">Bab 1</option>
                        <option value="2">Bab 2</option>
                        <option value="3">Bab 3</option>
                    </select>

                    <div class="row">
                        <div class="col-12">
                           <div class="wrapper-bab mt-3 p-2">
                                <h6>Bab 1</h6>
                           </div>
                           <div class="col-12">
                                <div class="input-checkbox d-flex mb-3">
                                    <input class="form-check-input mb-1" type="checkbox">
                                    <span>hotviralbanget</span>
                                </div>
                                <div class="input-checkbox d-flex mb-3">
                                    <input class="form-check-input mb-1" type="checkbox">
                                    <span>hotviralbanget</span>
                                </div>
                                <div class="input-checkbox d-flex mb-3">
                                    <input class="form-check-input mb-1" type="checkbox">
                                    <span>hotviralbanget</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                           <div class="wrapper-bab mt-3 p-2">
                                <h6>Bab 2</h6>
                           </div>
                           <div class="col-12">
                                <div class="input-checkbox d-flex mb-3">
                                    <input class="form-check-input mb-1" type="checkbox">
                                    <span>hotviralbanget</span>
                                </div>
                                <div class="input-checkbox d-flex mb-3">
                                    <input class="form-check-input mb-1" type="checkbox">
                                    <span>hotviralbanget</span>
                                </div>
                                <div class="input-checkbox d-flex mb-3">
                                    <input class="form-check-input mb-1" type="checkbox">
                                    <span>hotviralbanget</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Mata Pelajaran</label>
                    <select class="form-select form-select form-select-pribadi border-0" aria-label="Default select example">
                        <option selected>Pilih Mata Pelajaran</option>
                        <option value="1">Mapel 1</option>
                        <option value="2">Mapel 2</option>
                        <option value="3">Mapel 3</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="#" class="btn btn-block btn-md btn-danger btn-filter">Simpan</a>
            </div>
        </form>
    </div>
</div>


<!-- Modal Presensi Mata Pelajaran -->
<div class="modal fade" id="presensiModalMapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content" style="border-radius: 0px;">
            <div class="modal-header py-4">
                <button type="button" class="btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="modal-body" action="<?= base_url('presensi/mapel/') ?>" method="POST" id="form_presensi_mapel">
                <div class="row">
                    <div class="col-12">
                        <div style="width : 90%;height :100%;position : absolute;z-index : 10;"></div>
                        <div id="map-container-google-1" class="z-depth-1-half map-container">
                            <iframe id="map_mapel" src="<?= $map; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-building-user size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Nama Kelas</p>
                                        <p class="fw-normal text-secondary size-12" id="kelas"><?= $result->detail->nama_kelas; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-brands fa-stack-overflow size-24 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Nama Mata Pelajaran</p>
                                        <p class="fw-normal text-secondary size-12" id="pelajaran"><?= $result->detail->nama_pelajaran; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 42px;">
                                                <i class="fa-solid fa-location-crosshairs size-24 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Jarak</p>
                                        <p class="fw-normal text-secondary size-12 jarak_mapel"><?= ifnull(round($jarak, 2), 0) . ' M'; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="lat" name="lat" value="<?= $lat; ?>">
                <input type="hidden" class="long" name="long" value="<?= $long; ?>">
                <input type="hidden" id="id_pelajaran_mapel" name="id_pelajaran" value="<?= $id_pelajaran; ?>">
                <input type="hidden" id="id_kelas_mapel" name="id_kelas" value="<?= $id_kelas; ?>">
                <input type="hidden" id="jarak_mapel" value="<?= ifnull(round($jarak, 2), NULL); ?>">
            </form>
            <div class=" modal-footer d-flex justify-content-center border-0">
                <button type="button" onclick="submit_form(this,'#form_presensi_mapel',1)" id="button_presensi_mapel" class="btn shadow-sm btn-presensi mb-2">Presensi</button>
            </div>
        </div>
    </div>
</div>