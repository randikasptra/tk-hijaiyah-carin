<?php $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-screen bg-cover bg-center flex items-center justify-center p-6 relative"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

    <!-- Tombol kembali -->
    <a href="<?= base_url('/materi/menghafal') ?>"
        class="absolute top-4 left-4 bg-white/80 hover:bg-white text-purple-700 font-bold py-2 px-4 rounded-full shadow-md flex items-center transition transform hover:scale-105 z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Kembali
    </a>

    <div class="w-full max-w-6xl bg-white/80 backdrop-blur-md rounded-3xl shadow-2xl p-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Judul -->
        <div class="col-span-3 text-center mb-6">
            <h1 class="text-3xl md:text-4xl font-bold text-purple-800 drop-shadow-lg">BELAJAR HARAKAT HIJAIYAH YUK!</h1>
        </div>


        <!-- Kolom kiri -->
        <div class="col-span-1 flex flex-col items-center justify-between">
            <div id="harakatDisplay" class="flex justify-center gap-4 mb-6"></div>
            <img src="<?= base_url('assets/img/mini-cartoon.png') ?>" alt="Anak" class="w-52 h-auto">
        </div>

        <!-- Kolom kanan -->
        <div class="col-span-2 grid grid-cols-5 sm:grid-cols-6 md:grid-cols-7 gap-5 items-start justify-center" dir="rtl">
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
                    class="bg-white hover:bg-purple-100 p-2 rounded-xl shadow-md transition transform hover:scale-105">
                    <img src="<?= base_url('assets/img/hijaiyah_huruf/' . $huruf . '.png') ?>"
                        alt="<?= $huruf ?>" class="w-20 h-20 object-contain mx-auto">
                </button>
            <?php endforeach; ?>
        </div>

    </div>
</div>

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

        // Main huruf sound
        const hurufAudio = new Audio("<?= base_url('assets/audio/hijaiyah_huruf/') ?>" + huruf + ".mp3");
        hurufAudio.play();

        // Tampilkan dan aktifkan suara untuk harakat
        if (harakatMap[huruf]) {
            harakatMap[huruf].forEach(h => {
                const img = document.createElement('img');
                img.src = "<?= base_url('assets/img/harakat_huruf/') ?>" + h + ".png";
                img.alt = h;
                img.className = "w-24 h-24 object-contain bg-white p-2 rounded-xl shadow-md hover:scale-105 transition cursor-pointer";

                // Tambah suara saat klik harakat
                img.onclick = function() {
                    const harakatAudio = new Audio("<?= base_url('assets/audio/harakat_huruf/') ?>" + h + ".mp3");
                    harakatAudio.play();
                };

                container.appendChild(img);
            });
        }
    }
</script>
<?= $this->endSection() ?>
