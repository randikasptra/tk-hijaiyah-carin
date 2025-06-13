<!-- app/Views/materi/partials/mengenal_partials.php -->
<div id="spa-content">
    <div class="w-full h-screen bg-cover bg-center bg-no-repeat relative z-10"
        style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <!-- Animated overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-purple-900/10 to-purple-900/20 pointer-events-none"></div>
        
        <div class="flex flex-col justify-between h-full px-4 pt-8 pb-6 relative">
            <!-- Header with floating effect -->
            <div class="animate-float-slow">
                <h1 class="text-4xl md:text-5xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 drop-shadow-lg mb-6 px-4 py-2 rounded-xl">
                    Mengenal Huruf Hijaiyah
                </h1>
            </div>

            <!-- Cards grid with enhanced glass effect -->
            <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 gap-5 p-6 rounded-3xl shadow-2xl overflow-y-auto bg-white/60 backdrop-blur-md max-h-[70vh] mx-auto w-full max-w-[90vw] border border-white/30"
                style="direction: rtl;">
                <?php foreach ($huruf as $h): ?>
                    <div class="card bg-white/90 hover:bg-white rounded-xl p-4 shadow-lg text-center cursor-pointer transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-2 hover:border-purple-300 transform"
                        onclick="playSound('<?= base_url($h['suara']) ?>')">
                        <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>"
                            class="w-20 h-20 object-contain mx-auto mb-3 transition-transform duration-300 group-hover:scale-110">
                        <p class="text-purple-900 font-bold text-xl tracking-wide"><?= esc($h['nama']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Enhanced back button -->
            <div class="text-center mt-6">
                <a href="<?= base_url('materi/home_partials') ?>"
                    class="inline-flex items-center spa-link bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-gray-900 font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Floating animation */
    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }
    
    /* Custom scrollbar for the grid */
    .overflow-y-auto::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    .overflow-y-auto::-webkit-scrollbar-thumb {
        background: rgba(109, 40, 217, 0.5);
        border-radius: 4px;
    }
    .overflow-y-auto::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.3);
    }
</style>

<script>
    let currentAudio = null;

    function playSound(url) {
        if (!url) return;
        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }
        currentAudio = new Audio(url);
        currentAudio.play().catch(err => console.warn("Gagal memutar suara:", err));
    }

    // Auto play audio sambutan saat halaman dimuat
    $(document).ready(function () {
        const welcomeAudio = new Audio("<?= base_url('sound/MENGENAL.mp3') ?>");
        welcomeAudio.play().catch(err => {
            console.warn("Gagal memutar audio sambutan:", err);
        });
    });
</script>