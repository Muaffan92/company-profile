<div class="mt-5 pt-4">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Cabang
    </div>

    <div class="mt-4 bg-white p-4 text-dark">
        <div class="table-responsive">
            <table class="table-sm table table-hover text-capitalize" id="datatables">
                <thead>
                    <tr>
                        <th>nama</th>
                        <th>kategori</th>
                        <th>alamat</th>
                        <th>ket</th>
                        <th>nomor telephone</th>
                        <th>image</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody class="fs-6">
                    <?php
                    if (!empty($getCabang)) {
                        foreach ($getCabang as $Cabang) {
                    ?>
                            <tr>
                                <td><?= $Cabang['nama'] ?></td>
                                <td><?= $Cabang['kategori'] ?></td>
                                <td><?= $Cabang['alamat'] ?></td>
                                <td><?= $Cabang['ket'] ?></td>
                                <td><?= $Cabang['nomor_telepon'] ?></td>
                                <td>
                                    <img src="<?= base_url('img/' . $Cabang['image']) ?>" class="img-thumbnail">
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