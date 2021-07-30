<div class="mt-5 pt-4">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Mitra
    </div>

    <div class="mt-4 bg-white p-4 text-dark">
        <div class="table-responsive">
            <table class="table-sm table table-hover text-capitalize" id="datatables">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>ket</th>
                        <th>image</th>
                        <th>link</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody class="fs-6">
                    <?php
                    if (!empty($getMitra)) {
                        foreach ($getMitra as $Mitra) {
                    ?>
                            <tr>
                                <td><?= $Mitra['title'] ?></td>
                                <td><?= $Mitra['ket'] ?></td>
                                <td>
                                    <img src="<?= base_url('img/' . $Mitra['image']) ?>" class="img-thumbnail" width="70">
                                </td>
                                <td><?= $Mitra['link'] ?></td>
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