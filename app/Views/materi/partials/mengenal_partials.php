<!-- app/Views/materi/partials/mengenal_partials.php -->
<div id="spa-content">
    <div class="w-full h-screen bg-cover bg-center bg-no-repeat relative z-10"
        style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-purple-900/10 to-purple-900/20 pointer-events-none"></div>

        <div class="flex flex-col justify-between h-full px-4 pt-8 pb-6 relative">
            <!-- Judul -->
            <div class="animate-float-slow">
                <h1 class="text-4xl md:text-5xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 drop-shadow-lg mb-6 px-4 py-2 rounded-xl">
                    Mengenal Huruf Hijaiyah
                </h1>
            </div>

            <!-- Static Data Huruf Hijaiyah -->
            <?php
            $hurufHijaiyah = [
                ['nama' => 'Alif', 'gambar' => 'assets/img/1.Alif.png', 'suara' => 'assets/suara/1.Alif.mp3'],
                ['nama' => 'Ba', 'gambar' => 'assets/img/2.Ba.png', 'suara' => 'assets/suara/2.Ba.mp3'],
                ['nama' => 'Ta', 'gambar' => 'assets/img/3.Ta.png', 'suara' => 'assets/suara/3.Ta.mp3'],
                ['nama' => 'Tsa', 'gambar' => 'assets/img/4.Tsa.png', 'suara' => 'assets/suara/4.Tsa.mp3'],
                ['nama' => 'Jim', 'gambar' => 'assets/img/5.Jim.png', 'suara' => 'assets/suara/5.Jim.mp3'],
                ['nama' => 'Ha', 'gambar' => 'assets/img/6.Ha.png', 'suara' => 'assets/suara/6.Kha.mp3'],
                ['nama' => 'Kho', 'gambar' => 'assets/img/7.Kha.png', 'suara' => 'assets/suara/7.Kho.mp3'],
                ['nama' => 'Dal', 'gambar' => 'assets/img/8.Dal.png', 'suara' => 'assets/suara/8.Dal.mp3'],
                ['nama' => 'Dzal', 'gambar' => 'assets/img/9.Dzal.png', 'suara' => 'assets/suara/9.Dzal.mp3'],
                ['nama' => 'Ro', 'gambar' => 'assets/img/10.Ro.png', 'suara' => 'assets/suara/10.Ro.mp3'],
                ['nama' => 'Zai', 'gambar' => 'assets/img/11.Zai.png', 'suara' => 'assets/suara/11.Dza.mp3'],
                ['nama' => 'Sin', 'gambar' => 'assets/img/12.Sin.png', 'suara' => 'assets/suara/12.Sin.mp3'],
                ['nama' => 'Syin', 'gambar' => 'assets/img/13.Syin.png', 'suara' => 'assets/suara/13.Syin.mp3'],
                ['nama' => 'Shod', 'gambar' => 'assets/img/14.Shod.png', 'suara' => 'assets/suara/14.Shod.mp3'],
                ['nama' => 'Dhod', 'gambar' => 'assets/img/15.Dhod.png', 'suara' => 'assets/suara/17.Dzho.mp3'],
                ['nama' => 'Tho', 'gambar' => 'assets/img/16.Tho.png', 'suara' => 'assets/suara/16.Tho.mp3'],
                ['nama' => 'Dzho', 'gambar' => 'assets/img/17.Dzho.png', 'suara' => 'assets/suara/17.Dzho.mp3'],
                ['nama' => 'Ain', 'gambar' => 'assets/img/18.Ain.png', 'suara' => 'assets/suara/18.Ain.mp3'],
                ['nama' => 'Ghoin', 'gambar' => 'assets/img/19.Ghoin.png', 'suara' => 'assets/suara/19.Ghain.mp3'],
                ['nama' => 'Fa', 'gambar' => 'assets/img/20.Fa.png', 'suara' => 'assets/suara/20.Fa.mp3'],
                ['nama' => 'Qof', 'gambar' => 'assets/img/21.Qof.png', 'suara' => 'assets/suara/21.Qof.mp3'],
                ['nama' => 'Kaf', 'gambar' => 'assets/img/22.Kaf.png', 'suara' => 'assets/suara/22.Kaf.mp3'],
                ['nama' => 'Lam', 'gambar' => 'assets/img/23.Lam.png', 'suara' => 'assets/suara/23.Lam.mp3'],
                ['nama' => 'Mim', 'gambar' => 'assets/img/24.Mim.png', 'suara' => 'assets/suara/24.Mim.mp3'],
                ['nama' => 'Nun', 'gambar' => 'assets/img/25.Nun.png', 'suara' => 'assets/suara/25.Nun.mp3'],
                ['nama' => 'Wau', 'gambar' => 'assets/img/26.Wau.png', 'suara' => 'assets/suara/26.Wawu.mp3'],
                ['nama' => 'Hamzah', 'gambar' => 'assets/img/27.Hamzah.png', 'suara' => 'assets/suara/27.Hamzah.mp3'],
                ['nama' => 'Ya', 'gambar' => 'assets/img/28.Ya.png', 'suara' => 'assets/suara/29.Ya.mp3'],
            ];
            ?>

            <!-- Kartu Huruf -->
            <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 gap-5 p-6 rounded-3xl shadow-2xl overflow-y-auto bg-white/60 backdrop-blur-md max-h-[70vh] mx-auto w-full max-w-[90vw] border border-white/30"
                style="direction: rtl;">
                <?php foreach ($hurufHijaiyah as $h): ?>
                    <div class="card bg-white/90 hover:bg-white rounded-xl p-4 shadow-lg text-center cursor-pointer transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-2 hover:border-purple-300 transform"
                        onclick="playSound('<?= base_url($h['suara']) ?>')">
                        <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>"
                            class="w-20 h-20 object-contain mx-auto mb-3">
                        <p class="text-purple-900 font-bold text-xl tracking-wide"><?= esc($h['nama']) ?>🔊</p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-6">
                <a href="<?= base_url('materi/home_partials') ?>"
                    class="inline-flex items-center spa-link bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-gray-900 font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24"
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
    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }
    .overflow-y-auto::-webkit-scrollbar {
        width: 8px;
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
