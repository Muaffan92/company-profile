<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('Camp/support') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Edit Image
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>

    <img src="<?= base_url('img/' . $getSupport['image']) ?>" class="img-fluid mx-auto d-block rounded" alt="<?= $getSupport['name'] ?>" width="300" height="300">

    <form action="<?= base_url('Camp/update_support') ?>" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
        <input type="hidden" name="id" value="<?= $getSupport['id'] ?>">

        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $getSupport['name'] ?>" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-6">
            <label for="image" class="form-label">Image</label>
            <input class="form-control" type="file" id="image" name="gambar_operator">
            <input type="hidden" name="image_old" value="<?= $getSupport['image'] ?>">
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-warning" type="submit">Edit Support</button>
            <button class="btn btn-secondary" type="reset">Batal</button>
        </div>
    </form>
</div>