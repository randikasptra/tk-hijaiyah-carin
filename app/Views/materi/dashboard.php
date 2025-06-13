<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div id="spa-container">
    <?= view('materi/partials/dashboard_content') ?>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.spa-link', function (e) {
        e.preventDefault();
        const url = $(this).attr('href');

        $('#spa-container').html('<p class="text-purple-800 font-bold text-xl animate-pulse">Memuat konten...</p>');

        $.get(url, function (data) {
            $('#spa-container').html(data);
        }).fail(function () {
            $('#spa-container').html('<p class="text-red-500 font-bold">Gagal memuat halaman.</p>');
        });
    });

    $(document).ready(function () {
        $('.fade-target').hide().fadeIn(1000);
    });
</script>
<?= $this->endSection() ?>