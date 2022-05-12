<!-- Sidebar main menu -->
<div id="sidemenu" class="sidebar-wrap  sidebar-overlay">
    <!-- Add pushcontent or fullmenu instead overlay -->
    <div id="content_sidemenu">
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar">
            <!-- user information -->
            <div class="row my-3">
                <div class="col-12 profile-sidebar">
                    <div class="row mt-3">
                        <div class="col-auto">
                            <figure class="avatar avatar-80 rounded-20 p-1 bg-white shadow-sm">
                                <img src="<?= base_url('assets/images/mia-khalifa.png') ?>" alt="" class="rounded-18">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h5 class="mb-0 text-dark">Mia Khalifah</h5>
                            <p class="text-muted size-12">XI IPA 1</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- user emnu navigation -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'home', $this->uri->segment(2), array())) ?>" aria-current="page" href="<?= base_url('home'); ?>" onclick="unreload(this)">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-house"></i></div>
                                <div class="col">Dashboard</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'kbm', $this->uri->segment(2), array())) ?>" href="<?= base_url('kbm') ?>" tabindex="-1" onclick="unreload(this)">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="col">Jadwal</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'materi', $this->uri->segment(2), array())) ?>" href="<?= base_url('materi') ?>" tabindex="-1" onclick="unreload(this)">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-book-open-cover"></i></div>
                                <div class="col">Materi</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'tugas', $this->uri->segment(2), array())) ?>" href="<?= base_url('tugas') ?>" onclick="unreload(this)" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-list-check"></i></div>
                                <div class="col">Tugas</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (set_active($this->uri->segment(1), 'toko', $this->uri->segment(2), array())) ?>" href="<?= base_url('toko') ?>" onclick="unreload(this)" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-shop"></i></div>
                                <div class="col">Toko</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item logout">
                            <a class="nav-link" href="<?= base_url('auth/logout') ?>" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                                <div class="col">Keluar</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Sidebar main menu ends -->
<main class="h-100" style="background-image: url(<?= base_url(); ?>assets/images/bg-3.pn); background-repeat: no-repeat; background-size: cover; background-position: center;">

    <!-- Header -->
    <header class="header position-fixed">
        <div id="header" class="row">
            <div class="col-auto">
                <a href="javascript:void(0)" target="_self" class="btn btn-44 menu-btn">
                    <img src="<?= base_url(); ?>assets/icons/hamburger.png" width="24" alt="">
                </a>
            </div>
            <div class="col text-center">
            </div>
            <div class="col-auto">
                <a href="notifikasi-SD.html" target="_self" class="btn btn-44 rounded-circle btn-notifikasi">
                    <img src="<?= base_url(); ?>assets/icons/notif.png" width="24" alt="">
                    <span class="count-indicator"></span>
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->