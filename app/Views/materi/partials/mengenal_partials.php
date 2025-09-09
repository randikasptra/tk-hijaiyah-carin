<div id="spa-content">
    <div class="w-full h-screen bg-cover bg-center bg-no-repeat relative z-10"
        style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-purple-900/10 to-purple-900/20 pointer-events-none"></div>
        <div class="flex flex-col justify-between h-full px-4 pt-8 pb-6 relative">
            <!-- Judul -->
            <div class="animate-float-slow">
                <h1 class="text-4xl md:text-5xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 drop-shadow-lg mb-6 px-4 py-2 rounded-xl">
                    Mengenal Huruf Hijaiyah
                </h1>
            </div>
            <!-- Static Data Huruf Hijaiyah -->
            <?php
$hurufHijaiyah = [
    ['nama' => 'Alif', 'gambar' => 'assets/img/game_huruf/Alif.png', 'suara' => 'assets/suara/1.Alif.mp3', 'deskripsi' => 'Huruf Alif (ا) tidak memiliki bunyi sendiri kecuali jika diberi harakat. Dengan harakat fathah dibaca "a", kasrah dibaca "i", dan dhammah dibaca "u". Huruf ini diucapkan dari tenggorokan tanpa tekanan, bersifat ringan (khafidh) dan mengalir (rakhawah).'],
    ['nama' => 'Ba', 'gambar' => 'assets/img/game_huruf/Ba.png', 'suara' => 'assets/suara/2.Ba.mp3', 'deskripsi' => 'Huruf Ba (ب) dibaca "ba" (fathah), "bi" (kasrah), dan "bu" (dhammah). Diucapkan dengan menutup kedua bibir lalu membukanya, bersifat ringan dan mengalir tanpa tekanan.'],
    ['nama' => 'Ta', 'gambar' => 'assets/img/game_huruf/Ta.png', 'suara' => 'assets/suara/3.Ta.mp3', 'deskripsi' => 'Huruf Ta (ت) dibaca "ta" (fathah), "ti" (kasrah), dan "tu" (dhammah). Diucapkan dengan ujung lidah menyentuh gusi atas, bersifat ringan dan tidak dipantulkan.'],
    ['nama' => 'Tsa', 'gambar' => 'assets/img/game_huruf/Tsa.png', 'suara' => 'assets/suara/4.Tsa.mp3', 'deskripsi' => 'Huruf Tsa (ث) dibaca "tsa" (fathah), "tsi" (kasrah), dan "tsu" (dhammah). Diucapkan dengan ujung lidah di antara gigi depan, bersifat ringan dan mengalir.'],
    ['nama' => 'Jim', 'gambar' => 'assets/img/game_huruf/Jim.png', 'suara' => 'assets/suara/5.Jim.mp3', 'deskripsi' => 'Huruf Jim (ج) dibaca "ja" (fathah), "ji" (kasrah), dan "ju" (dhammah). Diucapkan dengan lidah tengah menyentuh langit-langit mulut, bersifat sedang dan dipantulkan (qalqalah).'],
    ['nama' => 'Ha', 'gambar' => 'assets/img/game_huruf/Ha.png', 'suara' => 'assets/suara/6.Kha.mp3', 'deskripsi' => 'Huruf Ha (ح) dibaca "ha" (fathah), "hi" (kasrah), dan "hu" (dhammah). Diucapkan dari tenggorokan tengah dengan suara serak, bersifat ringan dan mengalir.'],
    ['nama' => 'Kho', 'gambar' => 'assets/img/game_huruf/Kho.png', 'suara' => 'assets/suara/7.Kho.mp3', 'deskripsi' => 'Huruf Kho (خ) dibaca "kha" (fathah), "khi" (kasrah), dan "khu" (dhammah). Diucapkan dari tenggorokan atas dengan suara kasar, bersifat tebal dan mengalir.'],
    ['nama' => 'Dal', 'gambar' => 'assets/img/game_huruf/Dal.png', 'suara' => 'assets/suara/8.Dal.mp3', 'deskripsi' => 'Huruf Dal (د) dibaca "da" (fathah), "di" (kasrah), dan "du" (dhammah). Diucapkan dengan ujung lidah menyentuh gusi atas, bersifat ringan dan dipantulkan (qalqalah).'],
    ['nama' => 'Dzal', 'gambar' => 'assets/img/game_huruf/Dzal.png', 'suara' => 'assets/suara/9.Dzal.mp3', 'deskripsi' => 'Huruf Dzal (ذ) dibaca "dza" (fathah), "dzi" (kasrah), dan "dzu" (dhammah). Diucapkan dengan ujung lidah di antara gigi depan, bersifat ringan dan mengalir.'],
    ['nama' => 'Ro', 'gambar' => 'assets/img/game_huruf/Ro.png', 'suara' => 'assets/suara/10.Ro.mp3', 'deskripsi' => 'Huruf Ro (ر) dibaca "ra" (fathah), "ri" (kasrah), dan "ru" (dhammah). Diucapkan dengan lidah bergetar di langit-langit mulut, bersifat ringan atau tebal tergantung harakat.'],
    ['nama' => 'Zai', 'gambar' => 'assets/img/game_huruf/Zai.png', 'suara' => 'assets/suara/11.Dza.mp3', 'deskripsi' => 'Huruf Zai (ز) dibaca "za" (fathah), "zi" (kasrah), dan "zu" (dhammah). Diucapkan dengan ujung lidah mendekati gigi depan, bersifat ringan dan mengalir.'],
    ['nama' => 'Sin', 'gambar' => 'assets/img/game_huruf/Sin.png', 'suara' => 'assets/suara/12.Sin.mp3', 'deskripsi' => 'Huruf Sin (س) dibaca "sa" (fathah), "si" (kasrah), dan "su" (dhammah). Diucapkan dengan ujung lidah mendekati gigi depan, bersifat ringan dan mengalir.'],
    ['nama' => 'Syin', 'gambar' => 'assets/img/game_huruf/Syin.png', 'suara' => 'assets/suara/13.Syin.mp3', 'deskripsi' => 'Huruf Syin (ش) dibaca "sya" (fathah), "syi" (kasrah), dan "syu" (dhammah). Diucapkan dengan lidah tengah mendekati langit-langit mulut, bersifat ringan dan mengalir.'],
    ['nama' => 'Shod', 'gambar' => 'assets/img/game_huruf/Shod.png', 'suara' => 'assets/suara/14.Shod.mp3', 'deskripsi' => 'Huruf Shod (ص) dibaca "sha" (fathah), "shi" (kasrah), dan "shu" (dhammah). Diucapkan dengan lidah tengah ditekan, bersifat tebal (istila).'],
    ['nama' => 'Dhod', 'gambar' => 'assets/img/game_huruf/Dhod.png', 'suara' => 'assets/suara/17.Dzho.mp3', 'deskripsi' => 'Huruf Dhod (ض) dibaca "dha" (fathah), "dhi" (kasrah), dan "dhu" (dhammah). Diucapkan dengan sisi lidah menyentuh gigi geraham atas, bersifat tebal dan dipantulkan (qalqalah).'],
    ['nama' => 'Tho', 'gambar' => 'assets/img/game_huruf/Tho.png', 'suara' => 'assets/suara/16.Tho.mp3', 'deskripsi' => 'Huruf Tho (ط) dibaca "tha" (fathah), "thi" (kasrah), dan "thu" (dhammah). Diucapkan dengan ujung lidah menyentuh langit-langit mulut, bersifat tebal dan dipantulkan (qalqalah).'],
    ['nama' => 'Dzho', 'gambar' => 'assets/img/game_huruf/Dzho.png', 'suara' => 'assets/suara/17.Dzho.mp3', 'deskripsi' => 'Huruf Dzho (ظ) dibaca "dzha" (fathah), "dzhi" (kasrah), dan "dzhu" (dhammah). Diucapkan dengan ujung lidah menyentuh gigi depan atas, bersifat tebal dan mengalir.'],
    ['nama' => 'Ain', 'gambar' => 'assets/img/game_huruf/Ain.png', 'suara' => 'assets/suara/18.Ain.mp3', 'deskripsi' => 'Huruf Ain (ع) dibaca "‘a" (fathah), "‘i" (kasrah), dan "‘u" (dhammah). Diucapkan dari tenggorokan tengah dengan suara dalam, bersifat sedang dan mengalir.'],
    ['nama' => 'Ghoin', 'gambar' => 'assets/img/game_huruf/Ghoin.png', 'suara' => 'assets/suara/19.Ghain.mp3', 'deskripsi' => 'Huruf Ghoin (غ) dibaca "gho" (fathah, tebal), "ghi" (kasrah, tebal), dan "ghu" (dhammah, tebal). Diucapkan dari tenggorokan atas dekat huruf Kho, dengan mengangkat pangkal lidah. Bersifat tebal (istila) dan mengalir (rakhawah).'],
    ['nama' => 'Fa', 'gambar' => 'assets/img/game_huruf/Fa.png', 'suara' => 'assets/suara/20.Fa.mp3', 'deskripsi' => 'Huruf Fa (ف) dibaca "fa" (fathah), "fi" (kasrah), dan "fu" (dhammah). Diucapkan dengan bibir bawah menyentuh gigi atas, bersifat ringan dan mengalir.'],
    ['nama' => 'Qof', 'gambar' => 'assets/img/game_huruf/Qof.png', 'suara' => 'assets/suara/21.Qof.mp3', 'deskripsi' => 'Huruf Qof (ق) dibaca "qa" (fathah), "qi" (kasrah), dan "qu" (dhammah). Diucapkan dari pangkal lidah menyentuh langit-langit belakang, bersifat tebal dan dipantulkan (qalqalah).'],
    ['nama' => 'Kaf', 'gambar' => 'assets/img/game_huruf/Kaf.png', 'suara' => 'assets/suara/22.Kaf.mp3', 'deskripsi' => 'Huruf Kaf (ك) dibaca "ka" (fathah), "ki" (kasrah), dan "ku" (dhammah). Diucapkan dari pangkal lidah menyentuh langit-langit tengah, bersifat ringan dan mengalir.'],
    ['nama' => 'Lam', 'gambar' => 'assets/img/game_huruf/Lam.png', 'suara' => 'assets/suara/23.Lam.mp3', 'deskripsi' => 'Huruf Lam (ل) dibaca "la" (fathah), "li" (kasrah), dan "lu" (dhammah). Diucapkan dengan ujung lidah menyentuh gusi atas, bersifat ringan dan mengalir.'],
    ['nama' => 'Mim', 'gambar' => 'assets/img/game_huruf/Mim.png', 'suara' => 'assets/suara/24.Mim.mp3', 'deskripsi' => 'Huruf Mim (م) dibaca "ma" (fathah), "mi" (kasrah), dan "mu" (dhammah). Diucapkan dengan menutup kedua bibir, bersifat ringan dan mengalir.'],
    ['nama' => 'Nun', 'gambar' => 'assets/img/game_huruf/Nun.png', 'suara' => 'assets/suara/25.Nun.mp3', 'deskripsi' => 'Huruf Nun (ن) dibaca "na" (fathah), "ni" (kasrah), dan "nu" (dhammah). Diucapkan dengan ujung lidah menyentuh gusi atas, bersifat ringan dan mengalir.'],
    ['nama' => 'Wau', 'gambar' => 'assets/img/game_huruf/Wau.png', 'suara' => 'assets/suara/26.Wawu.mp3', 'deskripsi' => 'Huruf Wau (و) dibaca "wa" (fathah), "wi" (kasrah), dan "wu" (dhammah). Diucapkan dengan memonyongkan bibir, bersifat ringan dan mengalir.'],
    ['nama' => 'Hamzah', 'gambar' => 'assets/img/game_huruf/Hamzah.png', 'suara' => 'assets/suara/27.Hamzah.mp3', 'deskripsi' => 'Huruf Hamzah (ء) dibaca sesuai harakatnya: "a" (fathah), "i" (kasrah), atau "u" (dhammah). Diucapkan dari tenggorokan dengan hentakan ringan.'],
    ['nama' => 'Ya', 'gambar' => 'assets/img/game_huruf/Ya.png', 'suara' => 'assets/suara/29.Ya.mp3', 'deskripsi' => 'Huruf Ya (ي) dibaca "ya" (fathah), "yi" (kasrah), dan "yu" (dhammah). Diucapkan dengan lidah tengah menyentuh langit-langit mulut, bersifat ringan dan mengalir.'],
];
?>
            <!-- Kartu Huruf -->
            <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 gap-5 p-6 rounded-3xl shadow-2xl overflow-y-auto bg-white/60 backdrop-blur-md max-h-[70vh] mx-auto w-full max-w-[90vw] border border-white/30"
                style="direction: rtl;">
                <?php foreach ($hurufHijaiyah as $index => $h): ?>
                    <div class="card bg-white/90 hover:bg-white rounded-xl p-4 shadow-lg text-center relative cursor-pointer transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-2 hover:border-purple-300 transform">
                        <!-- Tombol Info -->
                        <button onclick="showDescription(<?= $index ?>)"
                            class="absolute top-2 right-2 bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm hover:bg-purple-700 transition-all duration-200"
                            title="Info Huruf">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 3a9 9 0 100 18 9 9 0 000-18z" />
                            </svg>
                        </button>
                        <!-- Konten Kartu -->
                        <div onclick="playSound('<?= base_url($h['suara']) ?>')">
                            <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>"
                                class="w-20 h-20 object-contain mx-auto mb-3">
                            <p class="text-purple-900 font-bold text-xl tracking-wide"><?= esc($h['nama']) ?>🔊</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Modal untuk Deskripsi -->
            <div id="descriptionModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
                <div class="bg-white/90 backdrop-blur-md rounded-2xl p-6 max-w-lg w-full mx-4 shadow-2xl">
                    <h2 id="modalTitle" class="text-2xl font-bold text-purple-900 mb-4 text-center"></h2>
                    <p id="modalDescription" class="text-gray-800 text-justify"></p>
                    <button onclick="closeModal()"
                        class="mt-6 w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold py-2 px-4 rounded-full hover:from-purple-700 hover:to-pink-700 transition-all duration-300">
                        Tutup
                    </button>
                </div>
            </div>
            <!-- Tombol Kembali -->
            <div class="text-center mt-6">
                <a href="<?= base_url('materi/home_partials') ?>"
                    class="inline-flex items-center spa-link bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-gray-900 font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }
    .overflow-y-auto::-webkit-scrollbar {
        width: 8px;
    }
    .overflow-y-auto::-webkit-scrollbar-thumb {
        background: rgba(109, 40, 217, 0.5);
        border-radius: 4px;
    }
    .overflow-y-auto::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.3);
    }
