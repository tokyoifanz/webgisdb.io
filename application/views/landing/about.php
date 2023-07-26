<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <?php $this->load->view('partials/title.php'); ?>

    <!-- CSS -->
    <?php $this->load->view('partials/vendor-css.php'); ?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <?php $this->load->view('partials/navbar.php'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" id="header" style="background: url(<?= base_url(); ?>assets/img/header.jpg);">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Home</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">DB</h1>
                                <small class="fs-5 fw-bold">WebGIS</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/1.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/2.png">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/3.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="padding-bottom: 100px;">
                    <h1 class="mb-4">WebGIS Persebaran Demam Berdarah</h1>
                    <p class="mb-4">Selamat datang di situs web Geographic Information System (GIS) kami yang didedikasikan untuk memantau dan memerangi penyebaran demam berdarah. Kami berkomitmen untuk menyediakan informasi yang akurat dan terkini tentang kasus demam berdarah di berbagai wilayah.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Kenapa Demam Berdarah?</h1>
                    <p class="mb-4">Membuat WebGIS dengan tema persebaran penyakit demam berdarah sangat bermanfaat karena dapat membantu pencegahan, meningkatkan kesadaran masyarakat tentang daerah berisiko, memetakan pola penyebaran, mengidentifikasi faktor risiko, mendukung kolaborasi dan pengambilan keputusan, melakukan kampanye edukasi kesehatan, serta mendukung riset dan respons darurat dalam menghadapi wabah. <br> Dengan WebGIS ini, kita dapat mengatasi penyakit demam berdarah secara lebih efisien dan memperkuat upaya untuk menciptakan lingkungan yang lebih sehat.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">143.184</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Kasus Indonesia <br>(2022)</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <h1 class="display-6" data-toggle="counter-up">1.236</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Kasus Kematian di Indonesia (2022)</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <h1 class="display-6" data-toggle="counter-up">2027</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Kasus di DIY  <br>(2022)</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">16</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Kasus Kematian di DIY (2022)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- FOOTER -->
    <?php $this->load->view('partials/footer.php'); ?>

    <!-- JS -->
    <?php $this->load->view('partials/vendor-js.php'); ?>

</body>

</html>