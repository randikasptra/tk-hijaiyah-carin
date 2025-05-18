<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-100 min-h-screen p-10">
    <h1 class="text-3xl font-bold text-green-700">Dashboard Guru</h1>
    <p class="mt-4">Halo, <?= session()->get('user_name') ?>! Kamu login sebagai <strong>Guru</strong>.</p>
    <a href="<?= base_url('/logout') ?>" class="mt-6 inline-block bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Logout</a>
</body>