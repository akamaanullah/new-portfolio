<?php
$page_title = 'Mobile App Projects — Flutter Apps for iOS & Android | Amaanullah Khan';
$page_desc = 'Cross-platform Flutter mobile apps for iOS and Android by Amaanullah Khan — e-commerce, healthcare and travel apps connected to Laravel REST APIs and Firebase.';
$canonical_url = 'https://example.com/projects/mobile-apps';
$og_image = 'https://example.com/images/og-projects.png';
$page_css = 'css/projects.css';
$active_nav = 'projects';
$page_js = 'js/projects.js';

ob_start();
?>
<script type="application/ld+json" class="pld">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://example.com/"}, {"@type": "ListItem", "position": 2, "name": "Projects", "item": "https://example.com/projects"}, {"@type": "ListItem", "position": 3, "name": "Mobile Applications", "item": "https://example.com/projects/mobile-apps"}]}</script>
<script type="application/ld+json" class="pld">{
 "@context": "https://schema.org",
 "@type": "CollectionPage",
 "name": "Mobile App Projects \u2014 Flutter Apps for iOS & Android | Amaanullah Khan",
 "description": "Cross-platform Flutter mobile apps for iOS and Android by Amaanullah Khan \u2014 e-commerce, healthcare and travel apps connected to Laravel REST APIs and Firebase.",
 "url": "https://example.com/projects/mobile-apps",
 "mainEntity": {
  "@type": "ItemList",
  "numberOfItems": 3,
  "itemListElement": [
   {
    "@type": "ListItem",
    "position": 1,
    "item": {
     "@type": "CreativeWork",
     "name": "Babyshop \u2014 Flutter E-Commerce Mobile App",
     "genre": "Mobile Applications",
     "creator": {
      "@type": "Person",
      "name": "Amaanullah Khan"
     }
    }
   },
   {
    "@type": "ListItem",
    "position": 2,
    "item": {
     "@type": "CreativeWork",
     "name": "Healink \u2014 Hospital & Medical Records Management App",
     "genre": "Mobile Applications",
     "creator": {
      "@type": "Person",
      "name": "Amaanullah Khan"
     }
    }
   },
   {
    "@type": "ListItem",
    "position": 3,
    "item": {
     "@type": "CreativeWork",
     "name": "Tour Guide Mobile App \u2014 Travel Companion for Pakistan",
     "genre": "Mobile Applications",
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
include dirname(__DIR__) . '/layouts/header.php';
?>
<main id="main" data-page="mobile">
<header class="ph"><nav class="crumb" aria-label="Breadcrumb"><ol><li><a href="index.php">Home</a></li><li><a href="projects.php">Projects</a></li><li aria-current="page">Mobile Applications</li></ol></nav>
 <span class="eyebrow rv2">✦ Mobile Applications</span>
 <div class="row"><div><h1 class="rv2">Flutter apps for <em>iOS &amp; Android.</em></h1><p class="lead2 rv2" style="max-width:640px;margin-top:12px">Cross-platform mobile apps built with Flutter — one codebase for iOS and Android, connected to Laravel REST APIs or Firebase, with offline sync and push notifications.</p><p class="lead2 rv2" style="max-width:640px;margin-top:12px">From e-commerce to healthcare and travel, the same developer builds the backend and the app, so nothing gets lost in translation.</p></div>
 <nav class="hcs rv2" aria-label="Project categories"><a class="hc" href="projects-web-design.php" data-f="web"><b>03</b><span>Web Design & Development</span><small>E-commerce, marketplaces and custom websites.</small></a><a class="hc" href="projects-web-applications.php" data-f="apps"><b>06</b><span>Web Applications</span><small>Custom CRMs, HR portals and business systems.</small></a><a class="hc" href="projects-products.php" data-f="products"><b>01</b><span>Products</span><small>Owned software products like chat platforms.</small></a><a class="hc act" href="projects-mobile-apps.php" data-f="mobile"><b>03</b><span>Mobile Applications</span><small>Cross-platform Flutter apps for iOS and Android.</small></a></nav></div>
</header>
<div class="fbar2"><nav class="fts" role="tablist" aria-label="Filter projects by category"><span class="ind" aria-hidden="true"></span><a class="ft" role="tab" href="projects.php" aria-selected="false" data-f="all">All <sup>13</sup></a><a class="ft" role="tab" href="projects-web-design.php" aria-selected="false" data-f="web">Web Design &amp; Development <sup>3</sup></a><a class="ft" role="tab" href="projects-web-applications.php" aria-selected="false" data-f="apps">Web Applications <sup>6</sup></a><a class="ft" role="tab" href="projects-products.php" aria-selected="false" data-f="products">Products <sup>1</sup></a><a class="ft" role="tab" href="projects-mobile-apps.php" aria-selected="true" aria-current="page" data-f="mobile">Mobile Applications <sup>3</sup></a></nav></div>
<div id="swap">
<section class="sec2" id="featured" aria-labelledby="h-feat"><div class="lbl2 rv2"><h2 id="h-feat">Featured mobile applications</h2></div>
<!-- EDIT: featured choice for this page: babyshop, healink -->
<div class="featg n2"><article class="pc big" data-cat="mobile"><!-- EDIT: description trimmed from live page (was truncated); tags inferred from description — confirm. Filter: mobile -->
<a href="project-detail.php" data-project="babyshop" class="pl" aria-label="View case study: Babyshop — Flutter E-Commerce Mobile App"><!-- URL: case study page for babyshop -->
<div class="ban"><!-- SWAP BANNER: images/banners/babyshop.svg → your 1600x1000 (16:10) banner --><img src="images/banners/babyshop.svg" alt="Babyshop — Flutter E-Commerce Mobile App — Mobile Applications project banner" width="1600" height="1000" loading="lazy" decoding="async"><span class="cb">Mobile Applications</span></div>
<div class="pb"><span class="lab">Mobile App Development / Firebase Systems</span><div class="pt"><h3>Babyshop — Flutter E-Commerce Mobile App</h3><span class="ar" aria-hidden="true">↗</span></div><p>E-commerce mobile app with separate user and admin apps.</p>
<div class="tg"><span>Flutter</span><span>Firebase</span></div><div class="plat"><span>Android</span><span>iOS</span></div><span class="vc">View case study <b>→</b></span></div></a></article><article class="pc big" data-cat="mobile"><!-- EDIT: description trimmed from live page (was truncated); tags inferred from description — confirm. Filter: mobile -->
<a href="project-detail.php" data-project="healink" class="pl" aria-label="View case study: Healink — Hospital &amp; Medical Records Management App"><!-- URL: case study page for healink -->
<div class="ban"><!-- SWAP BANNER: images/banners/healink.svg → your 1600x1000 (16:10) banner --><img src="images/banners/healink.svg" alt="Healink — Hospital &amp; Medical Records Management App — Mobile Applications project banner" width="1600" height="1000" loading="lazy" decoding="async"><span class="cb">Mobile Applications</span></div>
<div class="pb"><span class="lab">Healthcare Tech / Enterprise Systems</span><div class="pt"><h3>Healink — Hospital &amp; Medical Records Management App</h3><span class="ar" aria-hidden="true">↗</span></div><p>Healthcare platform connecting patients, doctors, hospitals and pharmacies.</p>
<div class="tg"><span>Healthcare</span></div><div class="plat"><span>Android</span><span>iOS</span></div><span class="vc">View case study <b>→</b></span></div></a></article></div></section>
<section class="sec2" id="all-projects" aria-labelledby="h-all"><div class="lbl2 rv2"><h2 id="h-all">More mobile applications</h2></div><div class="pgrid"><article class="pc" data-cat="mobile"><!-- EDIT: description trimmed from live page (was truncated); tags inferred from description — confirm. Filter: mobile -->
<a href="project-detail.php" data-project="tour-guide-app" class="pl" aria-label="View case study: Tour Guide Mobile App — Travel Companion for Pakistan"><!-- URL: case study page for tour-guide-app -->
<div class="ban"><!-- SWAP BANNER: images/banners/tour-guide-app.svg → your 1600x1000 (16:10) banner --><img src="images/banners/tour-guide-app.svg" alt="Tour Guide Mobile App — Travel Companion for Pakistan — Mobile Applications project banner" width="1600" height="1000" loading="lazy" decoding="async"><span class="cb">Mobile Applications</span></div>
<div class="pb"><span class="lab">Mobile Development / Tourism Tech</span><div class="pt"><h3>Tour Guide Mobile App — Travel Companion for Pakistan</h3><span class="ar" aria-hidden="true">↗</span></div><p>Flutter travel app integrating Weather and Location APIs for real-time info.</p>
<div class="tg"><span>Flutter</span><span>APIs</span></div><div class="plat"><span>Android</span><span>iOS</span></div><span class="vc">View case study <b>→</b></span></div></a></article></div></section>
<section class="sec2 pfaq" aria-labelledby="h-faq"><div class="lbl2 rv2"><h2 id="h-faq">Questions about mobile applications</h2></div><div class="rv2"><details><summary>Do you build for both iOS and Android?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details><details><summary>Can the app connect to my existing website or backend?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details><details><summary>Do you help with publishing to the App Store and Play Store?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details></div></section>
<section class="cta2"><div class="band rv2"><div><h2>Have an app idea?</h2><p>Tell me what your app needs to do — I reply within 24 hours with next steps.</p></div><div class="btns" style="margin:0"><a class="bo w" href="contact.php">Get a Quote →</a><a class="bo g" href="contact.php">Book a Demo</a></div></div></section>
</div>
</main>
<div class="cur" id="cur" aria-hidden="true">View ↗</div>
<?php include dirname(__DIR__) . '/layouts/footer.php'; ?>
