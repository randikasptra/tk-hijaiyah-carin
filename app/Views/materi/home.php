<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="w-full h-[100dvh] bg-cover bg-center"
    style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <!-- Kontainer SPA -->
    <div id="spa-container">
        <?= view('materi/partials/home_content') ?>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).on('click', '.spa-link', function (e) {
        e.preventDefault();
        const url = $(this).attr('href');

        $('#spa-container').html('<p class="text-purple-800 font-bold text-xl animate-pulse">Memuat halaman...</p>');

        $.get(url, function (data) {
            $('#spa-container').html(data);
        }).fail(function () {
            $('#spa-container').html('<p class="text-red-500 font-bold">Gagal memuat halaman.</p>');
        });
    });
</script>
<?= $this->endSection() ?>