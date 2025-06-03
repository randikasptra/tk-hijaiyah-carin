<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-blue-50 min-h-screen">

    <!-- Sidebar -->
    <!-- Sidenav -->
    <aside class="w-64 bg-white shadow-lg h-screen p-6 space-y-6">
        <h2 class="text-2xl font-bold text-blue-700 mb-4">Admin Panel</h2>

        <nav class="space-y-2">
            <a href="<?= base_url('/admin') ?>" class="flex items-center gap-3 text-blue-700 font-semibold px-4 py-2 rounded hover:bg-blue-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-7 9 7v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z" />
                </svg>
                Dashboard
            </a>

            <a href="#" class="flex items-center gap-3 text-blue-700 px-4 py-2 rounded hover:bg-blue-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 12a4 4 0 100-8 4 4 0 000 8zm0 0v6m4-6v6m8 0v-2a4 4 0 00-3-3.87M15 12a4 4 0 100-8 4 4 0 000 8z" />
                </svg>
                Data Siswa
            </a>

            <a href="#" class="flex items-center gap-3 text-blue-700 px-4 py-2 rounded hover:bg-blue-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8M8 12h8m-6 8h6a2 2 0 002-2v-6a2 2 0 00-2-2h-6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                </svg>
                Rekap Nilai
            </a>

            <a href="#" class="flex items-center gap-3 text-blue-700 px-4 py-2 rounded hover:bg-blue-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18m-9 5h9" />
                </svg>
                Kelola Soal
            </a>
        </nav>
    </aside>


    <!-- Main Content -->
    <main class="flex-1 ml-64 p-10">
        <h1 class="text-3xl font-bold text-blue-800 mb-4">Dashboard Admin</h1>
        <p class="mb-6 text-gray-700">Halo, <strong><?= session()->get('user_name') ?></strong>! Kamu login sebagai <strong>Admin</strong>.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-200 p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-blue-800">Jumlah Users</h3>
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