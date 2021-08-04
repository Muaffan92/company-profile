<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('BaseCamp/center') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Tambah Center
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>
    <form action="<?= base_url('BaseCamp/insert_center') ?>" method="POST" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label for="modem" class="form-label">Nomor Modem</label>
            <input type="number" class="form-control" id="modem" name="nomor_modem" disabled placeholder="Masukan nomor modem (angka)" oninput="validasi_modem(this,'message')" required>
            <small class="text-danger" id="message">Harap memilih tipe terlebih dahulu</small>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-4">
            <label for="center" class="form-label">Center</label>
            <input type="text" class="form-control" id="center" name="center" placeholder="Masukan center" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-4">
            <label for="tipe" class="form-label">Tipe</label>
            <select class="form-select" aria-label="Default select example" name="tipe" id="tipe" onchange="select_tipe(this)" required>
                <option selected>--Pilih Tipe--</option>
                <?php
                foreach ($getListTipe as $ListTipe) {
                ?>
                    <option value="<?= $ListTipe['nama_tipe'] ?>"><?= $ListTipe['nama_tipe'] ?></option>
                <?php
                }
                ?>
            </select>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-success" type="submit" id="btn_add">Add New</button>
            <button class="btn btn-secondary" type="reset">Batal</button>
        </div>
    </form>
</div>

<?= view('admin/Layouts/footer') ?>

<script>
    function validasi_modem(element, id_message) {
        var number = /^[0-9]+$/;

        // VALIDASI NUMBER
        if (!$(element).val().match(number)) {
            // MERUBAH ISI ELEMENT
            $('#' + id_message).html('Harap menggunakan format angka');

            // MERUBAH ISI ATTRIBUTE
            $('#btn_add').attr('disabled', true);
        } else if ($(element).val().match(number)) {
            $('#btn_add').removeAttr('disabled');

            // AJAX
            $.ajax({
                url: '<?= base_url('BaseCamp/select_senter_ajax') ?>',
                method: 'POST',
                data: {
                    nomor_modem: $(element).val(),
                    tipe: $("#tipe").val(),
                },
                async: false,
                dataType: 'JSON',
                success: function(data) {
                    // PENGECEKAN VALUE KOSONG
                    if ($(element).val() != "") {
                        // PENGECEKAN DATA SAMA
                        if (data != null) {
                            var html = "Nomor modem sudah ada! Harap masukan yang lain.";

                            // MERUBAH ISI ATTRIBUTE
                            $('#btn_add').attr('disabled', true);
                        } else {
                            var html = "";

                            // MENGHAPUS ATTRIBUTE
                            $('#btn_add').removeAttr('disabled');
                        }

                        // MERUBAH ISI ELEMENT
                        $('#' + id_message).html(html);
                    }
                }
            })
        }
    }

    function select_tipe(element) {
        if ($(element).val() != '') {
            // AJAX
            $.ajax({
                url: '<?= base_url('BaseCamp/select_senter_ajax') ?>',
                method: 'POST',
                data: {
                    nomor_modem: $('#modem').val(),
                    tipe: $("#tipe").val(),
                },
                async: false,
                dataType: 'JSON',
                success: function(data) {
                    // PENGECEKAN VALUE KOSONG
                    if ($('#modem').val() != "") {
                        // PENGECEKAN DATA SAMA
                        if (data != null) {
                            var html = "Nomor modem sudah ada! Harap masukan yang lain.";

                            // MERUBAH ISI ATTRIBUTE
                            $('#btn_add').attr('disabled', true);
                        } else {
                            var html = "";

                            // MENGHAPUS ATTRIBUTE
                            $('#btn_add').removeAttr('disabled');
                        }

                        // MERUBAH ISI ELEMENT
                        $('#message').html(html);
                    } else {
                        $('#message').html('');
                    }
                }
            })

            $('#modem').removeAttr('disabled');
        } else if ($(element).val() == '') {
            $('#modem').attr('disabled', 'true');
            $('#message').html('Harap memilih tipe terlebih dahulu');
        }
    }
</script>