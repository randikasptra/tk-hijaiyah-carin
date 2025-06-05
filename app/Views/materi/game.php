<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .level-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 1.5rem;
        /* rounded-3xl */
        padding: 1.5rem 3rem;
        /* py-6 px-12 */
        font-weight: 700;
        font-size: 1.125rem;
        /* text-lg */
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .level-card:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(168, 85, 247, 0.6);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    @keyframes pulseGlow {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(168, 85, 247, 0.6);
        }

        50% {
            box-shadow: 0 0 15px 8px rgba(168, 85, 247, 0.4);
        }
    }

    .pulse {
        animation: pulseGlow 2.5s infinite;
    }

    /* Bubble animasi */
    @keyframes floatBubble {
        0% {
            transform: translateY(0);
            opacity: 0.6;
        }

        50% {
            opacity: 0.9;
        }

        100% {
            transform: translateY(-120vh);
            opacity: 0;
        }
    }

    /* Bubble style */
    .bubble {
        position: absolute;
        bottom: -50px;
        background-color: rgba(255 255 255 / 0.4);
        border-radius: 9999px;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    /* Responsive grid container untuk card */
    .levels-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        max-width: 700px;
        margin: 0 auto;
    }

    /* Container utama styling */
    .main-container {
        background: rgba(255 255 255 / 0.5);
        backdrop-filter: blur(15px);
        border-radius: 1.5rem;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        padding: 3rem 2rem;
        max-width: 900px;
        margin: auto;
        text-align: center;
        position: relative;
        z-index: 10;
    }

    /* Judul styling */
    h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: #7c3aed;
        /* purple-700 */
        text-shadow: 0 2px 8px rgba(124, 58, 237, 0.4);
        margin-bottom: 2rem;
    }

    /* Link "Kembali ke Dashboard" */
    .back-dashboard {
        margin-top: 3rem;
        display: inline-block;
        color: #4b5563;
        /* gray-700 */
        font-size: 0.875rem;
        transition: color 0.3s ease;
    }

    .back-dashboard:hover {
        color: #9333ea;
        /* purple-600 */
        text-decoration: underline;
    }

    /* Tombol Kembali kiri atas */
    .btn-back {
        position: absolute;
        top: 1rem;
        left: 1rem;
        background: rgba(255 255 255 / 0.8);
        color: #7c3aed;
        font-weight: 700;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 0.25rem;
        transition: transform 0.2s ease, background 0.3s ease;
        z-index: 50;
        cursor: pointer;
        text-decoration: none;
    }

    .btn-back:hover {
        background: white;
        transform: scale(1.1);
    }

    .btn-back svg {
        width: 1.25rem;
        height: 1.25rem;
    }

    /* Responsive tweaks */
    @media (max-width: 640px) {
        .main-container {
            padding: 2rem 1rem;
            max-width: 90vw;
        }

        h1 {
            font-size: 2rem;
        }
    }
</style>
<style>
    .back-dashboard {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: #4b5563;
        /* gray-700 */
        font-weight: 600;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        background-color: #f3f4f6;
        /* gray-100 */
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    }

    .back-dashboard:hover {
        background-color: #7c3aed;
        /* purple-700 */
        color: white;
        box-shadow: 0 4px 12px rgba(124, 58, 237, 0.5);
        text-decoration: none;
    }

    .icon-arrow-left {
        width: 1.25rem;
        height: 1.25rem;
        stroke: currentColor;
    }
</style>


<!-- Tombol Kembali -->
<a href="<?= base_url('/materi/home') ?>" class="btn-back">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    Kembali
</a>

<div class="relative w-full min-h-screen flex items-center justify-center overflow-hidden bg-cover bg-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- Bubble Dekorasi -->
    <?php for ($i = 0; $i < 25; $i++): ?>
        <div class="bubble" style="
            width: <?= rand(20, 40) ?>px;
            height: <?= rand(20, 40) ?>px;
            left: <?= rand(0, 100) ?>%;
            animation-name: floatBubble;
            animation-duration: <?= rand(12, 25) ?>s;
            animation-delay: <?= rand(0, 5) ?>s;
        "></div>
    <?php endfor; ?>

    <div class="main-container">
        <h1>🎮 Game Hijaiyah</h1>

        <div class="levels-container">
            <a href="<?= base_url('materi/game/level-huruf/0') ?>"
                class="level-card bg-gradient-to-r from-purple-500 to-fuchsia-500 pulse">
                ✨ Tebak Huruf Hijaiyah (Iqro 1)
            </a>

            <a href="<?= base_url('materi/game/start-harakat') ?>"
                class="level-card bg-gradient-to-r from-blue-500 to-cyan-400">
                🌟 Tebak Harakat Hijaiyah
            </a>
        </div>

        <a href="<?= base_url('materi/home') ?>" class="back-dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-arrow-left" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Kembali ke Dashboard
        </a>


    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    // Animasi bubble sudah pakai CSS keyframes
</script>
<?= $this->endSection() ?>