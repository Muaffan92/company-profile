    <?php
    if (!empty($getInfoHeader)) {
    ?>
        <section class="bg-primary">
            <div class="container pb-5 pt-3 pb-lg-0 pt-lg-0">
                <div class="w-100 h-100 row">
                    <div class="col-lg-6 mt-lg-auto mt-auto pt-auto mb-auto">
                        <strong class="text-white fs-1"><?= $getInfoHeader['title'] ?></strong>
                        <div class="text-white-50 fs-5">
                            <?= $getInfoHeader['ket'] ?>
                        </div>
                        <a href="<?= base_url('Contact') ?>" class="btn btn-success rounded-3 mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-telephone-outbound-fill me-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            Hubungi Sales
                        </a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block mt-5 pt-5">
                        <img src="<?= base_url('img/' . $getInfoHeader['image']) ?>" class="float-end h-100">
                    </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 283.5 27.8" preserveAspectRatio="xMidYMax slice" class="w-100" style="height:250px;">
            <path class="tt-shape-fill" style="fill:#0d6efd;" d="M0 0v1.4c.6.7 1.1 1.4 1.4 2 2 3.8 2.2 6.6 1.8 10.8-.3 3.3-2.4 9.4 0 12.3 1.7 2 3.7 1.4 4.6-.9 1.4-3.8-.7-8.2-.6-12 .1-3.7 3.2-5.5 6.9-4.9 4 .6 4.8 4 4.9 7.4.1 1.8-1.1 7 0 8.5.6.8 1.6 1.2 2.4.5 1.4-1.1.1-5.4.1-6.9.1-3.7.3-8.6 4.1-10.5 5-2.5 6.2 1.6 5.4 5.6-.4 1.7-1 9.2 2.9 6.3 1.5-1.1.7-3.5.5-4.9-.4-2.4-.4-4.3 1-6.5.9-1.4 2.4-3.1 4.2-3 2.4.1 2.7 2.2 4 3.7 1.5 1.8 1.8 2.2 3 .1 1.1-1.9 1.2-2.8 3.6-3.3 1.3-.3 4.8-1.4 5.9-.5 1.5 1.1.6 2.8.4 4.3-.2 1.1-.6 4 1.8 3.4 1.7-.4-.3-4.1.6-5.6 1.3-2.2 5.8-1.4 7 .5 1.3 2.1.5 5.8.1 8.1s-1.2 5-.6 7.4c1.3 5.1 4.4.9 4.3-2.4-.1-4.4-2-8.8-.5-13 .9-2.4 4.6-6.6 7.7-4.5 2.7 1.8.5 7.8.2 10.3-.2 1.7-.8 4.6.2 6.2.9 1.4 2 1.5 2.6-.3.5-1.5-.9-4.5-1-6.1-.2-1.7-.4-3.7.2-5.4 1.8-5.6 3.5 2.4 6.3.6 1.4-.9 4.3-9.4 6.1-3.1.6 2.2-1.3 7.8.7 8.9 4.2 2.3 1.5-7.1 2.2-8 3.1-4 4.7 3.8 6.1 4.1 3.1.7 2.8-7.9 8.1-4.5 1.7 1.1 2.9 3.3 3.2 5.2.4 2.2-1 4.5-.6 6.6 1 4.3 4.4 1.5 4.4-1.7 0-2.7-3-8.3 1.4-9.1 4.4-.9 7.3 3.5 7.8 6.9.3 2-1.5 10.9 1.3 11.3 4.1.6-3.2-15.7 4.8-15.8 4.7-.1 2.8 4.1 3.9 6.6 1 2.4 2.1 1 2.3-.8.3-1.9-.9-3.2 1.3-4.3 5.9-2.9 5.9 5.4 5.5 8.5-.3 2-1.7 8.4 2 8.1 6.9-.5-2.8-16.9 4.8-18.7 4.7-1.2 6.1 3.6 6.3 7.1.1 1.7-1.2 8.1.6 9.1 3.5 2 1.9-7 2-8.4.2-4 1.2-9.6 6.4-9.8 4.7-.2 3.2 4.6 2.7 7.5-.4 2.2 1.3 8.6 3.8 4.4 1.1-1.9-.3-4.1-.3-6 0-1.7.4-3.2 1.3-4.6 1-1.6 2.9-3.5 5.1-2.9 2.5.6 2.3 4.1 4.1 4.9 1.9.8 1.6-.9 2.3-2.1 1.2-2.1 2.1-2.1 4.4-2.4 1.4-.2 3.6-1.5 4.9-.5 2.3 1.7-.7 4.4.1 6.5.6 1.5 2.1 1.7 2.8.3.7-1.4-1.1-3.4-.3-4.8 1.4-2.5 6.2-1.2 7.2 1 2.3 4.8-3.3 12-.2 16.3 3 4.1 3.9-2.8 3.8-4.8-.4-4.3-2.1-8.9 0-13.1 1.3-2.5 5.9-5.7 7.9-2.4 2 3.2-1.3 9.8-.8 13.4.5 4.4 3.5 3.3 2.7-.8-.4-1.9-2.4-10 .6-11.1 3.7-1.4 2.8 7.2 6.5.4 2.2-4.1 4.9-3.1 5.2 1.2.1 1.5-.6 3.1-.4 4.6.2 1.9 1.8 3.7 3.3 1.3 1-1.6-2.6-10.4 2.9-7.3 2.6 1.5 1.6 6.5 4.8 2.7 1.3-1.5 1.7-3.6 4-3.7 2.2-.1 4 2.3 4.8 4.1 1.3 2.9-1.5 8.4.9 10.3 4.2 3.3 3-5.5 2.7-6.9-.6-3.9 1-7.2 5.5-5 4.1 2.1 4.3 7.7 4.1 11.6 0 .8-.6 9.5 2.5 5.2 1.2-1.7-.1-7.7.1-9.6.3-2.9 1.2-5.5 4.3-6.2 4.5-1 7.7 1.5 7.4 5.8-.2 3.5-1.8 7.7-.5 11.1 1 2.7 3.6 2.8 5 .2 1.6-3.1 0-8.3-.4-11.6-.4-4.2-.2-7 1.8-10.8 0 0-.1.1-.1.2-.2.4-.3.7-.4.8v.1c-.1.2-.1.2 0 0v-.1l.4-.8c0-.1.1-.1.1-.2.2-.4.5-.8.8-1.2V0H0zM282.7 3.4z"></path>
        </svg>
    <?php
    }
    ?>

    <div class="bg-info">
        <!-- HOME -->
        <?php
        if (!empty($getInfo)) {
        ?>
            <section class="bg-white">
                <div class="container mt-5 pt-5" id="start">
                    <h1 class="fw-bold text-primary text-center mb-5">Mari Mengenal X-Metrik</h1>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $jml_info = ceil(count($getInfo) / 5);
                            $limit_info = 0;

                            // MENAMPILKAN SESUAI JUMLAH
                            for ($mitra = 1; $mitra <= $jml_info; $mitra++) {
                                // PEMBAGIAN
                                if ($mitra == 1) {
                            ?>
                                    <div class="carousel-item active">
                                        <div class="row text-center">
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <?php
                                                    $jml_limit_info = 1;

                                                    for ($b = 0; $b < count($getInfo); $b++) {
                                                        if ($jml_limit_info == 1) {
                                                    ?>
                                                            <div class="col-12 mb-lg-5 h-100">
                                                                <?= $getInfo[$b]['icon'] ?>
                                                                <br>
                                                                <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                <p class="text-muted">
                                                                    <?= $getInfo[$b]['ket'] ?>
                                                                </p>
                                                            </div>
                                                        <?php
                                                            $limit_info = $b;
                                                            $jml_limit_info++;
                                                        } elseif ($jml_limit_info <= 2) {
                                                        ?>
                                                            <div class="col-12 h-100">
                                                                <?= $getInfo[$b]['icon'] ?>
                                                                <br>
                                                                <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                <p class="text-muted">
                                                                    <?= $getInfo[$b]['ket'] ?>
                                                                </p>
                                                            </div>
                                                    <?php
                                                            $limit_info = $b;
                                                            $jml_limit_info++;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-lg-flex align-items-center">
                                                <div class="d-block">
                                                    <?php
                                                    $jml_limit_info = 1;

                                                    for ($b = $limit_info + 1; $b < count($getInfo); $b++) {
                                                        if ($jml_limit_info == 1) {
                                                    ?>
                                                            <?= $getInfo[$b]['icon'] ?>
                                                            <br>
                                                            <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                            <p class="text-muted">
                                                                <?= $getInfo[$b]['ket'] ?>
                                                            </p>
                                                    <?php
                                                            $limit_info = $b;
                                                            $jml_limit_info++;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <?php
                                                    $jml_limit_info = 1;

                                                    for ($b = $limit_info + 1; $b < count($getInfo); $b++) {
                                                        if ($jml_limit_info == 1) {
                                                    ?>
                                                            <div class="col-12 mb-lg-5 h-100">
                                                                <?= $getInfo[$b]['icon'] ?>
                                                                <br>
                                                                <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                <p class="text-muted">
                                                                    <?= $getInfo[$b]['ket'] ?>
                                                                </p>
                                                            </div>
                                                        <?php
                                                            $limit_info = $b;
                                                            $jml_limit_info++;
                                                        } elseif ($jml_limit_info <= 2) {
                                                        ?>
                                                            <div class="col-12 h-100">
                                                                <?= $getInfo[$b]['icon'] ?>
                                                                <br>
                                                                <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                <p class="text-muted">
                                                                    <?= $getInfo[$b]['ket'] ?>
                                                                </p>
                                                            </div>
                                                    <?php
                                                            $limit_info = $b;
                                                            $jml_limit_info++;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="carousel-item">
                                        <div class="row text-center">
                                            <?php
                                            for ($a = 0; $a < 3; $a++) {
                                                if ($a <= 3) {
                                            ?>
                                                    <div class="col-lg-4">
                                                        <div class="row">
                                                            <?php
                                                            $jml_limit_info = 1;

                                                            for ($b = 0; $b < count($getInfo); $b++) {
                                                                if ($jml_limit_info == 1) {
                                                            ?>
                                                                    <div class="col-12 mb-lg-5 h-100">
                                                                        <?= $getInfo[$b]['icon'] ?>
                                                                        <br>
                                                                        <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                        <p class="text-muted">
                                                                            <?= $getInfo[$b]['ket'] ?>
                                                                        </p>
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="col-12 h-100">
                                                                        <?= $getInfo[$b]['icon'] ?>
                                                                        <br>
                                                                        <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                        <p class="text-muted">
                                                                            <?= $getInfo[$b]['ket'] ?>
                                                                        </p>
                                                                    </div>
                                                            <?php
                                                                }
                                                                $limit_info = $b;
                                                                $jml_limit_info++;
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 d-lg-flex align-items-center">
                                                        <div class="d-block">
                                                            <?php
                                                            $jml_limit_info = 1;

                                                            for ($b = $limit_info + 1; $b < count($getInfo); $b++) {
                                                                if ($jml_limit_info == 1) {
                                                            ?>
                                                                    <?= $getInfo[$b]['icon'] ?>
                                                                    <br>
                                                                    <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                    <p class="text-muted">
                                                                        <?= $getInfo[$b]['ket'] ?>
                                                                    </p>
                                                            <?php
                                                                }
                                                                $limit_info = $b;
                                                                $jml_limit_info++;
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="row">
                                                            <?php
                                                            $jml_limit_info = 1;

                                                            for ($b = 0; $b < count($getInfo); $b++) {
                                                                if ($jml_limit_info == 1) {
                                                            ?>
                                                                    <div class="col-12 mb-lg-5 h-100">
                                                                        <?= $getInfo[$b]['icon'] ?>
                                                                        <br>
                                                                        <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                        <p class="text-muted">
                                                                            <?= $getInfo[$b]['ket'] ?>
                                                                        </p>
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="col-12 h-100">
                                                                        <?= $getInfo[$b]['icon'] ?>
                                                                        <br>
                                                                        <strong class="fs-5 text-capitalize"><?= $getInfo[$b]['nama'] ?></strong>
                                                                        <p class="text-muted">
                                                                            <?= $getInfo[$b]['ket'] ?>
                                                                        </p>
                                                                    </div>
                                                            <?php
                                                                }
                                                                $limit_info = $b;
                                                                $jml_limit_info++;
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                            <?php

                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 283.5 27.8" preserveAspectRatio="xMidYMax slice" class="w-100" style="height:250px;">
                <path class="tt-shape-fill" style="fill:#fff;" d="M0 0v1.4c.6.7 1.1 1.4 1.4 2 2 3.8 2.2 6.6 1.8 10.8-.3 3.3-2.4 9.4 0 12.3 1.7 2 3.7 1.4 4.6-.9 1.4-3.8-.7-8.2-.6-12 .1-3.7 3.2-5.5 6.9-4.9 4 .6 4.8 4 4.9 7.4.1 1.8-1.1 7 0 8.5.6.8 1.6 1.2 2.4.5 1.4-1.1.1-5.4.1-6.9.1-3.7.3-8.6 4.1-10.5 5-2.5 6.2 1.6 5.4 5.6-.4 1.7-1 9.2 2.9 6.3 1.5-1.1.7-3.5.5-4.9-.4-2.4-.4-4.3 1-6.5.9-1.4 2.4-3.1 4.2-3 2.4.1 2.7 2.2 4 3.7 1.5 1.8 1.8 2.2 3 .1 1.1-1.9 1.2-2.8 3.6-3.3 1.3-.3 4.8-1.4 5.9-.5 1.5 1.1.6 2.8.4 4.3-.2 1.1-.6 4 1.8 3.4 1.7-.4-.3-4.1.6-5.6 1.3-2.2 5.8-1.4 7 .5 1.3 2.1.5 5.8.1 8.1s-1.2 5-.6 7.4c1.3 5.1 4.4.9 4.3-2.4-.1-4.4-2-8.8-.5-13 .9-2.4 4.6-6.6 7.7-4.5 2.7 1.8.5 7.8.2 10.3-.2 1.7-.8 4.6.2 6.2.9 1.4 2 1.5 2.6-.3.5-1.5-.9-4.5-1-6.1-.2-1.7-.4-3.7.2-5.4 1.8-5.6 3.5 2.4 6.3.6 1.4-.9 4.3-9.4 6.1-3.1.6 2.2-1.3 7.8.7 8.9 4.2 2.3 1.5-7.1 2.2-8 3.1-4 4.7 3.8 6.1 4.1 3.1.7 2.8-7.9 8.1-4.5 1.7 1.1 2.9 3.3 3.2 5.2.4 2.2-1 4.5-.6 6.6 1 4.3 4.4 1.5 4.4-1.7 0-2.7-3-8.3 1.4-9.1 4.4-.9 7.3 3.5 7.8 6.9.3 2-1.5 10.9 1.3 11.3 4.1.6-3.2-15.7 4.8-15.8 4.7-.1 2.8 4.1 3.9 6.6 1 2.4 2.1 1 2.3-.8.3-1.9-.9-3.2 1.3-4.3 5.9-2.9 5.9 5.4 5.5 8.5-.3 2-1.7 8.4 2 8.1 6.9-.5-2.8-16.9 4.8-18.7 4.7-1.2 6.1 3.6 6.3 7.1.1 1.7-1.2 8.1.6 9.1 3.5 2 1.9-7 2-8.4.2-4 1.2-9.6 6.4-9.8 4.7-.2 3.2 4.6 2.7 7.5-.4 2.2 1.3 8.6 3.8 4.4 1.1-1.9-.3-4.1-.3-6 0-1.7.4-3.2 1.3-4.6 1-1.6 2.9-3.5 5.1-2.9 2.5.6 2.3 4.1 4.1 4.9 1.9.8 1.6-.9 2.3-2.1 1.2-2.1 2.1-2.1 4.4-2.4 1.4-.2 3.6-1.5 4.9-.5 2.3 1.7-.7 4.4.1 6.5.6 1.5 2.1 1.7 2.8.3.7-1.4-1.1-3.4-.3-4.8 1.4-2.5 6.2-1.2 7.2 1 2.3 4.8-3.3 12-.2 16.3 3 4.1 3.9-2.8 3.8-4.8-.4-4.3-2.1-8.9 0-13.1 1.3-2.5 5.9-5.7 7.9-2.4 2 3.2-1.3 9.8-.8 13.4.5 4.4 3.5 3.3 2.7-.8-.4-1.9-2.4-10 .6-11.1 3.7-1.4 2.8 7.2 6.5.4 2.2-4.1 4.9-3.1 5.2 1.2.1 1.5-.6 3.1-.4 4.6.2 1.9 1.8 3.7 3.3 1.3 1-1.6-2.6-10.4 2.9-7.3 2.6 1.5 1.6 6.5 4.8 2.7 1.3-1.5 1.7-3.6 4-3.7 2.2-.1 4 2.3 4.8 4.1 1.3 2.9-1.5 8.4.9 10.3 4.2 3.3 3-5.5 2.7-6.9-.6-3.9 1-7.2 5.5-5 4.1 2.1 4.3 7.7 4.1 11.6 0 .8-.6 9.5 2.5 5.2 1.2-1.7-.1-7.7.1-9.6.3-2.9 1.2-5.5 4.3-6.2 4.5-1 7.7 1.5 7.4 5.8-.2 3.5-1.8 7.7-.5 11.1 1 2.7 3.6 2.8 5 .2 1.6-3.1 0-8.3-.4-11.6-.4-4.2-.2-7 1.8-10.8 0 0-.1.1-.1.2-.2.4-.3.7-.4.8v.1c-.1.2-.1.2 0 0v-.1l.4-.8c0-.1.1-.1.1-.2.2-.4.5-.8.8-1.2V0H0zM282.7 3.4z"></path>
            </svg>
        <?php
        }
        ?>
        <!-- END INFO -->

        <!-- MITRA -->
        <?php
        if (!empty($getMitra)) {
        ?>
            <section class="container mt-3 p-5">
                <div class="w-100 h-100">
                    <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            for ($i = 0; $i < count($getMitra); $i++) {
                                if ($i == 0) {
                            ?>
                                    <div class="carousel-item active">
                                        <div class="card mb-3 bg-transparent border-0">
                                            <div class="row g-0">
                                                <div class="col-md-8">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title fw-bold text-white display-4 text-start"><?= $getMitra[$i]['title'] ?></h5>
                                                        <p class="card-text text-white mb-6 text-start"><?= $getMitra[$i]['ket'] ?></p>
                                                        <a href="<?= base_url($getMitra[$i]['link']) ?>" class="btn btn-primary rounded-pill position-absolute bottom-0 mb-5">Selengkapnya</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="<?= base_url('img/' . $getMitra[$i]['image']) ?>" alt="Stockiest" class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="carousel-item">
                                        <div class="card mb-3 bg-transparent border-0">
                                            <div class="row g-0">
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title fw-bold text-white display-4"><?= $getMitra[$i]['title'] ?></h5>
                                                        <p class="card-text text-white mb-6"><?= $getMitra[$i]['ket'] ?></p>
                                                        <a href="<?= base_url($getMitra[$i]['link']) ?>" class="btn btn-primary rounded-pill position-absolute bottom-0 mb-5">Selengkapnya</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="<?= base_url('img/' . $getMitra[$i]['image']) ?>" alt="Stockiest" class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>
        <!-- END MITRA -->

        <!-- LAYANAN -->
        <?php
        if ((!empty($getSupport) || (!empty($getOperator)))) {
        ?>
            <section class="bg-light">
                <div class="w-100 h-100 pt-5 pb-5 container">
                    <div class="text-center">
                        <p class="display-3 fw-bold">
                            <b>Berbagai layanan yang kami tawarkan untuk anda.</b>
                        </p>
                        <!-- SUPPORT -->
                        <?php
                        if (!empty($getSupport)) {
                        ?>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    $jml = ceil(count($getSupport) / 6);
                                    $limit = 0;

                                    for ($i = 1; $i <= $jml; $i++) {
                                        if ($i == 1) {
                                    ?>
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <?php
                                                    $jml_limit = 1;
                                                    for ($a = 0; $a < count($getSupport); $a++) {
                                                        if ($jml_limit <= 6) {
                                                    ?>
                                                            <div class="col d-flex align-items-center justify-content-center">
                                                                <img src="<?= base_url('img/' . $getSupport[$a]['image']) ?>" alt="operator <?= $getSupport[$a]['operator'] ?>" class="d-block" width="100">
                                                            </div>
                                                    <?php
                                                            $limit = $a;
                                                            $jml_limit++;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <?php
                                                    $jml_limit = 1;
                                                    for ($a = $limit + 1; $a < count($getSupport); $a++) {
                                                        if ($jml_limit <= 6) {
                                                    ?>
                                                            <div class="col d-flex align-items-center justify-content-center">
                                                                <img src="<?= base_url('img/' . $getSupport[$a]['image']) ?>" alt="operator <?= $getSupport[$a]['operator'] ?>" class="d-block" width="100">
                                                            </div>
                                                    <?php
                                                            $limit = $a;
                                                            $jml_limit++;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- END SUPPORT -->

                        <!-- OPERATOR -->
                        <?php
                        if (!empty($getOperator)) {
                        ?>
                            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner fs-3 text-capitalize">
                                    <?php
                                    $jml = ceil(count($getOperator) / 12);
                                    $limit = 0;

                                    for ($i = 1; $i <= $jml; $i++) {
                                        if ($i == 1) {
                                    ?>
                                            <div class="carousel-item p-3 active">
                                                <div class="row">
                                                    <?php
                                                    $jml_limit = 1;
                                                    for ($a = 0; $a < count($getOperator); $a++) {
                                                        if ($jml_limit <= 12) {
                                                    ?>
                                                            <div class="col-3 d-flex align-items-center justify-content-center p-3 m-3 bg-white border-0 rounded-4 shadow-sm mx-auto">
                                                                <?= $getOperator[$a]['operator'] ?>
                                                            </div>
                                                    <?php
                                                            $limit = $a;
                                                            $jml_limit++;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="carousel-item p-3">
                                                <div class="row">
                                                    <?php
                                                    $jml_limit = 1;
                                                    for ($a = $limit + 1; $a < count($getOperator); $a++) {
                                                        if ($jml_limit <= 12) {
                                                    ?>
                                                            <div class="col-3 d-flex align-items-center justify-content-center p-3 m-3 bg-white border-0 rounded-4 shadow-sm mx-auto">
                                                                <?= $getOperator[$a]['operator'] ?>
                                                            </div>
                                                    <?php
                                                            $limit = $a;
                                                            $jml_limit++;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- END OPERATOR -->
                        <a href="<?= base_url('Product') ?>">
                            <button class="btn btn-success rounded-pill mx-auto mt-4">Lihat semua layanan</button>
                        </a>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>
        <!-- END LAYANAN -->
        
        <section class="bg-dark">
            <div class="pt-5 pb-5">
                <!-- X-METRIK MOBILE -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center bg-warning p-5 rounded-end-pill border-0 h-100">
                            <div class="d-block">
                                <p class="card-text text-white fs-5 container ">Cukup hanya 1 handphone dapat transaksi all produk dan all operator dapat menjual semua produk pulsa, Token PLN, Voucher Games, Pembayaran PLN Bulanan, Telkom, Internet, TV Cable, Leasing dan lain-lain.</p>
                                <a href="https://play.google.com/store/apps/details?id=com.Xmetrik">
                                    <button class="btn btn-light rounded-pill shadow">
                                        <i class="fab fa-google-play me-2"></i>
                                        Play Store
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="<?= base_url('img/illustrasion4.png') ?>" alt="X-Metrik mobile" class="w-100 h-100">
                    </div>
                </div>
                <!-- END X-METRIK MOBILE -->

                <div class="row mt-4">
                    <div class="col-lg-4">
                        <img src="<?= base_url('img/illustrasion5.png') ?>" alt="X-Metrik H2h" class="w-100 h-100">
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center bg-danger p-5 rounded-start-pill border-0 h-100">
                            <div class="d-block">
                                <p class="card-text text-white fs-5 container">Layanan Host to Host yang disediakan untuk mitra kami yang sudah memiliki software PPOB (Payment Point Online Bank).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KEGIATAN -->
        <?php
        if (!empty($getKegiatan)) {
        ?>
            <section class="bg-dark">
                <div class="bg-white rounded-top-4">
                    <div class="container pt-5 pb-5 text-center">
                        <h1 class="fw-bold text-primary text-center mb-5">Kegiatan</h1>
                        <div class="row">
                            <?php
                            for ($i = 0; $i < count($getKegiatan); $i++) {
                                if ($i <= 8) {
                                    if ($i == 0) {
                            ?>
                                        <div class="col-3">
                                            <img src="<?= base_url('img/' . $getKegiatan[$i]['image']) ?>" width="200" height="200" class="mx-auto d-block">
                                        </div>
                                    <?php
                                    } elseif ($i <= 3) {
                                    ?>
                                        <div class="col-3 mt-4 mt-lg-0">
                                            <img src="<?= base_url('img/' . $getKegiatan[$i]['image']) ?>" width="200" height="200" class="mx-auto d-block">
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="col-3 mt-4">
                                            <img src="<?= base_url('img/' . $getKegiatan[$i]['image']) ?>" width="200" height="200" class="mx-auto d-block">
                                        </div>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                        <a href="#">
                            <button class="btn btn-success rounded-pill mx-auto mt-4">Lihat semua kegiatan</button>
                        </a>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>
        <!-- END KEGIATAN -->