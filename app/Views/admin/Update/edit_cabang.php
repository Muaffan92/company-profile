<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('BaseCamp/cabang') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Edit Cabang
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>
    <form action="<?= base_url('BaseCamp/update_cabang') ?>" method="POST" class="row g-3 needs-validation" novalidate>
        <input type="hidden" name="id" value="<?= $getCabang['id'] ?>">

        <div class="col-md-6">
            <label for="nama_cabang" class="form-label">Nama Cabang</label>
            <input type="text" class="form-control" id="nama_cabang" name="nama_cabang" placeholder="Masukan nama cabang" value="<?= $getCabang['nama'] ?>" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-6">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" aria-label="Default select example" id="kategori" name="kategori" onchange="validasi_kategori(this,'form-ket','form-location')" required>
                <option value="">--Pilih Kategori--</option>
                <?php
                if (!empty($getKategori)) {
                    if ($getCabang['kategori'] == 'cabang') {
                ?>
                        <option value="cabang" selected>Cabang</option>
                    <?php
                    } else {
                    ?>
                        <option value="utama" <?php
                                                if ($getCabang['kategori'] == 'utama') {
                                                    echo 'selected';
                                                }
                                                ?>>Utama</option>
                        <option value="cabang" <?php
                                                if ($getCabang['kategori'] == 'cabang') {
                                                    echo 'selected';
                                                }
                                                ?>>Cabang</option>
                    <?php
                    }
                } else {
                    ?>
                    <option value="utama" <?php
                                            if ($getCabang['kategori'] == 'utama') {
                                                echo 'selected';
                                            }
                                            ?>>Utama</option>
                    <option value="cabang" <?php
                                            if ($getCabang['kategori'] == 'cabang') {
                                                echo 'selected';
                                            }
                                            ?>>Cabang</option>
                <?php
                }
                ?>
            </select>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" required><?= $getCabang['alamat'] ?></textarea>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <?php
        if (empty($getKategori)) {
        ?>
            <div class="col-12 <?php
                                if ($getCabang['kategori'] == 'cabang') {
                                    echo 'd-none';
                                }
                                ?>" id="form-ket">
                <label for="ket" class="form-label">Keterangan</label>
                <textarea class="form-control" id="ket" rows="3" name="ket"><?= $getCabang['ket'] ?></textarea>
                <div class="invalid-feedback">
                    Form tidak boleh kosong
                </div>
            </div>
        <?php
        } elseif ($getCabang['kategori'] != 'cabang') {
        ?>
            <div class="col-12" id="form-ket">
                <label for="ket" class="form-label">Keterangan</label>
                <textarea class="form-control" id="ket" rows="3" name="ket"><?= $getCabang['ket'] ?></textarea>
                <div class="invalid-feedback">
                    Form tidak boleh kosong
                </div>
            </div>
        <?php
        }
        ?>
        <div class="col-12">
            <label for="nomor_telepon" class="form-label">Nomor Telephone</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukan nomor telepon" oninput="number_value(this,'message')" value="<?= $getCabang['nomor_telepon'] ?>" required>
            <small class="text-danger" id="message"></small>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <?php
        if (empty($getKategori)) {
        ?>
            <div class="col-12 <?php
                                if ($getCabang['kategori'] == 'cabang') {
                                    echo 'd-none';
                                }
                                ?>" id="form-location">
                <label for="location" class="form-label">Location</label>
                <textarea class="form-control" id="location" rows="3" name="location"><?= $getCabang['location'] ?></textarea>
                <div class="invalid-feedback">
                    Form tidak boleh kosong
                </div>
            </div>
        <?php
        } elseif ($getCabang['kategori'] != 'cabang') {
        ?>
            <div class="col-12" id="form-location">
                <label for="location" class="form-label">Location</label>
                <textarea class="form-control" id="location" rows="3" name="location"><?= $getCabang['location'] ?></textarea>
                <div class="invalid-feedback">
                    Form tidak boleh kosong
                </div>
            </div>
        <?php
        }
        ?>
        <div class="col-12">
            <button class="btn btn-warning" type="submit">Edit Cabang</button>
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