<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="<?= base_url()?>/admin/css/login_style.css">
    </head>
    <body>
        <div class="box">
            <form action="<?= route_to('login') ?>" method="post">
                <?= csrf_field() ?>
            <h1>Login</h1>
            <span style="color: white"><?= view('Myth\Auth\Views\_message_block') ?></span>
            <input type="text" name="login" placeholder="username">
            <span>
                <?= session('errors.login') ?>
            </span>
            <input type="password" name="password" placeholder="password">
            <span>
                <?= session('errors.password') ?>
            </span>
            <input type="submit" value="Login">
        </form>
        Belum punya akun? <a href="<?= route_to('register') ?>">Register</a>
        </div>
    </body>
</html>
