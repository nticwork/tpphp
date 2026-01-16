<?php

// Forcer le bon content-type
header('Content-Type: text/html; charset=utf-8');

// Simuler le dossier public
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Charger ton app PHP
require __DIR__ . '/../public/index.php';
