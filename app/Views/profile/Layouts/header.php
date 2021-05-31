<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xmetrik</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('fontawesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('DataTables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css'); ?>">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid container">
            <img src="<?= base_url('img/xmetrik.png') ?>" width="97" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($menu == 'home') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('Home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($menu == 'transaksi') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('Home/transaksi') ?>">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($menu == 'profile') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('Home/profile') ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-light rounded-pill text-center text-primary pe-3 ps-3 fw-bold" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>