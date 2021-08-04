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

<!-- PROFESI -->
<?php
if (!empty($getProfesi)) {
?>
    <section class="container mt-5 pb-5">
        <h1 class="fw-bold text-primary mb-5">Pilih agenid anda</h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $jml_profesi = ceil(count($getProfesi) / 3);
                $limit_profesi = 0;

                for ($i = 0; $i < $jml_profesi; $i++) {
                    if ($jml_profesi == 1) {
                ?>

                        <div class="carousel-item active">
                            <div class="row">
                                <?php
                                $jml_limit_profesi = 1;

                                for ($a = 0; $a < count($getProfesi); $a++) {
                                    if ($jml_limit_profesi <= 3) {
                                ?>
                                        <div class="col-6">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold d-flex align-items-center text-capitalize">
                                                        <?= $getProfesi[$a]['icon'] . $getProfesi[$a]['agenid'] ?>
                                                    </h5>
                                                    <p class="card-text text-muted mt-3 mb-5 fs-7"><?= $getProfesi[$a]['ket'] ?></p>
                                                    <a href="#" class="card-link">
                                                        <button class="btn btn-success rounded-pill badge position-absolute bottom-0 mb-4">Selengkapnya</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $limit_profesi = $a;
                                        $jml_limit_profesi++;
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
                                $jml_limit_profesi = 1;

                                for ($a = $limit_profesi + 1; $a < count($getProfesi); $a++) {
                                    if ($jml_limit_profesi <= 3) {
                                ?>
                                        <div class="col-4">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold d-flex align-items-center text-capitalize">
                                                        <?= $getProfesi[$a]['icon'] . $getProfesi[$a]['agenid'] ?>
                                                    </h5>
                                                    <p class="card-text text-muted mt-3 mb-5"><?= $getProfesi[$a]['ket'] ?></p>
                                                    <a href="#" class="card-link">
                                                        <button class="btn btn-success rounded-pill badge position-absolute bottom-0 mb-3">Selengkapnya</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $limit_profesi = $a;
                                        $jml_limit_profesi++;
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
    </section>
<?php
}
?>
<!-- END PROFESI -->

<!-- KEUNTUNGAN -->
<?php
if (!empty($getKeunggulan)) {
?>
    <section class="bg-dark rounded-top-4">
        <div class="container pt-5 pb-5 text-center">
            <h1 class="fw-bold text-white text-center mb-3">Apa keuntungan menjadi agen kami?</h1>
            <p class="fs-6 text-white-50 mb-4">Dapatkan kemudahan dalam melakukan transaksi.</p>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        </div>
    </section>
<?php
}
?>
<!-- END KEUNTUNGAN -->

<!-- CARA MENDAFTAR MENJADI DOWNLINE -->
<section class="bg-info bg-gradient">
    <div class="container w-100 h-100 pt-4 pb-4">
        <h1 class="fw-bold text-center text-white">Cara daftar agen di <b class="text-primary">X-Metrik Mobile</b> apk</h1>
        <div class="card mb-3 bg-transparent text-white border-0">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="<?= base_url('img/illustrasion13.png') ?>" class="img-fluid rounded-start h-100" alt="Media Sosial">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <ol class="list-group list-group-numbered text-start" type="1">
                            <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-5">1. Buka aplikasi X-Metrik</div>
                                    <p class="text-black-50 ps-4 fs-7">Bagi yang belum login, untuk login dahulu dan jika nanti tidak bisa login, harap untuk hubungi pihak X-Metrik.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-5">2. Pilih more, lalu pilih registrasi downline</div>
                                    <p class="text-black-50 ps-4 fs-7">Ikonnya bergambar tiga dengan tanda plus di atasnya, serta memiliki background biru muda, pastikan kalo menu itu sudah activity untuk kamu.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-5">3. Masukan data yang di perlukan</div>
                                    <p class="text-black-50 ps-4 fs-7">Masukan nomor handphone, nama dan alamat dari downline kamu, untuk melakukan pendaftaran.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-5">4. Cek ulang semua data, lalu klik 'Registrasi'</div>
                                    <p class="text-black-50 ps-4 fs-7">Pastikan data-data yang kamu masukan sudah sesuai dan juga benar, agar tidak terjadi kesalahan.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-transparent border-0 align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-5">5. Tunggu balasan dari X-Metrik</div>
                                    <p class="text-black-50 ps-4 fs-7">Setelah data di kirimkan, kamu hanya tinggal menunggu balesan saja, apakah pendaftaran yang kamu lakukan sudah benar atau terjadi kesalahan.</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CARA MENDAFTAR MENJADI DOWNLINE -->