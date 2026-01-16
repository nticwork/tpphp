<?php

header('Content-Type: text/html; charset=utf-8');

$uri  = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($uri, PHP_URL_PATH) ?: '/';

// Nettoyage: enlever le préfixe /public si présent
if (str_starts_with($path, '/public/')) {
    $path = substr($path, strlen('/public'));
}

// Routes simples
if ($path === '/learn' || $path === '/learn.php') {
    require __DIR__ . '/../public/learn.php';
    exit;
}

// Page par défaut
require __DIR__ . '/../public/index.php';
