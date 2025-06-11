<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div id="game-container"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const soal = <?= json_encode($soal) ?>;
    let step = 0;
    let score = 0;

    function renderSoal(index) {
        if (index >= soal.length) {
            window.location.href = "<?= base_url('materi/game/selesai') ?>";
            return;
        }

        const data = soal[index];
        const opsi = data.opsi;
        const posisi = [
            { top: "20%", left: "25%" },
            { top: "50%", left: "60%" },
            { top: "75%", left: "35%" }
        ];
        const posAcak = posisi.sort(() => 0.5 - Math.random());

        let html = `
    <div class="min-h-screen bg-cover bg-center flex items-center justify-center px-4 py-10"
         style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <div class="relative w-full max-w-4xl h-[500px] rounded-3xl shadow-xl overflow-hidden bg-cover bg-center border border-purple-300"
             style="background-image: url('<?= base_url('assets/img/') ?>${data.bg}');">

            <div class="absolute top-6 left-1/2 transform -translate-x-1/2 z-20 flex items-center gap-3">
                <div class="bg-white px-6 py-3 rounded-full shadow text-center">
                    <p class="text-lg font-bold text-purple-800">
                        🎧 Di mana huruf <span class="underline">${data.huruf}</span>?
                    </p>
                </div>
                <button id="replayBtn" class="bg-purple-200 text-purple-800 p-2 rounded-full shadow-md">
                    🔁
                </button>
            </div>

            <div class="absolute left-4 bottom-4 z-20">
                <img src="<?= base_url('assets/img/cartoon-2.png') ?>" class="w-28 md:w-36 lg:w-44">
            </div>

            ${opsi.map((huruf, i) => `
                <button class="huruf-btn absolute z-20"
                        style="top: ${posAcak[i].top}; left: ${posAcak[i].left};"
                        data-jawaban="${huruf}">
                    <img src="<?= base_url('assets/img/hijaiyah_huruf/') ?>${huruf}.png"
                         class="w-16 h-16 md:w-20 md:h-20 bg-white p-1 rounded-full shadow">
                </button>
            `).join('')}

            <div id="feedback" class="hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 text-center">
                <img id="feedbackImg" src="" class="w-24 h-24 mx-auto">
                <p id="feedbackText" class="font-bold text-xl mt-2"></p>
            </div>
        </div>
    </div>
    `;

        $('#game-container').html(html);

        // Audio
        const audio = new Audio("<?= base_url('sound/') ?>" + data.sound);
        audio.play().catch(() => { });
        $('#replayBtn').on('click', () => { audio.currentTime = 0; audio.play(); });

        $('.huruf-btn').on('click', function () {
            const dipilih = $(this).data('jawaban');
            const benar = data.huruf;
            const benarGak = dipilih === benar;

            const img = benarGak
                ? '<?= base_url('assets/img/icon-benar.png') ?>'
                : '<?= base_url('assets/img/icon-salah.png') ?>';
            const teks = benarGak ? 'Hebat!' : 'Yuk Coba Lagi!';

            $('#feedbackImg').attr('src', img);
            $('#feedbackText').text(teks);
            $('#feedback').removeClass('hidden').hide().fadeIn();

            if (benarGak) score += 20;

            setTimeout(() => {
                step++;
                renderSoal(step);
            }, 1500);
        });
    }

    // Start
    $(document).ready(() => {
        renderSoal(0);
    });
</script>
<?= $this->endSection() ?>