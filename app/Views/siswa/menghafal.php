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
    <div class="w-full h-[100vh] bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <div class="min-h-screen flex items-center justify-center px-0 py-10">
            <!-- Bungkus utama flex horizontal -->
            <div class="flex w-full max-w-7xl items-center justify-between px-0">

                <!-- Ornamen Kiri -->
                <div class="hidden md:block w-[100px] flex-shrink-0">
                    <img src="<?= base_url('assets/img/gambar-pinggir.png') ?>" alt="Ornamen Kiri" class="h-[80vh] object-contain">
                </div>

                <!-- Konten Utama -->
                <div class="bg-white/30 backdrop-blur-sm rounded-3xl shadow-2sm p-10 w-full max-w-5xl z-10 mx-auto">

                    <h1 class="text-center text-4xl md:text-5xl font-bold text-blue-800 mb-12 custom-font">
                        Harakat Huruf Hijaiyah
                    </h1>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

                        <!-- Fathah -->
                        <div class="bg-yellow-200 rounded-2xl shadow-lg p-6">
                            <img src="<?= base_url('assets/img/fathah.png') ?>" alt="Fathah"
                                class="mx-auto w-24 h-24 object-contain mb-4">
                            <h2 class="text-2xl font-bold text-black">Fathah</h2>
                            <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-red-600">"a"</span></p>
                        </div>

                        <!-- Kasrah -->
                        <div class="bg-yellow-200 rounded-2xl shadow-lg p-6">
                            <img src="<?= base_url('assets/img/kasrah.png') ?>" alt="Kasrah"
                                class="mx-auto w-24 h-24 object-contain mb-4">
                            <h2 class="text-2xl font-bold text-black">Kasrah</h2>
                            <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-blue-600">"i"</span></p>
                        </div>

                        <!-- Dhammah -->
                        <div class="bg-yellow-200 rounded-2xl shadow-lg p-6">
                            <img src="<?= base_url('assets/img/domah.png') ?>" alt="Dhammah"
                                class="mx-auto w-24 h-24 object-contain mb-4">
                            <h2 class="text-2xl font-bold text-black">Dhammah</h2>
                            <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-green-600">"u"</span></p>
                        </div>
                    </div>

                    <p class="text-sm text-gray-800 mt-10 text-left italic">
                        * Pada slide ini guru dapat menambahkan harakat-harakat lain yang ingin dikenalkan kepada siswa
                    </p>
                </div>

                <!-- Ornamen Kanan -->
                <div class="hidden md:block w-[100px] flex-shrink-0">
                    <img src="<?= base_url('assets/img/gambar-pinggir.png') ?>" alt="Ornamen Kanan"
                        class="h-[80vh] object-contain transform scale-x-[-1]">
                </div>

            </div>
        </div>
    </div>
</body>

</html>