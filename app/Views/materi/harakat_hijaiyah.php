<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-screen bg-cover bg-center p-6" style="background-image: url('<?= base_url('assets/img/bg-bukit.jpg') ?>');">
    <div class="bg-white/80 backdrop-blur-lg p-6 rounded-3xl shadow-xl max-w-5xl mx-auto space-y-8">
        <h1 class="text-3xl md:text-4xl font-extrabold text-purple-800 text-center">Belajar Harakat Huruf Hijaiyah</h1>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <?php
            $harakatList = [
                'Ba',
                'Bi',
                'bu',
                'ta',
                'ti',
                'tu',
                'tsa',
                'tsi',
                'tsu',
                'ja',
                'ji',
                'ju',
                'kha',
                'khi',
                'khu',
                'da',
                'di',
                'du',
                'dza',
                'dzi',
                'dzu',
                'ro',
                'ri',
                'ru',
                'za',
                'zi',
                'zu',
                'sha',
                'shi',
                'shu',
                'dha',
                'dhi',
                'dhu',
                'tho',
                'thi',
                'thu',
                'dzha',
                'dzhi',
                'dzhu',
                'fa',
                'fi',
                'fu',
                'qa',
                'qi',
                'qu',
                'ka',
                'ki',
                'ku',
                'la',
                'li',
                'lu',
                'ma',
                'mi',
                'mu',
                'na',
                'ni',
                'nu',
                'ha',
                'hi',
                'hu',
                'wa',
                'wi',
                'wu',
                'ya',
                'yi',
                'yu',
                'hamzah',
                'hamzih',
                'hamzuh'
            ];

            foreach ($harakatList as $item):
            ?>
                <div class="text-center">
                    <img src="<?= base_url('assets/img/harakat_huruf/' . $item . '.png') ?>" alt="<?= strtoupper($item) ?>"
                        class="w-20 h-20 mx-auto object-contain transition hover:scale-110 duration-300">
                    <p class="text-purple-700 font-bold mt-2 uppercase"><?= $item ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>