<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-screen bg-cover bg-center flex items-center justify-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- Tombol Kembali Pojok Kiri -->
    <a href="<?= base_url('siswa/game') ?>"
        class="absolute top-4 left-4 bg-white/80 hover:bg-white text-purple-700 font-bold py-2 px-4 rounded-full shadow-md flex items-center transition transform hover:scale-105 z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Kembali
    </a>

    <div class="bg-white/80 backdrop-blur-md p-10 rounded-3xl shadow-xl text-center max-w-xl w-full space-y-8 z-10">
        <h1 class="text-3xl font-bold text-purple-800">Tebak Harakat Hijaiyah</h1>

        <!-- Gambar soal -->
        <img src="<?= base_url('assets/img/huruf/' . $huruf . '.png') ?>" alt="<?= $huruf ?>"
            class="w-40 h-40 mx-auto object-contain">

        <!-- Form pilihan -->
        <form action="<?= base_url('siswa/game/level-harakat') ?>" method="post" class="space-y-4">
            <input type="hidden" name="huruf" value="<?= esc($huruf) ?>">
            <div class="grid grid-cols-3 gap-4">
                <?php foreach ($pilihan as $pil): ?>
                    <button type="submit" name="jawaban" value="<?= $pil ?>"
                        class="bg-purple-500 hover:bg-purple-600 text-white py-3 rounded-full font-bold text-xl shadow">
                        <?= strtoupper($pil) ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </form>

        <!-- Hasil -->
        <?php if ($jawaban): ?>
            <div class="text-lg mt-4 font-semibold <?= $status === 'benar' ? 'text-green-600' : 'text-red-600' ?>">
                <?= $status === 'benar' ? '✅ Jawaban Benar!' : '❌ Jawaban Salah!' ?>
            </div>

            <div class="flex justify-center mt-6 gap-4">
                <a href="<?= base_url('siswa/game/level-harakat/' . $huruf) ?>"
                    class="bg-yellow-400 hover:bg-yellow-500 text-black py-2 px-5 rounded-full shadow-md font-semibold transition">
                    🔁 Coba Lagi
                </a>
                <a href="<?= base_url('siswa/game') ?>"
                    class="bg-pink-400 hover:bg-pink-500 text-white py-2 px-5 rounded-full shadow-md font-semibold transition">
                    🏠 Dashboard
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>