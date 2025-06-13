<!-- app/Views/materi/partials/home_content.php -->
<div class="min-h-screen relative flex items-center justify-center px-4 overflow-hidden">
    <!-- Floating Arabic Letters Background -->
    <div class="arabic-bg-letter" style="top:15%; left:10%">ب</div>
    <div class="arabic-bg-letter" style="top:25%; left:80%">ت</div>
    <div class="arabic-bg-letter" style="top:70%; left:15%">ج</div>
    <div class="arabic-bg-letter" style="top:80%; left:75%">د</div>

    <!-- Sparkle Effects -->
    <div class="sparkle" style="top:20%; left:20%"></div>
    <div class="sparkle" style="top:30%; left:70%"></div>
    <div class="sparkle" style="top:60%; left:40%"></div>

    <!-- Animated Clouds -->
    <div class="cloud" style="left:10%; animation-delay:0s"></div>
    <div class="cloud" style="left:30%; animation-delay:2s"></div>
    <div class="cloud" style="left:70%; animation-delay:3s"></div>

    <!-- Gambar Kiri with Animation -->
    <img src="<?= base_url('assets/img/pingir-cewe.png') ?>" alt="Anak Cewek"
        class="absolute left-0 bottom-0 w-28 sm:w-36 md:w-48 xl:w-96 select-none pointer-events-none fade-in animate-float-slow">

    <!-- Gambar Kanan with Animation -->
    <img src="<?= base_url('assets/img/pingir-cowo.png') ?>" alt="Anak Cowok"
        class="absolute right-0 bottom-0 w-28 sm:w-36 md:w-48 xl:w-96 select-none pointer-events-none fade-in animate-float-slow-reverse">

    <!-- Konten Tengah -->
    <div
        class="text-center space-y-8 px-8 py-10 bg-white/40 rounded-3xl shadow-2xl backdrop-blur-md z-10 max-w-xl w-full fade-target border border-white/30 hover:shadow-[0_20px_50px_rgba(251,191,36,0.3)] transition-all duration-500">
        <!-- Animated Title -->
        <h1
            class="text-5xl md:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 custom-font drop-shadow-lg animate-pulse-slow">
            Selamat Datang
        </h1>
        <p class="text-xl text-blue-800/80 mb-6">Mari belajar mengaji dengan menyenangkan!</p>

        <!-- Enhanced Buttons -->
        <div class="flex flex-col space-y-6">
            <a href="<?= base_url('/materi/mengenal_partials') ?>"
                class="spa-link relative overflow-hidden group bg-gradient-to-br from-yellow-300 to-orange-300 hover:from-yellow-400 hover:to-orange-400 text-gray-900 font-bold py-5 px-12 rounded-full border-4 border-yellow-500/80 text-2xl shadow-xl transform hover:scale-105 transition-all duration-300">
                <span class="relative z-10 flex items-center justify-center gap-3">
                    Mengenal Hijaiyah
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 group-hover:translate-x-2 transition-transform" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                </span>
                <span
                    class="absolute inset-0 bg-gradient-to-r from-white/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 -skew-x-12"></span>
            </a>

            <a href="<?= base_url('/materi/menghafal_partials') ?>"
                class="spa-link relative overflow-hidden group bg-gradient-to-br from-amber-300 to-orange-400 hover:from-amber-400 hover:to-orange-500 text-gray-900 font-bold py-5 px-12 rounded-full border-4 border-orange-500/80 text-2xl shadow-xl transform hover:scale-105 transition-all duration-300">
                <span class="relative z-10 flex items-center justify-center gap-3">
                    Menghafal Hijaiyah
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:rotate-12 transition-transform"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span
                    class="absolute inset-0 bg-gradient-to-r from-white/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 -skew-x-12"></span>
            </a>

            <a href="<?= base_url('/materi/game_partials') ?>"
                class="spa-link relative overflow-hidden group bg-gradient-to-br from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-gray-900 font-bold py-5 px-12 rounded-full border-4 border-amber-500/80 text-2xl shadow-xl transform hover:scale-105 transition-all duration-300">
                <span class="relative z-10 flex items-center justify-center gap-3">
                    Game Seru
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:animate-bounce" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span
                    class="absolute inset-0 bg-gradient-to-r from-white/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 -skew-x-12"></span>
            </a>
        </div>
    </div>
</div>

<style>
    /* Arabic Letters Background */
    .arabic-bg-letter {
        position: absolute;
        font-size: 5rem;
        color: rgba(109, 40, 217, 0.08);
        font-weight: bold;
        z-index: 0;
        pointer-events: none;
        user-select: none;
    }

    /* Sparkle Effects */
    .sparkle {
        position: absolute;
        width: 8px;
        height: 8px;
        background-color: white;
        border-radius: 50%;
        filter: blur(1px);
        animation: sparkle-twinkle 3s infinite alternate;
        opacity: 0.7;
        z-index: 1;
        pointer-events: none;
    }

    @keyframes sparkle-twinkle {
        0% {
            transform: scale(1);
            opacity: 0.3;
        }

        50% {
            transform: scale(1.3);
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 0.3;
        }
    }

    /* Cloud Animation */
    .cloud {
        position: absolute;
        width: 100px;
        height: 40px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50px;
        top: 15%;
        animation: cloud-move 20s linear infinite;
        filter: blur(5px);
        z-index: 0;
    }

    .cloud::before {
        content: '';
        position: absolute;
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        top: -25px;
        left: 15px;
    }

    .cloud::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        top: -15px;
        left: 50px;
    }

    @keyframes cloud-move {
        0% {
            transform: translateX(-100px);
        }

        100% {
            transform: translateX(calc(100vw + 100px));
        }
    }

    /* Floating Animation */
    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }

    @keyframes float-slow-reverse {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(20px);
        }
    }

    .animate-float-slow-reverse {
        animation: float-slow-reverse 5s ease-in-out infinite;
    }

    /* Pulse Animation */
    @keyframes pulse-slow {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.8;
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }

    /* Bounce Animation for Game Icon */
    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    .group-hover\:animate-bounce {
        animation: bounce 0.5s infinite;
    }
</style>

