<?php

header('Content-Type: text/html; charset=utf-8');

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

// Nettoyage /public
if (str_starts_with($path, '/public/')) {
    $path = substr($path, strlen('/public'));
}

// Page par défaut
if ($path === '/' || $path === '') {
    $file = 'index.php';
} else {
    // /learn → learn.php
    $file = ltrim($path, '/') . '.php';
}

// Sécurité : autoriser seulement les fichiers dans /public
$fullPath = __DIR__ . '/../public/' . basename($file);

if (is_file($fullPath)) {
    require $fullPath;
    exit;
}

// 404 simple
http_response_code(404);
echo '<h1>404 - Page non trouvée</h1>';
