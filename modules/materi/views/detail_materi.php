<!-- main page content -->
<div class="main-container container top-20">
    <div class="row mt-3">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <form action="<?= base_url('func_materi/edit_materi') ?>" method="post" id="form_edit_materi">
                <div id="reload-detail-materi">
                    \<div class="row">
                        <div class="col-6 mx-auto">
                            <div class="card mb-3">
                                <div class="col-auto position-absolute avatar-detail-kbm">
                                    <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                            <i class="fa-solid fa-building-user size-18 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body detail-kbm">
                                    <div class="row">
                                        <div class="col align-self-center ps-4 text-detail-kbm">
                                            <p class="mb-0 size-15 fw-medium">Bab</p>
                                            <p class="fw-normal text-secondary size-12" id="isiBab"><?= tampil_text($result->detail->bab, 25); ?></p>
                                            <input type="text" class="d-none" id="inputbab">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-6 mx-auto">
                            <div class="card mb-3">
                                <div class="col-auto position-absolute avatar-detail-kbm">
                                    <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                            <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body detail-kbm">
                                    <div class="row">
                                        <div class="col align-self-center ps-4 text-detail-kbm">
                                            <p class="mb-0 size-14 fw-medium" id="isimapel">Mata Pelajaran</p>
                                            <p class=" fw-normal text-secondary size-12"><?= tampil_text($result->detail->nama_pelajaran, 30); ?></p>
                                            <input type="text" id="inputmapel" class="d-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-6 mx-auto">
                            <div class="card">
                                <div class="col-auto position-absolute avatar-detail-kbm">
                                    <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                            <i class="fa-solid fa-chalkboard-user size-20 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body detail-kbm">
                                    <div class="row">
                                        <div class="col align-self-center ps-4 text-detail-kbm">
                                            <p class="mb-0 size-13 fw-medium">Pembuat Materi</p>
                                            <p class="fw-normal text-secondary size-12"><?= tampil_text($result->detail->nama_staf, 15); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 mx-auto">
                            <div class="card">
                                <div class="col-auto position-absolute avatar-detail-kbm">
                                    <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-15 avatar-presensi-inline" style="line-height: 44px;">
                                            <i class="fa-solid fa-book-open-cover size-20 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body detail-kbm">
                                    <div class="row">
                                        <div class="col align-self-center ps-4 text-detail-kbm">
                                            <p class="mb-0 size-15 fw-medium" id="isimateri">Materi</p>
                                            <p class="fw-normal text-secondary size-12"><?= tampil_text($result->detail->materi, 25); ?></p>
                                            <input type="text" id="inputmateri" class="d-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <div class="row mb-2">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card shadow-none bg-transparent mb-3">
                        <div class="card-header border-0">
                            <div class="col-12 align-self-center tab" style="display: flex; justify-content:center; align-items:center;">
                                <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'Video')" style=" width: 100%; height: 100%; padding: 10px;">Video</button>
                                <button class="tablinks" onclick="openCity(event, 'Download')" style="width: 100%; height: 100%; padding: 10px;">Download</button>
                            </div>
                        </div>
                        <div class="card-body tabcontent" id="Video">

                            <?php if ($result->result->video) : ?>
                                <?php foreach ($result->result->video as $row) : ?>
                                    <div class="mb-3 zoom-filter hiding" id="display-<?= $row->id_materi_video; ?>">
                                        <iframe class="video-detail-materi" width="420" height="345" src="<?= $row->url; ?>"></iframe>
                                    </div>
                                <?php endforeach; ?>
                                <?php foreach ($result->result->video as $row) : ?>
                                    <a class="card mb-3  show_video" data-id="<?= $row->id_materi_video; ?>">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                                        <div class="avatar avatar-40 rounded-15 avatar-presensi-inline" style="line-height: 43px;">
                                                            <i class="fa-solid fa-circle-play size-22 text-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center px-0">
                                                    <p class="mb-1 size-13 fw-normal"><?= tampil_text($row->judul, 20); ?></p>
                                                    <p class="text-muted text-secondary size-12"><?= $row->durasi; ?></p>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <button class="btn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <?= vector_default('vector_video_kosong.svg', 'Tidak terdapat materi video', 'Sekolah belum menyediakan materi berbasis video, hubungi guru atau admin jika terjadi kesalahan!', 'video_materi'); ?>
                            <?php endif; ?>
                            <form action="<?= base_url('func_materi/tambah_video'); ?>" method="POST" class="row" id="form_tambah_video">
                                <div class="col-12 d-none" id="formvideo">
                                    <div class="row">
                                        <div class="col-6" id="req_judul_video">
                                            <label for="judul" class="form-label size-15 fw-bold">Judul</label>
                                            <input type="text" name="judul_video" class="form-control form-control-pribadi border-0" id="judul" placeholder="isikan judul" autocomplete="off">
                                        </div>
                                        <div class="col-6" id="req_url_video">
                                            <label for="url" class="form-label size-15 fw-bold">Link URL</label>
                                            <input type="text" name="url_video" class="form-control form-control-pribadi border-0" id="url" placeholder="isikan link url" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center d-flex justify-content-center my-3">
                                    <a id="btntambahvideo" onclick="tambahvideo()" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                        <i class="fa-solid fa-plus-large size-26 text-white mt-1"></i>
                                    </a>
                                    <a id="btnbatalvideo" onclick="bataltambahvideo()" class="d-none avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                        <i class="fa-solid fa-xmark size-26 text-white mt-1"></i>
                                    </a>
                                    <a id="btnsavevideo" onclick="submit_form(this,'#form_tambah_video',1)" class="d-none avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                        <i class="fa-solid fa-check size-26 text-white mt-1"></i>
                                    </a>

                                </div>
                            </form>
                        </div>

                        <div class="card-body tabcontent" id="Download">
                            <?php if ($result->result->dokumen) : ?>
                                <?php foreach ($result->result->dokumen as $row) : ?>
                                    <?php
                                    if ($row->file_dokumen != FALSE) {
                                        $action = 'href="' . $row->file_dokumen . '"';
                                    } else {
                                        $action = 'onclick="take_alert(`PERINGATAN`, `Tidak bisa mengunduh file diakrenakan file rusak!`, `warning`)"';
                                    }
                                    ?>
                                    <a <?= $action; ?> class="card my-3" <?php
                                                                            if ($row->file_dokumen == FALSE) {
                                                                                echo 'style="background-color : #EAEBEB;"';
                                                                            }
                                                                            ?>>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 shadow-sm rounded-18 <?php
                                                                                                        if ($row->file_dokumen != FALSE) {
                                                                                                            echo 'avatar-presensi-outline';
                                                                                                        } else {
                                                                                                            echo 'avatar-presensi-outline-second';
                                                                                                        }
                                                                                                        ?>">
                                                        <div class="avatar avatar-40 rounded-15 <?php
                                                                                                if ($row->file_dokumen != FALSE) {
                                                                                                    echo 'avatar-presensi-inline';
                                                                                                } else {
                                                                                                    echo 'avatar-presensi-inline-second';
                                                                                                }
                                                                                                ?>">
                                                            <i class="fa-solid fa-download size-22 text-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center ps-0">
                                                    <p class="mb-1 size-13 fw-normal"><?= tampil_text($row->judul, 20); ?></p>
                                                    <p class="text-muted text-secondary size-12"><?= $row->size; ?> Mb</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <?= vector_default('vector_dokumen_kosong.svg', 'Tidak ada dokumen', 'Sekolah belum menyediakan materi dalam bentuk dokumen, hubungi guru atau sekolah jika terjadi kesalahan', 'download_materi'); ?>
                            <?php endif; ?>

                            <div class="row">
                                <div class="col-12 d-none" id="formdowmloadvideo">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="videojudul" class="form-label size-15 fw-bold">Judul</label>
                                            <input type="text" class="form-control form-control-pribadi border-0" id="videojudul" placeholder="isikan judul" autocomplete="off">
                                        </div>
                                        <div class="col-6">
                                            <label for="file" class="form-label size-15 fw-bold">File</label>
                                            <label for="file" class="form-control form-control-pribadi bg-f5f5f5 border-0">Pilih file</label>
                                            <input class="d-none" type="file" id="file" title="foo" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center d-flex justify-content-center my-3">
                                    <a id="btntambahdownloadvideo" onclick="tambahdownloadvideo()" class="avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                        <i class="fa-solid fa-plus-large size-26 text-white mt-1"></i>
                                    </a>
                                    <a id="btnsavedownloadvideo" onclick="savedownloadvideo()" class="d-none avatar avatar-60 shadow-lg rounded-circle avatar-presensi-solid">
                                        <i class="fa-solid fa-check size-26 text-white mt-1"></i>
                                    </a>
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