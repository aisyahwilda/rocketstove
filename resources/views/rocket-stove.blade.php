<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mengenal Rocket Stove EcoBurner – teknologi pembakaran tepat guna yang efisien dan ramah lingkungan untuk masyarakat Balikpapan.">

    <title>Rocket Stove – EcoBurner</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
</head>
<body class="antialiased bg-[#1b1b18] flex flex-col min-h-screen">

    <div id="app" class="relative flex flex-col min-h-screen">

        <navbar-component></navbar-component>

        <rocket-stove-hero></rocket-stove-hero>

        <mengenal-rocket-stove-section></mengenal-rocket-stove-section>

        <struktur-rocket-stove-section></struktur-rocket-stove-section>

        <cara-kerja-rocket-stove-section></cara-kerja-rocket-stove-section>

        <alur-pembakaran-section></alur-pembakaran-section>

        <cara-penggunaan-section></cara-penggunaan-section>

        <tips-penggunaan-section></tips-penggunaan-section>

        <rocket-stove-cta-section></rocket-stove-cta-section>

        <footer-component class="mt-auto"></footer-component>

    </div>

</body>
</html>
