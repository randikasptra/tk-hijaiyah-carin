<!-- views/siswa/game.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Game Hijaiyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-yellow-100 min-h-screen flex items-center justify-center">
    <div class="bg-white/80 backdrop-blur-md p-10 rounded-xl shadow-xl text-center space-y-6">
        <h1 class="text-3xl font-bold text-purple-800">Pilih Level Game</h1>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= base_url('siswa/game/level1') ?>" class="bg-purple-500 hover:bg-purple-600 text-white py-3 px-8 rounded-full font-bold text-lg shadow-md">
                Level 1
            </a>
            <a href="#" class="bg-purple-300 text-white py-3 px-8 rounded-full font-bold text-lg shadow-md cursor-not-allowed opacity-50">
                Level 2 (Coming Soon)
            </a>
        </div>

        <a href="<?= base_url('/siswa') ?>" class="inline-block mt-4 text-sm text-gray-600 hover:underline">Kembali ke Dashboard</a>
    </div>
</body>

</html>