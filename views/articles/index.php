<?php
$page_title = 'Articles on Laravel, SaaS, Automation & Flutter | Amaanullah Khan';
$page_desc = 'Practical articles by Amaanullah Khan, a Karachi-based PHP & Laravel developer, on building CRMs, SaaS products, business automation, Flutter apps and fast websites.';
$canonical_url = 'https://example.com/articles';
$og_image = 'https://example.com/images/og-articles.png';
$page_css = 'css/articles.css';
$active_nav = 'articles';
$page_js = 'js/articles.js';

ob_start();
?>
<script type="application/ld+json" class="pld">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://example.com/"}, {"@type": "ListItem", "position": 2, "name": "Articles", "item": "https://example.com/articles"}]}</script>
<script type="application/ld+json" class="pld">{
 "@context": "https://schema.org",
 "@type": [
  "Blog",
  "CollectionPage"
 ],
 "name": "Articles on Laravel, SaaS, Automation & Flutter | Amaanullah Khan",
 "description": "Practical articles by Amaanullah Khan, a Karachi-based PHP & Laravel developer, on building CRMs, SaaS products, business automation, Flutter apps and fast websites.",
 "url": "https://example.com/articles",
 "author": {
  "@type": "Person",
  "name": "Amaanullah Khan"
 },
 "mainEntity": {
  "@type": "ItemList",
  "itemListElement": [
   {
    "@type": "ListItem",
    "position": 1,
    "url": "https://example.com/articles/multi-tenant-laravel",
    "name": "How I structure multi-tenant SaaS apps in Laravel"
   },
   {
    "@type": "ListItem",
    "position": 2,
    "url": "https://example.com/articles/crm-around-your-sales-process",
    "name": "Build your CRM around your sales process \u2014 not the other way round"
   },
   {
    "@type": "ListItem",
    "position": 3,
    "url": "https://example.com/articles/automate-repetitive-work",
    "name": "Five manual tasks most businesses should automate first"
   },
   {
    "@type": "ListItem",
    "position": 4,
    "url": "https://example.com/articles/laravel-queues-at-scale",
    "name": "Laravel queues that don't fall over when traffic spikes"
   },
   {
    "@type": "ListItem",
    "position": 5,
    "url": "https://example.com/articles/saas-billing-basics",
    "name": "Subscription billing for SaaS: what to decide before you integrate"
   },
   {
    "@type": "ListItem",
    "position": 6,
    "url": "https://example.com/articles/ai-in-business-workflows",
    "name": "Using AI in business workflows without losing control"
   },
   {
    "@type": "ListItem",
    "position": 7,
    "url": "https://example.com/articles/flutter-with-laravel-api",
    "name": "Connecting a Flutter app to a Laravel REST API"
   },
   {
    "@type": "ListItem",
    "position": 8,
    "url": "https://example.com/articles/flutter-offline-sync",
    "name": "Offline sync in Flutter apps: a practical approach"
   },
   {
    "@type": "ListItem",
    "position": 9,
    "url": "https://example.com/articles/fast-websites-checklist",
    "name": "A page-speed checklist for business websites"
   },
   {
    "@type": "ListItem",
    "position": 10,
    "url": "https://example.com/articles/custom-ecommerce-vs-shopify",
    "name": "Custom e-commerce vs Shopify: how to choose"
   },
   {
    "@type": "ListItem",
    "position": 11,
    "url": "https://example.com/articles/from-shopify-dev-to-team-lead",
    "name": "From Shopify developer to team lead: what changed"
   },
   {
    "@type": "ListItem",
    "position": 12,
    "url": "https://example.com/articles/ai-wont-replace-fundamentals",
    "name": "AI speeds up coding \u2014 it doesn't replace fundamentals"
   }
  ]
 }
}</script>
<?php
$extra_head = ob_get_clean();
include dirname(__DIR__) . '/layouts/header.php';
?>
<main id="main" data-page="all">
<header class="ph"><nav class="crumb" aria-label="Breadcrumb"><ol><li><a href="index.php">Home</a></li><li aria-current="page">Articles</li></ol></nav>
 <span class="eyebrow rv2">✦ Articles</span>
 <div class="row"><div><h1 class="rv2">Notes from <em>building real systems.</em></h1><p class="lead2 rv2" style="max-width:640px;margin-top:12px">Practical write-ups on Laravel, SaaS and CRM architecture, automation and Flutter — the decisions behind systems teams actually use, written for founders and developers.</p>
 <form class="srch rv2" role="search" action="javascript:void(0)" method="get"><label for="q-all" class="hp" style="position:absolute;left:-9999px">Search articles</label><input id="q-all" type="search" name="q" placeholder="Search articles…"><button type="submit">Search</button></form>
 <div class="ptags rv2"><b>POPULAR</b><a href="articles-laravel-php.php">Laravel</a><a href="articles-saas-crm.php">Multi-tenant</a><a href="articles-saas-crm.php">CRM</a><a href="articles-automation-ai.php">Automation</a><a href="articles-mobile-flutter.php">Flutter</a><a href="articles-mobile-flutter.php">REST API</a><a href="articles-web-development.php">Page speed</a><a href="articles-saas-crm.php">SaaS billing</a></div></div></div>
