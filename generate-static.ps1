# Script untuk generate static HTML dari semua route Laravel

Write-Host "Starting Laravel server..." -ForegroundColor Cyan
$server = Start-Process php -ArgumentList "artisan", "serve", "--port=8181" -PassThru -WindowStyle Hidden

Write-Host "Waiting for server to start..." -ForegroundColor Cyan
Start-Sleep -Seconds 4

$routes = @(
    @{url = "http://localhost:8181"; file = "public\index.html"},
    @{url = "http://localhost:8181/tentang-kami"; file = "public\tentang-kami\index.html"},
    @{url = "http://localhost:8181/rocket-stove"; file = "public\rocket-stove\index.html"},
    @{url = "http://localhost:8181/edukasi"; file = "public\edukasi\index.html"},
    @{url = "http://localhost:8181/dokumentasi"; file = "public\dokumentasi\index.html"}
)

foreach ($route in $routes) {
    $dir = Split-Path -Parent $route.file
    if (-not (Test-Path $dir)) {
        New-Item -ItemType Directory -Path $dir -Force | Out-Null
    }
    Write-Host "Generating: $($route.url) -> $($route.file)" -ForegroundColor Green
    try {
        Invoke-WebRequest -Uri $route.url -OutFile $route.file -UseBasicParsing
        Write-Host "  OK" -ForegroundColor Green
    } catch {
        Write-Host "  ERROR: $_" -ForegroundColor Red
    }
}

Write-Host "Stopping Laravel server..." -ForegroundColor Cyan
Stop-Process -Id $server.Id -ErrorAction SilentlyContinue
Get-Process -Name "php" -ErrorAction SilentlyContinue | Where-Object { $_.MainWindowTitle -eq "" } | Stop-Process -Force -ErrorAction SilentlyContinue

Write-Host "Done! Static HTML files generated in public/" -ForegroundColor Cyan
