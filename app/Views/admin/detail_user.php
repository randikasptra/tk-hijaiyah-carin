<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="min-h-screen flex items-center justify-center px-4 bg-gradient-to-br from-purple-100 to-yellow-50">
    <div class="max-w-md w-full bg-white shadow-xl rounded-2xl p-8 border border-purple-200">
        <h2 class="text-2xl font-bold text-purple-700 text-center mb-6">Detail Pengguna</h2>

        <div class="space-y-4">
            <div>
                <label class="text-gray-500 text-sm">Nama</label>
                <p class="text-lg font-semibold text-gray-800"><?= esc($user['name']) ?></p>
            </div>
            <div>
                <label class="text-gray-500 text-sm">Email</label>
                <p class="text-lg font-semibold text-gray-800"><?= esc($user['email']) ?></p>
            </div>
            <div>
                <label class="text-gray-500 text-sm">Role</label>
                <span class="inline-block px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm font-medium">
                    <?= esc(ucfirst($user['role'])) ?>
                </span>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="<?= base_url('admin/user') ?>"
                class="inline-flex items-center px-4 py-2 bg-purple-500 hover:bg-purple-600 text-white font-semibold rounded-full transition">
                ⬅ Kembali
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>