<?php
$page_title = 'Software Products — SaaS & Custom Platforms | Amaanullah Khan';
$page_desc = 'Software products built by Amaanullah Khan, including Chatrox, a real-time enterprise chat app built with Laravel and WebSockets as a fully owned alternative to per-seat tools.';
$canonical_url = 'https://example.com/projects/products';
$og_image = 'https://example.com/images/og-projects.png';
$page_css = 'css/projects.css';
$active_nav = 'projects';
$page_js = 'js/projects.js';

ob_start();
?>
<script type="application/ld+json" class="pld">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://example.com/"}, {"@type": "ListItem", "position": 2, "name": "Projects", "item": "https://example.com/projects"}, {"@type": "ListItem", "position": 3, "name": "Products", "item": "https://example.com/projects/products"}]}</script>
<script type="application/ld+json" class="pld">{
 "@context": "https://schema.org",
 "@type": "CollectionPage",
 "name": "Software Products \u2014 SaaS & Custom Platforms | Amaanullah Khan",
 "description": "Software products built by Amaanullah Khan, including Chatrox, a real-time enterprise chat app built with Laravel and WebSockets as a fully owned alternative to per-seat tools.",
 "url": "https://example.com/projects/products",
 "mainEntity": {
  "@type": "ItemList",
  "numberOfItems": 1,
  "itemListElement": [
   {
    "@type": "ListItem",
    "position": 1,
    "item": {
     "@type": "CreativeWork",
     "name": "Chatrox \u2014 Custom Enterprise Chat App (Slack Alternative)",
     "genre": "Products",
     "creator": {
      "@type": "Person",
      "name": "Amaanullah Khan"
     }
    }
   }
  ]
 }
}</script>
<?php
$extra_head = ob_get_clean();
include 'includes/header.php';
?>
<main id="main" data-page="products">
<header class="ph"><nav class="crumb" aria-label="Breadcrumb"><ol><li><a href="index.php">Home</a></li><li><a href="projects.php">Projects</a></li><li aria-current="page">Products</li></ol></nav>
 <span class="eyebrow rv2">✦ Products</span>
 <div class="row"><div><h1 class="rv2">Products you own, <em>not rent.</em></h1><p class="lead2 rv2" style="max-width:640px;margin-top:12px">Software products and SaaS platforms built on Laravel — designed to scale, with multi-tenant architecture, subscription billing and solid REST APIs.</p><p class="lead2 rv2" style="max-width:640px;margin-top:12px">Chatrox is a real-time chat platform built with Laravel and WebSockets: a fully owned alternative to per-seat tools like Slack.</p></div>
 <nav class="hcs rv2" aria-label="Project categories"><a class="hc" href="projects-web-design.php" data-f="web"><b>03</b><span>Web Design & Development</span><small>E-commerce, marketplaces and custom websites.</small></a><a class="hc" href="projects-web-applications.php" data-f="apps"><b>06</b><span>Web Applications</span><small>Custom CRMs, HR portals and business systems.</small></a><a class="hc act" href="projects-products.php" data-f="products"><b>01</b><span>Products</span><small>Owned software products like chat platforms.</small></a><a class="hc" href="projects-mobile-apps.php" data-f="mobile"><b>03</b><span>Mobile Applications</span><small>Cross-platform Flutter apps for iOS and Android.</small></a></nav></div>
</header>
<div class="fbar2"><nav class="fts" role="tablist" aria-label="Filter projects by category"><span class="ind" aria-hidden="true"></span><a class="ft" role="tab" href="projects.php" aria-selected="false" data-f="all">All <sup>13</sup></a><a class="ft" role="tab" href="projects-web-design.php" aria-selected="false" data-f="web">Web Design &amp; Development <sup>3</sup></a><a class="ft" role="tab" href="projects-web-applications.php" aria-selected="false" data-f="apps">Web Applications <sup>6</sup></a><a class="ft" role="tab" href="projects-products.php" aria-selected="true" aria-current="page" data-f="products">Products <sup>1</sup></a><a class="ft" role="tab" href="projects-mobile-apps.php" aria-selected="false" data-f="mobile">Mobile Applications <sup>3</sup></a></nav></div>
<div id="swap">
<section class="sec2" id="featured" aria-labelledby="h-feat"><div class="lbl2 rv2"><h2 id="h-feat">Featured products</h2></div>
<!-- EDIT: featured choice for this page: chatrox -->
<div class="featg n1"><article class="pc big" data-cat="products"><!-- EDIT: description trimmed from live page (was truncated); tags inferred from description — confirm. Filter: products -->
<a href="project-detail.php" data-project="chatrox" class="pl" aria-label="View case study: Chatrox — Custom Enterprise Chat App (Slack Alternative)"><!-- URL: case study page for chatrox -->
<div class="ban"><!-- SWAP BANNER: images/banners/chatrox.svg → your 1600x1000 (16:10) banner --><img src="images/banners/chatrox.svg" alt="Chatrox — Custom Enterprise Chat App (Slack Alternative) — Products project banner" width="1600" height="1000" loading="lazy" decoding="async"><span class="cb">Products</span><span class="pst live">Live</span><!-- EDIT: status Live/Beta --></div>
<div class="pb"><span class="lab">Communication Tech / Enterprise Systems</span><div class="pt"><h3>Chatrox — Custom Enterprise Chat App (Slack Alternative)</h3><span class="ar" aria-hidden="true">↗</span></div><p>Real-time messaging platform built with Laravel and WebSockets.</p>
<div class="tg"><span>Laravel</span><span>WebSockets</span></div><span class="vc">View case study <b>→</b></span></div></a></article></div></section>
<!-- no further projects in this category yet -->
<section class="sec2 pfaq" aria-labelledby="h-faq"><div class="lbl2 rv2"><h2 id="h-faq">Questions about products</h2></div><div class="rv2"><details><summary>Can you build a SaaS product from an idea to launch?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details><details><summary>Do you handle subscription billing?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details><details><summary>Can a product like Chatrox be set up for my company?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details></div></section>
<section class="cta2"><div class="band rv2"><div><h2>Planning a SaaS product?</h2><p>Tell me about your idea — I'll help turn it into a phased build plan. I reply within 24 hours.</p></div><div class="btns" style="margin:0"><a class="bo w" href="contact.php">Get a Quote →</a><a class="bo g" href="contact.php">Book a Demo</a></div></div></section>
</div>
</main>
<div class="cur" id="cur" aria-hidden="true">View ↗</div>
<?php include 'includes/footer.php'; ?>
