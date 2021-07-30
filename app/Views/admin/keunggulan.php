<div class="mt-5 pt-4">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Keunggulan
    </div>

    <div class="mt-4 bg-white p-4 text-dark">
        <div class="table-responsive">
            <table class="table table-sm table-hover text-capitalize" id="datatables">
                <thead>
                    <tr>
                        <th>ket</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($getJenis)) {
                        foreach ($getJenis as $Jenis) {
                    ?>
                            <tr>
                                <td><?= $Jenis['jenis'] ?></td>
                                <td><?= $Jenis['operator'] ?></td>
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