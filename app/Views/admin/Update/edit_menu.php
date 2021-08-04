<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('BaseCamp/menu') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Edit Menu
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>
    <form action="<?= base_url('BaseCamp/update_menu') ?>" method="POST" class="row g-3 needs-validation" novalidate>
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="col-md-6">
            <label for="menu" class="form-label">Menu</label>
            <input type="text" class="form-control" id="menu" name="menu" autofocus placeholder="Masukan nama menu" value="<?= $menu ?>" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-6">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                <option value="">--Pilih Kategori--</option>
                <option value="perusahaan" <?php
                                            if ($kategori == 'perusahaan') {
                                                echo 'selected';
                                            }
                                            ?>>Perusahaan</option>
                <option value="mitra" <?php
                                        if ($kategori == 'mitra') {
                                            echo 'selected';
                                        }
                                        ?>>Mitra</option>
                <option value="hubungi kami" <?php
                                                if ($kategori == 'hubungi kami') {
                                                    echo 'selected';
                                                }
                                                ?>>Hubungi Kami</option>
            </select>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-6">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" id="link" name="link" autofocus placeholder="Masukan link menu" value="<?= $link ?>" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-6">
            <label for="position" class="form-label">Position</label>
            <select class="form-select" aria-label="Default select example" id="position" name="position" required>
                <option value="">--Pilih Position--</option>
                <option value="header" <?php
                                        if ($position == 'header') {
                                            echo 'selected';
                                        }
                                        ?>>Header</option>
                <option value="footer" <?php
                                        if ($position == 'footer') {
                                            echo 'selected';
                                        }
                                        ?>>Footer</option>
                <option value="help" <?php
                                        if ($position == 'help') {
                                            echo 'selected';
                                        }
                                        ?>>Help</option>
            </select>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-warning" type="submit">Edit Menu</button>
            <button class="btn btn-secondary" type="reset">Batal</button>
        </div>
    </form>
</div>

<?= view('admin/Layouts/footer') ?>

<script>
    function validasi_kategori(element, id_ket, id_location) {
        // PENGECEKAN INPUTAN
        if ($(element).val() != '') {
            if ($(element).val() == 'utama') {
                $('#' + id_ket).removeClass('d-none');
                $('#' + id_location).removeClass('d-none');
            } else if ($(element).val() != 'utama') {
                $('#' + id_ket).addClass('d-none');
                $('#' + id_location).addClass('d-none');
            }
        } else if ($(element).val() == '') {
            $('#' + id_ket).addClass('d-none');
            $('#' + id_location).addClass('d-none');
        }
    }
</script>