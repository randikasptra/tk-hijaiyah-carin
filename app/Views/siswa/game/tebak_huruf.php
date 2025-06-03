<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


<a href="<?= base_url('/siswa/game') ?>"
    class="absolute top-4 left-4 bg-white/80 hover:bg-white text-purple-700 font-bold py-2 px-4 rounded-full shadow-md flex items-center transition transform hover:scale-105 z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    Kembali
</a>
<div class="min-h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="bg-white/80 backdrop-blur-md p-10 rounded-3xl shadow-xl text-center max-w-xl w-full space-y-8">
        <h1 class="text-3xl md:text-4xl font-extrabold text-purple-800">Tebak Huruf Hijaiyah</h1>

        <!-- Gambar Huruf -->
        <img src="<?= base_url($huruf['gambar']) ?>" alt="Soal Huruf" class="w-40 h-40 mx-auto object-contain">

        <form action="<?= base_url('siswa/game/level-huruf/' . $index) ?>" method="post" class="space-y-6">
            <!-- Pilihan Jawaban -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <?php foreach ($pilihan as $p): ?>
                    <button type="submit" name="jawaban" value="<?= $p ?>"
                        class="bg-gradient-to-br from-purple-500 to-fuchsia-500 hover:from-purple-600 hover:to-fuchsia-600 text-white py-3 px-5 rounded-full font-bold text-lg shadow-md transition transform hover:scale-105">
                        <?= $p ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </form>

        <?php if ($status): ?>
            <?php if (isset($status) && in_array($status, ['benar', 'salah'])): ?>
                <div class="flex flex-col items-center space-y-3 mt-4">
                    <?php if ($status === 'benar'): ?>
                        <img src="<?= base_url('assets/img/icon-benar.png') ?>" alt="Benar" class="w-24 h-24 animate-bounce">
                        <span class="text-green-600 font-extrabold text-2xl">Hebat!</span>
                    <?php else: ?>
                        <img src="<?= base_url('assets/img/icon-salah.png') ?>" alt="Salah" class="w-24 h-24 animate-ping">
                        <span class="text-red-500 font-extrabold text-2xl">Yuk Coba Lagi!</span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>




            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-6">
                <!-- Tombol Dashboard -->
                <a href="<?= base_url('/siswa') ?>"
                    class="inline-flex items-center bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-5 rounded-full shadow-md transition transform hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10l1.5 1.5L12 4l7.5 7.5L21 10M4 10v10a1 1 0 001 1h5m10-11v10a1 1 0 01-1 1h-5" />
                    </svg>
                    Dashboard
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    <?php if (isset($status) && in_array($status, ['benar', 'salah'])): ?>
        document.addEventListener("DOMContentLoaded", function () {
            const soundFile = "<?= base_url('sound/' . ($status === 'benar' ? 'benar.mp3' : 'salah.mp3')) ?>";
            const sound = new Audio(soundFile);
            sound.volume = 1;
            sound.play().catch(err => console.warn("Gagal memutar suara:", err));
        });
    <?php endif; ?>
</script>



<?= $this->endSection() ?>