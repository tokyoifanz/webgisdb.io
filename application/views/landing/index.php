<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <?php $this->load->view('partials/title.php'); ?>

    <!-- CSS -->
    <?php $this->load->view('partials/vendor-css.php'); ?>
</head>

<body>

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url(); ?>assets/img/landing.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Selamat Datang</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">WebGIS Persebaran Demam Berdarah</h1>
                                    <a href="<?= base_url('landing/about')?>" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Telusuri</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- JS -->
    <?php $this->load->view('partials/vendor-js.php'); ?>

</body>

</html>