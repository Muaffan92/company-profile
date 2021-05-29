<div class="bg-primary">
    <div class="container">
        <div class="w-100 h-100 row pb-auto">
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