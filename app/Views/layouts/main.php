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

        /* 🔄 Smart Loader */
        #loader {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease;
        }

        #loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            width: 60px;
            height: 60px;
            border: 6px solid #f3f3f3;
            border-top: 6px solid #f472b6; /* pink-400 */
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="relative bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- 🔄 Smart Loader -->
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <!-- 🎵 Backsound Utama -->
    <audio id="backsound" autoplay loop>
        <source src="<?= base_url('sound/' . ($backsound ?? 'Backsoundd.mp3')) ?>" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- ⬅️ Tombol Kembali -->
    <div class="fixed top-4 left-4 z-50">
        <a href="<?= base_url('materi/dashboard') ?>"
           class="flex items-center gap-2 px-4 py-2 rounded-full shadow-md bg-pink-200 text-pink-800 font-semibold transition hover:bg-pink-300 hover:scale-105 hover:shadow-lg">
            🏠 Kembali
        </a>
    </div>

    <!-- 🔊 Kontrol Volume -->
    <div class="fixed bottom-4 left-4 bg-white/70 p-3 rounded-xl shadow-xl flex items-center gap-3 z-50">
        <button id="toggleSound" class="text-xl">🔊</button>
        <input type="range" id="volumeControl" class="volume-slider" min="0" max="1" step="0.01">
    </div>

    <!-- 🧩 Konten Dinamis -->
    <main class="z-10">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- 🧠 Script Volume -->
    <script>
        const backsound = document.getElementById("backsound");
        const toggleSound = document.getElementById("toggleSound");
        const volumeSlider = document.getElementById("volumeControl");

        const savedVolume = localStorage.getItem("volumeLevel") || 0.5;
        const isMuted = localStorage.getItem("isMuted") === "true";

        backsound.volume = savedVolume;
        volumeSlider.value = savedVolume;
        backsound.muted = isMuted;
        toggleSound.textContent = isMuted ? "🔇" : "🔊";

        window.addEventListener("DOMContentLoaded", () => {
            if (!sessionStorage.getItem("audioPlayed")) {
                backsound.play().catch(() => {});
                sessionStorage.setItem("audioPlayed", "true");
            }
        });

        toggleSound.addEventListener("click", () => {
            backsound.muted = !backsound.muted;
            toggleSound.textContent = backsound.muted ? "🔇" : "🔊";
            localStorage.setItem("isMuted", backsound.muted);
        });

        volumeSlider.addEventListener("input", (e) => {
            backsound.volume = e.target.value;
            localStorage.setItem("volumeLevel", e.target.value);
        });
    </script>

    <!-- 🎉 Loader Disappear -->
    <script>
        window.addEventListener("load", () => {
            const loader = document.getElementById("loader");
            loader.classList.add("hidden");
        });
    </script>

    <!-- 🧠 Script Halaman -->
    <?= $this->renderSection('script') ?>

    <!-- 👋 Welcome Sound -->
    <script>
        const path = window.location.pathname;
        let welcomeFile = "";
        let sessionKey = "";

        if (path.includes('/siswa/mengenal')) {
            welcomeFile = "MENGENAL.mp3";
            sessionKey = "welcome_played_mengenal";
        } else if (path.includes('/siswa/menghafal')) {
            welcomeFile = "MK_HIJAIYAH.mp3";
            sessionKey = "welcome_played_hafal";
        }

        if (welcomeFile && sessionKey) {
            const welcome = new Audio("<?= base_url('sound/') ?>" + welcomeFile);
            welcome.volume = 1;

            window.addEventListener("DOMContentLoaded", () => {
                if (!sessionStorage.getItem(sessionKey)) {
                    welcome.play().then(() => {
                        sessionStorage.setItem(sessionKey, "true");
                    }).catch(() => {
                        window.addEventListener("click", () => {
                            welcome.play();
                            sessionStorage.setItem(sessionKey, "true");
                        }, {
                            once: true
                        });
                    });
                }
            });
        }
    </script>
</body>

</html>