</style>
<script>
    let currentAudio = null;
    const hurufData = <?= json_encode($hurufHijaiyah) ?>;

    function playSound(url) {
        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }
        currentAudio = new Audio(url);
        currentAudio.play().catch(err => console.warn("Gagal memutar suara:", err));
    }

    function showDescription(index) {
        const huruf = hurufData[index];
        document.getElementById('modalTitle').textContent = `Huruf ${huruf.nama}`;
        document.getElementById('modalDescription').textContent = huruf.deskripsi;
        document.getElementById('descriptionModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('descriptionModal').classList.add('hidden');
    }

    // Auto play audio sambutan saat halaman dimuat
    $(document).ready(function () {
        const welcomeAudio = new Audio("<?= base_url('sound/MENGENAL.mp3') ?>");
        welcomeAudio.play().catch(err => {
            console.warn("Gagal memutar audio sambutan:", err);
        });
    });
</script><div id="spa-content">
    <div class="w-full h-screen bg-cover bg-center bg-no-repeat relative z-10"
        style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-purple-900/10 to-purple-900/20 pointer-events-none"></div>
        <div class="flex flex-col justify-between h-full px-4 pt-8 pb-6 relative">
            <!-- Judul -->
            <div class="animate-float-slow">
                <h1 class="text-4xl md:text-5xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 drop-shadow-lg mb-6 px-4 py-2 rounded-xl">
                    Mengenal Huruf Hijaiyah
                </h1>
            </div>
            <!-- Static Data Huruf Hijaiyah -->
            <?php
$hurufHijaiyah = [
    ['nama' => 'Alif', 'gambar' => 'assets/img/game_huruf/Alif.png', 'suara' => 'assets/suara/1.Alif.mp3', 'deskripsi' => 'Huruf Alif (ا) tidak memiliki bunyi sendiri kecuali jika diberi harakat. Dengan harakat fathah dibaca "a", kasrah dibaca "i", dan dhammah dibaca "u". Huruf ini diucapkan dari tenggorokan tanpa tekanan, bersifat ringan (khafidh) dan mengalir (rakhawah).'],
    ['nama' => 'Ba', 'gambar' => 'assets/img/game_huruf/Ba.png', 'suara' => 'assets/suara/2.Ba.mp3', 'deskripsi' => 'Huruf Ba (ب) dibaca "ba" (fathah), "bi" (kasrah), dan "bu" (dhammah). Diucapkan dengan menutup kedua bibir lalu membukanya, bersifat ringan dan mengalir tanpa tekanan.'],
    ['nama' => 'Ta', 'gambar' => 'assets/img/game_huruf/Ta.png', 'suara' => 'assets/suara/3.Ta.mp3', 'deskripsi' => 'Huruf Ta (ت) dibaca "ta" (fathah), "ti" (kasrah), dan "tu" (dhammah). Diucapkan dengan ujung lidah menyentuh gusi atas, bersifat ringan dan tidak dipantulkan.'],
    ['nama' => 'Tsa', 'gambar' => 'assets/img/game_huruf/Tsa.png', 'suara' => 'assets/suara/4.Tsa.mp3', 'deskripsi' => 'Huruf Tsa (ث) dibaca "tsa" (fathah), "tsi" (kasrah), dan "tsu" (dhammah). Diucapkan dengan ujung lidah di antara gigi depan, bersifat ringan dan mengalir.'],
    ['nama' => 'Jim', 'gambar' => 'assets/img/game_huruf/Jim.png', 'suara' => 'assets/suara/5.Jim.mp3', 'deskripsi' => 'Huruf Jim (ج) dibaca "ja" (fathah), "ji" (kasrah), dan "ju" (dhammah). Diucapkan dengan lidah tengah menyentuh langit-langit mulut, bersifat sedang dan dipantulkan (qalqalah).'],
    ['nama' => 'Ha', 'gambar' => 'assets/img/game_huruf/Ha.png', 'suara' => 'assets/suara/6.Kha.mp3', 'deskripsi' => 'Huruf Ha (ح) dibaca "ha" (fathah), "hi" (kasrah), dan "hu" (dhammah). Diucapkan dari tenggorokan tengah dengan suara serak, bersifat ringan dan mengalir.'],
    ['nama' => 'Kho', 'gambar' => 'assets/img/game_huruf/Kho.png', 'suara' => 'assets/suara/7.Kho.mp3', 'deskripsi' => 'Huruf Kho (خ) dibaca "kha" (fathah), "khi" (kasrah), dan "khu" (dhammah). Diucapkan dari tenggorokan atas dengan suara kasar, bersifat tebal dan mengalir.'],
    ['nama' => 'Dal', 'gambar' => 'assets/img/game_huruf/Dal.png', 'suara' => 'assets/suara/8.Dal.mp3', 'deskripsi' => 'Huruf Dal (د) dibaca "da" (fathah), "di" (kasrah), dan "du" (dhammah). Diucapkan dengan ujung lidah menyentuh gusi atas, bersifat ringan dan dipantulkan (qalqalah).'],
    ['nama' => 'Dzal', 'gambar' => 'assets/img/game_huruf/Dzal.png', 'suara' => 'assets/suara/9.Dzal.mp3', 'deskripsi' => 'Huruf Dzal (ذ) dibaca "dza" (fathah), "dzi" (kasrah), dan "dzu" (dhammah). Diucapkan dengan ujung lidah di antara gigi depan, bersifat ringan dan mengalir.'],
    ['nama' => 'Ro', 'gambar' => 'assets/img/game_huruf/Ro.png', 'suara' => 'assets/suara/10.Ro.mp3', 'deskripsi' => 'Huruf Ro (ر) dibaca "ra" (fathah), "ri" (kasrah), dan "ru" (dhammah). Diucapkan dengan lidah bergetar di langit-langit mulut, bersifat ringan atau tebal tergantung harakat.'],
    ['nama' => 'Zai', 'gambar' => 'assets/img/game_huruf/Zai.png', 'suara' => 'assets/suara/11.Dza.mp3', 'deskripsi' => 'Huruf Zai (ز) dibaca "za" (fathah), "zi" (kasrah), dan "zu" (dhammah). Diucapkan dengan ujung lidah mendekati gigi depan, bersifat ringan dan mengalir.'],
    ['nama' => 'Sin', 'gambar' => 'assets/img/game_huruf/Sin.png', 'suara' => 'assets/suara/12.Sin.mp3', 'deskripsi' => 'Huruf Sin (س) dibaca "sa" (fathah), "si" (kasrah), dan "su" (dhammah). Diucapkan dengan ujung lidah mendekati gigi depan, bersifat ringan dan mengalir.'],
    ['nama' => 'Syin', 'gambar' => 'assets/img/game_huruf/Syin.png', 'suara' => 'assets/suara/13.Syin.mp3', 'deskripsi' => 'Huruf Syin (ش) dibaca "sya" (fathah), "syi" (kasrah), dan "syu" (dhammah). Diucapkan dengan lidah tengah mendekati langit-langit mulut, bersifat ringan dan mengalir.'],
    ['nama' => 'Shod', 'gambar' => 'assets/img/game_huruf/Shod.png', 'suara' => 'assets/suara/14.Shod.mp3', 'deskripsi' => 'Huruf Shod (ص) dibaca "sha" (fathah), "shi" (kasrah), dan "shu" (dhammah). Diucapkan dengan lidah tengah ditekan, bersifat tebal (istila).'],
    ['nama' => 'Dhod', 'gambar' => 'assets/img/game_huruf/Dhod.png', 'suara' => 'assets/suara/17.Dzho.mp3', 'deskripsi' => 'Huruf Dhod (ض) dibaca "dha" (fathah), "dhi" (kasrah), dan "dhu" (dhammah). Diucapkan dengan sisi lidah menyentuh gigi geraham atas, bersifat tebal dan dipantulkan (qalqalah).'],
    ['nama' => 'Tho', 'gambar' => 'assets/img/game_huruf/Tho.png', 'suara' => 'assets/suara/16.Tho.mp3', 'deskripsi' => 'Huruf Tho (ط) dibaca "tha" (fathah), "thi" (kasrah), dan "thu" (dhammah). Diucapkan dengan ujung lidah menyentuh langit-langit mulut, bersifat tebal dan dipantulkan (qalqalah).'],
    ['nama' => 'Dzho', 'gambar' => 'assets/img/game_huruf/Dzho.png', 'suara' => 'assets/suara/17.Dzho.mp3', 'deskripsi' => 'Huruf Dzho (ظ) dibaca "dzha" (fathah), "dzhi" (kasrah), dan "dzhu" (dhammah). Diucapkan dengan ujung lidah menyentuh gigi depan atas, bersifat tebal dan mengalir.'],
    ['nama' => 'Ain', 'gambar' => 'assets/img/game_huruf/Ain.png', 'suara' => 'assets/suara/18.Ain.mp3', 'deskripsi' => 'Huruf Ain (ع) dibaca "‘a" (fathah), "‘i" (kasrah), dan "‘u" (dhammah). Diucapkan dari tenggorokan tengah dengan suara dalam, bersifat sedang dan mengalir.'],
    ['nama' => 'Ghoin', 'gambar' => 'assets/img/game_huruf/Ghoin.png', 'suara' => 'assets/suara/19.Ghain.mp3', 'deskripsi' => 'Huruf Ghoin (غ) dibaca "gho" (fathah, tebal), "ghi" (kasrah, tebal), dan "ghu" (dhammah, tebal). Diucapkan dari tenggorokan atas dekat huruf Kho, dengan mengangkat pangkal lidah. Bersifat tebal (istila) dan mengalir (rakhawah).'],
    ['nama' => 'Fa', 'gambar' => 'assets/img/game_huruf/Fa.png', 'suara' => 'assets/suara/20.Fa.mp3', 'deskripsi' => 'Huruf Fa (ف) dibaca "fa" (fathah), "fi" (kasrah), dan "fu" (dhammah). Diucapkan dengan bibir bawah menyentuh gigi atas, bersifat ringan dan mengalir.'],
    ['nama' => 'Qof', 'gambar' => 'assets/img/game_huruf/Qof.png', 'suara' => 'assets/suara/21.Qof.mp3', 'deskripsi' => 'Huruf Qof (ق) dibaca "qa" (fathah), "qi" (kasrah), dan "qu" (dhammah). Diucapkan dari pangkal lidah menyentuh langit-langit belakang, bersifat tebal dan dipantulkan (qalqalah).'],
    ['nama' => 'Kaf', 'gambar' => 'assets/img/game_huruf/Kaf.png', 'suara' => 'assets/suara/22.Kaf.mp3', 'deskripsi' => 'Huruf Kaf (ك) dibaca "ka" (fathah), "ki" (kasrah), dan "ku" (dhammah). Diucapkan dari pangkal lidah menyentuh langit-langit tengah, bersifat ringan dan mengalir.'],
    ['nama' => 'Lam', 'gambar' => 'assets/img/game_huruf/Lam.png', 'suara' => 'assets/suara/23.Lam.mp3', 'deskripsi' => 'Huruf Lam (ل) dibaca "la" (fathah), "li" (kasrah), dan "lu" (dhammah). Diucapkan dengan ujung lidah menyentuh gusi atas, bersifat ringan dan mengalir.'],
    ['nama' => 'Mim', 'gambar' => 'assets/img/game_huruf/Mim.png', 'suara' => 'assets/suara/24.Mim.mp3', 'deskripsi' => 'Huruf Mim (م) dibaca "ma" (fathah), "mi" (kasrah), dan "mu" (dhammah). Diucapkan dengan menutup kedua bibir, bersifat ringan dan mengalir.'],
    ['nama' => 'Nun', 'gambar' => 'assets/img/game_huruf/Nun.png', 'suara' => 'assets/suara/25.Nun.mp3', 'deskripsi' => 'Huruf Nun (ن) dibaca "na" (fathah), "ni" (kasrah), dan "nu" (dhammah). Diucapkan dengan ujung lidah menyentuh gusi atas, bersifat ringan dan mengalir.'],
    ['nama' => 'Wau', 'gambar' => 'assets/img/game_huruf/Wau.png', 'suara' => 'assets/suara/26.Wawu.mp3', 'deskripsi' => 'Huruf Wau (و) dibaca "wa" (fathah), "wi" (kasrah), dan "wu" (dhammah). Diucapkan dengan memonyongkan bibir, bersifat ringan dan mengalir.'],
    ['nama' => 'Hamzah', 'gambar' => 'assets/img/game_huruf/Hamzah.png', 'suara' => 'assets/suara/27.Hamzah.mp3', 'deskripsi' => 'Huruf Hamzah (ء) dibaca sesuai harakatnya: "a" (fathah), "i" (kasrah), atau "u" (dhammah). Diucapkan dari tenggorokan dengan hentakan ringan.'],
    ['nama' => 'Ya', 'gambar' => 'assets/img/game_huruf/Ya.png', 'suara' => 'assets/suara/29.Ya.mp3', 'deskripsi' => 'Huruf Ya (ي) dibaca "ya" (fathah), "yi" (kasrah), dan "yu" (dhammah). Diucapkan dengan lidah tengah menyentuh langit-langit mulut, bersifat ringan dan mengalir.'],
];
?>
            <!-- Kartu Huruf -->
            <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 gap-5 p-6 rounded-3xl shadow-2xl overflow-y-auto bg-white/60 backdrop-blur-md max-h-[70vh] mx-auto w-full max-w-[90vw] border border-white/30"
                style="direction: rtl;">
                <?php foreach ($hurufHijaiyah as $index => $h): ?>
                    <div class="card bg-white/90 hover:bg-white rounded-xl p-4 shadow-lg text-center relative cursor-pointer transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-2 hover:border-purple-300 transform">
                        <!-- Tombol Info -->
                        <button onclick="showDescription(<?= $index ?>)"
                            class="absolute top-2 right-2 bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm hover:bg-purple-700 transition-all duration-200"
                            title="Info Huruf">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 3a9 9 0 100 18 9 9 0 000-18z" />
                            </svg>
                        </button>
                        <!-- Konten Kartu -->
                        <div onclick="playSound('<?= base_url($h['suara']) ?>')">
                            <img src="<?= base_url($h['gambar']) ?>" alt="<?= $h['nama'] ?>"
                                class="w-20 h-20 object-contain mx-auto mb-3">
                            <p class="text-purple-900 font-bold text-xl tracking-wide"><?= esc($h['nama']) ?>🔊</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Modal untuk Deskripsi -->
            <div id="descriptionModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
                <div class="bg-white/90 backdrop-blur-md rounded-2xl p-6 max-w-lg w-full mx-4 shadow-2xl">
                    <h2 id="modalTitle" class="text-2xl font-bold text-purple-900 mb-4 text-center"></h2>
                    <p id="modalDescription" class="text-gray-800 text-justify"></p>
                    <button onclick="closeModal()"
                        class="mt-6 w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold py-2 px-4 rounded-full hover:from-purple-700 hover:to-pink-700 transition-all duration-300">
                        Tutup
                    </button>
                </div>
            </div>
            <!-- Tombol Kembali -->
            <div class="text-center mt-6">
                <a href="<?= base_url('materi/home_partials') ?>"
                    class="inline-flex items-center spa-link bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-gray-900 font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }
    .overflow-y-auto::-webkit-scrollbar {
        width: 8px;
    }
    .overflow-y-auto::-webkit-scrollbar-thumb {
        background: rgba(109, 40, 217, 0.5);
        border-radius: 4px;
    }
    .overflow-y-auto::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.3);
    }
</style>
<script>
    let currentAudio = null;
    const hurufData = <?= json_encode($hurufHijaiyah) ?>;

    function playSound(url) {
        if (currentAudio) {
            currentAudio.pause();
            currentAudio.currentTime = 0;
        }
        currentAudio = new Audio(url);
        currentAudio.play().catch(err => console.warn("Gagal memutar suara:", err));
    }

    function showDescription(index) {
        const huruf = hurufData[index];
        document.getElementById('modalTitle').textContent = `Huruf ${huruf.nama}`;
        document.getElementById('modalDescription').textContent = huruf.deskripsi;
        document.getElementById('descriptionModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('descriptionModal').classList.add('hidden');
    }

    // Auto play audio sambutan saat halaman dimuat
    $(document).ready(function () {
        const welcomeAudio = new Audio("<?= base_url('sound/MENGENAL.mp3') ?>");
        welcomeAudio.play().catch(err => {
            console.warn("Gagal memutar audio sambutan:", err);
        });
    });
</script>