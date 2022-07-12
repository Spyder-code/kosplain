<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="<?= base_url()?>/admin/css/index_style.css">
        <link rel="stylesheet" href="<?= base_url()?>/admin/css/global_style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    </head>
    <body>
        <div class="navbar">
        <a href="login.html" name="logout">Logout</a>
        <a href="<?= route_to('admin.data_keluhan') ?>">Keluhan Sudah Selesai</a>
        <a href="<?= route_to('admin.data_keluhan') ?>">Keluhan Belum Diproses</a>
        <a href="<?= route_to('admin.data_penghuni') ?>">Data Penghuni</a>
        <a href="<?= route_to('admin.dashboard') ?>">Dashboard</a>
        <a href="index.html" name="kosplain">KOSPLAIN</a>
        </div>
        
        <?= $this->renderSection('content') ?>

        <footer>2022 - All rights reserved. Kosplain</footer>
    </body>
</html>
