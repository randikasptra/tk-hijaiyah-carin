<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Belajar Hijaiyah' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Heroicons CDN -->
    <script src="https://unpkg.com/@heroicons/react@2.0.16/dist/index.umd.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .volume-slider {
            width: 100px;
            -webkit-appearance: none;
            height: 6px;
            border-radius: 3px;
            background: #d1d5db;
            outline: none;
            transition: all 0.3s ease;
        }

        .volume-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #7c3aed;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .volume-slider::-webkit-slider-thumb:hover {
            transform: scale(1.2);
            background: #6d28d9;
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
            flex-direction: column;
            transition: opacity 0.5s ease;
        }

        #loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            width: 60px;
            height: 60px;
            border: 6px solid rgba(124, 58, 237, 0.1);
            border-top: 6px solid #7c3aed;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 1rem;
        }

        .loader-text {
            color: #7c3aed;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 1rem;
            text-align: center;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Floating animation */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Pulse animation */
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.8;
            }
        }

        /* Background overlay */
        .bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.1) 0%, rgba(79, 70, 229, 0.1) 100%);
            z-index: 0;
        }
    </style>
</head>

<body class="relative min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- Background overlay -->
    <div class="bg-overlay"></div>

    <!-- 🔄 Smart Loader -->
    <div id="loader">
        <div class="spinner"></div>
        <div class="loader-text">Memuat Aplikasi...</div>
    </div>

    <!-- 🎵 Backsound Utama -->
    <audio id="backsound" autoplay loop>
        <source src="<?= base_url('sound/' . ($backsound ?? 'Backsoundd.mp3')) ?>" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- ⬅️ Tombol Kembali -->
    <div class="fixed top-4 left-4 z-50">
        <a href="<?= base_url('materi/dashboard') ?>"
            class="flex items-center gap-2 px-4 py-2 rounded-full shadow-lg bg-white/90 backdrop-blur-sm text-purple-700 font-semibold transition-all hover:bg-white hover:text-purple-800 hover:scale-105 hover:shadow-xl active:scale-95"
            style="animation: float 3s ease-in-out infinite">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            <span>Kembali</span>
        </a>
    </div>

    <!-- 🔊 Kontrol Volume -->
    <div class="fixed bottom-4 left-4 bg-white/80 backdrop-blur-sm p-3 rounded-xl shadow-lg flex items-center gap-3 z-50 transition-all hover:shadow-xl">
        <button id="toggleSound" class="text-purple-700 transition-transform hover:scale-110 active:scale-95">
            <svg id="volumeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" clip-rule="evenodd" />
            </svg>
        </button>
        <input type="range" id="volumeControl" class="volume-slider" min="0" max="1" step="0.01">
    </div>

    <!-- 🧩 Konten Dinamis -->
    <main class="relative z-10 min-h-screen">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- 🧠 Script Volume -->
    <script>
        const backsound = document.getElementById("backsound");
        const toggleSound = document.getElementById("toggleSound");
        const volumeSlider = document.getElementById("volumeControl");
        const volumeIcon = document.getElementById("volumeIcon");

        const savedVolume = localStorage.getItem("volumeLevel") || 0.5;
        const isMuted = localStorage.getItem("isMuted") === "true";

        backsound.volume = savedVolume;
        volumeSlider.value = savedVolume;
        backsound.muted = isMuted;
        
        // Set initial icon
        updateVolumeIcon();

        window.addEventListener("DOMContentLoaded", () => {
            if (!sessionStorage.getItem("audioPlayed")) {
                const playPromise = backsound.play();
                
                if (playPromise !== undefined) {
                    playPromise.catch(error => {
                        // Auto-play was prevented, show a mute button
                        backsound.muted = true;
                        localStorage.setItem("isMuted", true);
                        updateVolumeIcon();
                    });
                }
                sessionStorage.setItem("audioPlayed", "true");
            }
        });

        toggleSound.addEventListener("click", () => {
            backsound.muted = !backsound.muted;
            localStorage.setItem("isMuted", backsound.muted);
            updateVolumeIcon();
            
            // Add animation effect
            toggleSound.classList.add("animate-pulse");
            setTimeout(() => {
                toggleSound.classList.remove("animate-pulse");
            }, 300);
        });

        volumeSlider.addEventListener("input", (e) => {
            backsound.volume = e.target.value;
            localStorage.setItem("volumeLevel", e.target.value);
            updateVolumeIcon();
        });

        function updateVolumeIcon() {
            if (backsound.muted) {
                volumeIcon.innerHTML = '<path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" clip-rule="evenodd" />';
            } else if (backsound.volume === 0) {
                volumeIcon.innerHTML = '<path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217z" clip-rule="evenodd" />';
            } else if (backsound.volume < 0.5) {
                volumeIcon.innerHTML = '<path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" clip-rule="evenodd" />';
            } else {
                volumeIcon.innerHTML = '<path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" clip-rule="evenodd" />';
            }
        }
    </script>

    <!-- 🎉 Loader Disappear -->
    <script>
        window.addEventListener("load", () => {
            const loader = document.getElementById("loader");
            setTimeout(() => {
                loader.classList.add("hidden");
            }, 500); // Add slight delay for smoother transition
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

    <script>
        function attachPlaySoundListeners() {
            let currentAudio = null;
            document.querySelectorAll('[data-suara]').forEach(el => {
                el.addEventListener('click', () => {
                    const suara = el.getAttribute('data-suara');
                    if (!suara) return;

                    if (currentAudio) {
                        currentAudio.pause();
                        currentAudio.currentTime = 0;
                    }

                    currentAudio = new Audio(suara);
                    currentAudio.play().catch(err => {
                        console.warn("Gagal play audio:", err);
                    });

                    // Add visual feedback
                    el.classList.add('active:scale-95', 'transition-transform');
                    setTimeout(() => {
                        el.classList.remove('active:scale-95');
                    }, 200);
                });
            });
        }

        // Re-attach event listener setiap konten baru dimuat via SPA
        $(document).on('click', '.spa-link', function (e) {
            e.preventDefault();
            const url = $(this).attr('href');
            $('#spa-container').html('<div class="flex justify-center items-center h-64"><div class="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-purple-500"></div></div>');

            $.get(url, function (data) {
                $('#spa-container').html(data);
                attachPlaySoundListeners();
            }).fail(function () {
                $('#spa-container').html('<div class="text-center py-10"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><p class="text-red-500 font-bold mt-2">Gagal memuat halaman</p></div>');
            });
        });

        // Saat pertama kali halaman SPA diload
        $(document).ready(function () {
            attachPlaySoundListeners();
        });
    </script>
</body>

</html>