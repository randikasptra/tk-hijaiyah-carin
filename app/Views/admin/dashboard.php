<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-blue-50 min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-xl h-screen p-6 fixed top-0 left-0 z-40">
        <h2 class="text-2xl font-bold text-blue-700 mb-10">Admin Panel</h2>

        <nav class="space-y-4">
            <a href="<?= base_url('/admin') ?>" class="block py-2 px-4 rounded hover:bg-blue-100 text-blue-700 font-semibold">
                🏠 Dashboard
            </a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100 text-blue-700">
                👩‍🎓 Data Siswa
            </a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100 text-blue-700">
                📋 Rekap Nilai
            </a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100 text-blue-700">
                📦 Kelola Soal
            </a>
        </nav>

        <div class="absolute bottom-6 left-6 right-6">
            <a href="<?= base_url('/logout') ?>" class="w-full inline-block text-center bg-red-500 hover:bg-red-600 text-white py-2 rounded font-semibold">
                🔓 Logout
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 ml-64 p-10">
        <h1 class="text-3xl font-bold text-blue-800 mb-4">Dashboard Admin</h1>
        <p class="mb-6 text-gray-700">Halo, <strong><?= session()->get('user_name') ?></strong>! Kamu login sebagai <strong>Admin</strong>.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
           <div class="bg-blue-200 p-6 rounded-xl shadow">
    <h3 class="text-xl font-bold text-blue-800">Jumlah Siswa</h3>
    <p class="text-3xl font-bold mt-2"><?= esc($jumlahSiswa) ?></p>
</div>

            <div class="bg-purple-200 p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-purple-800">Jumlah Soal</h3>
                <p class="text-3xl font-bold mt-2">25</p>
            </div>
            <div class="bg-green-200 p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-green-800">Rata-rata Skor</h3>
                <p class="text-3xl font-bold mt-2">82%</p>
            </div>
        </div>
    </main>

</body>

</html>