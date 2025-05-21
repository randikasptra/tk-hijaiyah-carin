<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Level 1 - Tebak Huruf</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 to-purple-200 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white/80 backdrop-blur-lg p-8 rounded-2xl shadow-xl w-full max-w-md text-center">
        <h1 class="text-3xl font-bold mb-6 text-[#2d2f6f]">Level 1: Tebak Huruf</h1>

        <div class="text-7xl mb-6 font-bold text-purple-800"><?= $huruf['huruf'] ?></div>

        <?php if ($status === null): ?>
            <form method="post" class="space-y-4">
                <input type="text" name="jawaban" placeholder="Tebak nama huruf..." required
                    class="w-full p-3 border border-gray-300 rounded-lg text-lg text-center">
                <button type="submit"
                    class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 rounded-full text-lg transition">
                    Jawab
                </button>
            </form>
        <?php else: ?>
            <div class="text-lg font-semibold mb-4 <?= $status === 'benar' ? 'text-green-600' : 'text-red-600' ?>">
                <?= $status === 'benar' ? 'Benar!' : 'Ups, salah!' ?> Ini huruf <strong><?= $huruf['nama'] ?></strong>
            </div>

            <a href="<?= base_url('siswa/game/level1/' . ($index + 1)) ?>"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-6 py-3 rounded-full text-lg transition">
                Selanjutnya
            </a>
        <?php endif; ?>
    </div>
</body>

</html>