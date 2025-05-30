<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mengenal Huruf Hijaiyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-image: url("<?= base_url('assets/images/bg-siswa.png') ?>");
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .card {
            animation: playfulBounce 2.5s ease-in-out infinite;
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.08);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        @keyframes playfulBounce {
            0%, 100% { transform: translateY(0) rotate(0); }
            25% { transform: translateY(-4px) rotate(2deg); }
            50% { transform: translateY(0) rotate(-2deg); }
            75% { transform: translateY(-2px) rotate(1deg); }
        }

        @keyframes floatBubble {
            0% {
                transform: translateY(0) translateX(0);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-50vh) translateX(20px);
                opacity: 0.5;
            }
            100% {
                transform: translateY(-100vh) translateX(-20px);
                opacity: 0;
            }
        }

        .bubble {
            position: absolute;
            bottom: -50px;
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            animation: floatBubble linear infinite;
        }
    </style>
</head>

<body>
    <!-- BUBBLES -->
    <?php for ($i = 0; $i < 20; $i++): ?>
        <div class="bubble" style="
            left: <?= rand(0, 100) ?>vw;
            width: <?= rand(20, 40) ?>px;
            height: <?= rand(20, 40) ?>px;
            animation-duration: <?= rand(10, 25) ?>s;
            animation-delay: <?= rand(0, 10) ?>s;
        "></div>
    <?php endfor; ?>

    <div class="w-full h-screen bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <div class="flex flex-col justify-between h-full px-4 pt-4 pb-4 relative z-10">

            <!-- Judul -->
            <h1 class="text-2xl md:text-3xl font-extrabold text-center bg-gradient-to-r from-pink-400 to-purple-600 text-transparent bg-clip-text drop-shadow mb-1">
                ✨ Mengenal Huruf Hijaiyah ✨
            </h1>

            <!-- Grid Huruf -->
            <div class="rtl-grid grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 gap-2 px-2 py-2 mr-60 mt-10 bg-gradient-to-br from-yellow-100 to-pink-100 bg-opacity-60 rounded-xl shadow-lg overflow-y-auto">
                <?php foreach ($huruf as $h): ?>
                    <div class="card bg-white rounded-xl p-2 sm:p-3 text-center cursor-pointer">
                        <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>" class="w-14 h-14 sm:w-16 sm:h-16 object-contain mx-auto mb-1">
                        <p class="text-fuchsia-700 font-bold text-md sm:text-lg"><?= $h['nama'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-2">
                <a href="<?= base_url('siswa') ?>" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-6 rounded-full shadow-md hover:scale-105 transition-all">
                    ⬅️ Kembali
                </a>
            </div>

            <!-- Dekorasi Gambar Anak-Anak -->
            <img src="<?= base_url('assets/img/mini-cartoon.png') ?>" alt="Dekorasi"
                 class="absolute bottom-0 right-0 w-16 sm:w-36 md:w-52 pointer-events-none select-none z-20">
        </div>
    </div>
</body>
</html>
