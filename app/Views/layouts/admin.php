<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Admin Panel' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-blue-50 min-h-screen">
    <?= $this->include('components/admin_sidenav') ?>

    <div class="flex-1 flex flex-col">
        <?= $this->include('components/admin_header') ?>

        <main class="flex-1 p-10">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</body>

</html>