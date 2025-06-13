<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="min-h-screen flex items-center justify-center px-4 bg-gray-50">
    <div class="max-w-md w-full bg-white shadow-lg rounded-xl p-8 border border-gray-200">
        <div class="text-center mb-6">
            <div class="mx-auto w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Detail Pengguna</h2>
        </div>

        <div class="space-y-5">
            <div>
                <label class="block text-sm text-gray-500 mb-1">Nama</label>
                <p class="text-lg font-medium text-gray-800"><?= esc($user['name']) ?></p>
            </div>
            
            <div>
                <label class="block text-sm text-gray-500 mb-1">Email</label>
                <p class="text-lg font-medium text-gray-800"><?= esc($user['email']) ?></p>
            </div>
            
            <div>
                <label class="block text-sm text-gray-500 mb-1">Role</label>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                    <?= esc(ucfirst($user['role'])) ?>
                </span>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="<?= base_url('admin/user') ?>" class="inline-flex items-center px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar Pengguna
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>