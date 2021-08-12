<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('Camp/bank') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Edit Bank
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>
    <form action="<?= base_url('Camp/update_bank') ?>" method="POST" class="row g-3 needs-validation" novalidate>

        <input type="hidden" name="bank_lama" value="<?= $bank ?>">

        <div class="col-md-4">
            <label for="nama_bank" class="form-label">Nama Bank</label>
            <input type="text" class="form-control" id="nama_bank" name="nama_bank" placeholder="Masukan nama bank" value="<?= $bank ?>" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-4">
            <label for="atas_nama" class="form-label">Atas Nama</label>
            <input type="text" class="form-control" id="atas_nama" name="atas_nama" placeholder="Masukan nama" value="<?= $atas_nama ?>" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-4">
            <label for="no_rek" class="form-label">No. Rek</label>
            <input type="text" class="form-control" id="no_rek" name="no_rek" oninput="number_value(this)" value="<?= $no_rek ?>" placeholder="Masukan no rek (Pastikan format angka)" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-warning" type="submit">Edit Bank</button>
            <button class="btn btn-secondary" type="reset">Batal</button>
        </div>
    </form>
</div>