<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-gradient-to-br from-green-200 to-green-400 min-h-screen p-6 md:p-10 font-sans">

    <header class="max-w-5xl mx-auto flex justify-between items-center mb-10">
        <h1 class="text-4xl font-extrabold text-green-900 drop-shadow-lg">Dashboard Guru</h1>
        <a href="<?= base_url('/logout') ?>"
            class="flex items-center bg-red-600 hover:bg-red-700 text-white font-semibold px-5 py-2 rounded-lg shadow-md transition-transform hover:scale-105">
            <i data-feather="log-out" class="w-5 h-5 mr-2"></i> Logout
        </a>
    </header>

    <main class="max-w-5xl mx-auto space-y-8">

        <section class="bg-white rounded-3xl shadow-lg p-6 md:p-10 flex flex-col md:flex-row items-center md:items-start gap-6">
            <div class="flex-shrink-0">
                <div
                    class="w-24 h-24 bg-green-300 rounded-full flex items-center justify-center text-4xl font-bold text-green-900 select-none shadow-inner">
                    <?= strtoupper(substr(session()->get('user_name'), 0, 2)) ?>
                </div>
            </div>
            <div>
                <p class="text-lg md:text-xl text-green-900 font-semibold">Halo, <span
                        class="underline decoration-green-600 decoration-2"><?= session()->get('user_name') ?></span>!
                </p>
                <p class="mt-1 text-green-700">Kamu login sebagai <strong>Guru</strong>.</p>
                <p class="mt-3 text-sm text-green-600 max-w-md">Selamat mengajar dan semoga hari ini menyenangkan!
                    Jangan lupa selalu pantau perkembangan anak-anak ya.</p>
            </div>
        </section>

        <section class="grid grid-cols-1 sm:grid-cols-3 gap-6">

            <a href="<?= base_url('guru/materi') ?>"
                class="bg-gradient-to-tr from-green-500 to-green-700 text-white rounded-3xl p-6 shadow-lg flex flex-col items-center justify-center hover:scale-105 transition-transform cursor-pointer">
                <i data-feather="book-open" class="w-10 h-10 mb-3"></i>
                <span class="font-bold text-lg">Materi Pembelajaran</span>
                <p class="text-green-200 mt-1 text-center text-sm">Kelola dan tambahkan materi yang diajarkan</p>
            </a>

            <a href="<?= base_url('guru/game') ?>"
                class="bg-gradient-to-tr from-teal-500 to-cyan-600 text-white rounded-3xl p-6 shadow-lg flex flex-col items-center justify-center hover:scale-105 transition-transform cursor-pointer">
                <i data-feather="play-circle" class="w-10 h-10 mb-3"></i>
                <span class="font-bold text-lg">Game Interaktif</span>
                <p class="text-cyan-200 mt-1 text-center text-sm">Akses dan jalankan aktivitas belajar anak</p>
            </a>

            <a href="<?= base_url('guru/siswa') ?>"
                class="bg-gradient-to-tr from-yellow-400 to-yellow-600 text-white rounded-3xl p-6 shadow-lg flex flex-col items-center justify-center hover:scale-105 transition-transform cursor-pointer">
                <i data-feather="users" class="w-10 h-10 mb-3"></i>
                <span class="font-bold text-lg">Daftar Siswa</span>
                <p class="text-yellow-100 mt-1 text-center text-sm">Lihat data anak-anak yang terdaftar</p>
            </a>

        </section>

    </main>

    <script>
        feather.replace()
    </script>

</body>

</html>
