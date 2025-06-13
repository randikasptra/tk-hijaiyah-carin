<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - TK RA Asyifa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-blue-100 via-green-100 to-yellow-100 min-h-screen flex items-center justify-center px-4" style="font-family: 'Baloo 2', cursive">

    <div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-8 relative overflow-hidden border-4 border-yellow-300">
        <!-- Background elements -->
        <div class="absolute -top-10 -left-10 w-32 h-32 bg-blue-200 rounded-full opacity-30 animate-float"></div>
        <div class="absolute -bottom-8 -right-8 w-40 h-40 bg-green-200 rounded-full opacity-30 animate-float animation-delay-2000"></div>
        
        <!-- Header with school logo/icon -->
        <div class="flex flex-col items-center mb-6">
            <div class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center shadow-md mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-2">TK RA ASYIFA</h2>
            <p class="text-yellow-500 text-sm font-semibold">Sistem Pembelajaran Digital</p>
        </div>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-6 text-center font-semibold shadow-sm animate-bounce">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('/login') ?>" class="space-y-5">
            <div>
                <label for="email" class="block mb-2 text-gray-700 font-medium flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email Guru/Admin
                </label>
                <input id="email" type="email" name="email" required
                    class="w-full px-5 py-3 rounded-xl border-2 border-blue-200 placeholder-gray-400 focus:outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 transition duration-200 shadow-sm"
                    placeholder="email@sekolah.com" />
            </div>

            <div>
                <label for="password" class="block mb-2 text-gray-700 font-medium flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    Password
                </label>
                <input id="password" type="password" name="password" required
                    class="w-full px-5 py-3 rounded-xl border-2 border-blue-200 placeholder-gray-400 focus:outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 transition duration-200 shadow-sm"
                    placeholder="••••••••" />
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-400 to-green-400 hover:from-green-400 hover:to-blue-400 text-white font-bold py-3 rounded-xl shadow-lg transition duration-300 transform hover:scale-[1.02] flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                Masuk
            </button>
        </form>
        
        <!-- Footer -->
        <div class="mt-8 text-center text-xs text-gray-500">
            <p>© 2023 TK RA Asyifa - Belajar dengan Ceria</p>
        </div>
    </div>

    <style>
        /* Animasi mengambang untuk elemen background */
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        
        /* Animasi bounce untuk pesan error */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        
        .animate-bounce {
            animation: bounce 0.8s;
        }
    </style>

</body>

</html>