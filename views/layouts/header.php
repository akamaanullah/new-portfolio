<?php
/**
 * Global Header Component
 * Amaanullah — Web Developer & Software Solutions
 */

// Default variables if not set by caller page
$page_title = $page_title ?? "Amaanullah Khan — Web Developer & Software Solutions";
$page_desc = $page_desc ?? "Custom CRMs, SaaS applications, automation tools, and mobile apps by Amaanullah Khan.";
$canonical_url = $canonical_url ?? "https://example.com" . $_SERVER['REQUEST_URI'];
$og_image = $og_image ?? "images/profile-avatar.png";
$active_nav = $active_nav ?? "";
$body_class = !empty($body_class) ? "dark " . $body_class : "dark";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if (!empty($has_splash)): ?>
  <script>/* SPLASH gate: Portal wormhole welcome screen (shown once per session; ?splash=1 forces it; ?splash=0 disables) */
  (function(){var r=document.documentElement;try{var q=new URLSearchParams(location.search).get('splash');var seen=sessionStorage.getItem('splashSeen');var force=q==='1'||q==='portal';if(force||(q!=='0'&&!seen))r.classList.add('splashing','splash-on')}catch(e){r.classList.add('splashing','splash-on')}})();</script>
  <?php endif; ?>
  <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">
  
  <!-- Open Graph / Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">
  
  <meta name="csrf-token" content="demo-token">
  <link rel="icon" href="<?= function_exists('asset_url') ? asset_url('logo-v2/favicon.ico') : 'logo-v2/favicon.ico' ?>">
  
  <!-- Typography: Plus Jakarta Sans & Caveat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Page Stylesheet(s) -->
  <?php if (!empty($page_css)): ?>
    <?php if (is_array($page_css)): ?>
      <?php foreach ($page_css as $css): ?>
        <link rel="stylesheet" href="<?= function_exists('base_url') ? base_url($css) : $css ?>">
      <?php endforeach; ?>
    <?php else: ?>
      <link rel="stylesheet" href="<?= function_exists('base_url') ? base_url($page_css) : $page_css ?>">
    <?php endif; ?>
  <?php else: ?>
    <link rel="stylesheet" href="<?= function_exists('asset_url') ? asset_url('css/style.css') : 'css/style.css' ?>">
  <?php endif; ?>

  <!-- Additional Head Content / Structured Data -->
  <?php if (!empty($extra_head)): ?>
    <?= $extra_head ?>
  <?php endif; ?>
  <style>
    .logo-img {
      height: 40px;
      width: auto;
      max-height: 44px;
      object-fit: contain;
      display: block;
      transition: transform .25s ease, filter .25s ease;
    }
    .logo:hover .logo-img {
      transform: scale(1.04);
    }
    @media (max-width: 600px) {
      .logo-img {
        height: 34px;
      }
    }
  </style>
</head>
<body class="<?= htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8') ?>">
  <?php if (!empty($has_splash)): ?>
  <!-- Splash Screen -->
  <div id="splash" role="dialog" aria-label="Loading Amaanullah portfolio">
    <div class="sbg"></div>
    <canvas id="splashC"></canvas>
    <div class="sflash"></div>
    <button class="sskip" id="sSkip" type="button">Skip <span>→</span></button>
    <div class="stxt">
      <div class="slogo">A</div>
      <div class="sname" id="sName" aria-label="Amaanullah."></div>
      <div class="ssub">Web Developer | Software Solutions</div>
      <div class="shand">Let's build something great</div>
    </div>
    <div class="sprog"><b><span id="sPct">0</span><i>%</i></b>LOADING EXPERIENCE</div>
    <div class="sbar"><i id="sBar"></i></div>
  </div>
  <?php endif; ?>

  <!-- Ambient Glow Background -->
  <div class="bgfx"></div>
  <?php if (!empty($has_dots)): ?>
  <div class="dots"><i></i><i></i><i></i><i></i></div>
  <?php endif; ?>

  <!-- Header & Navigation Bar -->
  <nav aria-label="Main" <?= !empty($nav_attr) ? $nav_attr : '' ?>>
    <a class="logo" href="<?= function_exists('base_url') ? base_url('#home') : 'index.php#home' ?>" aria-label="Amaanullah — Home">
      <img src="<?= function_exists('asset_url') ? asset_url('images/logo.webp') : 'images/logo.webp' ?>" alt="Amaanullah" class="logo-img" width="176" height="48">
    </a>

    <div class="links">
      <a href="<?= function_exists('base_url') ? base_url('#home') : 'index.php#home' ?>" class="<?= $active_nav === 'home' ? 'on' : '' ?>"<?= $active_nav === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
      <a href="<?= function_exists('base_url') ? base_url('about') : 'about.php' ?>" class="<?= $active_nav === 'about' ? 'on' : '' ?>"<?= $active_nav === 'about' ? ' aria-current="page"' : '' ?>>About</a>
      <a href="<?= function_exists('base_url') ? base_url('services') : 'services.php' ?>" class="<?= $active_nav === 'services' ? 'on' : '' ?>"<?= $active_nav === 'services' ? ' aria-current="page"' : '' ?>>Services</a>
      <a href="<?= function_exists('base_url') ? base_url('projects') : 'projects.php' ?>" class="<?= $active_nav === 'projects' ? 'on' : '' ?>"<?= $active_nav === 'projects' ? ' aria-current="page"' : '' ?>>Projects</a>
      <a href="<?= function_exists('base_url') ? base_url('articles') : 'articles.php' ?>" class="<?= $active_nav === 'articles' ? 'on' : '' ?>"<?= $active_nav === 'articles' ? ' aria-current="page"' : '' ?>>Articles</a>
      <a href="<?= function_exists('base_url') ? base_url('#reviews') : 'index.php#reviews' ?>" class="<?= $active_nav === 'reviews' ? 'on' : '' ?>">Reviews</a>
      <a href="<?= function_exists('base_url') ? base_url('contact') : 'contact.php' ?>" class="<?= $active_nav === 'contact' ? 'on' : '' ?>"<?= $active_nav === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a>
    </div>

    <div class="acts">
      <?php if (!empty($has_sound_btn)): ?>
      <button class="ib" id="snd" title="Toggle Sound" aria-label="Toggle Sound">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M11 5 6 9H2v6h4l5 4z"/>
          <path d="M15.5 8.5a5 5 0 0 1 0 7M19 5a10 10 0 0 1 0 14"/>
        </svg>
      </button>
      <?php endif; ?>
      <button class="ib" id="dm" title="Toggle Theme" aria-label="Toggle Theme">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
          <path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/>
        </svg>
      </button>
      <a class="talk" href="<?= function_exists('base_url') ? base_url('contact') : 'contact.php' ?>">Let's Talk &nbsp;→</a>
    </div>
  </nav>
