<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="ml-64">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-blue-800">Data User</h2>
        <a href="<?= base_url('admin/user/tambah') ?>"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow">
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
                    <td class="py-3 px-4"><span class="text-gray-500 italic">Terenkripsi</span></td>
                    <td class="py-3 px-4"><?= esc($user['role']) ?></td>

                    <td class="py-3 px-4 text-center space-x-2">

                        <!-- Detail -->
                        <button class="text-blue-600 hover:text-blue-800 detail-btn" title="Lihat Detail"
                            data-id="<?= $user['id'] ?>" data-name="<?= esc($user['name']) ?>"
                            data-email="<?= esc($user['email']) ?>" data-role="<?= esc($user['role']) ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                        <!-- Edit -->
                        <button class="text-yellow-500 hover:text-yellow-700 edit-btn" title="Edit User"
                            data-id="<?= $user['id'] ?>" data-name="<?= esc($user['name']) ?>"
                            data-email="<?= esc($user['email']) ?>" data-role="<?= esc($user['role']) ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5h2m-2 0a2 2 0 00-2 2v2m0 0h6m0 0v2a2 2 0 01-2 2H9a2 2 0 01-2-2v-2m12 4v6a2 2 0 01-2 2H7a2 2 0 01-2-2v-6" />
                            </svg>
                        </button>

                        <!-- Hapus -->
                        <a href="<?= base_url('admin/user/hapus/' . $user['id']) ?>" class="text-red-600 hover:text-red-800"
                            title="Hapus User" onclick="return confirm('Yakin ingin menghapus user ini?')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Modal Edit User -->
    <div id="editModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-lg shadow-lg relative">
            <h2 class="text-2xl font-bold text-purple-700 mb-4">Edit User</h2>
            <form id="editForm" method="post" action="">

                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama</label>
                    <input type="text" name="name" id="edit-name" class="w-full p-2 border border-gray-300 rounded-lg"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Email</label>
                    <input type="email" name="email" id="edit-email"
                        class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Role</label>
                    <select name="role" id="edit-role" class="w-full p-2 border border-gray-300 rounded-lg">
                        <option value="admin">Admin</option>
                        <option value="guru">Guru</option>
                        <option value="siswa">Siswa</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Password (kosongkan jika tidak ingin diganti)</label>
                    <input type="password" name="password" id="edit-password"
                        class="w-full p-2 border border-gray-300 rounded-lg">
                </div>

                <div class="flex justify-between mt-6">
                    <button type="button" id="closeModal" class="text-gray-600 hover:underline">← Batal</button>
                    <button type="submit"
                        class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-semibold">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- Script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const modal = document.getElementById('editModal');
        const form = document.getElementById('editForm');
        const nameInput = document.getElementById('edit-name');
        const emailInput = document.getElementById('edit-email');
        const roleSelect = document.getElementById('edit-role');

        document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const userId = btn.getAttribute('data-id');
                const name = btn.getAttribute('data-name');
                const email = btn.getAttribute('data-email');
                const role = btn.getAttribute('data-role');

                nameInput.value = name;
                emailInput.value = email;
                roleSelect.value = role;
                form.action = `<?= base_url('admin/user/edit/') ?>${userId}`;


                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });

        document.getElementById('closeModal').addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    });
</script>

<?= $this->endSection() ?>