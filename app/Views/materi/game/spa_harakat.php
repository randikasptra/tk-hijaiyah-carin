<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div id="game-container"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const soal = <?= json_encode($soal) ?>;
    let step = 0;
    let score = 0;

    function renderSoal(index) {
        if (index >= soal.length) {
            window.location.href = "<?= base_url('materi/game/selesai') ?>?score=" + score;
            return;
        }

        const data = soal[index];
        const opsi = data.opsi;
        const posisi = [
            { top: "20%", left: "25%" },
            { top: "50%", left: "60%" },
            { top: "75%", left: "35%" }
        ];
        const posAcak = posisi.sort(() => 0.5 - Math.random());

        let html = `
        <div class="min-h-screen bg-cover bg-center flex items-center justify-center px-4 py-10 relative overflow-hidden"
             style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
            
            <!-- Floating Clouds -->
            <div class="cloud" style="left:10%; animation-delay:0s"></div>
            <div class="cloud" style="left:30%; animation-delay:2s"></div>
            <div class="cloud" style="left:70%; animation-delay:3s"></div>
            
            <!-- Floating Arabic Letters -->
            <div class="arabic-float" style="left:15%; animation-delay:0s">ب</div>
            <div class="arabic-float" style="left:85%; animation-delay:2s">ت</div>
            
            <div class="relative w-full max-w-4xl h-[500px] rounded-3xl shadow-2xl overflow-hidden bg-cover bg-center border-2 border-purple-200/50 backdrop-blur-sm"
                 style="background-image: url('<?= base_url('assets/img/') ?>${data.bg}');">

                <!-- Score Indicator -->
                <div class="absolute top-4 right-4 z-20">
                    <div class="bg-white/90 px-4 py-2 rounded-full shadow-md flex items-center gap-2">
                        <span class="text-lg font-bold text-purple-800">⭐ ${score}</span>
                    </div>
                </div>

                <div class="absolute top-6 left-1/2 transform -translate-x-1/2 z-20 flex items-center gap-3">
                    <div class="bg-white/90 px-6 py-3 rounded-full shadow-lg text-center backdrop-blur-sm border border-white/30">
                        <p class="text-lg font-bold text-purple-800">
                            🎧 Di mana huruf <span class="underline decoration-purple-500 decoration-2">${data.huruf}</span>?
                        </p>
                    </div>
                    <button id="replayBtn" class="bg-purple-200 hover:bg-purple-300 text-purple-800 p-3 rounded-full shadow-md transition-all hover:scale-110 hover:rotate-45">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </button>
                </div>

                <div class="absolute left-4 bottom-4 z-20 animate-bounce-slow">
                    <img src="<?= base_url('assets/img/cartoon-2.png') ?>" class="w-28 md:w-36 lg:w-44">
                </div>

                ${opsi.map((huruf, i) => `
                    <button class="huruf-btn absolute z-20 transform hover:scale-110 transition-all duration-300"
                            style="top: ${posAcak[i].top}; left: ${posAcak[i].left};"
                            data-jawaban="${huruf}">
                        <div class="relative">
                            <img src="<?= base_url('assets/img/hijaiyah_huruf/') ?>${huruf}.png"
                                 class="w-16 h-16 md:w-20 md:h-20 bg-white p-1 rounded-full shadow-lg border-2 border-purple-100 hover:border-purple-300">
                            <div class="absolute -inset-1 rounded-full bg-purple-200/30 blur-md opacity-0 hover:opacity-100 transition-opacity"></div>
                        </div>
                    </button>
                `).join('')}

                <div id="feedback" class="hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 text-center bg-white/90 p-6 rounded-2xl shadow-2xl backdrop-blur-sm border border-white/30">
                    <img id="feedbackImg" src="" class="w-24 h-24 mx-auto animate-pulse">
                    <p id="feedbackText" class="font-bold text-xl mt-2 text-purple-800"></p>
                    <div id="scoreEffect" class="text-yellow-500 font-bold text-2xl mt-2"></div>
                </div>
            </div>
        </div>
        `;

        $('#game-container').html(html);

        const audio = new Audio("<?= base_url('sound/') ?>" + data.sound);
        audio.play().catch(() => {});
        $('#replayBtn').on('click', () => {
            audio.currentTime = 0;
            audio.play();
            $('#replayBtn').addClass('animate-spin');
            setTimeout(() => {
                $('#replayBtn').removeClass('animate-spin');
            }, 500);
        });

        $('.huruf-btn').on('click', function () {
            const dipilih = $(this).data('jawaban');
            const benar = data.huruf;
            const benarGak = dipilih === benar;

            const img = benarGak
                ? '<?= base_url('assets/img/icon-benar.png') ?>'
                : '<?= base_url('assets/img/icon-salah.png') ?>';
            const teks = benarGak ? 'Hebat! 🎉' : 'Yuk Coba Lagi!';

            $('#feedbackImg').attr('src', img);
            $('#feedbackText').text(teks);
            $('#feedback').removeClass('hidden').hide().fadeIn();

            // Tambahkan suara feedback
            const soundEffect = new Audio("<?= base_url('sound/') ?>" + (benarGak ? 'benar.mp3' : 'salah.mp3'));
            soundEffect.play().catch(() => {});

            if (benarGak) {
                score += 20;
                $('#scoreEffect').text(`+20 ⭐`).hide().fadeIn().delay(1000).fadeOut();
                createConfetti($(this).offset().left + $(this).width()/2, $(this).offset().top);
            } else {
                $('#scoreEffect').text(`😢`).hide().fadeIn().delay(1000).fadeOut();
            }

            setTimeout(() => {
                step++;
                renderSoal(step);
            }, 1500);
        });
    }

    function createConfetti(x, y) {
        const colors = ['#f87171', '#60a5fa', '#34d399', '#fbbf24', '#a78bfa'];
        
        for (let i = 0; i < 20; i++) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti-particle';
            confetti.style.left = `${x}px`;
            confetti.style.top = `${y}px`;
            confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
            document.body.appendChild(confetti);
            
            const angle = Math.random() * Math.PI * 2;
            const velocity = 5 + Math.random() * 5;
            const rotation = Math.random() * 360;
            
            let posX = 0;
            let posY = 0;
            let opacity = 1;
            
            const animate = () => {
                posX += Math.cos(angle) * velocity;
                posY += Math.sin(angle) * velocity + 0.5; // gravity
                opacity -= 0.02;
                
                confetti.style.transform = `translate(${posX}px, ${posY}px) rotate(${rotation}deg)`;
                confetti.style.opacity = opacity;
                
                if (opacity > 0) {
                    requestAnimationFrame(animate);
                } else {
                    confetti.remove();
                }
            };
            
            requestAnimationFrame(animate);
        }
    }

    $(document).ready(() => {
        renderSoal(0);
    });
