<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="relative min-h-screen bg-cover bg-center flex items-center justify-center px-4 py-10"
    style="background-image: url('<?= base_url('assets/img/game-1.png') ?>');">

    <!-- 🔊 Instruksi -->
    <div class="absolute top-6 left-1/2 transform -translate-x-1/2 bg-white/80 backdrop-blur-md px-6 py-3 rounded-full shadow-md text-center z-40">
        <p class="text-lg font-bold text-purple-800">🎧 Di mana huruf <span id="targetHuruf" class="underline"><?= esc($benar) ?></span>?</p>
    </div>

    <!-- 👦 Gambar Anak -->
    <div class="absolute left-4 bottom-4 z-30">
        <img src="<?= base_url('assets/img/karakter-anak.jpg') ?>" alt="Karakter Anak" class="w-32 md:w-40 lg:w-52">
    </div>

    <!-- 📦 Container Pilihan Huruf -->
    <div class="relative bg-white/70 backdrop-blur-md rounded-3xl shadow-lg max-w-4xl w-full h-[500px] p-4 overflow-hidden">
        <?php
        $pilihan = $pilihan ?? ['Ain', 'Lam', 'Tho'];
        $benar = $benar ?? 'Ain';
        $posisi = [
            ['top' => '15%', 'left' => '25%'],
            ['top' => '40%', 'left' => '65%'],
            ['top' => '70%', 'left' => '40%'],
        ];
        ?>

        <?php foreach ($pilihan as $i => $huruf): ?>
            <form method="post" action="<?= base_url('siswa/game/tebak_harakat/') ?>">
                <input type="hidden" name="jawaban" value="<?= esc($huruf) ?>">
                <button type="submit" class="absolute hover:scale-110 transition-transform"
                    style="top: <?= $posisi[$i]['top'] ?>; left: <?= $posisi[$i]['left'] ?>;">
                    <img src="<?= base_url('assets/img/hijaiyah_huruf/' . $huruf . '.png') ?>"
                        alt="<?= esc($huruf) ?>" class="w-16 h-16 md:w-20 md:h-20 object-contain drop-shadow-xl rounded-full bg-white/80 p-1 hover:bg-green-100">
                </button>
            </form>
        <?php endforeach; ?>
    </div>
</div>

<!-- 🔊 Audio Instruksi -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const audio = new Audio("<?= base_url('sound/perintah_' . strtolower($benar) . '.mp3') ?>");
        audio.play().catch(err => console.warn("Gagal play audio instruksi:", err));
    });
</script>

<?= $this->endSection() ?>