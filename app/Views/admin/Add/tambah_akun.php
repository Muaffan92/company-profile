<div class="mt-5 pt-4 d-flex align-items-center">
    <a href="<?= base_url('Camp/akun') ?>" class="btn ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
    </a>
    <div class="p-2 fw-bold fs-4 text-dark">
        Tambah User
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <form action="<?= base_url('Camp/insert_akun') ?>" method="POST" class="row g-3 needs-validation" novalidate>
        <div class="col-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" oninput="cek_user(this)" required>
            <small class="text-danger" id="message_invalid"></small>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukan name" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password" required>
            <div class="invalid-feedback">
                Form tidak boleh kosong
            </div>
        </div>
        <div class="col-6">
            <label for="tipe" class="form-label">Tipe</label>
            <select class="form-select" id="tipe" name="tipe" required>
                <option value="">Pilih Tipe</option>
                <?php
                if (!empty($getUsers)) {
                ?>
                    <option value="admin" selected>Admin</option>
                <?php
                } elseif (empty($getUsers)) {
                ?>
                    <option value="administrator">Administrator</option>
                    <option value="admin">Admin</option>
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
    function cek_user(element) {
        // PENGECEKAN VALUE
        if ($(element).val() == '') {
            $('#message_invalid').html('');
            $('#btn_add').removeAttr('disabled');
        } else if ($(element).val() != '') {
            // AJAX
            $.ajax({
                url: '<?= base_url('Camp/select_user') ?>',
                method: 'POST',
                data: {
                    username: $(element).val(),
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    // PENGECEKAN DATA
                    if ((data != null)) {
                        $('#message_invalid').html('Username sudah ada');
                        $('#btn_add').attr('disabled', 'true');
                    } else if ((data == null)) {
                        $('#message_invalid').html('');
                        $('#btn_add').removeAttr('disabled');
                    }
                }
            })
        }
    }
</script>