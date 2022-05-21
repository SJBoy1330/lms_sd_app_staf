<!-- Required jquery and libraries -->

<script>
    var BASE_URL = baseUrl = '<?= base_url(); ?>';
</script>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

<!-- swiper js script -->
<script src="<?= base_url(); ?>assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>


<!-- Customized jquery file  -->
<script src="<?= base_url(); ?>assets/js/main.js"></script>
<script src="<?= base_url(); ?>assets/js/color-scheme.js"></script>

<!-- PWA app service registration and works -->
<script src="<?= base_url(); ?>assets/js/pwa-services.js"></script>
<script src="<?= base_url(); ?>assets/js/global.js"></script>

<!-- Evo Calendar -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/evo-calendar/js/evo-calendar.min.js"></script>

<?php

if (isset($js_add) && is_array($js_add)) {
    foreach ($js_add as $js) {
        echo $js;
    }
} else {
    echo (isset($js_add) && ($js_add != "") ? $js_add : "");
}

?>