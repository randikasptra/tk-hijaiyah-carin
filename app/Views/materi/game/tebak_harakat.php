<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- 🌄 Background full: bg-bukit.jpg -->
<div class="min-h-screen bg-cover bg-center flex items-center justify-center px-4 py-10"
     style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>'); background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px);">

    <!-- 🎯 CARD GAME -->
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

        <!-- 💡 Pilihan Huruf -->
        <?php $posisi = $posisi ?? [['top' => '20%', 'left' => '30%'], ['top' => '50%', 'left' => '60%'], ['top' => '70%', 'left' => '40%']]; ?>
        <?php foreach ($pilihan as $i => $huruf): ?>
            <button type="button" class="huruf-btn absolute z-20 hover:scale-110 transition-transform"
                    data-huruf="<?= $huruf ?>"
                    style="top: <?= $posisi[$i]['top'] ?>; left: <?= $posisi[$i]['left'] ?>;">
                <img src="<?= base_url('assets/img/hijaiyah_huruf/' . $huruf . '.png') ?>"
                     alt="<?= esc($huruf) ?>" class="w-16 h-16 md:w-20 md:h-20 object-contain rounded-full bg-white p-1 shadow-md hover:bg-green-100">
            </button>
        <?php endforeach; ?>

        <!-- ✅ Feedback animasi -->
        <div id="feedback" class="hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 text-center">
            <img id="feedbackImg" src="" class="w-24 h-24 mx-auto">
            <p id="feedbackText" class="font-bold text-xl mt-2"></p>
        </div>

        <!-- Hidden form -->
        <form id="jawabForm" method="post" action="<?= base_url('materi/game/level-harakat/' . ($step ?? 0)) ?>">
            <input type="hidden" name="jawaban" id="jawabanInput">
        </form>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Sound & Animasi -->
<script>
    const audio = new Audio("<?= base_url('sound/' . $soundFile) ?>");
    audio.preload = "auto";
    const replay = document.getElementById("replayBtn");

    $(document).ready(function () {
        audio.play().catch(err => console.warn("⚠ Gagal play:", err));

        $('#replayBtn').on('click', function () {
            audio.currentTime = 0;
            audio.play();
        });

        $('.huruf-btn').on('click', function () {
            const huruf = $(this).data('huruf');
            $('#jawabanInput').val(huruf);

            // Disable semua tombol
            $('.huruf-btn').prop('disabled', true);

            // Cek benar/salah
            const benar = "<?= strtolower($benar) ?>";
            const status = huruf.toLowerCase() === benar ? 'benar' : 'salah';
            const feedbackImg = status === 'benar'
                ? '<?= base_url('assets/img/icon-benar.png') ?>'
                : '<?= base_url('assets/img/icon-salah.png') ?>';
            const feedbackText = status === 'benar' ? 'Hebat!' : 'Yuk Coba Lagi!';

            $('#feedbackImg').attr('src', feedbackImg);
            $('#feedbackText').text(feedbackText);
            $('#feedback').removeClass('hidden').hide().fadeIn();

            setTimeout(() => {
                $('#jawabForm').submit();
            }, 1500);
        });
    });
</script>
<?= $this->endSection() ?>