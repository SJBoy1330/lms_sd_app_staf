<main class="h-100">
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
            <div class="col-6">
                <div class="card card-laporan-presensi">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="row flex-column">
                            <div class="col align-self-center">
                                <p class="mb-1 fw-normal text-dark text-center size-15">Jam Masuk</p>
                                <h2 class="mb-0 text-center" style="color: #EC3528;">07 : 00</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card card-laporan-presensi">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="row flex-column">
                            <div class="col align-self-center">
                                <p class="mb-1 fw-normal text-dark text-center size-15">Jam Pulang</p>
                                <h2 class="mb-0 text-center" style="color: #EC3528;">-- : --</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->
</main>