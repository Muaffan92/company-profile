<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('BaseCamp/kegiatan') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Edit Kegiatan
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>
    <form action="<?= base_url('BaseCamp/update_kegiatan') ?>" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="col-12">
            <label for="image" class="form-label">Image</label>
            <br>
            <img src="<?= base_url('img/' . $image) ?>" class="img-thumbnail mb-3" width="300" height="300">
            <input class="form-control" type="file" id="image" name="image">
            <input type="hidden" name="image_old" value="<?= $image ?>">
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <label for="ket" class="form-label">Keterangan</label>
            <textarea class="form-control" id="ket" name="ket" rows="3"><?= $ket ?></textarea>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-warning" type="submit">Edit Kegiatan</button>
            <button class="btn btn-secondary" type="reset">Batal</button>
        </div>
    </form>
</div>