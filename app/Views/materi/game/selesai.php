<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>'); background-attachment: fixed;">
    <div class="bg-white/90 backdrop-blur-lg p-12 rounded-3xl shadow-2xl text-center max-w-2xl w-full mx-4 border border-white/20 
                transition-all duration-500 hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
        <!-- Confetti Animation Container -->
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden rounded-3xl">
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
        </div>

        <!-- Trophy Icon with Animation -->
        <div
            class="animate-bounce mx-auto w-24 h-24 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center shadow-lg mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>

        <h1
            class="text-5xl font-extrabold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
            Game Selesai!
        </h1>

        <p class="text-xl font-medium text-gray-600 mb-2">Skor Akhir Kamu</p>

        <!-- Score Display -->
        <div class="relative inline-block mb-8">
            <div
                class="absolute -inset-3 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur opacity-75 animate-pulse">
            </div>
            <span class="relative text-5xl font-black text-purple-900">
                <?= esc($score) ?> <span class="text-2xl">/ 100</span>
            </span>
        </div>

        <!-- Button with Icon -->
        <br>
        <a href="<?= base_url('materi/home') ?>" class="group inline-flex items-center justify-center mt-6 space-x-3 bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-gray-900 font-semibold py-3 px-8 rounded-full shadow-lg 
                   transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:-translate-x-1 transition-transform"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali ke Dashboard</span>
        </a>
    </div>
</div>

<style>
    .confetti {
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #f0f;
        opacity: 0;
    }

    @keyframes confetti-fall {
        0% {
            transform: translateY(-100px) rotate(0deg);
            opacity: 1;
        }

        100% {
            transform: translateY(100vh) rotate(360deg);
            opacity: 0;
        }
    }

    .confetti:nth-child(1) {
        left: 10%;
        background-color: #f00;
        animation: confetti-fall 3s ease-in 0s infinite;
    }

    .confetti:nth-child(2) {
        left: 30%;
        background-color: #0f0;
        animation: confetti-fall 4s ease-in 1s infinite;
    }

    .confetti:nth-child(3) {
        left: 50%;
        background-color: #00f;
        animation: confetti-fall 3.5s ease-in 0.5s infinite;
    }

    .confetti:nth-child(4) {
        left: 70%;
        background-color: #ff0;
        animation: confetti-fall 4.5s ease-in 1.5s infinite;
    }

    .confetti:nth-child(5) {
        left: 90%;
        background-color: #f0f;
        animation: confetti-fall 3.2s ease-in 0.2s infinite;
    }
</style>

<?= $this->endSection() ?>