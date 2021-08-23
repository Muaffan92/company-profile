<div class="mt-5 pt-4 d-flex align-items-center">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        User's
    </div>

    <div class="ms-auto bg-white shadow me-5 rounded-3">
        <?php
        if (strtolower(session()->get('tipe')) == 'administrator') {
        ?>
            <a href="<?= base_url('Camp/add_akun') ?>" class="btn badge text-success fw-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
            </a>
        <?php
        }
        ?>
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <div class="table-responsive">
        <table class="table-sm table table-hover text-capitalize" id="datatables">
            <thead>
                <tr>
                    <th>username</th>
                    <th>name</th>
                    <th>tipe</th>
                    <?php
                    if (strtolower(session()->get('tipe')) == 'administrator') {
                    ?>
                        <th>aksi</th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody class="fs-6">
                <?php
                if (!empty($getUser)) {
                    foreach ($getUser as $User) {
                ?>
                        <tr>
                            <td><?= $User['username'] ?></td>
                            <td><?= $User['name'] ?></td>
                            <td class="<?php if ($User['tipe'] == 'administrator') {
                                            echo 'text-danger fw-bold';
                                        } else {
                                            echo 'text-success fw-bold';
                                        } ?>"><?= $User['tipe'] ?></td>
                            <?php
                            if (strtolower(session()->get('tipe')) == 'administrator') {
                            ?>
                                <td>
                                    <a href="<?= base_url('Camp/edit_akun/' . $User['username']) ?>" class="btn badge bg-warning rounded-pill">Edit</a>
                                    <a href="<?= base_url('Camp/delete_akun/' . $User['username']) ?>" class="btn badge bg-danger rounded-pill">Hapus</a>
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>