<?php
if (!empty($getInfoHeader)) {
?>
    <section class="bg-primary">
        <div class="container pb-5 pt-3 pb-lg-0 pt-lg-0">
            <div class="w-100 h-100 row mt-5 mt-md-0">
                <div class="col-lg-6 mt-lg-auto mt-auto pt-auto mb-auto">
                    <strong class="text-white fs-1"><?= $getInfoHeader['title'] ?></strong>
                    <div class="text-white-50 fs-5">
                        <?= $getInfoHeader['ket'] ?>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block mt-5 pt-5 pb-5">
                    <img src="<?= base_url('img/' . $getInfoHeader['image']) ?>" class="float-end h-100">
                </div>
            </div>
        </div>
    </section>
<?php
}
?>

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
                                                        <img src="<?= base_url('img/' . $getSupport[$a]['image']) ?>" alt="<?= $getSupport[$a]['name'] ?>" class="d-block text-muted" width="100">
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
                                                        <img src="<?= base_url('img/' . $getSupport[$a]['image']) ?>" alt="<?= $getSupport[$a]['name'] ?>" class="d-block text-muted" width="100">
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
                <div class="bg-white p-4 rounded-4 d-flex justify-content-center mt-3 mb-3 shadow-lg border-notImportant border-20 border-dark">
                    <div class="d-flex align-items-start w-75">
                        <div class="nav w-md-100 flex-column nav-pills me-3 h-100 d-block overflow-height" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php
                            $cek = 1;
                            foreach ($getOperator as $Operator) {
                                if ($cek == 1) {
                            ?>
                                    <button class="nav-link col-6 col-lg active" id="v-pills-<?= $Operator['operator'] ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $Operator['operator'] ?>" type="button" role="tab" aria-controls="v-pills-<?= $Operator['operator'] ?>" aria-selected="true"><?= $Operator['operator'] ?></button>
                                <?php
                                } else {
                                ?>
                                    <button class="nav-link col-6 col-lg" id="v-pills-<?= $Operator['operator'] ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $Operator['operator'] ?>" type="button" role="tab" aria-controls="v-pills-<?= $Operator['operator'] ?>" aria-selected="false"><?= $Operator['operator'] ?></button>
                            <?php
                                }
                                $cek++;
                            }
                            ?>
                        </div>
                        <div class="tab-content alert-info rounded-4 h-100 w-100 d-flex align-items-center pb-3 pb-md-0" id="v-pills-tabContent">
                            <?php
                            $cek2 = 1;
                            foreach ($getOperator as $Operator) {
                                // MENAMPILKAN DATA MYSQL
                                $tmp_jenis = $Modals->setData('jenis', '*', ['operator' => $Operator['operator']], '', '', '', '')->getResultArray();

                                if ($cek2 == 1) {
                            ?>
                                    <div class="tab-pane fade w-100 ps-3 pe-3 show active" id="v-pills-<?= $Operator['operator'] ?>" role="tabpanel" aria-labelledby="v-pills-<?= $Operator['operator'] ?>-tab">
                                        <div id="<?= $Operator['operator'] ?>" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php
                                                // PEMBAGIAN DATA
                                                $jml_jenis = ceil(count($tmp_jenis) / 12);
                                                $akhir_jenis = 0;

                                                // MENAMPILKAN SESUAI JUMLAH PEMBAGIAN DATA
                                                for ($j = 1; $j <= $jml_jenis; $j++) {
                                                    if ($j == 1) {
                                                ?>
                                                        <div class="carousel-item active">
                                                            <div class="row">
                                                                <?php
                                                                // MEMBERIKAN LIMIT
                                                                $limit_jenis = 1;

                                                                for ($jns = 0; $jns < count($tmp_jenis); $jns++) {
                                                                    if ($limit_jenis <= 12) {
                                                                ?>
                                                                        <div class="col-lg-4 col mt-3">
                                                                            <div class="card bg-white border-0">
                                                                                <div class="card-body">
                                                                                    <?= $tmp_jenis[$jns]['jenis'] ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                        $akhir_jenis = $jns;
                                                                        $limit_jenis++;
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
                                                                // MEMBERIKAN LIMIT
                                                                $limit_jenis = 1;

                                                                for ($jns = $akhir_jenis + 1; $jns < count($tmp_jenis); $jns++) {
                                                                    if ($limit_jenis <= 12) {
                                                                ?>
                                                                        <div class="col-lg-4 col mt-3">
                                                                            <div class="card bg-white border-0">
                                                                                <div class="card-body">
                                                                                    <?= $tmp_jenis[$jns]['jenis'] ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                        $akhir_jenis = $jns;
                                                                        $limit_jenis++;
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
                                            <button class="carousel-control-prev" type="button" data-bs-target="#<?= $Operator['operator'] ?>" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#<?= $Operator['operator'] ?>" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="tab-pane fade w-100 ps-3 pe-3" id="v-pills-<?= $Operator['operator'] ?>" role="tabpanel" aria-labelledby="v-pills-<?= $Operator['operator'] ?>-tab">
                                        <div id="<?= $Operator['operator'] ?>" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php
                                                // PEMBAGIAN DATA
                                                $jml_jenis = ceil(count($tmp_jenis) / 12);
                                                $akhir_jenis = 0;

                                                // MENAMPILKAN SESUAI JUMLAH PEMBAGIAN DATA
                                                for ($j = 1; $j <= $jml_jenis; $j++) {
                                                    if ($j == 1) {
                                                ?>
                                                        <div class="carousel-item active">
                                                            <div class="row">
                                                                <?php
                                                                // MEMBERIKAN LIMIT
                                                                $limit_jenis = 1;

                                                                for ($jns = 0; $jns < count($tmp_jenis); $jns++) {
                                                                    if ($limit_jenis <= 12) {
                                                                ?>
                                                                        <div class="col-lg-4 col mt-3">
                                                                            <div class="card bg-wite">
                                                                                <div class="card-body">
                                                                                    <?= $tmp_jenis[$jns]['jenis'] ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                        $akhir_jenis = $jns;
                                                                        $limit_jenis++;
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
                                                                // MEMBERIKAN LIMIT
                                                                $limit_jenis = 1;

                                                                for ($jns = $akhir_jenis + 1; $jns < count($tmp_jenis); $jns++) {
                                                                    if ($limit_jenis <= 12) {
                                                                ?>
                                                                        <div class="col-lg-4 col mt-3">
                                                                            <div class="card bg-wite">
                                                                                <div class="card-body">
                                                                                    <?= $tmp_jenis[$jns]['jenis'] ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                        $akhir_jenis = $jns;
                                                                        $limit_jenis++;
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
                                            <button class="carousel-control-prev" type="button" data-bs-target="#<?= $Operator['operator'] ?>" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#<?= $Operator['operator'] ?>" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                            <?php
                                }
                                $cek2++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- END OPERATOR -->
            </div>
        </div>
    </section>
<?php
}
?>
<!-- END LAYANAN -->

<!-- LANGKAH - LANGKAH -->
<section class="bg-light">
    <div class="bg-dark rounded-top-4">
        <div class="container pt-5 pb-5 text-center">
            <h1 class="fw-bold text-primary text-white mb-5">Cara transaksi di <b class="text-primary">X-Metrik Mobile</b></h1>
            <div class="card mb-3 bg-transparent text-white border-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <ol class="list-group list-group-numbered text-start" type="1">
                                <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold fs-5">1. Buka aplikasi X-Metrik</div>
                                        <p class="text-muted ps-4 fs-7">Kalo belum punya aplikasinya, bisa download pakek link ini kok <a href="https://play.google.com/store/apps/details?id=com.Xmetrik" class="text-decoration-none">X-Metrik Mobile</a> </p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold fs-5">2. Pilih jenis transaksi</div>
                                        <p class="text-muted ps-4 fs-7">Pilih jenis transaksi yang sesuia dengan apa yang kamu butuhkan di bagian <b>menu apps</b>.</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold fs-5">3. Isi pesananmu, lalu klik tombol pada pojok kanan bawah</div>
                                        <p class="text-muted ps-4 fs-7">Isi pesananmu dengan benar jangan sampai ada kesalahan, kemudian setelah sesuai periksa semuanya lagi dan jika sudah yakin benar, lalu klik tombol pada pojok bawah.</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold fs-5">4. Tunggu balasan dari X-Metrik</div>
                                        <p class="text-muted ps-4 fs-7">Tunggu beberapa menit untuk mengetahui apakah transaksimu berhasil atau tidak.</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('img/illustrasion11.png') ?>" class="img-fluid rounded-start h-100" alt="X-Metrik">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="bg-info rounded-top-4">
        <div class="container pt-5 pb-5 text-center">
            <h1 class="fw-bold text-primary text-white mb-5">Cara transaksi di media lainnya</h1>
            <div class="card mb-3 bg-transparent text-white border-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="<?= base_url('img/illustrasion12.png') ?>" class="img-fluid rounded-start h-100" alt="Media Sosial">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <ol class="list-group list-group-numbered text-start" type="1">
                                <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold fs-5">1. Pilih media transaksi kamu</div>
                                        <p class="text-black-50 fs-7 ps-4">Pilih media yang ingin kamu gunakan dan sesuai dengan, yang bisa kamu gunakan.</p>
                                        <a href="<?= base_url('Contact#center') ?>" class="text-decoration-none btn badge btn-success ms-4">
                                            Lihat media
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold fs-5">2. Pilih kode/denom produk</div>
                                        <p class="text-black-50 fs-7 ps-4">Pilih kode atau denom yang sesuai dengan produk yang ingin kamu lakukan.</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold fs-5">3. Masukan format transaksi kamu, lalu kirim</div>
                                        <p class="text-black-50 fs-7 ps-4">Masukan format transaksi yang sesuia dengan transaksi yang akan kamu lakukan, serta pastikan formatnya sudah benar, lalu kirim format tersebut.</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold fs-5">4. Tunggu balesan dari X-Metrik</div>
                                        <p class="text-black-50 fs-7 ps-4">Tunggu beberapa saat untuk mengetahui apakah transaksi yan kamu lakukan sudah benar dan berhasil atau terjadi sebuah kesalahan.</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END LANGKAH - LANGKAH -->