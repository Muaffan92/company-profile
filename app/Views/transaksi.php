<div class="bg-primary">
    <div class="container">
        <div class="w-100 h-100 row pb-5">
            <div class="col-6 d-flex align-items-center">
                <div class="d-block">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('Home') ?>" class="text-white-50 text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Transaksi</li>
                        </ol>
                    </nav>
                    <strong class="text-white fs-1">Transaksi</strong>
                </div>
            </div>
            <div class="col-6 mt-5">
                <img src="<?= base_url('img/illustrasion/illustrasion7.png') ?>" height="300" class="float-end">
            </div>
        </div>
    </div>
</div>

<!-- PRODUCT -->
<div class="container mt-5">
    <h1 class="fw-bold text-primary text-center mb-5">Product</h1>
    <a href="http://xmetrik.biz:7324/" class="btn btn-info text-decoration-none mb-3 text-white">
        Cetak Struk
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
            <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
            <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
        </svg>
    </a>
    <div class="table-responsive">
        <table class="table table-border table-hover" id="datatables">
            <thead class="bg-light">
                <tr>
                    <th>Kode Product</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($getProduct as $Product) {
                ?>
                    <tr>
                        <td><?= $Product['kode'] ?></td>
                        <td><?= $Product['keterangan'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END PRODUCT -->