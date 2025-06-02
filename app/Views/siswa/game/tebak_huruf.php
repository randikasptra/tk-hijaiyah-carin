<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="bg-white/80 backdrop-blur-md p-10 rounded-3xl shadow-xl text-center max-w-xl w-full space-y-8">
        <h1 class="text-3xl font-bold text-purple-800">Tebak Huruf Hijaiyah</h1>

        <!-- Gambar Huruf -->
        <img src="<?= base_url('assets/img/huruf/ba.png') ?>" alt="Soal Huruf" class="w-40 h-40 mx-auto object-contain">

        <form action="<?= base_url('siswa/game/cek') ?>" method="post" class="space-y-4">
            <!-- Pilihan Jawaban -->
            <div class="grid grid-cols-3 gap-4">
                <?php foreach (['Ba', 'Ta', 'Tsa'] as $pilihan): ?>
                    <button type="submit" name="jawaban" value="<?= $pilihan ?>" class="bg-purple-500 hover:bg-purple-600 text-white py-3 rounded-full font-bold text-xl shadow">
                        <?= $pilihan ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </form>

        <a href="<?= base_url('/siswa') ?>" class="text-sm text-gray-600 hover:underline block mt-4">Kembali ke Dashboard</a>
    </div>
</div>
<?= $this->endSection() ?>
