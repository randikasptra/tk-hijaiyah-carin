<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Menghafal Harakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("<?= base_url('assets/images/bg-siswa.png') ?>");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Fredoka', sans-serif;
        }

        .card-anim {
            animation: float 3s ease-in-out infinite;
        }

        .card-anim:hover {
            transform: scale(1.07) rotate(-2deg);
            transition: all 0.3s ease-in-out;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            background-color: #fef08a;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Gelembung */
        .bubble {
            position: absolute;
            bottom: -50px;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: rise 8s infinite ease-in;
        }

        @keyframes rise {
            0% {
                bottom: -40px;
                opacity: 0;
            }

            50% {
                opacity: 0.7;
            }

            100% {
                bottom: 100%;
                opacity: 0;
            }
        }

        /* Burung terbang */
        .bird {
            position: absolute;
            top: 50px;
            left: -200px;
            width: 100px;
            animation: fly 20s linear infinite;
        }

        @keyframes fly {
            0% {
                left: -150px;
                top: 50px;
            }

            50% {
                top: 30px;
            }

            100% {
                left: 110%;
                top: 50px;
            }
        }
    </style>
</head>

<body>
    <div class="relative w-full h-[100vh] overflow-hidden bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">

        <!-- Ornamen Burung -->
        <img src="<?= base_url('assets/img/Alif.png') ?>" class="bird z-10" alt="Burung" />

        <!-- Gelembung -->
        <div class="bubble left-[20%] w-[12px] h-[12px]"></div>
        <div class="bubble left-[50%] w-[20px] h-[20px]"></div>
        <div class="bubble left-[70%] w-[15px] h-[15px]"></div>

        <!-- Ornamen Kiri -->
        <img src="<?= base_url('assets/img/gambar-pinggir.png') ?>" alt="Ornamen Kiri"
            class="absolute left-0 top-0 bottom-0 h-full object-contain z-0" style="max-width: 120px;">

        <!-- Ornamen Kanan -->
        <img src="<?= base_url('assets/img/gambar-pinggir.png') ?>" alt="Ornamen Kanan"
            class="absolute right-0 top-0 bottom-0 h-full object-contain z-0 transform scale-x-[-1]" style="max-width: 120px;">

        <!-- Konten Utama -->
        <div class="min-h-screen flex items-center justify-center px-6 py-10 relative z-10">
            <div class="bg-white/40 backdrop-blur-md rounded-3xl shadow-xl p-10 w-full max-w-5xl z-10 mx-auto">

                <h1 class="text-center text-4xl md:text-5xl font-bold text-purple-700 mb-12">
                    Harakat Huruf Hijaiyah
                </h1>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <!-- Fathah -->
                    <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 card-anim transition duration-300 cursor-pointer" data-suara="<?= base_url('assets/suara/fathah.mp3') ?>">
                        <img src="<?= base_url('assets/img/fathah.png') ?>" alt="Fathah" class="mx-auto w-24 h-24 object-contain mb-4">
                        <h2 class="text-2xl font-bold text-black">Fathah</h2>
                        <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-red-600">"a"</span></p>
                    </div>

                    <!-- Kasrah -->
                    <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 card-anim transition duration-300 cursor-pointer" data-suara="<?= base_url('assets/suara/kasrah.mp3') ?>">
                        <img src="<?= base_url('assets/img/kasrah.png') ?>" alt="Kasrah" class="mx-auto w-24 h-24 object-contain mb-4">
                        <h2 class="text-2xl font-bold text-black">Kasrah</h2>
                        <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-blue-600">"i"</span></p>
                    </div>

                    <!-- Dhammah -->
                    <div class="bg-yellow-200 rounded-2xl shadow-lg p-6 card-anim transition duration-300 cursor-pointer" data-suara="<?= base_url('assets/suara/dhammah.mp3') ?>">
                        <img src="<?= base_url('assets/img/domah.png') ?>" alt="Dhammah" class="mx-auto w-24 h-24 object-contain mb-4">
                        <h2 class="text-2xl font-bold text-black">Dhammah</h2>
                        <p class="text-lg text-gray-700 mt-1">dibaca <span class="font-semibold text-green-600">"u"</span></p>
                    </div>
                </div>

        
                <!-- Tombol Kembali -->
                <div class="mt-10 text-center">
                    <a href="<?= base_url('siswa/home') ?>" class="inline-flex items-center bg-pink-400 hover:bg-pink-500 text-white font-semibold py-2 px-6 rounded-full shadow-md transition transform hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk mainkan suara -->
    <script>
        document.querySelectorAll('[data-suara]').forEach(card => {
            card.addEventListener('click', () => {
                const audio = new Audio(card.getAttribute('data-suara'));
                audio.play();
            });
        });
    </script>
</body>

</html>