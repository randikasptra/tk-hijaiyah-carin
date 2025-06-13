<div class="min-h-screen bg-cover bg-center flex items-center justify-center p-6 relative overflow-hidden"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- Floating Arabic Letters Animation -->
    <div class="arabic-float" style="left:10%; animation-delay:0s">ب</div>
    <div class="arabic-float" style="left:20%; animation-delay:2s">ت</div>
    <div class="arabic-float" style="left:80%; animation-delay:3s">ث</div>
    <div class="arabic-float" style="left:70%; animation-delay:1s">ج</div>

    <!-- Sparkle Effects -->
    <div class="sparkle" style="top:20%; left:15%"></div>
    <div class="sparkle" style="top:30%; left:85%"></div>
    <div class="sparkle" style="top:70%; left:40%"></div>

    <div class="w-full max-w-6xl bg-white/90 backdrop-blur-lg rounded-3xl shadow-2xl p-8 grid grid-cols-1 md:grid-cols-3 gap-8 relative z-10 border border-white/30 hover:shadow-[0_20px_50px_rgba(109,40,217,0.3)] transition-all duration-500">
        
        <!-- Judul -->
        <div class="col-span-3 text-center mb-6">
            <h1 class="text-4xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 drop-shadow-lg animate-pulse-slow">
                BELAJAR HARAKAT HIJAIYAH YUK!
            </h1>
            <p class="text-lg text-purple-700 mt-2">Klik huruf untuk melihat harakatnya</p>
        </div>

        <!-- Kolom kiri -->
        <div class="col-span-1 flex flex-col items-center justify-between">
            <div id="harakatDisplay" class="flex justify-center gap-6 mb-8 p-4 bg-white/70 rounded-2xl shadow-inner min-h-[200px] w-full items-center"></div>
            <img src="<?= base_url('assets/img/mini-cartoon.png') ?>" alt="Anak" class="w-52 h-auto animate-bounce-slow">
        </div>

        <!-- Kolom kanan -->
        <div class="col-span-2 grid grid-cols-5 sm:grid-cols-6 md:grid-cols-7 gap-4 items-start justify-center" dir="rtl">
            <?php
            $hurufDasar = [
                'A',
                'Ba',
                'Ta',
                'Tsa',
                'Ja',
                'Kha',
                'Kho',
                'Da',
                'Dza',
                'Ro',
                'Za',
                'San',
                'Sya',
                'Shad',
                'Dha',
                'Tho',
                'Dzha',
                'Ain',
                'Gha',
                'Fa',
                'Qo',
                'Ka',
                'La',
                'Ma',
                'Na',
                'Wa',
                'Ha',
                'Ya'
            ];
            ?>
            <?php foreach ($hurufDasar as $huruf): ?>
                <button onclick="tampilkanHarakat('<?= $huruf ?>')"
                    class="bg-white hover:bg-purple-100 p-2 rounded-xl shadow-md transition-all duration-300 hover:scale-110 hover:shadow-lg border-2 border-transparent hover:border-purple-300 group">
                    <img src="<?= base_url('assets/img/hijaiyah_huruf/' . $huruf . '.png') ?>"
                        alt="<?= $huruf ?>" class="w-20 h-20 object-contain mx-auto group-hover:rotate-6 transition-transform">
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Back Button -->
        <div class="col-span-3 text-center mt-8">
            <a href="<?= base_url('materi/home_partials') ?>"
                class="inline-flex items-center spa-link bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-gray-900 font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>

<style>
    /* Floating Arabic Letters */
    .arabic-float {
        position: absolute;
        font-size: 2rem;
        color: rgba(109, 40, 217, 0.3);
        font-weight: bold;
        z-index: 1;
        animation: float-up 15s linear infinite;
        pointer-events: none;
    }
    
    @keyframes float-up {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 0.8;
        }
        90% {
            opacity: 0.8;
        }
        100% {
            transform: translateY(-100px) rotate(360deg);
            opacity: 0;
        }
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
        0% { transform: scale(1); opacity: 0.3; }
        50% { transform: scale(1.3); opacity: 1; }
        100% { transform: scale(1); opacity: 0.3; }
    }
    
    /* Slow Bounce Animation */
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 4s ease-in-out infinite;
    }
    
    /* Slow Pulse Animation */
    @keyframes pulse-slow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.8; }
    }
    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }
</style>

