</main>
<!-- Footer -->
<footer class="footer">
    <div id="footer" class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link mt-1 <?= (set_active($this->uri->segment(1), 'home', $this->uri->segment(2), array())) ?>" href="<?= base_url('home'); ?>" onclick="unreload(this)">
                    <span>
                        <i class="fa-solid fa-house size-18"></i>
                        <span class="nav-text">Dashboard</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mt-1 <?= (set_active($this->uri->segment(1), 'kbm', $this->uri->segment(2), array())) ?>" href="<?= base_url('kbm'); ?>" onclick="unreload(this)">
                    <span>
                        <i class="far fa-calendar-alt size-18"></i>
                        <span class="nav-text">Jadwal</span>
                    </span>
                </a>
            </li>
            <li class="nav-item centerbutton">
                <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#menumodal" id="centermenubtn">
                    <span class="theme-radial-gradient d-flex justify-content-center align-items-center">
                        <i class="bi bi-columns-gap size-22"></i>
                    </span>
                </button>
            </li>
            <li class="nav-item">
                <a class="nav-link mt-1 <?= (set_active($this->uri->segment(1), 'toko', $this->uri->segment(2), array())) ?>" href="<?= base_url('toko'); ?>" onclick="unreload(this)">
                    <span>
                        <i class="fa-solid fa-shop size-18"></i>
                        <span class="nav-text">Toko</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mt-1 <?= (set_active($this->uri->segment(1), 'profil', $this->uri->segment(2), array())) ?>" href="<?= base_url('profil'); ?>" onclick="unreload(this)">
                    <span>
                        <i class="fa-solid fa-user size-18"></i>
                        <span class="nav-text">Profil</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</footer>
<div class="modal fade" id="menumodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content shadow position-absolute" style="bottom: 65px;">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-auto text-center mb-2">
                            <a href="materi-SD.html" class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-20 bg-danger mb-2">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-danger">
                                    <i class="fa-solid fa-book-open-cover size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Materi</p>
                        </div>

                        <div class="col-auto text-center mb-2">
                            <a href="tugas-SD.html" class="avatar avatar-60 p-1 shadow-sm shadow-warning rounded-20 bg-warning mb-2">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-success">
                                    <i class="fa-solid fa-list-check size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Tugas</p>
                        </div>

                        <div class="col-auto text-center mb-2">
                            <a href="pesan-SD.html" class="avatar avatar-60 p-1 shadow-sm shadow-success rounded-20 bg-success mb-2">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-success">
                                    <i class="fa-solid fa-messages size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Chatting</p>
                        </div>

                        <div class="col-auto text-center mb-2">
                            <a href="suratijin-SD.html" class="avatar avatar-60 p-1 shadow-sm shadow-warning rounded-20 mb-2" style="background-color: #FF8C32;">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-success">
                                    <i class="fa-solid fa-envelope-open-text size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Surat Ijin</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="<?= base_url('kbm/kbm'); ?>" class="avatar avatar-60 p-1 shadow-sm shadow-primary rounded-20 mb-2" style="background-color: #1DB9C3;;">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-purple">
                                    <i class="fa-solid fa-screen-users size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">KBM</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="jurnalstaf-SD.html" class="avatar avatar-60 p-1 shadow-sm shadow-primary rounded-20 mb-2" style="background-color: #8843F2;">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-purple">
                                    <i class="fa-solid fa-book-user size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Jurnal Staf</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="<?= base_url('jurnal'); ?>" class="avatar avatar-60 p-1 shadow-sm shadow-primary rounded-20 bg-primary mb-2">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-purple">
                                    <i class="fa-solid fa-book-user size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Jurnal guru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Required jquery and libraries -->
<script>
    var BASE_URL = baseUrl = '<?= base_url(); ?>';
</script>
<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

<!-- Customized jquery file  -->
<script src="<?= base_url() ?>assets/js/main.js"></script>
<script src="<?= base_url() ?>assets/js/color-scheme.js"></script>

<!-- swiper js script -->
<script src="<?= base_url() ?>assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

<script src="<?= base_url() ?>assets/js/pagination-carousel.js"></script>

<script src="<?= base_url() ?>assets/js/global.js"></script>

<div id="script">
    <div id="scripting">
        <?php

        if (isset($js_add) && is_array($js_add)) {
            foreach ($js_add as $js) {
                echo $js;
            }
        } else {
            echo (isset($js_add) && ($js_add != "") ? $js_add : "");
        }

        ?>
    </div>
</div>