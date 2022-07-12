<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="<?= base_url()?>/penghuni/css/home_style.css">
        <link rel="stylesheet" href="<?= base_url()?>/penghuni/css/global_style.css">
    </head>
    <body>
        <div id="navbar" class="navbar">
            <a href="#" name="kosplain">KOSPLAIN</a>
            <a href="keluhan_saya.html" name="keluhan_saya">Keluhan Saya</a>
            <a href="daftar_keluhan.html" name="daftar_keluhan">Daftar Keluhan</a>
            <a href="profile" name="profile">Profile</a>
        </div>

        <?= $this->renderSection('content') ?>

    </body>
</html>
