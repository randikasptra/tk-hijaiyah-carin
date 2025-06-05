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

        .logout-btn {
            font-size: 0.95rem;
            cursor: pointer;
        }

        .logout-icon {
            width: 1.25rem;
            height: 1.25rem;
            stroke: currentColor;
            transition: transform 0.3s ease;
        }

        .logout-btn:hover .logout-icon {
            transform: translateX(4px);
        }
    </style>

</head>

<body class="relative bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- 🎵 Backsound Utama -->
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

    <!-- 🔓 Tombol Logout -->
    <div class="fixed top-4 right-4 z-50">
        <a href="<?= base_url('logout') ?>" class="logout-btn flex items-center gap-2 px-4 py-2 rounded-xl shadow-md bg-white/80 text-gray-800 font-semibold transition duration-300 hover:bg-white hover:text-purple-700 hover:shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="logout-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
            </svg>
            Logout
        </a>
    </div>




    <!-- 🔧 Script Backsound & Volume -->
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

    <!-- 🧠 Script Tambahan dari Halaman -->
    <?= $this->renderSection('script') ?>

    // main.php

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