<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-purple-200 via-pink-200 to-yellow-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-3xl font-bold text-center text-purple-700 mb-6">Selamat Datang 👋</h2>

        <?php if (session()->getFlashdata(key: 'error')): ?>
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('/login') ?>" class="space-y-4">
            <div>
                <label class="block mb-1 font-medium text-gray-700">Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none" />
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none" />
            </div>

            <button type="submit"
                class="w-full bg-purple-500 hover:bg-purple-600 text-white py-2 rounded-lg font-semibold transition duration-200">
                Login
            </button>
        </form>
    </div>

</body>

</html>

</html>