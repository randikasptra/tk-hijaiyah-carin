<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-screen bg-cover bg-center flex items-center justify-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- Tombol Kembali -->
    <a href="<?= base_url('siswa/game') ?>"
        class="absolute top-4 left-4 bg-white/80 hover:bg-white text-purple-700 font-bold py-2 px-4 rounded-full shadow-md flex items-center transition transform hover:scale-105 z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Kembali
    </a>

    <div class="bg-white/80 backdrop-blur-md p-10 rounded-3xl shadow-xl text-center max-w-xl w-full space-y-8 z-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-purple-800">Tebak Harakat Hijaiyah</h1>

        <!-- Gambar soal -->
        <img src="<?= base_url('assets/img/huruf/' . $huruf . '.png') ?>" alt="<?= $huruf ?>"
            class="w-40 h-40 mx-auto object-contain">

        <!-- Form pilihan -->
        <form action="<?= base_url('siswa/game/level-harakat') ?>" method="post" class="space-y-4">
            <input type="hidden" name="huruf" value="<?= esc($huruf) ?>">
            <input type="hidden" name="step" value="<?= $step ?>">
            <div class="grid grid-cols-3 gap-4">
                <?php foreach ($pilihan as $pil): ?>
                    <button type="submit" name="jawaban" value="<?= $pil ?>"
                        class="bg-purple-500 hover:bg-purple-600 text-white py-3 rounded-full font-bold text-xl shadow">
                        <?= strtoupper($pil) ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </form>

        <?php if ($status): ?>
            <div class="flex flex-col items-center space-y-3">
                <?php if ($status === 'benar'): ?>
                    <img src="<?= base_url('assets/img/icon-benar.png') ?>" class="w-20 h-20 animate-bounce" alt="Benar">
                    <div class="text-green-600 font-bold text-xl">Bagus!</div>
                <?php else: ?>
                    <img src="<?= base_url('assets/img/icon-salah.png') ?>" class="w-20 h-20 animate-pulse" alt="Salah">
                    <div class="text-red-600 font-bold text-xl">Coba Lagi</div>
                <?php endif; ?>

                <?php if ($step < 5): ?>
                     <a href="<?= base_url('/siswa') ?>"
                    class="inline-flex items-center bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-5 rounded-full shadow-md transition transform hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10l1.5 1.5L12 4l7.5 7.5L21 10M4 10v10a1 1 0 001 1h5m10-11v10a1 1 0 01-1 1h-5" />
                    </svg>
                    Dashboard
                </a>
                <?php else: ?>
                    <a href="<?= base_url('siswa/game/selesai') ?>"
                        class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-full shadow transition font-semibold">
                        Lihat Skor Akhir
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?php if ($status): ?>
<script>
    const sound = new Audio("<?= base_url('sound/' . ($status === 'benar' ? 'benar.mp3' : 'salah.mp3')) ?>");
    sound.play().catch(e => console.warn("Gagal play:", e));
</script>
<?php endif; ?>
<?= $this->endSection() ?>
