<div class="mt-5 pt-4">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Bank
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
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="status" <?php if ($Bank['status'] == 0) {
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