<script>
    const harakatMap = {
        "A": ["A", "I", "U"],
        "Ba": ["Ba", "Bi", "Bu"],
        "Ta": ["Ta", "Ti", "Tu"],
        "Tsa": ["Tsa", "Tsi", "Tsu"],
        "Ja": ["Ja", "Ji", "Ju"],
        "Kha": ["Kha", "Khi", "Khu"],
        "Kho": ["Kho", "Khii", "Khuu"],
        "Da": ["Da", "Di", "Du"],
        "Dza": ["Dza", "Dzi", "Dzu"],
        "Ro": ["Ro", "Ri", "Ru"],
        "Za": ["Za", "Zi", "Zu"],
        "San": ["San", "Sin", "Sun"],
        "Sya": ["Sya", "Syi", "Syu"],
        "Shad": ["Shad", "Shid", "Shud"],
        "Dha": ["Dha", "Dhi", "Dhu"],
        "Tho": ["Tho", "Thi", "Thu"],
        "Dzha": ["Dzha", "Dzhi", "Dzhu"],
        "Ain": ["Ain", "Iin", "Uin"],
        "Gha": ["Gha", "Ghi", "Ghu"],
        "Fa": ["Fa", "Fi", "Fu"],
        "Qo": ["Qo", "Qi", "Qu"],
        "Ka": ["Ka", "Ki", "Ku"],
        "La": ["La", "Li", "Lu"],
        "Ma": ["Ma", "Mi", "Mu"],
        "Na": ["Na", "Ni", "Nu"],
        "Ha": ["Ha", "Hi", "Hu"],
        "Wa": ["Wa", "Wi", "Wu"],
        "Ya": ["Ya", "Yi", "Yu"],
        "Hamzah": ["Hamzah", "Hamzih", "Hamzuh"]
    };

    function tampilkanHarakat(huruf) {
        const container = document.getElementById('harakatDisplay');
        container.innerHTML = '';

        // Play main huruf sound
        const hurufAudio = new Audio("<?= base_url('assets/audio/hijaiyah_huruf/') ?>" + huruf + ".mp3");
        hurufAudio.play();

        // Add confetti effect
        addConfetti();

        // Show harakat variations
        if (harakatMap[huruf]) {
            harakatMap[huruf].forEach(h => {
                const imgContainer = document.createElement('div');
                imgContainer.className = "flex flex-col items-center";
                
                const img = document.createElement('img');
                img.src = "<?= base_url('assets/img/harakat_huruf/') ?>" + h + ".png";
                img.alt = h;
                img.className = "w-24 h-24 object-contain bg-white p-3 rounded-xl shadow-md hover:scale-110 transition cursor-pointer transform hover:rotate-3 hover:shadow-lg mb-2";
                
                // Add sound on click
                img.onclick = function() {
                    const harakatAudio = new Audio("<?= base_url('assets/audio/harakat_huruf/') ?>" + h + ".mp3");
                    harakatAudio.play();
                    addMiniConfetti(this);
                };

                // Add harakat name
                const name = document.createElement('p');
                name.className = "text-sm font-semibold text-purple-700";
                name.textContent = h;
                
                imgContainer.appendChild(img);
                imgContainer.appendChild(name);
                container.appendChild(imgContainer);
            });
        }
    }

    // Confetti effect functions
    function addConfetti() {
        for (let i = 0; i < 50; i++) {
            createConfetti();
        }
    }
    
    function addMiniConfetti(element) {
        const rect = element.getBoundingClientRect();
        for (let i = 0; i < 20; i++) {
            createConfetti(rect.left + rect.width/2, rect.top);
        }
    }
    
    function createConfetti(x, y) {
        const confetti = document.createElement('div');
        confetti.className = 'confetti';
        document.body.appendChild(confetti);
        
        // Random properties
        const colors = ['#f87171', '#60a5fa', '#34d399', '#fbbf24', '#a78bfa'];
        const color = colors[Math.floor(Math.random() * colors.length)];
        const size = Math.random() * 10 + 5;
        
        // Set initial position
        confetti.style.width = `${size}px`;
        confetti.style.height = `${size}px`;
        confetti.style.backgroundColor = color;
        confetti.style.position = 'fixed';
        confetti.style.zIndex = '9999';
        confetti.style.borderRadius = '50%';
        confetti.style.pointerEvents = 'none';
        
        // Position either at top or specific coordinates
        if (x && y) {
            confetti.style.left = `${x}px`;
            confetti.style.top = `${y}px`;
        } else {
            confetti.style.left = `${Math.random() * window.innerWidth}px`;
            confetti.style.top = '0';
        }
        
        // Animation
        const animation = confetti.animate([
            { transform: 'translateY(0) rotate(0deg)', opacity: 1 },
            { transform: `translateY(${window.innerHeight}px) rotate(${Math.random() * 360}deg)`, opacity: 0 }
        ], {
            duration: Math.random() * 3000 + 2000,
            easing: 'cubic-bezier(0.1, 0.8, 0.3, 1)'
        });
        
        animation.onfinish = () => confetti.remove();
    }
</script>