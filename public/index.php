<?php
// Nombre de lignes du triangle
$lines = 10;

function buildIsoscelesTriangle(int $lines): array {
    $rows = [];
    for ($i = 1; $i <= $lines; $i++) {
        $spaces = $lines - $i;
        $stars  = 2 * $i - 1;
        $rows[] = str_repeat(' ', $spaces) . str_repeat('*', $stars);
    }
    return $rows;
}

$triangleRows = buildIsoscelesTriangle($lines);
$phpVersion = PHP_VERSION;
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>PHP + Triangle d'étoiles</title>
  <style>
    :root { color-scheme: light dark; }
    body{
      margin:0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: #0b1020;
      color: #eaf0ff;
      min-height: 100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      padding: 24px;
    }
    .card{
      width: min(920px, 100%);
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 18px;
      padding: 18px;
      box-shadow: 0 12px 32px rgba(0,0,0,0.35);
    }
    header{
      display:flex;
      gap: 12px;
      flex-wrap: wrap;
      align-items: baseline;
      justify-content: space-between;
      margin-bottom: 14px;
    }
    h1{
      font-size: clamp(18px, 2.2vw, 24px);
      margin: 0;
      letter-spacing: 0.2px;
    }
    .pill{
      font-size: 14px;
      padding: 8px 10px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,0.18);
      background: rgba(255,255,255,0.08);
      white-space: nowrap;
    }
    .grid{
      display:grid;
      grid-template-columns: 1fr;
      gap: 14px;
    }
    @media (min-width: 720px){
      .grid{ grid-template-columns: 1fr 1fr; }
    }
    .box{
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,0.12);
      background: rgba(0,0,0,0.18);
      padding: 14px;
    }
    .label{
      font-size: 13px;
      opacity: 0.8;
      margin: 0 0 8px 0;
    }
    pre{
      margin:0;
      padding: 12px;
      border-radius: 12px;
      background: rgba(0,0,0,0.32);
      border: 1px solid rgba(255,255,255,0.10);
      overflow:auto;
      font-size: clamp(14px, 1.7vw, 16px);
      line-height: 1.2;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", monospace;
    }
    footer{
      margin-top: 12px;
      font-size: 12px;
      opacity: 0.75;
    }
    a{ color: inherit; }
  </style>
</head>
<body>
  <main class="card">
    <header>
      <h1>Démo PHP : version + triangle isocèle (10 lignes)</h1>
      <div class="pill">PHP détecté : <strong><?= htmlspecialchars($phpVersion) ?></strong></div>
    </header>

    <section class="grid">
      <div class="box">
        <p class="label">Triangle isocèle (généré en PHP)</p>
        <pre><?php foreach ($triangleRows as $row) echo htmlspecialchars($row) . "\n"; ?></pre>
      </div>

      <div class="box">
        <p class="label">Script PHP utilisé</p>
        <pre><?= htmlspecialchars('
$lines = 10;

function buildIsoscelesTriangle(int $lines): array {
    $rows = [];
    for ($i = 1; $i <= $lines; $i++) {
        $spaces = $lines - $i;
        $stars  = 2 * $i - 1;
        $rows[] = str_repeat(" ", $spaces) . str_repeat("*", $stars);
    }
    return $rows;
}
') ?></pre>
      </div>
    </section>

    <footer>
      Astuce : change <code>$lines</code> pour génér
