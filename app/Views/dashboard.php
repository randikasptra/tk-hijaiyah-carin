<h1>Selamat datang di Dashboard, <?= session()->get('user_name') ?>!</h1>
<p>Role: <?= session()->get('user_role') ?></p>
<a href="<?= base_url('/logout') ?>">Logout</a>