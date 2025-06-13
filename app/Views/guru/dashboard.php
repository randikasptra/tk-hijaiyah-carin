<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        .pulse-hover:hover {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .shine-effect {
            position: relative;
            overflow: hidden;
        }

        .shine-effect::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(30deg);
            transition: all 0.6s ease;
            pointer-events: none;
        }

        .shine-effect:hover::after {
            left: 100%;
            top: 100%;
        }

        /* Modal Animation */
        .modal {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .modal-enter {
            opacity: 0;
            transform: scale(0.95);
        }

        .modal-enter-active {
            opacity: 1;
            transform: scale(1);
        }

        .modal-exit {
            opacity: 1;
            transform: scale(1);
        }

        .modal-exit-active {
            opacity: 0;
            transform: scale(0.95);
        }

        /* New greeting card style */
        .greeting-card {
            background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border-radius: 16px;
            position: relative;
            overflow: hidden;
        }

        .greeting-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 120px;
            height: 120px;
            background: radial-gradient(circle, rgba(167, 243, 208, 0.3) 0%, rgba(167, 243, 208, 0) 70%);
        }

        .greeting-card::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: -20px;
            width: 80px;
            height: 80px;
            background: radial-gradient(circle, rgba(110, 231, 183, 0.2) 0%, rgba(110, 231, 183, 0) 70%);
            border-radius: 50%;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-green-50 to-green-100 min-h-screen p-6 font-sans">

    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <header class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-green-900">Game Interaktif</h1>
                <p class="text-green-600">Dashboard Guru</p>
            </div>
            <div class="flex gap-3">
                <button id="settingsBtn"
                    class="p-2 rounded-full bg-white shadow hover:bg-green-100 transition-colors duration-200">
                    <i data-feather="settings" class="w-5 h-5 text-green-700"></i>
                </button>
                <a href="<?= base_url('/logout') ?>"
                    class="p-2 rounded-full bg-white shadow hover:bg-red-100 transition-colors duration-200">
                    <i data-feather="log-out" class="w-5 h-5 text-red-600"></i>
                </a>
            </div>
        </header>

        <!-- Greeting Card -->
    <div class="greeting-card p-6 mb-8 relative bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-green-200">
    <div class="flex items-start gap-4">
        <!-- Avatar -->
        <div class="relative">
            <div class="w-16 h-16 bg-gradient-to-tr from-green-300 via-teal-200 to-cyan-200 rounded-full shadow-inner flex items-center justify-center text-2xl font-bold text-green-900">
                <?= strtoupper(substr($user_name, 0, 2)) ?>
            </div>
            <!-- Status Dot -->
            <span class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-white rounded-full animate-ping"></span>
            <span class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></span>
        </div>

        <!-- Info -->
        <div class="flex-1">
            <div class="flex justify-between items-start mb-2">
                <div>
                    <h2 class="text-2xl font-semibold text-green-800">Halo, <?= esc($user_name) ?></h2>
                    <p class="text-sm text-green-600">Guru <?= esc($school_name ?? 'TK ABC') ?></p>
                </div>
                <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium shadow">Online</span>
            </div>

            <!-- Message Box (tanpa border, lebih clean) -->
            <div class="bg-green-50 rounded-xl p-4 text-sm text-green-700 flex items-start gap-3 shadow-sm mt-3">
                <div class="mt-[2px]">
                    <i data-feather="info" class="w-4 h-4 text-green-500"></i>
                </div>
                <p>
                    Kamu login sebagai <span class="font-semibold">Guru</span>. Selamat mengajar dan semoga harimu menyenangkan!
                    Jangan lupa untuk terus memantau perkembangan anak-anak dengan penuh semangat 💚.
                </p>
            </div>
        </div>
    </div>
</div>


 

        <!-- Main Game Card -->
        <div class="shine-effect pulse-hover mb-8">
            <a href="<?= base_url('materi/dashboard') ?>"
                class="block bg-gradient-to-r from-teal-500 to-cyan-600 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                <div class="text-center text-white">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-5">
                        <i data-feather="play" class="w-8 h-8"></i>
                    </div>
                    <h2 class="text-2xl font-bold mb-2">Akses Game Edukasi</h2>
                    <p class="text-cyan-100 mb-6">Klik untuk membuka koleksi game interaktif pembelajaran</p>
                    <div
                        class="inline-flex items-center px-6 py-2 bg-white/30 rounded-full font-medium hover:bg-white/40 transition-colors duration-200">
                        Mulai Sekarang <i data-feather="arrow-right" class="ml-2 w-4 h-4"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Quick Actions -->
       
    </div>

    <!-- Modal Settings -->
    <div id="settingsModal"
        class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black bg-opacity-50">
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md modal">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold text-green-800">Pengaturan Akun</h3>
                    <button id="closeModalBtn" class="p-1 rounded-full hover:bg-gray-100">
                        <i data-feather="x" class="w-5 h-5 text-gray-500"></i>
                    </button>
                </div>

                <form action="<?= base_url('guru/update_profile') ?>" method="post" class="space-y-4">
                    <?= csrf_field() ?>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                        <input type="text" name="name" id="name" required value="<?= esc($user_name) ?>"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" id="email" required value="<?= esc($user_email) ?>"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password Baru</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
                        <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti password.</p>
                    </div>

                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" id="cancelBtn"
                            class="px-4 py-2 text-gray-700 rounded-md hover:bg-gray-100 transition-colors duration-200">
                            Batal
                        </button>
                        <button type="submit"
                            class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors duration-200">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        feather.replace();

        // Modal functionality
        const settingsBtn = document.getElementById('settingsBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const modal = document.getElementById('settingsModal');

        function toggleModal() {
            modal.classList.toggle('hidden');
            if (!modal.classList.contains('hidden')) {
                modal.querySelector('.modal').classList.add('modal-enter-active');
            }
        }

        settingsBtn.addEventListener('click', toggleModal);
        closeModalBtn.addEventListener('click', toggleModal);
        cancelBtn.addEventListener('click', toggleModal);

        // Close modal when clicking outside
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                toggleModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                toggleModal();
            }
        });
    </script>
</body>

</html>