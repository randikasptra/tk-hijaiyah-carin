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

<body>
    <div class="w-full h-[100dvh] bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <div class="min-h-screen relative flex items-center justify-center px-4">
            <!-- Gambar Kiri -->
            <img src="<?= base_url('assets/images/anak-cewek.png') ?>" alt="Anak Cewek"
                class="absolute left-0 bottom-0 w-28 sm:w-36 md:w-40 lg:w-48 xl:w-56 select-none pointer-events-none">

            <!-- Gambar Kanan -->
            <img src="<?= base_url('assets/images/anak-cowok.png') ?>" alt="Anak Cowok"
                class="absolute right-0 bottom-0 w-28 sm:w-36 md:w-40 lg:w-48 xl:w-56 select-none pointer-events-none">

            <!-- Konten Tengah -->
            <div class="text-center space-y-6 p-6 bg-white/80 rounded-xl shadow-xl backdrop-blur-sm z-10">
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
        </div>
    </div>


</body>

</html>