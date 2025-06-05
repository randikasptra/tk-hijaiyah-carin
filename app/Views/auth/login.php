<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-purple-300 via-pink-300 to-yellow-200 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-10 relative overflow-hidden">
        <!-- Background shapes -->
        <div class="absolute -top-16 -left-16 w-40 h-40 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute -bottom-20 -right-16 w-56 h-56 bg-pink-400 rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-10 left-20 w-40 h-40 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>

        <h2 class="text-4xl font-extrabold text-center text-purple-700 mb-10 drop-shadow-lg">Selamat Datang 👋</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <div
                class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-6 text-center font-semibold shadow-sm animate-shake">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('/login') ?>" class="space-y-6">
            <div>
                <label for="email" class="block mb-2 text-gray-700 font-medium">Email</label>
                <input id="email" type="email" name="email" required
                    class="w-full px-5 py-3 rounded-xl border border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-purple-300 transition duration-300 shadow-sm focus:shadow-md"
                    placeholder="contoh: nama@domain.com" />
            </div>

            <div>
                <label for="password" class="block mb-2 text-gray-700 font-medium">Password</label>
                <input id="password" type="password" name="password" required
                    class="w-full px-5 py-3 rounded-xl border border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-purple-300 transition duration-300 shadow-sm focus:shadow-md"
                    placeholder="Masukkan password" />
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-pink-600 hover:to-purple-600 text-white font-bold py-3 rounded-xl shadow-lg transition duration-300 transform hover:scale-105">
                Login
            </button>
        </form>
    </div>

    <style>
        /* Animasi blob warna-warni background */
        @keyframes blob {
            0%,
            100% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -20px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 30px) scale(0.9);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        /* Animasi shake untuk pesan error */
        @keyframes shake {
            0%,
            100% {
                transform: translateX(0);
            }

            20%,
            60% {
                transform: translateX(-8px);
            }

            40%,
            80% {
                transform: translateX(8px);
            }
        }

        .animate-shake {
            animation: shake 0.5s;
        }
    </style>

</body>

</html>
