<div class="mt-5 pt-4 d-flex align-items-center">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Center
    </div>
    <div class="ms-auto bg-white shadow me-5 rounded-3">
        <a href="<?= base_url('Camp/add_center') ?>" class="btn badge text-success fw-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
        </a>
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <div class="table-responsive">
        <table class="table-sm table table-hover text-capitalize" id="datatables">
            <thead>
                <tr>
                    <th>nomor modem</th>
                    <th>center</th>
                    <th>tipe</th>
                    <th>status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody class="fs-6">
                <?php
                if (!empty($getCenter)) {
                    foreach ($getCenter as $Center) {
                ?>
                        <tr>
                            <td><?= $Center['nomor_modem'] ?></td>
                            <td><?= $Center['id_senter'] ?></td>
                            <td><?= $Center['tipe'] ?></td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="status" <?php if ($Center['status'] == 1) {
                                                                                                    echo 'checked';
                                                                                                } ?> onchange="status(this,'<?= $Center['id_modem'] ?>')" value="<?= $Center['status'] ?>">
                                </div>
                            </td>
                            <td>
                                <a href="<?= base_url('Camp/edit_center/' . $Center['id_modem']) ?>" class="btn badge bg-warning rounded-pill">Edit</a>
                                <a href="<?= base_url('Camp/delete_center/' . $Center['id_modem']) ?>" class="btn badge bg-danger rounded-pill">Hapus</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?= view('admin/Layouts/footer') ?>

<script>
    function status(element, id) {
        // PENGECEKAN STATUS
        if ($(element).val() == 1) {
            var ket_status = 'Off';
            var status_new = 0;
        } else {
            if ($(element).val() == 0) {
                var ket_status = 'On';
                var status_new = 1;
            }
        }

        swal({
            title: "WARNING!!",
            text: 'Apa anda yakin ingin merubah status menjadi ' + ket_status + '?',
            icon: "info",
            buttons: ['Cancel', 'Yes']
        }).then(function(value) {
            if (value) {
                // AJAX
                $.ajax({
                    url: '<?= base_url('Camp/update_status') ?>',
                    method: 'POST',
                    data: {
                        status: status_new,
                        id: id,
                    },
                    async: false,
                    success: function() {
                        $(element).val(status_new);
                    }
                })
            }
        })

    }
</script>