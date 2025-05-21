<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Hijaiyah</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>"> <!-- Jika pakai CSS tambahan -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-full h-[100dvh] bg-cover bg-center flex items-center justify-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <div class="flex flex-col items-center justify-center text-center px-4 gap-6">
            <div class="bg-white/80 backdrop-blur-md px-20 py-6 rounded-3xl shadow-md">
                <h1 class="text-5xl sm:text-3xl md:text-4xl font-bold text-[#2d2f6f]">
                    belajar hijaiyah
                </h1>
            </div>
            <a href="<?= base_url('siswa/home') ?>"
                class="bg-[#f3e9f5] text-[#2d2f6f] text-3xl font-bold px-20 py-6 rounded-2xl border-2 border-[#2d2f6f] hover:bg-[#e0d6ec] transition-all">
                Mulai
            </a>
        </div>
    </div>

</body>

</html>