<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('BaseCamp/center') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Edit Center
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <?= session()->getFlashdata('message'); ?>
    <form action="<?= base_url('BaseCamp/update_center') ?>" method="POST" class="row g-3 needs-validation" novalidate>
        <input type="hidden" name="id" value="<?= $getCenter['id_modem'] ?>">

        <div class="col-md-6">
            <label for="modem" class="form-label">Nomor Modem</label>
            <input type="number" class="form-control" id="modem" name="nomor_modem" placeholder="Masukan nomor modem (angka)" oninput="validasi_modem(this,'<?= $getCenter['id_modem'] ?>','message')" value="<?= $getCenter['nomor_modem'] ?>" required>
            <small class="text-danger" id="message"></small>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-md-6">
            <label for="center" class="form-label">Center</label>
            <input type="text" class="form-control" id="center" name="center" placeholder="Masukan center" value="<?= $getCenter['id_senter'] ?>" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-warning" type="submit" id="btn_edit">Edit Center</button>
            <button class="btn btn-secondary" type="reset">Batal</button>
        </div>
    </form>
</div>

<?= view('admin/Layouts/footer') ?>

<script>
    function validasi_modem(element, id, id_message) {
        var number = /^[0-9]+$/;

        // VALIDASI NUMBER
        if (!$(element).val().match(number)) {
            // MERUBAH ISI ELEMENT
            $('#' + id_message).html('Harap menggunakan format angka');

            // MERUBAH ISI ATTRIBUTE
            $('#btn_edit').attr('disabled', true);
        } else if ($(element).val().match(number)) {
            $('#btn_edit').removeAttr('disabled');

            // AJAX
            $.ajax({
                url: '<?= base_url('BaseCamp/select_not_senter_js') ?>',
                method: 'POST',
                data: {
                    id: id,
                },
                async: false,
                dataType: 'JSON',
                success: function(data) {
                    var html = "";

                    var getCenter = data.getCenter;

                    // PENGECEKAN VALUE KOSONG
                    if ($(element).val() != "") {
                        // PENGECEKAN DATA KOSONG
                        if (getCenter != null) {
                            // MENAMPILKAN DATA
                            for (let i = 0; i < getCenter.length; i++) {
                                // PENGECEKAN DATA YANG SAMA
                                if (($(element).val() == getCenter[i].nomor_modem) && (data.tipe == getCenter[i].tipe)) {
                                    var html = "Nomor modem sudah ada! Harap masukan yang lain.";

                                    // MERUBAH ISI ATTRIBUTE
                                    $('#btn_edit').attr('disabled', true);
                                }
                            }

                        }
                    }

                    // MERUBAH ISI ELEMENT
                    $('#' + id_message).html(html);

                    if (html == "") {
                        // MENGHAPUS ATTRIBUTE
                        $('#btn_edit').removeAttr('disabled');
                    }
                }
            })
        }
    }
</script>