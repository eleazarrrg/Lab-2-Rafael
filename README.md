<?php
/**
 * index.php - README bonito en una sola página PHP
 * Autor: Rafael Gómez (UTP) - Laboratorio 2
 * Nota: No requiere dependencias. Solo PHP para servir el HTML.
 */

/* ========= Personalización rápida ========= */
$projectTitle   = "Proyecto Laravel";
$course         = "Laboratorio 2 — Sistemas Operativos / Ingeniería de Software";
$author         = "Rafael Gómez";
$university     = "Universidad Tecnológica de Panamá";
$bannerUrl      = "https://www.xtrafondos.com/wallpapers/personajes-de-anime-one-piece-13167.jpg"; // Tu imagen
$repoUrl        = "https://github.com/tuusuario/ejemplo-lab2.git"; // Cambia a tu repo real
$localUrl       = "http://localhost:8000";

/* ========= Contenido del README ========= */
$requirements = [
  ["PHP 8.x", "https://www.php.net/"],
  ["Composer", "https://getcomposer.org/"],
  ["Node.js y npm (Vite)", "https://nodejs.org/"],
  ["MySQL o MariaDB", "https://www.mysql.com/"],
  ["WAMP/XAMPP u otro stack local", "https://www.wampserver.com/"],
];

$steps = [
  ["Clonar el repositorio", <<<BASH
git clone {$repoUrl}
cd ejemplo-lab2
BASH],
  ["Instalar dependencias de PHP", <<<BASH
composer install
BASH],
  ["Instalar dependencias de Node", <<<BASH
npm install
BASH],
  ["Configurar archivo de entorno", <<<BASH
cp .env.example .env
# Edita el archivo .env con tus credenciales de base de datos
BASH],
  ["Generar la clave de la aplicación", <<<BASH
php artisan key:generate
BASH],
  ["Ejecutar migraciones", <<<BASH
php artisan migrate
BASH],
  ["Levantar el servidor de desarrollo", <<<BASH
php artisan serve
# Disponible en {$localUrl}
BASH],
];

$structure = [
  ["app/", "Lógica principal de la aplicación (modelos, controladores)."],
  ["resources/views/", "Vistas Blade."],
  ["routes/web.php", "Definición de rutas web."],
  ["database/migrations/", "Migraciones para crear tablas."],
  ["public/", "Archivos públicos (CSS, JS compilados, imágenes)."],
];

