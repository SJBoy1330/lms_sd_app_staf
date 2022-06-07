<header class="header position-fixed">
    <div class="row">
        <div class="col-auto">
            <a href="<?= base_url('profil'); ?>" class="btn btn-44">
                <i class="fa-solid fa-chevron-left text-dark"></i>
            </a>
        </div>
        <div class="col text-center">
            <div class="logo-small">
                <h6 class="text-dark">Bantuan</h6>
            </div>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44"></a>
        </div>
    </div>
</header>
<!-- main page content -->
<div class="main-container container top-20">
    <!-- comment -->
    <div class="row">
        <div class="h-190 bg-ec3528 text-white text-center col-12 d-flex justify-content-center flex-column">
            <h3 class="mt-5 pt-3">Bagaimana cara kita membantu anda?</h3>
            <span class="mb-4 pb-3 fw-lighter">Cari topik sesuai dengan kendala anda</span>
            <form class="d-flex">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group searching" style="width: 92vw;">
                            <input type="text" class="form-control form-control-pribadi pencarian text-start" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                            <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5 mb-2">
        <div class="col-12 col-md-12 col-lg-12">
            <span class="size-15 fw-bolder">Trending Topik</span>
            <div class="row mb-2 my-2">
                <div class="col-12 px-0">
                    <!-- swiper categories -->
                    <div class="swiper-container connectionwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tag border active">
                                    <span class="text-uppercase">Semua</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Hiburan</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Perlombaan</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Music</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Accessories</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Camera</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tag border ">
                                    <span class="text-uppercase">Jwellery</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 px-0">
            <div class="box-fiture">
                <a data-bs-toggle="modal" data-bs-target="#modalDetailNotifikasi" class="list-group-item border-0 bg-f5f5f5 shadow-none rounded-15 py-1 px-3 mb-2 mx-3">
                    <div class="row p-2">
                        <div class="col align-self-center ps-2">
                            <p class="mb-0 fw-bold size-14">Bagaimana cara guru melakukan Login?</p>
                        </div>
                        <div class="col-auto d-flex justify-content-end align-items-center ps-0">
                            <div class="fs-3">
                                <i class="fa-solid fa-chevron-right size-14"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- main page content ends -->

<!-- Modal Detail Notifikasi -->
<div class="modal fade" id="modalDetailNotifikasi" tabindex="-1" aria-labelledby="detailTagihanModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="modal-content detail-tagihan rounded-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="detailTagihanModal">Detail Bantuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="display_detail_bantuan">
                    <div class="row mx-2">
                        <p class="fw-medium mt-2 mb-1 size-17">Bagaimana cara guru melakukan Login?</p>
                    </div>

                    <div class="mt-3 mb-4 mx-2">
                        <p class="text-secondary mt-3 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat minus quidem voluptas nisi harum, ut quos tenetur recusandae modi molestiae, ex nostrum aperiam ipsa suscipit dolores maxime impedit, veritatis exercitationem?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>