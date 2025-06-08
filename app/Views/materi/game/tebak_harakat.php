<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- 🌄 Background full: bg-bukit.jpg --><div class="min-h-screen bg-cover bg-center flex items-center justify-center px-4 py-10"
     style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>'); background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px);">
    <!-- 🎯 CARD GAME: dengan background game-1.png -->
<div class="relative w-full max-w-4xl h-[500px] rounded-3xl shadow-xl overflow-hidden bg-cover bg-center border border-purple-300"
     style="background-image: url('<?= base_url('assets/img/' . $bgImage) ?>');">

        <!-- 🔊 Instruksi -->
        <div class="absolute top-6 left-1/2 transform -translate-x-1/2 z-20 flex items-center gap-3">
            <div class="bg-white px-6 py-3 rounded-full shadow text-center">
                <p class="text-lg font-bold text-purple-800">
                    🎧 Di mana huruf <span id="targetHuruf" class="underline"><?= esc($benar ?? '...') ?></span>?
                </p>
            </div>
            <button id="replayBtn" class="bg-purple-200 hover:bg-purple-300 text-purple-800 p-2 rounded-full shadow-md transition" title="Putar Ulang">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5l-7 7 7 7M20 5l-7 7 7 7" />
                </svg>
            </button>
        </div>

        <!-- 👦 Gambar Anak -->
        <div class="absolute left-4 bottom-4 z-20">
            <img src="<?= base_url('assets/img/cartoon-2.png') ?>" alt="Karakter Anak" class="w-28 md:w-36 lg:w-44">
        </div>

        <!-- 💡 Pilihan Huruf Hijaiyah -->
        <?php
        $pilihan = $pilihan ?? ['Ain', 'Lam', 'Tho'];
        $benar = $benar ?? 'Ain';
        $posisi = [
    ['top' => '10%', 'left' => '20%'],
    ['top' => '30%', 'left' => '60%'],
    ['top' => '70%', 'left' => '50%'],
    ['top' => '50%', 'left' => '30%'],
    ['top' => '20%', 'left' => '70%'],
];
shuffle($posisi);
$posisi = array_slice($posisi, 0, 3); // ambil 3 posisi acak

        
        ?>

        <?php foreach ($pilihan as $i => $huruf): ?>
            <form method="post" action="<?= base_url('materi/game/level-harakat/' . ($step ?? 0)) ?>">
                <input type="hidden" name="jawaban" value="<?= esc($huruf) ?>">
                <button type="submit" class="absolute z-20 hover:scale-110 transition-transform"
                    style="top: <?= $posisi[$i]['top'] ?>; left: <?= $posisi[$i]['left'] ?>;">
                    <img src="<?= base_url('assets/img/hijaiyah_huruf/' . $huruf . '.png') ?>"
                        alt="<?= esc($huruf) ?>" class="w-16 h-16 md:w-20 md:h-20 object-contain rounded-full bg-white p-1 shadow-md hover:bg-green-100">
                </button>
            </form>
        <?php endforeach; ?>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const audio = new Audio("<?= base_url('sound/' . $soundFile) ?>");

        // Event saat gagal load
        audio.onerror = function () {
            console.warn("❌ Gagal memuat audio:", audio.src);
        };

        // Mainkan audio
        audio.play().catch(err => {
            console.warn("⚠️ Gagal memutar audio:", err);
        });

        // Tombol ulang
        const replay = document.getElementById("replayBtn");
        if (replay) {
            replay.addEventListener("click", () => {
                audio.currentTime = 0;
                audio.play();
            });
        }
    });
</script>


<?= $this->endSection() ?>