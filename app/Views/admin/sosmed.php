<div class="mt-5 pt-4 d-flex align-items-center">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Sosial Media
    </div>

    <div class="ms-auto bg-white shadow me-5 rounded-3">
        <a href="<?= base_url('BaseCamp/add_sosmed') ?>" class="btn badge text-success fw-bold">
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
                                <a href="<?= base_url('BaseCamp/edit_sosmed/' . $Sosmed['id']) ?>" class="btn badge bg-warning rounded-pill">Edit</a>
                                <a href="<?= base_url('BaseCamp/delete_sosmed/' . $Sosmed['id']) ?>" class="btn badge bg-danger rounded-pill">Hapus</a>
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