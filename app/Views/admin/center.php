<div class="mt-5 pt-4">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Center
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
                                                                                                    } ?>>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="btn badge bg-warning rounded-pill">Edit</a>
                                    <a href="#" class="btn badge bg-danger rounded-pill">Hapus</a>
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
</div>