<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url("<?= base_url('assets/images/bg-siswa.png') ?>");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .custom-font {
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center">

    <div class="text-center space-y-6 p-6 bg-white/80 rounded-xl shadow-xl backdrop-blur-sm">
        <h1 class="text-4xl font-bold text-blue-700 custom-font">Selamat Datang</h1>

        <div class="flex flex-col space-y-4">
            <a href="<?= base_url('/siswa/mengenal') ?>"
                class="bg-gradient-to-br from-yellow-300 to-orange-300 hover:from-yellow-400 hover:to-orange-400 text-black font-bold py-3 px-8 rounded-full border-4 border-yellow-500 text-lg shadow-lg transform hover:scale-105 transition duration-200 ease-in-out">
                Mengenal Hijaiyah
            </a>

            <a href="#" class="bg-yellow-300 hover:bg-yellow-400 text-black font-bold py-3 px-8 rounded-full border-4 border-orange-400 text-lg transition">
                Menghafal Hijaiyah
            </a>
            <a href="#" class="bg-yellow-300 hover:bg-yellow-400 text-black font-bold py-3 px-8 rounded-full border-4 border-orange-400 text-lg transition">
                Game
            </a>
        </div>
    </div>

</body>

</html>