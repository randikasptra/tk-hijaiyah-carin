<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Bungkus untuk SPA -->
<div id="spa-container">
    <?= view('materi/partials/mengenal_content', ['huruf' => $huruf]) ?>
</div>

<?= $this->endSection() ?>