<div class="mt-5 pt-4">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Info
    </div>
</div>

<div class="mt-3 p-4 text-dark">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="true">Perusahaan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="header-tab" data-bs-toggle="tab" data-bs-target="#header" type="button" role="tab" aria-controls="header" aria-selected="false">Header</button>
        </li>
    </ul>
    <div class="tab-content bg-white p-4" id="myTabContent">
        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
            <div class="table-responsive">
                <table class="table-sm table table-hover text-capitalize" id="datatables">
                    <thead>
                        <tr>
                            <th>icon</th>
                            <th>nama</th>
                            <th>ket</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody class="fs-6">
                        <?php
                        if (!empty($getInfo)) {
                            foreach ($getInfo as $Info) {
                        ?>
                                <tr>
                                    <td><?= $Info['icon'] ?></td>
                                    <td><?= $Info['nama'] ?></td>
                                    <td><?= $Info['ket'] ?></td>
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
        <div class="tab-pane fade" id="header" role="tabpanel" aria-labelledby="header-tab">
            <div class="table-responsive">
                <table class="table-sm table table-hover text-capitalize" id="datatables1">
                    <thead>
                        <tr>
                            <th>menu</th>
                            <th>image</th>
                            <th>title</th>
                            <th>ket</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody class="fs-6">
                        <?php
                        if (!empty($getInfoHeader)) {
                            foreach ($getInfoHeader as $InfoHeader) {
                        ?>
                                <tr>
                                    <td><?= $InfoHeader['menu'] ?></td>
                                    <td>
                                        <img src="<?= base_url('img/'. $InfoHeader['image']) ?>" class="img-thumbnail">
                                    </td>
                                    <td><?= $InfoHeader['title'] ?></td>
                                    <td><?= $InfoHeader['ket'] ?></td>
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
</div>