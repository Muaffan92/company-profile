<div class="mt-5 pt-4">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Sosial Media
    </div>

    <div class="mt-4 bg-white p-4 text-dark">
        <div class="table-responsive">
            <table class="table-sm table table-hover text-capitalize" id="datatables">
                <thead>
                    <tr>
                        <th>icon</th>
                        <th>nama</th>
                        <th>link</th>
                        <th>color</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody class="fs-6">
                    <?php
                    if (!empty($getSosmed)) {
                        foreach ($getSosmed as $Sosmed) {
                    ?>
                            <tr>
                                <td><?= $Sosmed['icon'] ?></td>
                                <td><?= $Sosmed['nama'] ?></td>
                                <td><?= $Sosmed['link'] ?></td>
                                <td>
                                    <input type="color" class="form-control form-control-color" id="exampleColorInput" disabled value="#<?= $Sosmed['color'] ?>" title="Choose your color">
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