$notes = [
  "No se debe subir el archivo <code>.env</code> al repositorio.",
  "Los directorios <code>vendor/</code> y <code>node_modules/</code> están ignorados por <code>.gitignore</code>.",
  "Para compartir variables de entorno, usa el archivo <code>.env.example</code>.",
];
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($projectTitle) ?> — README</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="README del <?= htmlspecialchars($projectTitle) ?> — <?= htmlspecialchars($course) ?>">
  <style>
    :root{
      --bg:#0f1115; --card:#151923; --muted:#9aa4b2; --text:#e7ecf3;
      --accent:#47a3ff; --accent-2:#7dd3fc; --ok:#22c55e; --border:#232835; --code:#0b0e14;
      --shadow: 0 10px 25px rgba(0,0,0,.35);
      --radius: 18px;
    }
    .light{
      --bg:#f6f7fb; --card:#ffffff; --muted:#516072; --text:#111827;
      --accent:#2563eb; --accent-2:#0ea5e9; --ok:#16a34a; --border:#e6e9f2; --code:#0a0f1a;
      --shadow: 0 10px 25px rgba(0,0,0,.08);
    }
    *{box-sizing:border-box}
    body{
      margin:0; background:linear-gradient(180deg,var(--bg),#0a0c12 65%,var(--bg));
      color:var(--text); font: 16px/1.6 system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji","Segoe UI Emoji";
      letter-spacing:.2px;
    }
    .container{max-width:1000px;margin:32px auto;padding:0 18px}
    .header{position:relative;border:1px solid var(--border);background:linear-gradient(180deg,rgba(255,255,255,.02),rgba(255,255,255,0));
      border-radius:var(--radius); overflow:hidden; box-shadow:var(--shadow)}
    .banner{width:100%;height:320px;object-fit:cover;display:block;filter:saturate(1.05) contrast(1.05)}
    .title{
      position:absolute;inset:auto 0 0 0; padding:20px 22px;background:linear-gradient(180deg,rgba(0,0,0,.0),rgba(0,0,0,.55));
      display:flex;align-items:end;gap:12px;flex-wrap:wrap
    }
    h1{margin:0;font-size: clamp(26px, 3.2vw, 38px);}
    .pill{font-weight:600;color:#fff;background:linear-gradient(90deg,var(--accent),var(--accent-2));
      padding:6px 10px;border-radius:999px;font-size:12px;letter-spacing:.4px;text-transform:uppercase}
    .card{border:1px solid var(--border);background:linear-gradient(180deg,rgba(255,255,255,.02),rgba(255,255,255,.01));
      border-radius:var(--radius); padding:20px; margin:18px 0; box-shadow:var(--shadow)}
    .grid{display:grid; gap:14px}
    @media (min-width:880px){ .grid-2{grid-template-columns:1fr 1fr} }
    a{color:var(--accent-2);text-decoration:none}
    a:hover{text-decoration:underline}
    .muted{color:var(--muted)}
    .section-title{display:flex;align-items:center;gap:8px;margin:0 0 8px 0;font-size:22px}
    .dot{width:8px;height:8px;border-radius:50%;background:var(--accent)}
    .kbd{border:1px solid var(--border);padding:2px 6px;border-radius:6px;background:rgba(255,255,255,.03)}
    pre{margin:0}
    .code{
      background: radial-gradient(1200px 400px at 0% 0%, rgba(71,163,255,.08), transparent 40%),
                  linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.02));
      border:1px solid var(--border); border-radius:14px; padding:14px; overflow:auto;
      font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
      font-size:13.5px; line-height:1.5; color:#dbe6ff;
    }
    .btn-row{display:flex;gap:8px;flex-wrap:wrap;margin:10px 0 0 0}
    .btn{
      border:1px solid var(--border); background:linear-gradient(180deg,rgba(255,255,255,.04),rgba(255,255,255,.02));
      padding:8px 12px; border-radius:10px; color:var(--text); cursor:pointer; font-weight:600
    }
    .btn:hover{filter:brightness(1.08)}
    table{width:100%;border-collapse:collapse;overflow:hidden;border-radius:12px;border:1px solid var(--border)}
    th,td{padding:12px 14px;text-align:left}
    thead th{background:linear-gradient(180deg,rgba(255,255,255,.04),rgba(255,255,255,.02))}
    tbody tr:not(:last-child) td{border-bottom:1px solid var(--border)}
    .notes li{margin:6px 0}
    .footer{
      display:flex;justify-content:space-between;flex-wrap:wrap;gap:8px;
      color:var(--muted);font-size:14px;margin:10px 4px 30px
    }
    .toolbar{
      display:flex;justify-content:space-between;align-items:center;gap:10px;margin:12px 2px 18px
    }
    .toggle{
      display:inline-flex;align-items:center;gap:8px;border:1px solid var(--border);padding:6px 10px;border-radius:12px;cursor:pointer
    }
    .ok{color:var(--ok);font-weight:700}
    .badge{display:inline-block;padding:4px 8px;border-radius:999px;border:1px solid var(--border);font-size:12px;margin-left:6px}
  </style>
