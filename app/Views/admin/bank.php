<div class="mt-5 pt-4 d-flex align-items-center">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Bank
    </div>
    <div class="ms-auto bg-white shadow me-5 rounded-3">
        <a href="<?= base_url('Camp/add_bank') ?>" class="btn badge text-success fw-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
        </a>
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <div class="table-responsive">
        <table class="table table-sm table-hover text-capitalize" id="datatables">
            <thead>
                <tr>
                    <th>bank</th>
                    <th>atas nama</th>
                    <th>no rek</th>
                    <th>status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($getBank)) {
                    foreach ($getBank as $Bank) {
                ?>
                        <tr>
                            <td><?= $Bank['bank'] ?></td>
                            <td><?= $Bank['atas_nama'] ?></td>
                            <td><?= $Bank['no_rek'] ?></td>
                            <td>
                                <?php
                                if ($Bank['status'] != 2) {
                                ?>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="status_<?= $Bank['bank'] ?>" value="<?= $Bank['status'] ?>" <?php if ($Bank['status'] == 0) {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?> onchange="update_status(this)">
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="alert-warning text-center" role="alert">
                                        Gangguan
                                    </div>
                                <?php
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Camp/edit_bank/' . $Bank['bank']) ?>" class="btn badge btn-warning rounded-pill">Edit</a>
                                <?php
                                if ($Bank['status'] == 2) {
                                ?>
                                    <a href="<?= base_url('Camp/status_bank?bank=' . $Bank['bank']) ?>" class="btn badge btn-success rounded-pill">Open</a>
                                <?php
                                } else {
                                ?>
                                    <a href="<?= base_url('Camp/status_bank/gangguan?bank=' . $Bank['bank']) ?>" class="btn badge btn-danger rounded-pill">Gangguan</a>
                                <?php
                                }
                                ?>
                                <a href="<?= base_url('Camp/delete_bank/' . $Bank['bank']) ?>" class="btn badge btn-dark rounded-pill">Hapus</a>
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
    function update_status(element) {
        $bank = $(element).attr('id').split('status_');

        // PENGECEKAN STATUS
        if ($(element).val() == 1) {
            var status_ket = 'Open';
            var status_new = 0;
        } else {
            if ($(element).val() == 0) {
                var status_ket = 'Kosong';
                var status_new = 1;
            }
        }

        // PERSETUJUAN
        swal({
            title: "WARNING!!",
            text: 'Apa anda yakin ingin merubah status menjadi ' + status_ket + '?',
            icon: "info",
            buttons: ['Cancel', 'Yes']
        }).then(function(value) {
            if (value) {
                // AJAX
                $.ajax({
                    url: '<?= base_url('Camp/status_bank?bank='); ?>' + $bank[1],
                    method: 'POST',
                    async: false,
                    success: function() {
                        // MERUBAH VALUE ELEMENT
                        $('#' + $(element).attr('id')).val(status_new);
                    },
                    error: function() {
                        swal({
                            title: "WARNING!!",
                            text: 'Update data tidak berhasil',
                            icon: "error",
                            buttons: false,
                        })
                    }
                })
            } else {
                // PENGECEKAN STATUS
                if ($(element).val() == 1) {
                    $("#" + $(element).attr('id')).html('<input type="checkbox" class="form-check-input" id="' + $(element).attr('id') + '" value="' + $(element).val() + '" onchange="update_status(this)" checked>')
                } else {
                    if ($(element).val() == 0) {
                        $("#" + $(element).attr('id')).html('<input type="checkbox" class="form-check-input" id="' + $(element).attr('id') + '" value="' + $(element).val() + '" onchange="update_status(this)">')
                    }
                }
            }
        })
    }
</script>