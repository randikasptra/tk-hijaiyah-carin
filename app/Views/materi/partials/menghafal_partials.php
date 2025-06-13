<!-- app/Views/materi/partials/menghafal_partials.php -->
<div class="relative w-full h-screen overflow-hidden bg-cover bg-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>';">

    <!-- Animasi Balon Hijaiyah -->
    <div class="hijaiyah-balloon" style="left:10%; animation-delay:0s"></div>
    <div class="hijaiyah-balloon" style="left:20%; animation-delay:2s"></div>
    <div class="hijaiyah-balloon" style="left:30%; animation-delay:4s"></div>
    <div class="hijaiyah-balloon" style="left:70%; animation-delay:1s"></div>
    <div class="hijaiyah-balloon" style="left:80%; animation-delay:3s"></div>
    <div class="hijaiyah-balloon" style="left:90%; animation-delay:5s"></div>

    <!-- Animasi Bintang Berkedip -->
    <div class="twinkle-star" style="top:15%; left:15%"></div>
    <div class="twinkle-star" style="top:25%; left:75%"></div>
    <div class="twinkle-star" style="top:40%; left:30%"></div>
    <div class="twinkle-star" style="top:60%; left:60%"></div>

    <!-- Gelembung -->
    <div class="bubble left-[20%] w-[12px] h-[12px]"></div>
    <div class="bubble left-[50%] w-[20px] h-[20px]"></div>
    <div class="bubble left-[70%] w-[15px] h-[15px]"></div>

    <!-- Ornamen -->
    <img src="<?= base_url('assets/img/gambar-pinggir.png') ?>" alt="Kiri"
        class="absolute left-0 top-0 bottom-0 h-full object-contain z-0" style="max-width: 120px;">
    <img src="<?= base_url('assets/img/gambar-pinggir.png') ?>" alt="Kanan"
        class="absolute right-0 top-0 bottom-0 h-full object-contain z-0 scale-x-[-1]" style="max-width: 120px;">

    <!-- Konten -->
    <div class="min-h-screen flex items-center justify-center px-6 py-10 relative z-10">
        <div class="bg-white/40 backdrop-blur-md rounded-3xl shadow-xl p-10 w-full max-w-5xl z-10 mx-auto hover:shadow-2xl transition-all duration-500">
            <h1 class="text-center text-4xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 mb-12 animate-pulse-slow">
                Harakat Huruf Hijaiyah
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Fathah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 cursor-pointer hover:scale-105 transition-transform duration-300 hover:shadow-xl hover:bg-yellow-300"
                    data-suara="<?= base_url('assets/suara/Fathah.mp3') ?>">
                    <img src="<?= base_url('assets/img/fathah.png') ?>" alt="Fathah"
                        class="mx-auto w-24 h-24 mb-4 object-contain hover:rotate-6 transition-transform">
                    <h2 class="text-2xl font-bold text-black">Fathah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-red-600 animate-bounce inline-block">"a"</span></p>
                </div>

                <!-- Kasrah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 cursor-pointer hover:scale-105 transition-transform duration-300 hover:shadow-xl hover:bg-yellow-300"
                    data-suara="<?= base_url('assets/suara/Kasrah.mp3') ?>">
                    <img src="<?= base_url('assets/img/kasrah.png') ?>" alt="Kasrah"
                        class="mx-auto w-24 h-24 mb-4 object-contain hover:-rotate-6 transition-transform">
                    <h2 class="text-2xl font-bold text-black">Kasrah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-blue-600 animate-bounce inline-block">"i"</span></p>
                </div>

                <!-- Dhammah -->
                <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 cursor-pointer hover:scale-105 transition-transform duration-300 hover:shadow-xl hover:bg-yellow-300"
                    data-suara="<?= base_url('assets/suara/Dhomahh.mp3') ?>">
                    <img src="<?= base_url('assets/img/domah.png') ?>" alt="Dhammah"
                        class="mx-auto w-24 h-24 mb-4 object-contain hover:rotate-12 transition-transform">
                    <h2 class="text-2xl font-bold text-black">Dhammah</h2>
                    <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-green-600 animate-bounce inline-block">"u"</span></p>
                </div>
            </div>

            <div class="flex justify-between items-center mb-8 mt-10 gap-4">
                <!-- Back Button -->
                <a href="<?= base_url('materi/home_partials') ?>"
                    class="inline-flex items-center spa-link bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-gray-900 font-semibold py-3 px-6 rounded-full shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali
                </a>

                <!-- Learn Button -->
                <a href="<?= base_url('materi/harakat_hijaiyah') ?>"
                    class="group inline-flex items-center space-x-2 bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 text-white font-medium py-3 px-6 rounded-full shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:rotate-12 transition-transform"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Belajar Harakat</span>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animasi Balon Hijaiyah */
    .hijaiyah-balloon {
        position: absolute;
        width: 40px;
        height: 50px;
        background-color: rgba(255,255,255,0.7);
        border-radius: 50%;
        bottom: -50px;
        animation: float-up 15s linear infinite;
        z-index: 1;
    }
    
    .hijaiyah-balloon::after {
        content: "◌";
        font-size: 24px;
        color: #7e22ce;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    @keyframes float-up {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateY(-100vh) rotate(360deg);
            opacity: 0;
        }
    }
    
    /* Animasi Bintang */
    .twinkle-star {
        position: absolute;
        width: 8px;
        height: 8px;
        background-color: white;
        clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        animation: twinkle 3s infinite alternate;
        opacity: 0.7;
    }
    
    @keyframes twinkle {
        0% { transform: scale(1); opacity: 0.3; }
        100% { transform: scale(1.5); opacity: 1; }
    }
    
    /* Animasi Gelembung */
    .bubble {
        position: absolute;
        background-color: rgba(255,255,255,0.3);
        border-radius: 50%;
        bottom: -100px;
        animation: bubble-float 8s linear infinite;
        z-index: 1;
    }
    
    @keyframes bubble-float {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateY(-100vh) rotate(360deg);
            opacity: 0;
        }
    }
    
    /* Animasi judul berdenyut pelan */
    @keyframes pulse-slow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.8; }
    }
    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }
</style>

<script>
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
            
            // Animasi ketika diklik
            el.classList.add('animate-ping');
            setTimeout(() => {
                el.classList.remove('animate-ping');
            }, 500);
        });
    });

    // Auto play audio sambutan saat halaman dimuat
    $(document).ready(function () {
        const welcomeAudio = new Audio("<?= base_url('sound/MK_HIJAIYAH.mp3') ?>");
        welcomeAudio.play().catch(err => {
            console.warn("Gagal memutar audio sambutan:", err);
        });
    });
</script>