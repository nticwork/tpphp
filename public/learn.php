<?php
$phpVersion = PHP_VERSION;
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Apprendre les bases de PHP</title>

  <style>
    :root { color-scheme: light dark; }
    body {
      margin: 0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: #0b1020;
      color: #eaf0ff;
      min-height: 100vh;
      padding: 24px;
      display: flex;
      justify-content: center;
    }
    .card {
      width: min(1000px, 100%);
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 18px;
      padding: 20px;
      box-shadow: 0 12px 32px rgba(0,0,0,0.35);
    }
    header {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: baseline;
      gap: 12px;
      margin-bottom: 18px;
    }
    h1 {
      margin: 0;
      font-size: clamp(20px, 2.5vw, 26px);
    }
    .pill {
      font-size: 14px;
      padding: 8px 12px;
      border-radius: 999px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.18);
    }
    section {
      margin-bottom: 18px;
      padding: 14px;
      border-radius: 14px;
      background: rgba(0,0,0,0.2);
      border: 1px solid rgba(255,255,255,0.12);
    }
    h2 {
      margin-top: 0;
      font-size: 18px;
    }
    p {
      line-height: 1.6;
    }
    pre {
      background: rgba(0,0,0,0.35);
      padding: 12px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.1);
      overflow-x: auto;
      font-size: 15px;
    }
    footer {
      margin-top: 20px;
      font-size: 13px;
      opacity: 0.75;
      text-align: center;
    }
    a {
      color: #9fb7ff;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <main class="card">
    <header>
      <h1>📘 Bases du langage PHP</h1>
      <div class="pill">PHP version : <strong><?= htmlspecialchars($phpVersion) ?></strong></div>
    </header>

    <section>
      <h2>1️⃣ Qu’est-ce que PHP ?</h2>
      <p>
        PHP est un langage de programmation côté serveur.  
        Il est principalement utilisé pour créer des sites web dynamiques.
      </p>
      <pre>
&lt;?php
echo "Bonjour le monde";
?&gt;
      </pre>
    </section>

    <section>
      <h2>2️⃣ Variables</h2>
      <p>
        Les variables en PHP commencent toujours par le symbole <code>$</code>.
      </p>
      <pre>
&lt;?php
$nom = "Karim";
$age = 25;

echo $nom;
echo $age;
?&gt;
      </pre>
    </section>

    <section>
      <h2>3️⃣ Conditions (if / else)</h2>
      <pre>
&lt;?php
$note = 15;

if ($note >= 10) {
    echo "Admis";
} else {
    echo "Ajourné";
}
?&gt;
      </pre>
    </section>

    <section>
      <h2>4️⃣ Boucles (for / foreach)</h2>
      <pre>
&lt;?php
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
?&gt;
      </pre>

      <pre>
&lt;?php
$fruits = ["Pomme", "Banane", "Orange"];

foreach ($fruits as $fruit) {
    echo $fruit;
}
?&gt;
      </pre>
    </section>

    <section>
      <h2>5️⃣ Fonctions</h2>
      <pre>
&lt;?php
function direBonjour($nom) {
    return "Bonjour " . $nom;
}

echo direBonjour("Karim");
?&gt;
      </pre>
    </section>

    <section>
      <h2>6️⃣ Superglobales utiles</h2>
      <pre>
$_GET
$_POST
$_SERVER
$_SESSION
$_ENV
      </pre>
      <p>
        Ces variables permettent d’accéder aux données de requêtes,
        formulaires, serveur et environnement.
      </p>
    </section>

    <footer>
      © <?= date('Y') ?> – Apprentissage PHP •  
      <a href="index.php">Retour à l’accueil</a>
    </footer>
  </main>
</body>
</html>
