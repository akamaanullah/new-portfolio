<?php
$page_title = 'Web Design & Development Projects — E-Commerce & Custom Websites | Amaanullah Khan';
$page_desc = 'Custom websites and e-commerce platforms built with PHP and Laravel by Amaanullah Khan, a Karachi-based developer working with businesses in Pakistan, the UK, US and UAE.';
$canonical_url = 'https://example.com/projects/web-design-development';
$og_image = 'https://example.com/images/og-projects.png';
$page_css = 'css/projects.css';
$active_nav = 'projects';
$page_js = 'js/projects.js';

ob_start();
?>
<script type="application/ld+json" class="pld">{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://example.com/"}, {"@type": "ListItem", "position": 2, "name": "Projects", "item": "https://example.com/projects"}, {"@type": "ListItem", "position": 3, "name": "Web Design & Development", "item": "https://example.com/projects/web-design-development"}]}</script>
<script type="application/ld+json" class="pld">{
 "@context": "https://schema.org",
 "@type": "CollectionPage",
 "name": "Web Design & Development Projects \u2014 E-Commerce & Custom Websites | Amaanullah Khan",
 "description": "Custom websites and e-commerce platforms built with PHP and Laravel by Amaanullah Khan, a Karachi-based developer working with businesses in Pakistan, the UK, US and UAE.",
 "url": "https://example.com/projects/web-design-development",
 "mainEntity": {
  "@type": "ItemList",
  "numberOfItems": 3,
  "itemListElement": [
   {
    "@type": "ListItem",
    "position": 1,
    "item": {
     "@type": "CreativeWork",
     "name": "Custom Vape E-Commerce Platform (PHP, No Shopify/WooCommerce)",
     "genre": "Web Design & Development",
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
     "name": "IT Hardware Bin \u2014 B2B Bulk Hardware E-Commerce Platform",
     "genre": "Web Design & Development",
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
     "name": "Adsimpressions \u2014 Custom Digital Agency Website",
     "genre": "Web Design & Development",
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
<main id="main" data-page="web">
<header class="ph"><nav class="crumb" aria-label="Breadcrumb"><ol><li><a href="index.php">Home</a></li><li><a href="projects.php">Projects</a></li><li aria-current="page">Web Design &amp; Development</li></ol></nav>
 <span class="eyebrow rv2">✦ Web Design &amp; Development</span>
 <div class="row"><div><h1 class="rv2">Websites &amp; e-commerce <em>built to sell.</em></h1><p class="lead2 rv2" style="max-width:640px;margin-top:12px">Custom websites and e-commerce platforms built in PHP and Laravel — no locked-in templates. Fast pages, clean admin panels and checkouts designed around how your customers actually buy.</p><p class="lead2 rv2" style="max-width:640px;margin-top:12px">Based in Karachi, building for businesses across Pakistan, the UK, US, UAE and Saudi Arabia.</p></div>
 <nav class="hcs rv2" aria-label="Project categories"><a class="hc act" href="projects-web-design.php" data-f="web"><b>03</b><span>Web Design & Development</span><small>E-commerce, marketplaces and custom websites.</small></a><a class="hc" href="projects-web-applications.php" data-f="apps"><b>06</b><span>Web Applications</span><small>Custom CRMs, HR portals and business systems.</small></a><a class="hc" href="projects-products.php" data-f="products"><b>01</b><span>Products</span><small>Owned software products like chat platforms.</small></a><a class="hc" href="projects-mobile-apps.php" data-f="mobile"><b>03</b><span>Mobile Applications</span><small>Cross-platform Flutter apps for iOS and Android.</small></a></nav></div>
</header>
<div class="fbar2"><nav class="fts" role="tablist" aria-label="Filter projects by category"><span class="ind" aria-hidden="true"></span><a class="ft" role="tab" href="projects.php" aria-selected="false" data-f="all">All <sup>13</sup></a><a class="ft" role="tab" href="projects-web-design.php" aria-selected="true" aria-current="page" data-f="web">Web Design &amp; Development <sup>3</sup></a><a class="ft" role="tab" href="projects-web-applications.php" aria-selected="false" data-f="apps">Web Applications <sup>6</sup></a><a class="ft" role="tab" href="projects-products.php" aria-selected="false" data-f="products">Products <sup>1</sup></a><a class="ft" role="tab" href="projects-mobile-apps.php" aria-selected="false" data-f="mobile">Mobile Applications <sup>3</sup></a></nav></div>
<div id="swap">
<section class="sec2" id="featured" aria-labelledby="h-feat"><div class="lbl2 rv2"><h2 id="h-feat">Featured web design &amp; development</h2></div>
<!-- EDIT: featured choice for this page: custom-vape-ecommerce, it-hardware-bin -->
<div class="featg n2"><article class="pc big" data-cat="web"><!-- EDIT: description trimmed from live page (was truncated); tags inferred from description — confirm. Filter: web -->
<a href="project-detail.php" data-project="custom-vape-ecommerce" class="pl" aria-label="View case study: Custom Vape E-Commerce Platform (PHP, No Shopify/WooCommerce)"><!-- URL: case study page for custom-vape-ecommerce -->
<div class="ban"><!-- SWAP BANNER: images/banners/custom-vape-ecommerce.svg → your 1600x1000 (16:10) banner --><img src="images/banners/custom-vape-ecommerce.svg" alt="Custom Vape E-Commerce Platform (PHP, No Shopify/WooCommerce) — Web Design & Development project banner" width="1600" height="1000" loading="lazy" decoding="async"><span class="cb">Web Design & Development</span></div>
<div class="pb"><span class="lab">E-Commerce / Custom SaaS Platform</span><div class="pt"><h3>Custom Vape E-Commerce Platform (PHP, No Shopify/WooCommerce)</h3><span class="ar" aria-hidden="true">↗</span></div><p>Fully custom PHP e-commerce platform for a UK vape retailer, including an admin panel.</p>
<div class="tg"><span>PHP</span><span>E-Commerce</span></div><span class="vc">View case study <b>→</b></span></div></a></article><article class="pc big" data-cat="web"><!-- EDIT: description trimmed from live page (was truncated); tags inferred from description — confirm. Filter: web -->
<a href="project-detail.php" data-project="it-hardware-bin" class="pl" aria-label="View case study: IT Hardware Bin — B2B Bulk Hardware E-Commerce Platform"><!-- URL: case study page for it-hardware-bin -->
<div class="ban"><!-- SWAP BANNER: images/banners/it-hardware-bin.svg → your 1600x1000 (16:10) banner --><img src="images/banners/it-hardware-bin.svg" alt="IT Hardware Bin — B2B Bulk Hardware E-Commerce Platform — Web Design & Development project banner" width="1600" height="1000" loading="lazy" decoding="async"><span class="cb">Web Design & Development</span></div>
<div class="pb"><span class="lab">E-Commerce &amp; Scalable Systems</span><div class="pt"><h3>IT Hardware Bin — B2B Bulk Hardware E-Commerce Platform</h3><span class="ar" aria-hidden="true">↗</span></div><p>E-commerce platform for large-scale IT hardware procurement, with 2,000+ products.</p>
<div class="tg"><span>E-Commerce</span><span>B2B</span></div><span class="vc">View case study <b>→</b></span></div></a></article></div></section>
<section class="sec2" id="all-projects" aria-labelledby="h-all"><div class="lbl2 rv2"><h2 id="h-all">More web design &amp; development</h2></div><div class="pgrid"><article class="pc" data-cat="web"><!-- EDIT: description trimmed from live page (was truncated); tags inferred from description — confirm. Filter: web -->
<a href="project-detail.php" data-project="adsimpressions" class="pl" aria-label="View case study: Adsimpressions — Custom Digital Agency Website"><!-- URL: case study page for adsimpressions -->
<div class="ban"><!-- SWAP BANNER: images/banners/adsimpressions.svg → your 1600x1000 (16:10) banner --><img src="images/banners/adsimpressions.svg" alt="Adsimpressions — Custom Digital Agency Website — Web Design & Development project banner" width="1600" height="1000" loading="lazy" decoding="async"><span class="cb">Web Design & Development</span></div>
<div class="pb"><span class="lab">Web &amp; Digital Platforms / Custom Solutions</span><div class="pt"><h3>Adsimpressions — Custom Digital Agency Website</h3><span class="ar" aria-hidden="true">↗</span></div><p>Custom-built digital agency platform showcasing services.</p>
<div class="tg"><span>Agency</span><span>Custom Build</span></div><span class="vc">View case study <b>→</b></span></div></a></article></div></section>
<section class="sec2 pfaq" aria-labelledby="h-faq"><div class="lbl2 rv2"><h2 id="h-faq">Questions about web design &amp; development</h2></div><div class="rv2"><details><summary>Do you build custom e-commerce without Shopify or WooCommerce?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details><details><summary>Can you redesign or speed up my existing website?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details><details><summary>Will I be able to manage products and content myself?</summary><!-- EDIT: answer; add FAQPage JSON-LD once real answers exist --><p>[Answer coming soon — EDIT]</p></details></div></section>
<section class="cta2"><div class="band rv2"><div><h2>Need a website that actually converts?</h2><p>Tell me about your store or business site — I reply within 24 hours with next steps.</p></div><div class="btns" style="margin:0"><a class="bo w" href="contact.php">Get a Quote →</a><a class="bo g" href="contact.php">Book a Demo</a></div></div></section>
</div>
</main>
<div class="cur" id="cur" aria-hidden="true">View ↗</div>
<?php include dirname(__DIR__) . '/layouts/footer.php'; ?>
