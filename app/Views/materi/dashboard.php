<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="w-full h-[100dvh] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="items-center justify-center text-center fade-target">
        <div class="w-full max-w-lg">
            <img src="<?= base_url('assets/img/image-dashboard.png') ?>" alt="Ilustrasi Dashboard"
                class="w-full h-auto object-contain">
        </div>
        <div class="flex flex-col items-center justify-center text-center px-4 gap-6 mt-6">
            <div class="bg-white/80 px-20 py-6 rounded-3xl shadow-md backdrop-blur">
                <h1 class="text-3xl md:text-5xl font-bold text-[#2d2f6f]">belajar hijaiyah</h1>
            </div>
            <a href="<?= base_url('materi/home') ?>"
                class="bg-[#f3e9f5] text-[#2d2f6f] text-2xl font-bold px-14 py-4 rounded-2xl border-2 border-[#2d2f6f] hover:bg-[#e0d6ec] transition-all">
                Mulai
            </a>
        </div>
    </div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Animasi jQuery -->
<script>
    $(document).ready(function () {
        $('.fade-target').hide().fadeIn(1000); // Animasi masuk smooth
    });
</script>

<?= $this->endSection() ?>