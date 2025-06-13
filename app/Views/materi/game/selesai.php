<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="min-h-screen flex items-center justify-center bg-cover bg-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="bg-white/80 backdrop-blur-md p-10 rounded-3xl shadow-xl text-center max-w-xl w-full">
        <h1 class="text-4xl font-extrabold text-purple-700 mb-6">🎉 Game Selesai!</h1>
        <p class="text-lg font-semibold text-gray-700 mb-4">Skor Akhir Kamu:</p>
        <h1 class="mb-6 text-3xl font-bold text-center text-purple-800"> <?= esc($score) ?> / 100</h1>

        <a href="<?= base_url('materi/home') ?>"
            class=" mt-6 bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 px-6 rounded-full shadow-md transition transform hover:scale-105">
            ⬅️ Kembali ke Dashboard
        </a>
    </div>
</div>
<?= $this->endSection() ?>