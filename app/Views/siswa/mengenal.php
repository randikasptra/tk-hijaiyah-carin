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
    
    <div class="min-h-screen p-6 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-blue-800 mb-6">Mengenal Huruf Hijaiyah</h1>

        <div class="grid grid-cols-4 md:grid-cols-6 gap-4 max-w-6xl">
            <?php foreach ($huruf as $h): ?>
                <div class="bg-white/70 rounded-xl p-4 shadow-md hover:shadow-xl transition">
                    <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>" class="w-full h-24 object-contain mx-auto">
                    <p class="text-center mt-2 font-bold text-lg text-purple-700"><?= $h['nama'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <a href="<?= base_url('/siswa') ?>" class="mt-8 inline-block bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-6 rounded-full">Kembali</a>
    </div>


</body>

</html>