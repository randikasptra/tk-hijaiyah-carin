<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-blue-800">Data User</h2>
    <a href="<?= base_url('admin/user/tambah') ?>" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow">
        + Tambah User
    </a>
</div>

<table class="w-full bg-white shadow rounded-lg overflow-hidden">
    <thead class="bg-blue-100 text-blue-800">
        <tr>
            <th class="py-3 px-4 text-left">Nama</th>
            <th class="py-3 px-4 text-left">Email</th>
            <th class="py-3 px-4 text-left">Password</th>
            <th class="py-3 px-4 text-left">Role</th>
            <th class="py-3 px-4 text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr class="border-b">
                <td class="py-3 px-4"><?= esc($user['name']) ?></td>
                <td class="py-3 px-4"><?= esc($user['email']) ?></td>
                <td class="py-3 px-4">
                    <span class="text-gray-500 italic">Terenkripsi</span>
                </td>
                <td class="py-3 px-4"><?= esc($user['role']) ?></td>
                <td class="py-3 px-4 text-center space-x-2">
                    <a href="<?= base_url('admin/user/edit/' . $user['id']) ?>" class="text-yellow-500 hover:underline">Edit</a>
                    <a href="<?= base_url('admin/user/hapus/' . $user['id']) ?>" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
