<div class="relative w-full h-[100dvh] bg-cover bg-center flex items-center justify-center overflow-hidden"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    
    <!-- Animated Floating Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <?php for ($i = 0; $i < 15; $i++): ?>
            <div class="absolute rounded-full bg-white/20 animate-float" style="
                width: <?= rand(20, 50) ?>px;
                height: <?= rand(20, 50) ?>px;
                left: <?= rand(0, 100) ?>%;
                animation-duration: <?= rand(15, 30) ?>s;
                animation-delay: <?= rand(0, 10) ?>s;
            "></div>
        <?php endfor; ?>
    </div>

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-amber-400/10 to-purple-600/10"></div>
    
    <div class="items-center justify-center text-center fade-target relative z-10">
        
        <!-- Animated Dashboard Image -->
        <div class="w-full max-w-3xl mb-[-2rem] animate-float-slow">
            <img src="<?= base_url('assets/img/image-dashboard.png') ?>" alt="Ilustrasi Dashboard"
                class="w-full h-auto object-contain drop-shadow-2xl">
        </div>

        <!-- Hijaiyah Content -->
        <div class="flex flex-col items-center justify-center text-center px-4 gap-6 mt-4">
            <!-- Animated Title Box -->
            <div class="bg-white/80 px-12 py-6 rounded-3xl shadow-lg backdrop-blur-md border border-white/90 relative overflow-hidden group">
                <!-- Shine effect -->
                <div class="absolute inset-0 overflow-hidden">
                    <div class="absolute -inset-y-full -left-20 w-40 skew-x-[-30deg] bg-white/30 group-hover:animate-shine group-hover:duration-1000"></div>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold text-[#2d2f6f] relative z-10">
                    <span class="inline-block animate-wiggle">✨</span> Belajar Hijaiyah <span class="inline-block animate-wiggle delay-100">✨</span>
                </h1>
            </div>

            <!-- Interactive Button -->
            <a href="<?= base_url('materi/home_partials') ?>"
                class="spa-link relative overflow-hidden bg-gradient-to-r from-purple-500 to-[#2d2f6f] text-white text-2xl font-bold px-14 py-5 rounded-2xl border-2 border-white/30 hover:border-white/50 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                
                <!-- Button shine effect -->
                <div class="absolute inset-0 overflow-hidden">
                    <div class="absolute -inset-y-full -left-20 w-40 skew-x-[-30deg] bg-white/30 group-hover:animate-shine"></div>
                </div>
                
                <span class="relative z-10 flex items-center justify-center gap-2">
                    <span class="group-hover:animate-bounce">🚀</span>
                    <span>Mulai Belajar</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1 transition-all group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </span>

                
                
                <!-- Ripple effect -->
                <span class="absolute inset-0 scale-0 rounded-full bg-white/30 group-hover:scale-100 group-hover:opacity-0 transition-all duration-500"></span>
            </a>
        </div>
    </div>
</div>

<style>
    /* Floating animation */
    @keyframes float {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }
    
    @keyframes float-slow {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-15px);
        }
    }
    
    @keyframes shine {
        0% {
            left: -100%;
        }
        100% {
            left: 120%;
        }
    }
    
    @keyframes wiggle {
        0%, 100% {
            transform: rotate(0deg);
        }
        25% {
            transform: rotate(5deg);
        }
        75% {
            transform: rotate(-5deg);
        }
    }
    
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
    }
    
    /* Animation classes */
    .animate-float {
        animation: float 6s ease-in-out infinite;
        bottom: -50px;
    }
    
    .animate-float-slow {
        animation: float-slow 8s ease-in-out infinite;
    }
    
    .animate-shine {
        animation: shine 1.5s;
    }
    
    .animate-wiggle {
        animation: wiggle 2s ease-in-out infinite;
    }
    
    .animate-bounce {
        animation: bounce 0.8s ease infinite;
    }
    
    .delay-100 {
        animation-delay: 0.1s;
    }
    
    /* Transition effects */
    .transition-all {
        transition-property: all;
    }
    
    .duration-300 {
        transition-duration: 300ms;
    }
    
    .duration-500 {
        transition-duration: 500ms;
    }
    
    .duration-1000 {
        transition-duration: 1000ms;
    }
</style>