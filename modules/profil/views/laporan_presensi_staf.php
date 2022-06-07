<main class="h-100 pt-0">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('profil'); ?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6 class="text-dark">Laporan Presensi Staf</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44"></a>
            </div>
        </div>
    </header>
    <!-- Header ends -->
    <!-- main page content -->
    <div class="main-container container">
        <div class="row mb-3">
            <div class="col-12">
                <div id="calendar" class="my-2 mx-1 shadow-sm"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-4">
                <div class="card mb-3">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="row">
                            <div class="col-5">
                                <img src="<?= base_url('assets/images/vector_absensi.svg') ?>" width="135">
                            </div>
                            <div class="col-7 mt-3 align-self-center">

                                <div class="jam-masuk d-flex justify-content-center align-items-center">
                                    <i class="fa-regular fa-door-open" style="font-size:1.5rem; margin-right: 15px; color: #EC3528;"></i>
                                    <p class="text-secondary fw-normal size-15">Jam Masuk
                                        <br>
                                        <span class="fw-medium size-1%" style="color: #EC3528;">07:00</span>
                                    </p>
                                </div>
                                <div class="solid-line my-3"></div>

                                <div class="jam-pulang d-flex justify-content-center align-items-center">
                                    <i class="fa-regular fa-door-closed" style="font-size:1.5rem; margin-right: 15px; color: #EC3528;"></i>
                                    <p class="text-secondary fw-normal size-15">Jam Pulang
                                        <br>
                                        <span class="fw-medium size-15" style="color: #EC3528;">--:--</span>
                                    </p>
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