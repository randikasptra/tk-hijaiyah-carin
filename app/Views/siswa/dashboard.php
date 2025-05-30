<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar Hijaiyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <style>
        #volumeControl::-webkit-slider-thumb {
            background-color: #7c3aed;
        }

        #volumeControl {
            accent-color: #7c3aed;
        }

        .volume-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 50;
        }
    </style>
</head>

<body class="relative">
    <!-- BACKSOUND AUDIO -->
    <audio id="bgMusic" autoplay loop>
        <source src="<?= base_url('assets/suara/Backsoundd.mp3') ?>" type="audio/mpeg" />
        Browser kamu tidak mendukung audio.
    </audio>

    <!-- VOLUME CONTROLS -->
    <div class="volume-container flex items-center gap-3 bg-white/70 backdrop-blur-md shadow-md rounded-full px-4 py-2">
        <!-- Mute / Unmute -->
        <button id="toggleSound" class="text-purple-700 hover:text-purple-900 transition">
            <svg id="icon-sound-on" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5L6 9H2v6h4l5 4V5z" />
            </svg>
            <svg id="icon-sound-off" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5v14l-5-5H2V9h2l5-5zm9.53 3.53L15.5 12l3.03 3.47M19 12h.01M20.24 4.76a9.77 9.77 0 010 14.48" />
            </svg>
        </button>

        <!-- Volume slider -->
        <input id="volumeControl" type="range" min="0" max="1" step="0.01" value="0.5"
            class="w-28 h-2 bg-gray-200 rounded-lg cursor-pointer" />
    </div>

    <!-- MAIN PAGE CONTENT -->
    <div class="w-full h-[100dvh] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <div class="items-center justify-center text-center">
            <div class="w-full max-w-lg">
                <img src="<?= base_url('assets/img/image-dashboard.png') ?>" alt="Ilustrasi Dashboard"
                    class="w-full h-auto object-contain">
            </div>
            <div class="flex flex-col items-center justify-center text-center px-4 gap-6">
                <div class="bg-white/80 backdrop-blur-md px-20 py-6 rounded-3xl shadow-md">
                    <h1 class="text-3xl md:text-5xl font-bold text-[#2d2f6f]">belajar hijaiyah</h1>
                </div>
                <a href="<?= base_url('siswa/home') ?>"
                    class="bg-[#f3e9f5] text-[#2d2f6f] text-2xl font-bold px-14 py-4 rounded-2xl border-2 border-[#2d2f6f] hover:bg-[#e0d6ec] transition-all">
                    Mulai
                </a>
            </div>
        </div>
    </div>

    <script>
        const audio = document.getElementById("bgMusic");
        const toggleBtn = document.getElementById("toggleSound");
        const iconOn = document.getElementById("icon-sound-on");
        const iconOff = document.getElementById("icon-sound-off");
        const volumeSlider = document.getElementById("volumeControl");

        audio.volume = 0.5;

        toggleBtn.addEventListener("click", () => {
            if (audio.muted) {
                audio.muted = false;
                iconOn.classList.remove("hidden");
                iconOff.classList.add("hidden");
            } else {
                audio.muted = true;
                iconOn.classList.add("hidden");
                iconOff.classList.remove("hidden");
            }
        });

        volumeSlider.addEventListener("input", (e) => {
            audio.volume = e.target.value;
            if (audio.volume === 0) {
                audio.muted = true;
                iconOn.classList.add("hidden");
                iconOff.classList.remove("hidden");
            } else {
                audio.muted = false;
                iconOn.classList.remove("hidden");
                iconOff.classList.add("hidden");
            }
        });

        // Inisialisasi icon
        window.addEventListener("DOMContentLoaded", () => {
            if (audio.muted || audio.volume === 0) {
                iconOn.classList.add("hidden");
                iconOff.classList.remove("hidden");
            } else {
                iconOn.classList.remove("hidden");
                iconOff.classList.add("hidden");
            }
        });
    </script>
</body>

</html>