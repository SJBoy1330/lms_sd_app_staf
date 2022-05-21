<main class="h-100 py-0">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="<?= base_url('profil')?>" class="btn btn-44">
                    <i class="fa-solid fa-chevron-left text-dark"></i>
                </a>
            </div>
            <div class="col text-center">
                <div class="logo-small">
                    <h6>Ubah Profil</h6>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-44">
                    <i class="fa-solid fa-check text-dark"></i>
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->
    <!-- main page content -->
    <div class="main-container container">
        <!-- comment -->
        <div class="row mx-2">
            <div class="col-12">
                <form class="row g-3 mt-1">
                    <div class="col-12">
                        <label for="nama" class="form-label fw-bold size-14">Nama lengkap</label>
                        <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="nama" placeholder="Dono kasino indro..." autocomplete="off">
                    </div>
                    <div class="col-12">
                        <label for="alamat" class="form-label fw-bold size-14">Alamat</label>
                        <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="alamat" placeholder="203131341321t" autocomplete="off">
                    </div>
                    <div class="col-12">
                        <label for="nohp" class="form-label fw-bold size-14">No. Handphone</label>
                        <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="nohp" placeholder="08123111111">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="email" class="form-label fw-bold size-14">Email</label>
                        <input type="text" class="form-control bg-f5f5f5 size-11 pyfix-14 border-0 rounded-10 text-start" id="email" placeholder="tes@mail.com" autocomplete="off">
                    </div>
                </form>
            </div>

            <div class="col-11 col-sm-11 mt-auto mx-auto pt-4 pb-5">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center d-grid">
                        <button type="submit" class="w-100 py-3 rounded-pill btn btn-primary bg-ec3528 border-white size-10 fw-lighter btn-simpan">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main page content ends --> 
</main>