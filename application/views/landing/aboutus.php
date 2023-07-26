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


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-5">Team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?= base_url(); ?>assets/img/leka.jpg" alt="">
                        <h5>Leka Arizona</h5>
                        <p class="text-primary">NIM. 21.85.0143 </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?= base_url(); ?>assets/img/aifisa.jpg" alt="">
                        <h5>Aifisa Nurul Aziza</h5>
                        <p class="text-primary">NIM. 21.85.0172</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?= base_url(); ?>assets/img/rifka.jpg" alt="">
                        <h5>Rifka Miftakhul Royyan</h5>
                        <p class="text-primary">NIM. 21.85.0168</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?= base_url(); ?>assets/img/isma.jpg" alt="">
                        <h5>Nur Isma Isnaini</h5>
                        <p class="text-primary">NIM. 21.85.0163</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- FOOTER -->
    <?php $this->load->view('partials/footer.php'); ?>

    <!-- JS -->
    <?php $this->load->view('partials/vendor-js.php'); ?>

</body>

</html>