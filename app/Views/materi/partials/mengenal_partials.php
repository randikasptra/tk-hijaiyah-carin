<!-- app/Views/materi/partials/mengenal_partials.php -->
<div id="spa-content">
    <div class="w-full h-screen bg-cover bg-center relative z-10"
        style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <div class="flex flex-col justify-between h-full px-4 pt-4 pb-4 relative">
            <h1 class="text-3xl md:text-4xl font-extrabold text-center text-purple-800 drop-shadow mb-4">
                Mengenal Huruf Hijaiyah
            </h1>

            <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 gap-4 p-4 pr-24 rounded-2xl shadow-xl overflow-y-auto bg-white/50 backdrop-blur-sm max-h-[75vh] mx-auto w-full max-w-[90vw]"
                style="direction: rtl;">
                <?php foreach ($huruf as $h): ?>
                    <div class="card bg-white rounded-xl p-3 shadow text-center cursor-pointer hover:ring-2 hover:ring-purple-400"
                        onclick="playSound('<?= base_url($h['suara']) ?>')">
                        <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>"
                            class="w-16 h-16 object-contain mx-auto mb-2">
                        <p class="text-purple-800 font-bold text-lg"><?= esc($h['nama']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-4">
                <a href="<?= base_url('materi/home') ?>"
                    class="inline-flex items-center spa-link bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-5 rounded-full shadow-md transition transform hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>

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
</script>