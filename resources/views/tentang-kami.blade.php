<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tentang EcoBurner - Program inovasi sosial yang menggabungkan teknologi tepat guna dan edukasi masyarakat untuk pengelolaan sampah yang lebih baik.">

    <title>Tentang Kami – EcoBurner</title>

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

        <tentang-hero-component></tentang-hero-component>

        <latar-belakang-section></latar-belakang-section>

        <mengapa-section></mengapa-section>

        <program-section></program-section>

        <tim-section></tim-section>

        <mitra-program-section></mitra-program-section>

        <footer-component class="mt-auto"></footer-component>

    </div>

</body>
</html>
