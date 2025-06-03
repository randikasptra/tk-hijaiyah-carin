<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .level-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .level-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(168, 85, 247, 0.5);
    }

    @keyframes pulseGlow {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(168, 85, 247, 0.6);
        }

        50% {
            box-shadow: 0 0 15px 5px rgba(168, 85, 247, 0.4);
        }
    }

    .pulse {
        animation: pulseGlow 2s infinite;
    }
</style>

<!-- 🔙 Tombol Kembali Pojok Kiri -->
<a href="<?= base_url('/siswa/home') ?>"
    class="absolute top-4 left-4 bg-white/80 hover:bg-white text-purple-700 font-bold py-2 px-4 rounded-full shadow-md flex items-center transition transform hover:scale-105 z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    Kembali
</a>

<div class="relative w-full h-screen flex items-center justify-center overflow-hidden bg-cover bg-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- 🎈 Bubble Dekorasi -->
    <?php for ($i = 0; $i < 25; $i++): ?>
        <div class="absolute bottom-[-50px] bg-white/40 rounded-full"
            style="
                width: <?= rand(20, 40) ?>px;
                height: <?= rand(20, 40) ?>px;
                left: <?= rand(0, 100) ?>%;
                animation: floatBubble <?= rand(12, 25) ?>s linear infinite;
                animation-delay: <?= rand(0, 5) ?>s;">
        </div>
    <?php endfor; ?>

    <div class="bg-white/50 backdrop-blur-lg rounded-3xl shadow-2xl px-8 py-12 w-full max-w-xl text-center space-y-10 z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold text-purple-700 drop-shadow">🎮 Game Hijaiyah</h1>

        <div class="space-y-6">
            <a href="<?= base_url('siswa/game/level-huruf/0') ?>"
                class="level-card bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white py-4 px-10 rounded-full font-bold text-lg pulse block">
                ✨ Tebak Huruf Hijaiyah (Iqro 1)
            </a>

            <a href="<?= base_url('siswa/game/start-harakat') ?>"
                class="level-card bg-gradient-to-r from-blue-500 to-cyan-400 text-white py-4 px-10 rounded-full font-bold text-lg block hover:shadow-xl transition">
                🌟 Tebak Harakat Hijaiyah
            </a>
            

            <div class="bg-gradient-to-r from-gray-300 to-gray-400 text-white py-4 px-10 rounded-full font-bold text-lg opacity-60 cursor-not-allowed">
                🔒 Level Lanjutan (Coming Soon)
            </div>
        </div>

        <a href="<?= base_url('siswa') ?>"
            class="inline-block text-sm text-gray-700 hover:underline transition-all duration-300">
            ⬅️ Kembali ke Dashboard
        </a>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    // Tambahkan animasi bubble kalau perlu
</script>
<?= $this->endSection() ?>