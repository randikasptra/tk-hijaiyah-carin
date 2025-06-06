<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="relative w-full h-screen overflow-hidden bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <!-- Gelembung -->
    <div class="bubble left-[20%] w-[12px] h-[12px]"></div>
    <div class="bubble left-[50%] w-[20px] h-[20px]"></div>
    <div class="bubble left-[70%] w-[15px] h-[15px]"></div>

    <!-- Ornamen -->
    <img src="<?= base_url('assets/img/gambar-pinggir.png') ?>" alt="Kiri" class="absolute left-0 top-0 bottom-0 h-full object-contain z-0" style="max-width: 120px;">
    <img src="<?= base_url('assets/img/gambar-pinggir.png') ?>" alt="Kanan" class="absolute right-0 top-0 bottom-0 h-full object-contain z-0 scale-x-[-1]" style="max-width: 120px;">

    <!-- Konten -->
    <div class="min-h-screen flex items-center justify-center px-6 py-10 relative z-10">
        <div class="bg-white/40 backdrop-blur-md rounded-3xl shadow-xl p-10 w-full max-w-5xl z-10 mx-auto">
            <h1 class="text-center text-4xl md:text-5xl font-bold text-purple-700 mb-12">
                Harakat Huruf Hijaiyah
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Fathah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 cursor-pointer" data-suara="<?= base_url('assets/suara/Fathah.mp3') ?>">
                    <img src="<?= base_url('assets/img/fathah.png') ?>" alt="Fathah" class="mx-auto w-24 h-24 mb-4 object-contain">
                    <h2 class="text-2xl font-bold text-black">Fathah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-red-600">"a"</span></p>
                </div>

                <!-- Kasrah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 cursor-pointer" data-suara="<?= base_url('assets/suara/Kasrah.mp3') ?>">
                    <img src="<?= base_url('assets/img/kasrah.png') ?>" alt="Kasrah" class="mx-auto w-24 h-24 mb-4 object-contain">
                    <h2 class="text-2xl font-bold text-black">Kasrah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-blue-600">"i"</span></p>
                </div>

                <!-- Dhammah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 cursor-pointer" data-suara="<?= base_url('assets/suara/Dhomah.mp3') ?>">
                    <img src="<?= base_url('assets/img/domah.png') ?>" alt="Dhammah" class="mx-auto w-24 h-24 mb-4 object-contain">
                    <h2 class="text-2xl font-bold text-black">Dhammah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-green-600">"u"</span></p>
                </div>
            </div>

            
            <div class="flex justify-between items-center mb-6 mt-10">
                <a href="<?= base_url('siswa/home') ?>" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-full shadow transition">⬅️ Kembali</a>

                <a href="<?= base_url('materi/game/harakat_hijaiyah') ?>" class="bg-purple-500 hover:bg-purple-600 text-white font-semibold py-2 px-4 rounded-full shadow transition">
                    🎯 Belajar Harakat
                </a>
            </div>
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
            console.warn("Gagal play audio:", err);
        });
    }

    document.querySelectorAll('[data-suara]').forEach(el => {
        el.addEventListener('click', () => {
            const suara = el.getAttribute('data-suara');
            playSound(suara);
        });
    });
</script>
<?= $this->endSection() ?>