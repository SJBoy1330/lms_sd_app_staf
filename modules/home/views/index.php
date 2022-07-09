<!-- main page content -->
<div class="main-container container">
    <!-- Ucapan Selamat Datang -->
    <div class="row my-4 text-start">
        <div class="col-9">
            <p class="mb-0 ms-2 title-2">Halo, Drs Sri Hand...</p>
            <p class="mb-0 ms-2 title-1-home">Selamat Datang</p>
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-sm btn-outline-danger btn-fingerprint" data-bs-toggle="modal" data-bs-target="#presensiModal">
                <i class="fa-solid fa-user-check" style="font-size:1.2rem"></i>
            </button>
        </div>
    </div>

    <div class="row" style="margin-bottom : 0.75rem;" id="jadwal-list">
        <div class="col-6 mb-3 jadwal">
            <a data-bs-toggle="modal" href="#presensiModalMapel" role="button" class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal-pending">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Bahasa Indonesia</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 mb-3 jadwal">
            <div class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="jam-presensi">
                        <p class="mb-0 text-white size-13">07:00</p>
                    </div>
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Ilmu Pengetahuan Alam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 mb-3 jadwal">
            <div class="card bg-opac-50 card-jadwalmapel">
                <div class="card-body">
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal opacity-5">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="mb-1 title-1-home-text opacity-5">XI IPA 1</p>
                            <p class="mb-0 title-4-home-text opacity-5">Ilmu Pengetahuan Alam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 mb-3 jadwal">
            <div class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="boba-besar"></div>
                    <div class="boba-kecil-1"></div>
                    <div class="boba-kecil-2"></div>
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Matematika</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 mb-3 jadwal">
            <div class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal-pending">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Sejarah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 mb-3 jadwal">
            <div class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="jam-presensi">
                        <p class="mb-0 text-white size-13">07:00</p>
                    </div>
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Biologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 mb-3 jadwal">
            <div class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="boba-besar"></div>
                    <div class="boba-kecil-1"></div>
                    <div class="boba-kecil-2"></div>
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Kimia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 mb-3 jadwal">
            <div class="card bg-opac-50 card-jadwalmapel">
                <div class="card-body">
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal opacity-5">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="mb-1 title-1-home-text opacity-5">XI IPA 1</p>
                            <p class="mb-0 title-4-home-text opacity-5">Fisika</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 mb-3 jadwal">
            <div class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="jam-presensi">
                        <p class="mb-0 text-white size-13">07:00</p>
                    </div>
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Bahasa Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 mb-3 jadwal">
            <div class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal-pending">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Sains</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 mb-3 jadwal">
            <div class="card card-jadwalmapel">
                <div class="card-body">
                    <div class="boba-besar"></div>
                    <div class="boba-kecil-1"></div>
                    <div class="boba-kecil-2"></div>
                    <div class="row flex-column">
                        <div class="col-auto">
                            <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                <div class="icons text-white rounded-circle bg-icon-jadwal">
                                    <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-3 mt-2">
                            <p class="fw-normal size-17 mb-1 title-1-home-text">XI IPA 1</p>
                            <p class="fw-normal text-secondary mb-0 size-13">Sosiologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <nav aria-label=...>
        <ul class="pagination pagination-carousel">
            <a class="to-page d-none" href="javascript:void(0)"></a>
        </ul>
    </nav>

    <!-- Pengumuman -->
    <?php if (isset($pengumuman)) : ?>
        <div class="row mt-4 mb-3 px-1">
            <div class="col">
                <h6 class="title">Pengumuman</h6>
            </div>
            <div class="col-auto align-self-center">
                <a href="<?= base_url('home/list_pengumuman'); ?>" class="label-merah">Lihat Semua</a>
            </div>
        </div>

        <div class="row">
            <?php foreach ($pengumuman as $row) : ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?= base_url('home/detail_pengumuman/' . $row->id_pengumuman . '?redirect=true') ?>" class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">

                                        <img src="<?= $row->gambar; ?>" loading="lazy" alt="">
                                    </div>
                                </div>
                                <div class=" col align-self-center ps-0">
                                    <p class="mb-1 size-15 fw-normal"><?= tampil_text($row->judul, 40) ?></p>
                                    <p class="fw-normal text-secondary size-12"><?= nice_time($row->tanggal_mulai) ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if (isset($berita)) : ?>
        <!-- Berita -->
        <div class="row mt-4 mb-3 px-1">
            <div class="col">
                <h6 class="title">Berita</h6>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('home/list_berita') ?>" class="label-merah">Lihat Semua</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12 px-0">
                <div class="swiper-container cardswiper cardswiper-berita">
                    <div class="swiper-wrapper">
                        <?php foreach ($berita as $row) : ?>
                            <a href="<?= base_url('home/detail_berita/' . $row->id_konten . '?redirect=true') ?>" class="swiper-slide">

                                <div class="card theme-bg shadow-sm shadow-purple card-berita" style="background-image: url('<?= $row->gambar; ?>');">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto position-absolute badge-status">
                                                <span class="badge rounded-pill px-3 py-2 bg-badge fw-normal"><?= $row->nama_kategori; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-text shadow-sm">
                                    <div class="row px-3 py-3">
                                        <p class="mb-1 fw-medium size-15 text-dark">
                                            <?= tampil_text($row->judul, 40) ?></p>
                                        <p class="mb-0 title-4-home-text"><?= tampil_text($row->keterangan, 80) ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>
<!-- main page content ends -->

<!-- Modal Presensi Masuk -->
<div class="modal fade" id="presensiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-4">
                <button type="button" class="btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div id="map-container-google-1" class="z-depth-1-half map-container">
                            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-clock size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Jam Masuk</p>
                                        <p class="fw-normal text-secondary size-12">07:00 WIB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ps-2 pe-1">
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-clock size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Jam Pulang</p>
                                        <p class="fw-normal text-secondary size-12">16:00 WIB</p>
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
                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline" style="line-height: 33px;">
                                                <i class="fa-solid fa-location-crosshairs size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Jarak</p>
                                        <p class="fw-normal text-secondary size-12">20 Km</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center border-0">
                <a href="#" class="btn shadow-sm btn-presensi mb-2">Presensi</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Presensi Mata Pelajaran -->
<div class="modal fade" id="presensiModalMapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content" style="border-radius: 0px;">
            <div class="modal-header py-4">
                <button type="button" class="btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div id="map-container-google-1" class="z-depth-1-half map-container">
                            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                                        <p class="fw-normal text-secondary size-12">XI IPA 1</p>
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
                                        <p class="fw-normal text-secondary size-12">Bahasa Indonesia</p>
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
                                                <i class="fa-solid fa-clock size-24 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-12 fw-medium">Jam Pelajaran</p>
                                        <p class="fw-normal text-secondary size-12">16:00</p>
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
                                        <p class="fw-normal text-secondary size-12">20 Km</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center border-0">
                <a href="<?= base_url('kbm/detail_kbm') ?>" class="btn shadow-sm btn-presensi mb-2">Presensi</a>
            </div>
        </div>
    </div>
</div>