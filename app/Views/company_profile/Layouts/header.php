<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (!empty($header)) {
            echo $header . ' | X-Metrik';
        } else {
            echo 'X-Metrik';
        }
        ?>
    </title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('fontawesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('DataTables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css'); ?>">
</head>

<body class="overflow-height">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid container">
            <img src="<?= base_url('img/xmetrik.png') ?>" width="97" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if (!empty($getMenu)) {
                        foreach ($getMenu as $Menu) {
                            if ($Menu['position'] == 'header') {
                    ?>
                                <li class="nav-item me-4-lg">
                                    <a class="nav-link fw-bolder fs-6 text-capitalize <?php if ($menu == $Menu['menu']) {
                                                                                            echo 'active';
                                                                                        } ?>" href="<?= $Menu['link'] ?>"><?= $Menu['menu'] ?></a>
                                </li>
                    <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>