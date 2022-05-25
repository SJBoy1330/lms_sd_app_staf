<main class="h-100 py-0">
        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <a href="<?= base_url('materi/detail_bab')?>" class="btn btn-44">
                        <i class="fa-solid fa-chevron-left text-dark"></i>
                    </a>
                </div>
                <div class="col text-center">
                    <div class="logo-small">
                        <h6>Tambah Materi</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="#" target="_self" class="btn btn-44"></a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container position-relative">
            <div class="row mx-2">
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label title-3">Bab</label>
                        <select class="form-select form-select form-select-pribadi border-0">
                            <option selected>Pilih bab</option>
                            <option value="1">Bab 1</option>
                            <option value="2">Bab 2</option>
                            <option value="3">Bab 3</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label title-3">Nama Materi</label>
                        <input type="text" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Masukkan kata sandi">
                    </div>

                    <div class="mb-5">
                        <label class="form-label title-3">Keterangan Materi</label>
                        <input type="text" class="form-control form-control-solid form-control-pribadi border-0" placeholder="Masukkan keterangan materi">
                    </div>
                </div>
                <div class="col-11 col-sm-11 mt-auto mx-auto pt-4 pb-5">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center d-grid">
                            <a href="index-SD.html" class="btn btn-lg shadow-sm btn-pribadi">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main page content ends -->
    </main>