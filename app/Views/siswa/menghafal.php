<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Menghafal Harakat</title>
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
    <div class="min-h-screen flex items-center justify-center px-6 py-10">
        <div class="bg-white/30 backdrop-blur-xl rounded-3xl shadow-2xl p-10 w-full max-w-5xl z-10">
            <h1 class="text-center text-4xl md:text-5xl font-bold text-blue-800 mb-12 custom-font">Harakat Huruf Hijaiyah</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Fathah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6">
                    <img src="<?= base_url('assets/images/fathah.png') ?>" alt="Fathah" class="mx-auto w-24 h-24 object-contain mb-4">
                    <h2 class="text-2xl font-bold text-black">Fathah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-red-600">"a"</span></p>
                </div>

                <!-- Kasrah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6">
                    <img src="<?= base_url('assets/images/kasrah.png') ?>" alt="Kasrah" class="mx-auto w-24 h-24 object-contain mb-4">
                    <h2 class="text-2xl font-bold text-black">Kasrah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-blue-600">"i"</span></p>
                </div>

                <!-- Dhammah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6">
                    <img src="<?= base_url('assets/images/dhammah.png') ?>" alt="Dhammah" class="mx-auto w-24 h-24 object-contain mb-4">
                    <h2 class="text-2xl font-bold text-black">Dhammah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-green-600">"u"</span></p>
                </div>
            </div>

            <p class="text-sm text-gray-800 mt-10 text-left italic">* Pada slide ini guru dapat menambahkan harakat-harakat lain yang ingin dikenalkan kepada siswa</p>
        </div>
    </div>
</body>

</html>