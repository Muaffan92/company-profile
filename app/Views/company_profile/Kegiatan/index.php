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

<?php
if (!empty($getKegiatan)) {
?>
    <section class="bg-white">
        <div class="container mb-5 pt-5">
            <figure class="text-center text-capitalize">
                <blockquote class="blockquote">
                    <p>Segala foto kegiatan perusahaan x-metrik.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    x-metrik
                </figcaption>
            </figure>
            <div class="overflow-auto row g-2" style="height: 350px;">
                <?php
                foreach ($getKegiatan as $Kegiatan) {
                ?>
                    <div class="col-3">
                        <img src="<?= config('App')->tim . base_url('img/'  . $Kegiatan['image'] . '&w=250&h=250&z=1') ?>" class="mx-auto d-block w-100 h-100">
                    </div>
                    <div class="col-3">
                        <img src="<?= config('App')->tim . base_url('img/'  . $Kegiatan['image'] . '&w=250&h=250&z=1') ?>" class="mx-auto d-block w-100 h-100">
                    </div>
                    <div class="col-3">
                        <img src="<?= config('App')->tim . base_url('img/'  . $Kegiatan['image'] . '&w=250&h=250&z=1') ?>" class="mx-auto d-block w-100 h-100">
                    </div>
                    <div class="col-3">
                        <img src="<?= config('App')->tim . base_url('img/'  . $Kegiatan['image'] . '&w=250&h=250&z=1') ?>" class="mx-auto d-block w-100 h-100">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php
}
?>