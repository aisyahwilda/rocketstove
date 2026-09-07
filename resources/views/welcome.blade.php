<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>EcoBurner</title>
    <link rel="icon" type="image/png" href="/images/logo.png">

    @vite([
        'resources/css/app.css',
        'resources/css/permasalahan-section.css',
        'resources/css/dampak-section.css',
        'resources/js/app.js',
    ])
</head>
<body class="antialiased bg-[#1b1b18] flex flex-col min-h-screen">
    
    <div id="app" class="relative flex flex-col min-h-screen">
        
        <navbar-component></navbar-component>
        
        <hero-component></hero-component>

        <permasalahan-section></permasalahan-section>

        <rocket-stove-section></rocket-stove-section>

        <dampak-section></dampak-section>

        <cta-section></cta-section>

        <footer-component class="mt-auto"></footer-component>
        
    </div>

</body>
</html>