<!-- FOOTER -->
<div class="bg-light pt-5">
    <div class="container pt-2 pb-3">
        <div class="row fs-7">
            <?php
            if (!empty($getKategoriMenu)) {
                foreach ($getKategoriMenu as $KategoriMenu) {
            ?>
                    <div class="col-6 col-lg">
                        <strong class="fs-5 text-capitalize"><?= $KategoriMenu['nama'] ?></strong>
                        <ul class="nav flex-column">
                            <?php
                            foreach ($getMenu as $Menu) {
                                if ($Menu['position'] == 'footer') {
                                    // PENGECEKAN KATEGORI
                                    if ($Menu['kategori'] == $KategoriMenu['nama']) {
                            ?>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted text-capitalize" href="<?= base_url($Menu['link']) ?>"><?= $Menu['menu'] ?></a>
                                        </li>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </div>
            <?php
                }
            }
            ?>

            <div class="col-6 col-lg text-center">
                <strong class="fs-5">Unduh Aplikasi</strong>
                <br>
                <a href="https://play.google.com/store/apps/details?id=com.Xmetrik" class="text-decoration-none text-dark">
                    <i class="fab fa-google-play fa-2x"></i>
                </a>
            </div>
        </div>

        <hr class="border border-secondary">

        <div class="p-3 d-flex align-items-center justify-content-between">
            <div id="sosial_media" class="w-100">
                <div class="row">
                    <?php
                    if (!empty($getSosmed)) {
                    ?>
                        <div class="col-12 col-lg">
                            <?php
                            for ($i = 0; $i < count($getSosmed); $i++) {
                                if ($i <= 4) {
                            ?>
                                    <a href="<?= $getSosmed[$i]['link'] ?>" class="me-2 text-decoration-none" style="color: #<?= $getSosmed[$i]['color'] ?> !important;">
                                        <?= $getSosmed[$i]['icon'] ?>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="col-12 col-lg text-end">
                        &copy; <strong>X-Metrik</strong> <?= date('Y') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->
<script src="<?= base_url('js/jquery-3.5.1.js'); ?>"></script>
<script src="<?= base_url('fontawesome/js/all.min.js'); ?>"></script>
<script src="<?= base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('DataTables/DataTables-1.10.24/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('DataTables/DataTables-1.10.24/js/dataTables.bootstrap4.min.js'); ?>"></script>

<script>
    $(document).ready(function() {
        $('#datatables').DataTable({
            "processing": true,
        });
    });
</script>
</body>

</html>