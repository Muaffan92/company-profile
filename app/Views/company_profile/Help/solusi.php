<section class="bg-primary">
    <div class="container pb-5 pt-3 pb-lg-0 pt-lg-0">
        <div class="w-50 h-100 mx-auto">
            <div class="d-block">
                <div class="mt-lg-5 mt-5 pt-5 pb-5">
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
if (!empty($getHelp)) {
?>
    <section class="bg-white">
        <div class="container pb-5 pt-4 pb-lg-0 pt-lg-0 mt-5 mb-5">
            <div class="w-100 h-100">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-dark" href="<?= base_url('Home') ?>">Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-dark" href="<?= base_url('Help') ?>">Bantuan</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $getHelp['help'] ?></li>
                    </ol>
                </nav>
                <h1 class="fw-bold mb-5"><?= $getHelp['help'] ?></h1>
                <p><?= $getHelp['solusi'] ?></p>
            </div>
        </div>
    </section>
<?php
}
?>