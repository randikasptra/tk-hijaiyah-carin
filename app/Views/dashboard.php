<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Selamat datang, <?= session()->get('user_name') ?>!</h1>
    <p>Role: <?= session()->get('user_role') ?></p>
    <a href="<?= base_url('/logout') ?>">Logout</a>
</body>

</html>