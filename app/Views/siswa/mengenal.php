<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Mengenal Huruf Hijaiyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url("<?= base_url('assets/images/bg-siswa.png') ?>");
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="w-full h-[100vh] bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <div class="min-h-screen px-4 pt-6 pb-20 relative">
        
                <!-- Judul -->
            <h1 class="text-2xl md:text-4xl font-bold text-[#2d2f6f] mb-6 text-center">
                Mengenal Huruf Hijaiyah
            </h1>

            <!-- Grid Huruf -->
            <div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 gap-3 max-w-7xl mx-auto">
                <?php foreach ($huruf as $h): ?>
                    <div class="bg-white/70 rounded-xl p-4 shadow-md hover:shadow-xl transition">
                        <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>" class="w-12 h-12 object-contain mx-auto">
                        <p class="text-center mt-2 font-bold text-md md:text-lg text-purple-700"><?= $h['nama'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-10">
                <a href="<?= base_url('siswa/home') ?>" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-6 rounded-full transition-all">
                    Kembali
                </a>
            </div>

            <!-- Dekorasi Gambar Anak-Anak Duduk -->
            <img src="<?= base_url('assets/img/mini-cartoon.png') ?>" alt="Dekorasi"
                class="absolute bottom-0 right-0 w-20 sm:w-52 md:w-64  pointer-events-none select-none">
        </div>
    </div>
</body>

</html>