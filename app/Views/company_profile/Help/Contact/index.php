<?php
if (!empty($getInfoHeader)) {
?>
    <section class="bg-primary">
        <div class="container pb-5 pt-3 pb-lg-0 pt-lg-0">
            <div class="w-100 h-100 d-flex justify-content-center">
                <div class="d-block">
                    <div class="mt-lg-5 mt-5 pt-5 pb-5">
                        <strong class="text-white fs-1"><?= $getInfoHeader['title'] ?></strong>
                        <div class="text-white-50 fs-5">
                            <?= $getInfoHeader['ket'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>

<!-- CABANG -->
<?php
// PENGECEKAN DATA KOSONG
if ((!empty($getCabangUtama)) || (!empty($getCabang))) {
?>
    <section class="bg-white">
        <div class="container pb-5 pt-5">
            <div class="w-100 h-100 p-4">
                <div class="row">
                    <?php
                    if (!empty($getCabangUtama)) {
                        foreach ($getCabangUtama as $CabangUtama) {
                    ?>
                            <div class="col-12">
                                <div class="card mb-3 border-0">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <div class="card-body mt-3">
                                                <h5 class="card-title fw-bold fs-4"><?= $CabangUtama['nama'] ?></h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><?= $CabangUtama['alamat'] ?></h6>
                                                <p class="card-text mt-3"><?= $CabangUtama['ket'] ?></p>
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        <ul class="list-group">
                                                            <?php
                                                            // MERUBAH STRING MENJADI ARRAY
                                                            $dataNoUtama = explode(',', $CabangUtama['nomor_telepon']);

                                                            foreach ($dataNoUtama as $NoUtama) {
                                                            ?>
                                                                <li class="list-group-item border-0">
                                                                    <a href="tel:<?= $NoUtama ?>" class="text-decoration-none text-dark">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                                        </svg>
                                                                        <?= $NoUtama ?>
                                                                    </a>
                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-12">
                                            <div class="w-100 h-100"><?= $CabangUtama['location'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }

                    if (!empty($getCabang)) {
                        foreach ($getCabang as $cabang) {
                        ?>
                            <div class="col-lg-6 mt-4">
                                <div class="card rounded-4 h-100 shadow">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold fs-4"><?= $cabang['nama'] ?></h5>
                                        <p class="card-text"><?= $cabang['alamat'] ?></p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                <ul class="list-group">
                                                    <?php
                                                    // MERUBAH STRING MENJADI ARRAY
                                                    $dataNo = explode(',', $cabang['nomor_telepon']);

                                                    foreach ($dataNo as $no) {
                                                    ?>
                                                        <li class="list-group-item border-0">
                                                            <a href="tel:<?= $no ?>" class="text-decoration-none text-dark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                                </svg>
                                                                <?= $no ?>
                                                            </a>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </small>
                                        </p>
                                    </div>
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
<?php
}
?>
<!-- END CABANG -->

<!-- CENTER -->
<?php
// PENGECEKAN DATA KOSONG
if (!empty($getListTipe)) {
?>
    <section class="bg-white" id="center">
        <div class="bg-info rounded-top-4">
            <div class="container pb-4 pt-4">
                <div class="w-100 h-100 p-4 text-white">
                    <h1 class="fw-bold text-center mb-5">Center</h1>
                    <div id="center" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            // PEMBAGIAN JUMLAH
                            $jml_center = ceil(count($getListTipe) / 4);
                            // DATA TERAKHIR
                            $end = 0;

                            // MENAMPILKAN JUMLAH PEMBAGIAN
                            for ($lt = 0; $lt < $jml_center; $lt++) {
                                // PENGECEKAN DATA PERTAMA
                                if ($lt == 0) {
                            ?>
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <?php
                                            // MEMBERIKAN LIMIT
                                            $limit_center = 1;

                                            for ($lst = 0; $lst < count($getListTipe); $lst++) {
                                                // MENAMPILKAN DATA
                                                $tmp_center = $Modals->setData('center', '*', ['tipe' => $getListTipe[$lst]['nama_tipe']], ['status' => ['1']], '', '', '')->getResultArray();

                                                if (!empty($tmp_center)) {
                                                    if ($limit_center <= 4) {
                                                        if ($limit_center == 1) {
                                            ?>
                                                            <div class="col-lg">
                                                                <div class="card alert-info border-0 shadow-lg h-100">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title fw-bold text-capitalize text-center"><?= $getListTipe[$lst]['nama_tipe'] ?></h5>
                                                                        <div class="card-text overflow-auto h-35">
                                                                            <ul class="list-group">
                                                                                <?php
                                                                                foreach ($tmp_center as $Center) {
                                                                                ?>
                                                                                    <li class="list-group-item bg-transparent border-0"><?= $Center['id_senter'] ?></li>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <div class="col-lg mt-3 mt-md-0">
                                                                <div class="card alert-info border-0 shadow-lg h-100">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title fw-bold text-capitalize text-center"><?= $getListTipe[$lst]['nama_tipe'] ?></h5>
                                                                        <div class="card-text overflow-auto h-35">
                                                                            <ul class="list-group">
                                                                                <?php
                                                                                foreach ($tmp_center as $Center) {
                                                                                ?>
                                                                                    <li class="list-group-item bg-transparent border-0"><?= $Center['id_senter'] ?></li>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            <?php
                                                        }
                                                        $end = $lst;
                                                        $limit_center++;
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <?php
                                            // MEMBERIKAN LIMIT
                                            $limit_center = 1;

                                            for ($lst = $end + 1; $lst < count($getListTipe); $lst++) {
                                                // MENAMPILKAN DATA
                                                $tmp_center = $Modals->setData('center', '*', ['tipe' => $getListTipe[$lst]['nama_tipe']], ['status' => ['1']], '', '', '')->getResultArray();

                                                if (!empty($tmp_center)) {
                                                    if ($limit_center <= 4) {
                                                        if ($limit_center == 1) {
                                            ?>
                                                            <div class="col-lg">
                                                                <div class="card alert-info border-0 shadow-lg h-100">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title fw-bold text-capitalize text-center"><?= $getListTipe[$lst]['nama_tipe'] ?></h5>
                                                                        <div class="card-text">
                                                                            <ul class="list-group">
                                                                                <?php
                                                                                foreach ($tmp_center as $Center) {
                                                                                ?>
                                                                                    <li class="list-group-item bg-transparent border-0"><?= $Center['id_senter'] ?></li>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <div class="col-lg mt-3 mt-md-0">
                                                                <div class="card alert-info border-0 shadow-lg h-100">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title fw-bold text-capitalize text-center"><?= $getListTipe[$lst]['nama_tipe'] ?></h5>
                                                                        <div class="card-text">
                                                                            <ul class="list-group">
                                                                                <?php
                                                                                foreach ($tmp_center as $Center) {
                                                                                ?>
                                                                                    <li class="list-group-item bg-transparent border-0"><?= $Center['id_senter'] ?></li>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            <?php
                                                        }
                                                        $end = $lst;
                                                        $limit_center++;
                                                    }
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#center" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#center" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
<!-- END CENTER -->

<!-- BANK -->
<?php
// PENGECEKAN DATA KOSONG
if (!empty($getBank)) {
?>
    <section class="bg-info" id="bank">
        <div class="bg-danger rounded-top-4">
            <div class="container pb-4 pt-4">
                <div class="w-100 h-100 p-4 text-white">
                    <h1 class="fw-bold text-center mb-5">Bank</h1>
                    <div id="bank" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            // PEMBAGIAN JUMLAH
                            $jml_bank = ceil(count($getBank) / 4);
                            // DATA TERAKHIR
                            $end = 0;

                            // MENAMPILKAN JUMLAH PEMBAGIAN
                            for ($bnk = 0; $bnk < $jml_bank; $bnk++) {
                                // PENGECEKAN DATA PERTAMA
                                if ($bnk == 0) {
                            ?>
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <?php
                                            // MEMBERIKAN LIMIT
                                            $limit_bank = 1;

                                            for ($gtbnk = 0; $gtbnk < count($getBank); $gtbnk++) {
                                                if ($limit_bank <= 4) {
                                                    if ($limit_bank == 1) {
                                            ?>
                                                        <div class="col-lg">
                                                            <div class="card bg-white shadow border-0 shadow-lg h-100">
                                                                <div class="card-body">
                                                                    <h5 class="card-title fw-bold text-capitalize text-center text-dark"><?= $getBank[$gtbnk]['bank'] ?></h5>
                                                                    <h6 class="card-subtitle mb-2 text-muted"><?= $getBank[$gtbnk]['atas_nama'] ?></h6>
                                                                    <p class="card-text text-dark"><?= $getBank[$gtbnk]['no_rek'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div class="col-lg mt-3 mt-md-0">
                                                            <div class="card bg-white shadow border-0 shadow-lg h-100">
                                                                <div class="card-body">
                                                                    <h5 class="card-title fw-bold text-capitalize text-center text-dark"><?= $getBank[$gtbnk]['bank'] ?></h5>
                                                                    <h6 class="card-subtitle mb-2 text-muted"><?= $getBank[$gtbnk]['atas_nama'] ?></h6>
                                                                    <p class="card-text text-dark"><?= $getBank[$gtbnk]['no_rek'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                            <?php
                                                    }
                                                    $end = $gtbnk;
                                                    $limit_bank++;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <?php
                                            // MEMBERIKAN LIMIT
                                            $limit_bank = 1;

                                            for ($gtbnk = $end + 1; $gtbnk < count($getBank); $gtbnk++) {
                                                if ($limit_bank <= 4) {
                                                    if ($limit_bank == 1) {
                                            ?>
                                                        <div class="col-lg">
                                                            <div class="card bg-white shadow border-0 shadow-lg h-100">
                                                                <div class="card-body">
                                                                    <h5 class="card-title fw-bold text-capitalize text-center text-dark"><?= $getBank[$gtbnk]['bank'] ?></h5>
                                                                    <h6 class="card-subtitle mb-2 text-muted"><?= $getBank[$gtbnk]['atas_nama'] ?></h6>
                                                                    <p class="card-text text-dark"><?= $getBank[$gtbnk]['no_rek'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div class="col-lg mt-3 mt-md-0">
                                                            <div class="card bg-white shadow border-0 shadow-lg h-100">
                                                                <div class="card-body">
                                                                    <h5 class="card-title fw-bold text-capitalize text-center text-dark"><?= $getBank[$gtbnk]['bank'] ?></h5>
                                                                    <h6 class="card-subtitle mb-2 text-muted"><?= $getBank[$gtbnk]['atas_nama'] ?></h6>
                                                                    <p class="card-text text-dark"><?= $getBank[$gtbnk]['no_rek'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                            <?php
                                                    }
                                                    $end = $gtbnk;
                                                    $limit_bank++;
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#bank" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bank" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
<!-- END BANK -->