</header>
<div class="fbar2"><nav class="fts" role="tablist" aria-label="Article categories"><span class="ind" aria-hidden="true"></span><a class="ft" role="tab" href="articles.php" aria-selected="true" aria-current="page" data-f="all">All <sup>12</sup></a><a class="ft" role="tab" href="articles-laravel-php.php" aria-selected="false" data-f="laravel">Laravel &amp; PHP <sup>2</sup></a><a class="ft" role="tab" href="articles-saas-crm.php" aria-selected="false" data-f="saas">SaaS &amp; CRM <sup>2</sup></a><a class="ft" role="tab" href="articles-automation-ai.php" aria-selected="false" data-f="ai">Automation &amp; AI <sup>2</sup></a><a class="ft" role="tab" href="articles-mobile-flutter.php" aria-selected="false" data-f="mobile">Mobile (Flutter) <sup>2</sup></a><a class="ft" role="tab" href="articles-web-development.php" aria-selected="false" data-f="web">Web Development <sup>2</sup></a><a class="ft" role="tab" href="articles-career-insights.php" aria-selected="false" data-f="career">Career &amp; Insights <sup>2</sup></a></nav></div>
<div id="swap">
<section class="sec2" aria-labelledby="h-feat"><div class="lbl2 rv2"><h2 id="h-feat">Featured</h2></div>
<div class="afeat"><article class="ac pc big">
<a class="pl al" href="article.php" data-article="multi-tenant-laravel">
<div class="cov"><img src="images/covers/multi-tenant-laravel.svg" alt="How I structure multi-tenant SaaS apps in Laravel — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Laravel &amp; PHP</span></div>
<div class="ab"><h3>How I structure multi-tenant SaaS apps in Laravel</h3><p>Single database or one per tenant? The trade-offs I weigh before writing the first migration.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2026-03-15">Mar 2026</time> · 8 min read</small></span></div></div></a></article><div class="side"><article class="ac pc sm">
<a class="pl al" href="article.php" data-article="crm-around-your-sales-process">
<div class="cov"><img src="images/covers/crm-around-your-sales-process.svg" alt="Build your CRM around your sales process — not the other way round — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">SaaS &amp; CRM</span></div>
<div class="ab"><h3>Build your CRM around your sales process — not the other way round</h3><p>Why generic pipeline templates slow teams down, and how to map real workflows first.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2026-02-28">Feb 2026</time> · 7 min read</small></span></div></div></a></article><article class="ac pc sm">
<a class="pl al" href="article.php" data-article="automate-repetitive-work">
<div class="cov"><img src="images/covers/automate-repetitive-work.svg" alt="Five manual tasks most businesses should automate first — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Automation &amp; AI</span></div>
<div class="ab"><h3>Five manual tasks most businesses should automate first</h3><p>Spreadsheets, copy-pasting between systems and follow-ups — where automation pays off fastest.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2026-02-14">Feb 2026</time> · 5 min read</small></span></div></div></a></article></div></div></section>
<section class="sec2" aria-labelledby="h-all"><div class="lbl2 rv2"><h2 id="h-all">All articles</h2></div>
<div class="alay"><div><div class="agrid"><article class="ac pc ">
<a class="pl al" href="article.php" data-article="laravel-queues-at-scale">
<div class="cov"><img src="images/covers/laravel-queues-at-scale.svg" alt="Laravel queues that don't fall over when traffic spikes — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Laravel &amp; PHP</span></div>
<div class="ab"><h3>Laravel queues that don't fall over when traffic spikes</h3><p>Practical patterns for jobs, retries and failed-job handling in production apps.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2026-01-20">Jan 2026</time> · 6 min read</small></span></div></div></a></article><article class="ac pc ">
<a class="pl al" href="article.php" data-article="saas-billing-basics">
<div class="cov"><img src="images/covers/saas-billing-basics.svg" alt="Subscription billing for SaaS: what to decide before you integrate — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">SaaS &amp; CRM</span></div>
<div class="ab"><h3>Subscription billing for SaaS: what to decide before you integrate</h3><p>Plans, trials, proration and invoices — the decisions that are painful to change later.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2026-01-05">Jan 2026</time> · 6 min read</small></span></div></div></a></article><article class="ac pc ">
<a class="pl al" href="article.php" data-article="ai-in-business-workflows">
<div class="cov"><img src="images/covers/ai-in-business-workflows.svg" alt="Using AI in business workflows without losing control — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Automation &amp; AI</span></div>
<div class="ab"><h3>Using AI in business workflows without losing control</h3><p>Where AI-assisted steps help, where they don't, and how to keep a human in the loop.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2025-12-18">Dec 2025</time> · 7 min read</small></span></div></div></a></article><article class="ac pc ">
<a class="pl al" href="article.php" data-article="flutter-with-laravel-api">
<div class="cov"><img src="images/covers/flutter-with-laravel-api.svg" alt="Connecting a Flutter app to a Laravel REST API — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Mobile (Flutter)</span></div>
<div class="ab"><h3>Connecting a Flutter app to a Laravel REST API</h3><p>Auth, token refresh and error handling for a clean mobile-to-backend setup.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2025-11-22">Nov 2025</time> · 9 min read</small></span></div></div></a></article><article class="ac pc ">
<a class="pl al" href="article.php" data-article="flutter-offline-sync">
<div class="cov"><img src="images/covers/flutter-offline-sync.svg" alt="Offline sync in Flutter apps: a practical approach — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Mobile (Flutter)</span></div>
<div class="ab"><h3>Offline sync in Flutter apps: a practical approach</h3><p>Keeping data usable without a connection and resolving conflicts when it comes back.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2025-11-04">Nov 2025</time> · 8 min read</small></span></div></div></a></article><article class="ac pc ">
<a class="pl al" href="article.php" data-article="fast-websites-checklist">
<div class="cov"><img src="images/covers/fast-websites-checklist.svg" alt="A page-speed checklist for business websites — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Web Development</span></div>
<div class="ab"><h3>A page-speed checklist for business websites</h3><p>Images, fonts, caching and the small fixes that make a site feel instant.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2025-10-15">Oct 2025</time> · 5 min read</small></span></div></div></a></article><article class="ac pc ">
<a class="pl al" href="article.php" data-article="custom-ecommerce-vs-shopify">
<div class="cov"><img src="images/covers/custom-ecommerce-vs-shopify.svg" alt="Custom e-commerce vs Shopify: how to choose — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Web Development</span></div>
<div class="ab"><h3>Custom e-commerce vs Shopify: how to choose</h3><p>When a hosted platform is enough and when a custom build is worth it.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2025-09-28">Sep 2025</time> · 6 min read</small></span></div></div></a></article><article class="ac pc ">
<a class="pl al" href="article.php" data-article="from-shopify-dev-to-team-lead">
<div class="cov"><img src="images/covers/from-shopify-dev-to-team-lead.svg" alt="From Shopify developer to team lead: what changed — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Career &amp; Insights</span></div>
<div class="ab"><h3>From Shopify developer to team lead: what changed</h3><p>Lessons from moving from themes to architecture, code reviews and mentoring.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2025-08-14">Aug 2025</time> · 7 min read</small></span></div></div></a></article><article class="ac pc ">
<a class="pl al" href="article.php" data-article="ai-wont-replace-fundamentals">
<div class="cov"><img src="images/covers/ai-wont-replace-fundamentals.svg" alt="AI speeds up coding — it doesn't replace fundamentals — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Career &amp; Insights</span></div>
<div class="ab"><h3>AI speeds up coding — it doesn't replace fundamentals</h3><p>Why understanding databases and architecture still matters when AI writes code.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2025-07-02">Jul 2025</time> · 6 min read</small></span></div></div></a></article></div><nav class="pag" aria-label="Pagination"><span class="dis" aria-disabled="true">←</span><span aria-current="page">1</span><a href="javascript:void(0)">2</a><a href="javascript:void(0)" rel="next" aria-label="Next page">→</a></nav></div><aside class="aside" aria-label="Sidebar">
 <section class="box rv2"><h3>Most read</h3><ol class="mr"><li><a href="article.php" data-article="multi-tenant-laravel">How I structure multi-tenant SaaS apps in Laravel</a></li><li><a href="article.php" data-article="crm-around-your-sales-process">Build your CRM around your sales process — not the other way round</a></li><li><a href="article.php" data-article="flutter-with-laravel-api">Connecting a Flutter app to a Laravel REST API</a></li><li><a href="article.php" data-article="ai-wont-replace-fundamentals">AI speeds up coding — it doesn't replace fundamentals</a></li></ol></section>
 <section class="box nlb rv2" aria-labelledby="h-nl"><h3 id="h-nl">Get new articles by email</h3><p>Occasional, practical posts on Laravel, SaaS and automation. No spam.</p>
  <form class="nlf" action="javascript:void(0)" method="post" novalidate>
   <label class="hp" aria-hidden="true">Leave empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
   <label for="nl-all" class="hp">Email address</label><input id="nl-all" type="email" name="email" placeholder="you@company.com" required autocomplete="email">
   <button type="submit">Subscribe</button><div class="msg" role="status" aria-live="polite"></div></form>
 </section>
 <section class="box rv2"><h3>Topics</h3><div class="tagc"><a href="articles-laravel-php.php">Laravel &amp; PHP</a><a href="articles-saas-crm.php">SaaS &amp; CRM</a><a href="articles-automation-ai.php">Automation &amp; AI</a><a href="articles-mobile-flutter.php">Mobile (Flutter)</a><a href="articles-web-development.php">Web Development</a><a href="articles-career-insights.php">Career &amp; Insights</a></div></section>
</aside></div></section>
<section class="cta2"><div class="band rv2"><div><h2>Have a system that needs building?</h2><p>Tell me what's slowing your business down — I reply within 24 hours with next steps.</p></div><div class="btns" style="margin:0"><a class="bo w" href="contact.php">Book a Call →</a><a class="bo g" href="services.php">View services</a></div></div></section>
</div></main>
<div class="cur" id="cur" aria-hidden="true">Read ↗</div>
<?php include dirname(__DIR__) . '/layouts/footer.php'; ?>
