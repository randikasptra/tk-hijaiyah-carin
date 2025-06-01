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
        <input type="range" id="volumeControl" class="volume-slider" min="0" max="1" step="0.01">
    </div>

    <!-- 🧩 Konten Dinamis -->
    <main class="z-10">
        <?= $this->renderSection('content') ?>
    </main>

    <script>
        const audio = document.getElementById("backsound");
        const toggleSound = document.getElementById("toggleSound");
        const volumeSlider = document.getElementById("volumeControl");

        // Ambil volume & mute dari localStorage
        const savedVolume = localStorage.getItem("volumeLevel") || 0.5;
        const isMuted = localStorage.getItem("isMuted") === "true";

        audio.volume = savedVolume;
        volumeSlider.value = savedVolume;
        audio.muted = isMuted;
        toggleSound.textContent = isMuted ? "🔇" : "🔊";

        // Cegah ulang backsound
        window.addEventListener("DOMContentLoaded", () => {
            if (!sessionStorage.getItem("audioPlayed")) {
                audio.play();
                sessionStorage.setItem("audioPlayed", "true");
            }
        });

        toggleSound.addEventListener("click", () => {
            audio.muted = !audio.muted;
            toggleSound.textContent = audio.muted ? "🔇" : "🔊";
            localStorage.setItem("isMuted", audio.muted);
        });

        volumeSlider.addEventListener("input", (e) => {
            audio.volume = e.target.value;
            localStorage.setItem("volumeLevel", e.target.value);
        });
    </script>

    <!-- 🧠 Script Tambahan dari Halaman -->
    <?= $this->renderSection('script') ?>

</body>

</html>