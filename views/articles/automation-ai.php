<?php
$page_title = 'Automation & AI Articles | Amaanullah Khan';
$page_desc = 'Where business automation and AI-assisted workflows pay off, how to scope them, and how to keep them reliable. Practical articles by Amaanullah Khan.';
$canonical_url = 'https://example.com/articles/automation-ai';
$og_image = 'https://example.com/images/og-articles.png';
$page_css = 'css/articles.css';
$active_nav = 'articles';
$page_js = 'js/articles.js';

ob_start();
?>
<script type="application/ld+json" class="pld">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://example.com/"}, {"@type": "ListItem", "position": 2, "name": "Articles", "item": "https://example.com/articles"}, {"@type": "ListItem", "position": 3, "name": "Automation & AI", "item": "https://example.com/articles/automation-ai"}]}</script>
<?php
$extra_head = ob_get_clean();
include dirname(__DIR__) . '/layouts/header.php';
?>
<main id="main" data-page="ai">
<header class="ph"><nav class="crumb" aria-label="Breadcrumb"><ol><li><a href="index.php">Home</a></li><li><a href="articles.php">Articles</a></li><li aria-current="page">Automation &amp; AI</li></ol></nav>
 <span class="eyebrow rv2">✦ Automation &amp; AI</span>
 <div class="row"><div><h1 class="rv2">Automation &amp; AI <em>that saves hours.</em></h1><p class="lead2 rv2" style="max-width:640px;margin-top:12px">Where business automation and AI-assisted workflows pay off, how to scope them, and how to keep them reliable.</p>
 <form class="srch rv2" role="search" action="javascript:void(0)" method="get"><label for="q-ai" class="hp" style="position:absolute;left:-9999px">Search articles</label><input id="q-ai" type="search" name="q" placeholder="Search articles…"><button type="submit">Search</button></form>
 <div class="ptags rv2"><b>POPULAR</b><a href="articles-laravel-php.php">Laravel</a><a href="articles-saas-crm.php">Multi-tenant</a><a href="articles-saas-crm.php">CRM</a><a href="articles-automation-ai.php">Automation</a><a href="articles-mobile-flutter.php">Flutter</a><a href="articles-mobile-flutter.php">REST API</a><a href="articles-web-development.php">Page speed</a><a href="articles-saas-crm.php">SaaS billing</a></div></div></div>
</header>
<div class="fbar2"><nav class="fts" role="tablist" aria-label="Article categories"><span class="ind" aria-hidden="true"></span><a class="ft" role="tab" href="articles.php" aria-selected="false" data-f="all">All <sup>12</sup></a><a class="ft" role="tab" href="articles-laravel-php.php" aria-selected="false" data-f="laravel">Laravel &amp; PHP <sup>2</sup></a><a class="ft" role="tab" href="articles-saas-crm.php" aria-selected="false" data-f="saas">SaaS &amp; CRM <sup>2</sup></a><a class="ft" role="tab" href="articles-automation-ai.php" aria-selected="true" aria-current="page" data-f="ai">Automation &amp; AI <sup>2</sup></a><a class="ft" role="tab" href="articles-mobile-flutter.php" aria-selected="false" data-f="mobile">Mobile (Flutter) <sup>2</sup></a><a class="ft" role="tab" href="articles-web-development.php" aria-selected="false" data-f="web">Web Development <sup>2</sup></a><a class="ft" role="tab" href="articles-career-insights.php" aria-selected="false" data-f="career">Career &amp; Insights <sup>2</sup></a></nav></div>
<div id="swap">
<section class="sec2" aria-labelledby="h-feat"><div class="lbl2 rv2"><h2 id="h-feat">Latest in Automation &amp; AI</h2></div>
<div class="afeat" style="grid-template-columns:1fr"><article class="ac pc big">
<a class="pl al" href="article.php" data-article="automate-repetitive-work">
<div class="cov"><img src="images/covers/automate-repetitive-work.svg" alt="Five manual tasks most businesses should automate first — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Automation &amp; AI</span></div>
<div class="ab"><h3>Five manual tasks most businesses should automate first</h3><p>Spreadsheets, copy-pasting between systems and follow-ups — where automation pays off fastest.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2026-02-14">Feb 2026</time> · 5 min read</small></span></div></div></a></article></div></section>
<section class="sec2" aria-labelledby="h-all"><div class="lbl2 rv2"><h2 id="h-all">More articles</h2></div>
<div class="alay"><div><div class="agrid"><article class="ac pc ">
<a class="pl al" href="article.php" data-article="ai-in-business-workflows">
<div class="cov"><img src="images/covers/ai-in-business-workflows.svg" alt="Using AI in business workflows without losing control — cover image" width="1600" height="900" loading="lazy" decoding="async"><span class="cb">Automation &amp; AI</span></div>
<div class="ab"><h3>Using AI in business workflows without losing control</h3><p>Where AI-assisted steps help, where they don't, and how to keep a human in the loop.</p><div class="am"><img src="images/profile.svg" alt="" width="28" height="28" loading="lazy"><span><b>Amaanullah Khan</b><small><time datetime="2025-12-18">Dec 2025</time> · 7 min read</small></span></div></div></a></article></div></div><aside class="aside" aria-label="Sidebar">
 <section class="box rv2"><h3>Most read</h3><ol class="mr"><li><a href="article.php" data-article="multi-tenant-laravel">How I structure multi-tenant SaaS apps in Laravel</a></li><li><a href="article.php" data-article="crm-around-your-sales-process">Build your CRM around your sales process — not the other way round</a></li><li><a href="article.php" data-article="flutter-with-laravel-api">Connecting a Flutter app to a Laravel REST API</a></li><li><a href="article.php" data-article="ai-wont-replace-fundamentals">AI speeds up coding — it doesn't replace fundamentals</a></li></ol></section>
 <section class="box nlb rv2" aria-labelledby="h-nl"><h3 id="h-nl">Get new articles by email</h3><p>Occasional, practical posts on Laravel, SaaS and automation. No spam.</p>
  <form class="nlf" action="javascript:void(0)" method="post" novalidate>
   <label class="hp" aria-hidden="true">Leave empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
   <label for="nl-ai" class="hp">Email address</label><input id="nl-ai" type="email" name="email" placeholder="you@company.com" required autocomplete="email">
   <button type="submit">Subscribe</button><div class="msg" role="status" aria-live="polite"></div></form>
 </section>
 <section class="box rv2"><h3>Topics</h3><div class="tagc"><a href="articles-laravel-php.php">Laravel &amp; PHP</a><a href="articles-saas-crm.php">SaaS &amp; CRM</a><a href="articles-automation-ai.php">Automation &amp; AI</a><a href="articles-mobile-flutter.php">Mobile (Flutter)</a><a href="articles-web-development.php">Web Development</a><a href="articles-career-insights.php">Career &amp; Insights</a></div></section>
</aside></div></section>
<section class="cta2"><div class="band rv2"><div><h2>Need help with Automation &amp; AI?</h2><p>Tell me about your project — I reply within 24 hours with clear next steps.</p></div><div class="btns" style="margin:0"><a class="bo w" href="contact.php">Book a Call →</a><a class="bo g" href="services.php">View services</a></div></div></section>
</div></main>
<div class="cur" id="cur" aria-hidden="true">Read ↗</div>
<?php include dirname(__DIR__) . '/layouts/footer.php'; ?>
