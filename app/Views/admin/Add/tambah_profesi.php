<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('BaseCamp/profesi') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Tambah Profesi
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>
    <form action="<?= base_url('BaseCamp/insert_profesi') ?>" method="POST" class="row g-3 needs-validation" novalidate>
        <div class="col-12">
            <label for="icon" class="form-label">Icon</label>
            <textarea class="form-control" id="icon" name="icon" rows="3" required></textarea>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <label for="agenid" class="form-label">Agenid</label>
            <input type="text" class="form-control" id="agenid" name="agenid" placeholder="Masukan agenid" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <label for="ket" class="form-label">Keterangan</label>
            <textarea class="form-control" id="ket" rows="3" name="ket" required></textarea>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-success" type="submit">Add New</button>
            <button class="btn btn-secondary" type="reset">Batal</button>
        </div>
    </form>
</div>