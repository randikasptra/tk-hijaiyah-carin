<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-blue-50 min-h-screen">

    <!-- Sidebar -->
    <?= $this->include('components/admin_sidenav') ?>
    
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <?= $this->include('components/admin_header') ?>

        <!-- ✅ Top Navbar -->
        
        <!-- ✅ Page Content -->
        <main class="flex-1 p-8 md:p-10">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-blue-800 mb-1">Dashboard Admin</h2>
                <p class="text-gray-700">Halo, <strong><?= session()->get('user_name') ?></strong>! Kamu login sebagai <strong>Admin</strong>.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-200 p-6 rounded-xl shadow-md">
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Jumlah Admin</h3>
                    <p class="text-4xl font-bold text-blue-900"><?= esc($jumlahAdmin) ?></p>
                </div>

                <div class="bg-purple-200 p-6 rounded-xl shadow-md">
                    <h3 class="text-xl font-bold text-purple-800 mb-2">Jumlah Guru</h3>
                    <p class="text-4xl font-bold text-purple-900"><?= esc($jumlahGuru) ?></p>
                </div>

               
            </div>
        </main>

    </div>

</body>

</html>
