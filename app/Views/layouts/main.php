<!-- app/Views/layouts/main.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Belajar Hijaiyah' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .volume-slider {
            width: 100px;
        }
    </style>
</head>

<body class="relative bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- 🎵 Backsound -->
    <audio id="backsound" autoplay loop>
        <source src="<?= base_url('sound/' . ($backsound ?? 'Backsoundd.mp3')) ?>" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>


    <!-- 🔊 Kontrol Volume -->
    <div class="fixed bottom-4 left-4 bg-white/70 p-3 rounded-xl shadow-xl flex items-center gap-3 z-50">
        <button id="toggleSound" class="text-xl">🔊</button>
        <input type="range" id="volumeControl" class="volume-slider" min="0" max="1" step="0.01" value="0.5">
    </div>

    <!-- 🧩 Konten Dinamis -->
    <main class="z-10">
        <?= $this->renderSection('content') ?>
    </main>

    <script>
        const audio = document.getElementById("backsound");
        const toggleSound = document.getElementById("toggleSound");
        const volumeSlider = document.getElementById("volumeControl");

        audio.volume = volumeSlider.value;

        toggleSound.addEventListener("click", () => {
            if (audio.muted) {
                audio.muted = false;
                toggleSound.textContent = "🔊";
            } else {
                audio.muted = true;
                toggleSound.textContent = "🔇";
            }
        });

        volumeSlider.addEventListener("input", (e) => {
            audio.volume = e.target.value;
        });
    </script>

    <!-- 🧠 Script Tambahan dari Halaman -->
    <?= $this->renderSection('script') ?>

</body>

</html>