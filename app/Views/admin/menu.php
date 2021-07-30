<div class="mt-5 pt-4">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Menu
    </div>

    <div class="mt-4 bg-white p-4 text-dark">
        <div class="table-responsive">
            <table class="table-sm table table-hover text-capitalize" id="datatables">
                <thead>
                    <tr>
                        <th>menu</th>
                        <th>kategori</th>
                        <th>link</th>
                        <th>position</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody class="fs-6">
                    <?php
                    if (!empty($getMenu)) {
                        foreach ($getMenu as $Menu) {
                    ?>
                            <tr>
                                <td><?= $Menu['menu'] ?></td>
                                <td><?= $Menu['kategori'] ?></td>
                                <td><?= $Menu['link'] ?></td>
                                <td><?= $Menu['position'] ?></td>
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