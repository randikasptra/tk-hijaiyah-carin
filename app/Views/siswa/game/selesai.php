<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="bg-white/80 backdrop-blur-md p-10 rounded-3xl shadow-xl text-center max-w-xl w-full">
        <h1 class="text-4xl font-extrabold text-purple-700 mb-6">🎉 Game Selesai!</h1>
        <p class="text-lg font-semibold text-gray-700 mb-4">Skor Akhir Kamu:</p>
        <div class="text-5xl font-bold text-green-600 mb-8"><?= $score ?>/100</div>

        <a href="<?= base_url('siswa/home') ?>" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 px-6 rounded-full shadow-md transition transform hover:scale-105">
            ⬅️ Kembali ke Dashboard
        </a>
    </div>
</div>
<?= $this->endSection() ?>