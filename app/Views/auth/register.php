<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="<?= base_url()?>/admin/css/login_style.css">
    </head>
    <body>
        <div class="box">
            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>
            <h1>Login</h1>
            <span style="color: white"><?= view('Myth\Auth\Views\_message_block') ?></span>
            <input type="text" name="email" placeholder="email">
            <span>
                <?= session('errors.email') ?>
            </span>
            <input type="text" name="username" placeholder="username">
            <span>
                <?= session('errors.username') ?>
            </span>
            <input type="password" name="password" placeholder="password">
            <span>
                <?= session('errors.password') ?>
            </span>
            <input type="password" name="pass_confirm" placeholder="ulangi pasword">
            <span>
                <?= session('errors.pass_confirm') ?>
            </span>
            <input type="submit" value="Login">
        </form>
        Sudah punya akun? <a href="<?= route_to('login') ?>">login</a>
        </div>
    </body>
</html>
