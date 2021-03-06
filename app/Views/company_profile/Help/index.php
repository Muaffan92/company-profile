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
                        <form action="" method="POST" class="row mt-4">
                            <div class="col-12 col-lg">
                                <input class="form-control rounded-pill" type="text" placeholder="Cari solusimu..">
                            </div>
                            <div class="col-12 col-lg-2 mt-2 mt-md-0 d-flex justify-content-center d-md-block">
                                <button type="submit" class="btn btn-success mb-3 rounded-pill">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>

<!-- FAQ -->
<?php
if (!empty($getHelp)) {
?>
    <section class="bg-white">
        <div class="container pb-5 pt-4 pb-lg-0 pt-lg-0 mt-5 mb-5">
            <div class="w-100 h-100">
                <h1 class="fw-bold mb-5">Yang paling di cari</h1>
                <div class="row">
                    <?php
                    $i = 1;
                    foreach ($getHelp as $Help) {
                        if ($i <= 2) {
                    ?>
                            <div class="col-lg-6">
                                <div class="card rounded-4">
                                    <div class="row g-0">
                                        <div class="col-lg-10 col">
                                            <div class="card-body">
                                                <p class="card-text p-3"><?= $Help['help'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3 d-flex align-items-center">
                                            <a href="<?= base_url('Help/solusi/' . $Help['id']) ?>" class="text-decoration-none btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-lg-6 mt-4">
                                <div class="card rounded-4">
                                    <div class="row g-0">
                                        <div class="col-lg-10 col">
                                            <div class="card-body">
                                                <p class="card-text p-3"><?= $Help['help'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3 d-flex align-items-center">
                                            <a href="<?= base_url('Help/' . $Help['id']) ?>" class="text-decoration-none btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }

                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
<!-- END FAQ -->