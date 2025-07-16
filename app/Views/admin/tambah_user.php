<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4 text-blue-800">Tambah User</h2>

    <form action="<?= base_url('admin/user/tambah') ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" value="<?= old('name') ?>">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" value="<?= old('email') ?>">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <div class="mb-4">
            <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
            <select name="role" id="role" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                <option value="">-- Pilih Role --</option>
                <option value="guru" <?= old('role') == 'guru' ? 'selected' : '' ?>>Guru</option>
                <option value="admin" <?= old('role') == 'admin' ? 'selected' : '' ?>>Admin</option>
            </select>
        </div>

        <div class="flex justify-end">
            <a href="<?= base_url('admin/user') ?>" class="bg-gray-400 text-white px-4 py-2 rounded-md mr-2">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Simpan</button>
        </div>
    </form>
</div>

<!-- Modal Error Tailwind -->
<?php if (session()->getFlashdata('error')): ?>
<div id="errorModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <div class="flex justify-between items-center border-b pb-2">
            <h3 class="text-lg font-semibold text-red-600">Gagal Menambahkan User</h3>
            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="mt-4 text-gray-700">
            <?= session()->getFlashdata('error') ?>
        </div>
        <div class="mt-6 text-right">
            <button onclick="closeModal()" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Tutup</button>
        </div>
    </div>
</div>

<script>
    window.onload = function () {
        document.getElementById('errorModal').classList.remove('hidden');
    };

    function closeModal() {
        document.getElementById('errorModal').classList.add('hidden');
    }
</script>
<?php endif; ?>

<?= $this->endSection() ?>
