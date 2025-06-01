<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

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

        0%,
        100% {
            transform: translateY(0) rotate(0);
        }

        25% {
            transform: translateY(-4px) rotate(2deg);
        }

        50% {
            transform: translateY(0) rotate(-2deg);
        }

        75% {
            transform: translateY(-2px) rotate(1deg);
        }
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
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 9999px;
        animation: floatBubble linear infinite;
        z-index: 0;
    }
</style>

<!-- 🎈 Bubble Animasi -->
<?php for ($i = 0; $i < 30; $i++): ?>
    <div class="bubble" style="
        left: <?= rand(0, 100) ?>vw;
        width: <?= rand(40, 80) ?>px;
        height: <?= rand(40, 80) ?>px;
        animation-duration: <?= rand(12, 28) ?>s;
        animation-delay: <?= rand(0, 10) ?>s;
    "></div>
<?php endfor; ?>

<div class="w-full h-screen bg-cover bg-center relative z-10" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="flex flex-col justify-between h-full px-4 pt-4 pb-4 relative">
        <!-- Judul -->
        <h1 class="text-3xl md:text-4xl font-extrabold text-center text-purple-800 drop-shadow mb-4">
            Mengenal Huruf Hijaiyah
        </h1>

        <!-- Grid Huruf -->
        <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 gap-4 p-4 pr-24 rounded-2xl shadow-xl overflow-y-auto bg-white/50 backdrop-blur-sm max-h-[75vh] mx-auto w-full max-w-[90vw]" style="direction: rtl;">
            <?php foreach ($huruf as $h): ?>
                <div
                    class="card bg-white rounded-xl p-3 shadow text-center cursor-pointer hover:ring-2 hover:ring-purple-400"
                    onclick="playSound('<?= base_url($h['suara']) ?>')">
                    <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>" class="w-16 h-16 object-contain mx-auto mb-2">
                    <p class="text-purple-800 font-bold text-lg"><?= esc($h['nama']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Ornamen & Tombol -->
        <img src="<?= base_url('assets/img/mini-cartoon.png') ?>" alt="Dekorasi"
            class="absolute bottom-10 right-4 w-20 sm:w-40 md:w-52 pointer-events-none select-none z-0" />

        <div class="text-center mt-4">
            <a href="<?= base_url('siswa/home') ?>" class="inline-flex items-center bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-5 rounded-full shadow-md transition transform hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    let currentAudio = null;

    function playSound(url) {
        if (!url) return;

        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }

        currentAudio = new Audio(url);
        currentAudio.play().catch(err => {
            console.warn("Gagal memutar suara:", err);
        });
    }
</script>
<?= $this->endSection() ?>