<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dokumentasi & Galeri Kegiatan EcoBurner Rocket Stove">

    <title>Dokumentasi Kegiatan – EcoBurner</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
</head>
<body class="antialiased bg-[#1b1b18] flex flex-col min-h-screen">

    <div id="app" class="relative flex flex-col min-h-screen">

        <!-- Navbar Component -->
        <navbar-component></navbar-component>

        <!-- Dokumentasi Sections -->
        <dokumentasi-hero-section></dokumentasi-hero-section>

        <dokumentasi-grid-section></dokumentasi-grid-section>

        <!-- Terima Kasih Section -->
        <dokumentasi-terima-kasih-section></dokumentasi-terima-kasih-section>

        <!-- CTA Section -->
        <edukasi-cta-section></edukasi-cta-section>

        <!-- Footer Component -->
        <footer-component class="mt-auto"></footer-component>

    </div>

</body>
</html>
