<?php
$phpVersion = PHP_VERSION;
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Exercices PHP</title>

  <style>
    :root { color-scheme: light dark; }
    body{
      margin:0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background:#0b1020;
      color:#eaf0ff;
      min-height:100vh;
      display:flex;
      justify-content:center;
      padding:24px;
    }
    .card{
      width:min(1000px,100%);
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.12);
      border-radius:18px;
      padding:20px;
      box-shadow:0 12px 32px rgba(0,0,0,0.35);
    }
    header{
      display:flex;
      justify-content:space-between;
      flex-wrap:wrap;
      gap:12px;
      margin-bottom:18px;
    }
    h1{margin:0;font-size:24px;}
    .pill{
      padding:8px 12px;
      border-radius:999px;
      background:rgba(255,255,255,0.08);
      border:1px solid rgba(255,255,255,0.18);
      font-size:14px;
    }
    section{
      background:rgba(0,0,0,0.22);
      border:1px solid rgba(255,255,255,0.12);
      border-radius:14px;
      padding:14px;
      margin-bottom:14px;
    }
    h2{margin-top:0;font-size:18px;}
    pre{
      background:rgba(0,0,0,0.35);
      border-radius:12px;
      padding:12px;
      overflow:auto;
      font-size:15px;
    }
    footer{
      margin-top:20px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      flex-wrap:wrap;
      gap:12px;
    }
    .btn{
      padding:10px 14px;
      border-radius:10px;
      border:1px solid rgba(255,255,255,0.2);
      background:rgba(255,255,255,0.1);
      color:inherit;
      text-decoration:none;
    }
    .btn:hover{background:rgba(255,255,255,0.18);}
  </style>
</head>

<body>
<main class="card">
  <header>
    <h1>🧪 Exercices PHP</h1>
    <div class="pill">PHP <?= htmlspecialchars($phpVersion) ?></div>
  </header>

  <section>
    <h2>Exercice 1 : nombres pairs</h2>
    <pre>
&lt;?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        echo $i . " ";
    }
}
?&gt;
    </pre>
  </section>

  <section>
    <h2>Exercice 2 : tableau et boucle</h2>
    <pre>
&lt;?php
$colors = ["Rouge", "Vert", "Bleu"];

foreach ($colors as $color) {
    echo $color . "&lt;br&gt;";
}
?&gt;
    </pre>
  </section>

  <section>
    <h2>Exercice 3 : fonction simple</h2>
    <pre>
&lt;?php
function carre($n) {
    return $n * $n;
}

echo carre(5); // 25
?&gt;
    </pre>
  </section>

  <footer>
    <span>Essaye de modifier les exemples 👨‍💻</span>
    <a href="/" class="btn">⬅ Retour à l’accueil</a>
  </footer>
</main>
</body>
</html>
