<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Tombol Kembali -->
<a href="<?= base_url('/siswa/game') ?>"
    class="absolute top-4 left-4 bg-white/80 hover:bg-white text-purple-700 font-bold py-2 px-4 rounded-full shadow-md flex items-center transition transform hover:scale-105 z-50
           sm:top-6 sm:left-6 sm:py-3 sm:px-5 sm:text-base">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    Kembali
</a>

<div class="min-h-screen bg-cover bg-center flex items-center justify-center px-4 sm:px-6 lg:px-8"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="bg-white/80 backdrop-blur-md p-6 sm:p-10 rounded-3xl shadow-xl text-center max-w-md sm:max-w-xl w-full space-y-8">
        <?php $totalSoal = 5; ?>
        <div class="flex items-center justify-center gap-2 bg-yellow-100 border-2 border-yellow-400 rounded-full px-3 py-1 shadow-md text-sm font-semibold text-purple-700
                    sm:text-base sm:px-5 sm:py-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.92-.755 1.688-1.538 1.118l-3.38-2.455a1 1 0 00-1.176 0l-3.38 2.455c-.783.57-1.838-.197-1.538-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.047 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.286-3.97z" />
            </svg>
            Soal <?= $index ?> / <?= $totalSoal ?>
        </div>

        <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-purple-800">Tebak Huruf Hijaiyah</h1>

        <?php
        $namaGambarMap = [
            'Alif' => 'Alif.png',
            'Ba'   => 'Ba.png',
            'Ta'   => 'Ta.png',
            'Tsa'  => 'Tsa.png',
            'Jim'  => 'Jim.png',
            'Ha'   => 'Ha.png',
            'Kha'  => 'Kha.png',
            'Dal'  => 'Dal.png',
            'Dzal' => 'Dzal.png',
            'Ro'   => 'Ro.png',
            'Zai'   => 'Zai.png',
            'Sin'  => 'Sin.png',
            'Syin' => 'Syin.png',
            'Shod' => 'Shod.png',
            'Dhod' => 'Dhod.png',
            'Tho'   => 'Tho.png',
            'Dzho'  => 'Dzho.png',
            'Ain'  => 'Ain.png',
            'Ghoin' => 'Ghoin.png',
            'Fa'   => 'Fa.png',
            'Qof'  => 'Qof.png',
            'Kaf'  => 'Kaf.png',
            'Lam'  => 'Lam.png',
            'Mim'  => 'Mim.png',
            'Nun'  => 'Nun.png',
            'Wau' => 'Wau.png',
            'Ha2'  => 'Ha2.png',
            'Hamzah'  => 'Hamzah.png',
            'Ya'   => 'Ya.png',
        ];

        $hurufDbNama = $huruf['nama'] ?? '';
        $gambarFile = $namaGambarMap[$hurufDbNama] ?? 'default.png';
        $imgSrc = base_url("assets/img/game_huruf/" . $gambarFile);
        ?>
        <img src="<?= $imgSrc ?>" alt="<?= $hurufDbNama ?>" class="w-32 h-32 sm:w-40 sm:h-40 mx-auto object-contain">

        <!-- ✅ Form Jawaban -->
        <form action="<?= base_url('siswa/game/level-huruf/' . $index) ?>" method="post" class="space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <?php foreach ($pilihan as $p): ?>
                    <button type="submit" name="jawaban" value="<?= $p ?>"
                        class="bg-gradient-to-br from-purple-500 to-fuchsia-500 hover:from-purple-600 hover:to-fuchsia-600 text-white py-3 px-5 rounded-full font-bold text-lg shadow-md transition transform hover:scale-105
                               sm:py-4 sm:px-7 sm:text-xl">
                        <?= $p ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </form>

        <!-- ✅ Feedback Benar/Salah -->
        <?php if ($status): ?>
            <div class="flex flex-col items-center space-y-3 mt-4">
                <?php if ($status === 'benar'): ?>
                    <img src="<?= base_url('assets/img/icon-benar.png') ?>" alt="Benar" class="w-20 h-20 sm:w-24 sm:h-24 animate-bounce">
                    <span class="text-green-600 font-extrabold text-xl sm:text-2xl">Hebat!</span>
                <?php else: ?>
                    <img src="<?= base_url('assets/img/icon-salah.png') ?>" alt="Salah" class="w-20 h-20 sm:w-24 sm:h-24 animate-ping">
                    <span class="text-red-500 font-extrabold text-xl sm:text-2xl">Yuk Coba Lagi!</span>
                <?php endif; ?>
            </div>

            <!-- ✅ Tombol Dashboard -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-6">
                <a href="<?= base_url('/siswa') ?>"
                    class="inline-flex items-center bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-5 rounded-full shadow-md transition transform hover:scale-105
                           sm:py-3 sm:px-6 sm:text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10l1.5 1.5L12 4l7.5 7.5L21 10M4 10v10a1 1 0 001 1h5m10-11v10a1 1 0 01-1 1h-5" />
                    </svg>
                    Dashboard
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php if (isset($status) && in_array($status, ['benar', 'salah'])): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const audio = new Audio("<?= base_url('sound/' . ($status === 'benar' ? 'benar.mp3' : 'salah.mp3')) ?>");
            audio.volume = 1;
            audio.play().catch(err => console.warn("Gagal memutar suara:", err));
        });
    </script>
<?php endif; ?>

<?= $this->endSection() ?>