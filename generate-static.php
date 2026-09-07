<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$routes = [
    '/' => 'public/index.html',
    '/tentang-kami' => 'public/tentang-kami/index.html',
    '/rocket-stove' => 'public/rocket-stove/index.html',
    '/edukasi' => 'public/edukasi/index.html',
    '/dokumentasi' => 'public/dokumentasi/index.html',
];

foreach ($routes as $uri => $file) {
    $request = Illuminate\Http\Request::create($uri, 'GET');
    $response = $kernel->handle($request);
    $content = $response->getContent();
    $content = str_replace('http://localhost', '', $content);
    
    $dir = dirname(__DIR__.'/'.$file);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    file_put_contents(__DIR__.'/'.$file, $content);
    echo "Generated $file\n";
}