</script>

<style>
    /* Cloud Animation */
    .cloud {
        position: absolute;
        width: 100px;
        height: 40px;
        background: rgba(255,255,255,0.4);
        border-radius: 50px;
        top: 15%;
        animation: cloud-move 20s linear infinite;
        filter: blur(5px);
        z-index: 1;
    }
    
    .cloud::before {
        content: '';
        position: absolute;
        width: 50px;
        height: 50px;
        background: rgba(255,255,255,0.4);
        border-radius: 50%;
        top: -25px;
        left: 15px;
    }
    
    .cloud::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        background: rgba(255,255,255,0.4);
        border-radius: 50%;
        top: -15px;
        left: 50px;
    }
    
    @keyframes cloud-move {
        0% { transform: translateX(-100px); }
        100% { transform: translateX(calc(100vw + 100px)); }
    }
    
    /* Floating Arabic Letters */
    .arabic-float {
        position: absolute;
        font-size: 3rem;
        color: rgba(109, 40, 217, 0.2);
        font-weight: bold;
        z-index: 1;
        animation: float-up 15s linear infinite;
        pointer-events: none;
    }
    
    @keyframes float-up {
        0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
        10% { opacity: 0.5; }
        90% { opacity: 0.5; }
        100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
    }
    
    /* Bounce Animation */
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }
    
    /* Confetti Particles */
    .confetti-particle {
        position: fixed;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        pointer-events: none;
        z-index: 9999;
    }
    
    /* Spin Animation */
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .animate-spin {
        animation: spin 0.5s linear;
    }
    
    /* Pulse Animation */
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
    .animate-pulse {
        animation: pulse 1s infinite;
    }
</style>
<?= $this->endSection() ?>