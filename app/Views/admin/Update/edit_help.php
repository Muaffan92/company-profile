<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('BaseCamp/help') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Edit Help
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>
    <form action="<?= base_url('BaseCamp/update_help') ?>" method="POST" class="needs-validation" novalidate>
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="form-group">
            <label for="help" class="form-label">Help</label>
            <input type="text" class="form-control" id="help" name="help" placeholder="Masukan pertanyaan" value="<?= $help ?>" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="form-group">
            <label for="solusi" class="form-label">Solusi</label>
            <textarea class="form-control" id="solusi" name="solusi" rows="3" required><?= $solusi ?></textarea>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>

        <button class="btn btn-warning" type="submit">Edit Help</button>
        <button class="btn btn-secondary" type="reset">Batal</button>
    </form>
</div>