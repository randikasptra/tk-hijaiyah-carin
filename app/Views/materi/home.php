<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="w-full h-[100dvh] bg-cover bg-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="min-h-screen relative flex items-center justify-center px-4">

        <!-- Gambar Kiri -->
        <img src="<?= base_url('assets/img/pingir-cewe.png') ?>" alt="Anak Cewek"
            class="absolute left-0 bottom-0 w-28 sm:w-36 md:w-48 xl:w-96 select-none pointer-events-none fade-in">

        <!-- Gambar Kanan -->
        <img src="<?= base_url('assets/img/pingir-cowo.png') ?>" alt="Anak Cowok"
            class="absolute right-0 bottom-0 w-28 sm:w-36 md:w-48 xl:w-96 select-none pointer-events-none fade-in">

        <!-- Konten Tengah -->
        <div
            class="text-center space-y-8 px-8 py-10 bg-white/30 rounded-3xl shadow-xs backdrop-blur-xs z-10 max-w-xl w-full fade-target">
            <h1 class="text-5xl md:text-6xl font-bold text-blue-800 custom-font drop-shadow-md">
                Selamat Datang
            </h1>

            <div class="flex flex-col space-y-6">
                <a href="<?= base_url('/materi/mengenal') ?>"
                    class="bg-gradient-to-br from-yellow-300 to-orange-300 hover:from-yellow-400 hover:to-orange-400 text-black font-bold py-4 px-10 md:py-5 md:px-14 rounded-full border-4 border-yellow-500 text-2xl shadow-xl transform hover:scale-105 transition duration-200 ease-in-out">
                    Mengenal Hijaiyah
                </a>

                <a href="<?= base_url('/materi/menghafal') ?>"
                    class="bg-yellow-300 hover:bg-yellow-400 text-black font-bold py-4 px-10 md:py-5 md:px-14 rounded-full border-4 border-orange-400 text-2xl shadow-lg hover:scale-105 transform transition duration-200">
                    Menghafal Hijaiyah
                </a>

                <a href="<?= base_url('/materi/game') ?>"
                    class="bg-yellow-300 hover:bg-yellow-400 text-black font-bold py-4 px-10 md:py-5 md:px-14 rounded-full border-4 border-orange-400 text-2xl shadow-lg hover:scale-105 transform transition duration-200">
                    Game
                </a>
            </div>
        </div>

    </div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery Animasi Masuk -->
<script>
    $(document).ready(function () {
        $('.fade-target, .fade-in').hide().fadeIn(1000);
    });
</script>
<?= $this->endSection() ?>