</head>
<body class="">
  <div class="container">
    <div class="toolbar">
      <div>
        <span class="badge">README</span>
        <span class="badge">Laravel</span>
        <span class="badge">Vite</span>
      </div>
      <button class="toggle" id="modeToggle" aria-label="Cambiar modo">
        <span>🌙/☀️</span><span class="muted">Modo</span>
      </button>
    </div>

    <header class="header">
      <img class="banner" src="<?= htmlspecialchars($bannerUrl) ?>" alt="Banner del proyecto">
      <div class="title">
        <h1>🌊 <?= htmlspecialchars($projectTitle) ?></h1>
        <span class="pill"><?= htmlspecialchars($course) ?></span>
      </div>
    </header>

    <section class="card">
      <p>Este repositorio contiene el proyecto <strong>Laravel</strong> desarrollado como parte del <em><?= htmlspecialchars($course) ?></em>.</p>
    </section>

    <section class="grid grid-2">
      <div class="card">
        <h2 class="section-title"><span class="dot"></span> Requisitos</h2>
        <ul class="muted">
          <?php foreach($requirements as [$name,$url]): ?>
            <li><a href="<?= htmlspecialchars($url) ?>" target="_blank" rel="noreferrer"><?= htmlspecialchars($name) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="card">
        <h2 class="section-title"><span class="dot"></span> Acceso rápido</h2>
        <p>Servidor local: <a href="<?= htmlspecialchars($localUrl) ?>" target="_blank"><?= htmlspecialchars($localUrl) ?></a></p>
        <p>Repositorio: <a href="<?= htmlspecialchars($repoUrl) ?>" target="_blank"><?= htmlspecialchars($repoUrl) ?></a></p>
        <p class="muted">Tip: usa <span class="kbd">Ctrl</span> + <span class="kbd">C</span> en los bloques de código con el botón <em>Copiar</em>.</p>
      </div>
    </section>

    <section class="card">
      <h2 class="section-title"><span class="dot"></span> Instalación</h2>
      <?php foreach($steps as $i => [$title,$code]): ?>
        <div style="margin:16px 0 20px 0;">
          <strong><?= ($i+1) ?>. <?= htmlspecialchars($title) ?></strong>
          <div class="code" id="code-<?= $i ?>"><pre><code><?= htmlspecialchars(trim($code)) ?></code></pre></div>
          <div class="btn-row">
            <button class="btn" data-copy="#code-<?= $i ?>">📋 Copiar</button>
          </div>
        </div>
      <?php endforeach; ?>
    </section>

    <section class="card">
      <h2 class="section-title"><span class="dot"></span> Estructura del repositorio</h2>
      <div style="overflow:auto">
        <table>
          <thead>
            <tr><th>Carpeta / Archivo</th><th>Descripción</th></tr>
          </thead>
          <tbody>
            <?php foreach($structure as [$path,$desc]): ?>
              <tr>
                <td><code><?= htmlspecialchars($path) ?></code></td>
                <td><?= $desc ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>

    <section class="card">
      <h2 class="section-title"><span class="dot"></span> Notas importantes</h2>
      <ul class="notes">
        <?php foreach($notes as $n): ?>
          <li><?= $n ?></li>
        <?php endforeach; ?>
      </ul>
      <p class="ok">✔ Buenas prácticas: variables en <code>.env</code>, dependencias fuera del repo y <code>.env.example</code> actualizado.</p>
    </section>

    <section class="card">
      <h2 class="section-title"><span class="dot"></span> Autor</h2>
      <p><strong><?= htmlspecialchars($author) ?></strong><br><?= htmlspecialchars($university) ?></p>
    </section>

    <div class="footer">
      <span>© <?= date('Y') ?> <?= htmlspecialchars($author) ?> — <?= htmlspecialchars($projectTitle) ?></span>
      <span class="muted">Hecho con ❤️ y PHP puro</span>
    </div>
  </div>

  <script>
    // Copiar al portapapeles
    document.querySelectorAll("[data-copy]").forEach(btn=>{
      btn.addEventListener("click", ()=>{
        const sel = btn.getAttribute("data-copy");
        const el = document.querySelector(sel);
        if(!el) return;
        const text = el.innerText;
        navigator.clipboard.writeText(text).then(()=>{
          const prev = btn.textContent;
          btn.textContent = "✅ Copiado";
          setTimeout(()=>btn.textContent = prev, 1200);
        });
      });
    });

    // Modo claro/oscuro
    const key="readme-mode";
    const root=document.body;
    const toggle=document.getElementById("modeToggle");
    const saved=localStorage.getItem(key);
    if(saved==="light") root.classList.add("light");
    toggle.addEventListener("click", ()=>{
      root.classList.toggle("light");
      localStorage.setItem(key, root.classList.contains("light") ? "light" : "dark");
    });
  </script>
</body>
</html>

