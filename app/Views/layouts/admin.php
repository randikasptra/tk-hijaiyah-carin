<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Admin Panel' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tambahkan Alpine.js -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- SweetAlert2 CSS & JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="flex bg-blue-50 min-h-screen">
    <?= $this->include('components/admin_sidenav') ?>

    <div class="flex-1 flex flex-col">
        <?= $this->include('components/admin_header') ?>

        <main class="flex-1 p-10">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

 <script>
    <?php if (session()->getFlashdata('success')): ?>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: '<?= session()->getFlashdata('success') ?>',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    <?php elseif (session()->getFlashdata('error')): ?>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: '<?= session()->getFlashdata('error') ?>',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    <?php endif; ?>
</script>

</body>
</html>
