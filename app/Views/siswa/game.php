<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .level-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .level-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(128, 90, 213, 0.4);
    }

    @keyframes pulseGlow {
        0%, 100% {
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

<div class="relative w-full h-screen flex items-center justify-center overflow-hidden bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <!-- Bubble Dekorasi -->
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

    <div class="bg-white/50 backdrop-blur-lg rounded-3xl shadow-2xl px-8 py-12 w-full max-w-xl text-center space-y-8 z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold text-purple-700 drop-shadow-sm">🎮 Game Hijaiyah</h1>

        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="<?= base_url('siswa/game/level1') ?>"
               class="level-card bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white py-4 px-10 rounded-full font-bold text-lg pulse">
                Iqro 1 
            </a>

            <div class="bg-gradient-to-r from-gray-300 to-gray-400 text-white py-4 px-10 rounded-full font-bold text-lg opacity-60 cursor-not-allowed">
                Level 2 (Coming Soon)
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
    // Animasi bubble (sudah di-declare global di layout jika ada)
    // Tidak perlu kode tambahan di sini kecuali game-nya interaktif nanti
</script>
<?= $this->endSection() ?>
