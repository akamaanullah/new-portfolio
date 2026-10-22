<?php
/**
 * Global Footer Component
 * Amaanullah — Web Developer & Software Solutions
 */
?>
  <!-- Footer -->
  <footer class="foot" id="footer">
    <svg class="fwave" viewBox="0 0 1440 120" preserveAspectRatio="none">
      <defs>
        <linearGradient id="gFw" x1="0" x2="1">
          <stop offset="0" stop-color="#f26a1b" stop-opacity=".1"/>
          <stop offset=".5" stop-color="#ff8a3d"/>
          <stop offset="1" stop-color="#f26a1b" stop-opacity=".1"/>
        </linearGradient>
      </defs>
      <path d="M0,70 C180,20 360,110 560,60 C760,10 900,90 1100,50 C1250,22 1360,40 1440,60 V120 H0Z" fill="#14151d"/>
      <path d="M0,70 C180,20 360,110 560,60 C760,10 900,90 1100,50 C1250,22 1360,40 1440,60" fill="none" stroke="url(#gFw)" stroke-width="2.5" style="filter:drop-shadow(0 0 6px #ff6a1a)"/>
    </svg>

    <div class="fbody">
      <div class="fin">
        <button class="btt" id="btt" aria-label="Back to top">↑</button>
        <div class="fcols">
          <div>
            <a class="logo" href="<?= function_exists('base_url') ? base_url('#home') : 'index.php#home' ?>" style="margin-bottom:14px;display:inline-flex" aria-label="Amaanullah — Home">
              <img src="<?= function_exists('asset_url') ? asset_url('images/logo.webp') : 'images/logo.webp' ?>" alt="Amaanullah" class="logo-img" width="160" height="44" style="height:36px;width:auto">
            </a>
            <p class="fabout">Custom web apps, CRMs, chat platforms, automation and mobile apps, built to be secure, fast and scalable.</p>
          </div>
          <div class="fcol">
            <h5>Quick Links</h5>
            <a href="<?= function_exists('base_url') ? base_url('#home') : 'index.php#home' ?>">Home</a>
            <a href="<?= function_exists('base_url') ? base_url('about') : 'about.php' ?>">About</a>
            <a href="<?= function_exists('base_url') ? base_url('services') : 'services.php' ?>">Services</a>
            <a href="<?= function_exists('base_url') ? base_url('projects') : 'projects.php' ?>">Projects</a>
            <a href="<?= function_exists('base_url') ? base_url('articles') : 'articles.php' ?>">Articles</a>
            <a href="<?= function_exists('base_url') ? base_url('#reviews') : 'index.php#reviews' ?>">Reviews</a>
            <a href="<?= function_exists('base_url') ? base_url('contact') : 'contact.php' ?>">Contact</a>
          </div>
          <div class="fcol">
            <h5>Services</h5>
            <a href="<?= function_exists('base_url') ? base_url('service-detail?service=crm') : 'service-detail.php?service=crm' ?>">Custom CRM Development</a>
            <a href="<?= function_exists('base_url') ? base_url('service-detail?service=ai') : 'service-detail.php?service=ai' ?>">AI Automation Services</a>
            <a href="<?= function_exists('base_url') ? base_url('service-detail?service=web') : 'service-detail.php?service=web' ?>">Web App &amp; CMS Development</a>
            <a href="<?= function_exists('base_url') ? base_url('service-detail?service=saas') : 'service-detail.php?service=saas' ?>">SaaS Application Development</a>
            <a href="<?= function_exists('base_url') ? base_url('service-detail?service=mobile') : 'service-detail.php?service=mobile' ?>">Mobile App Development</a>
            <a href="<?= function_exists('base_url') ? base_url('service-detail?service=performance') : 'service-detail.php?service=performance' ?>">Performance Tuning</a>
          </div>
          <div class="fcol">
            <h5>Projects</h5>
            <a href="<?= function_exists('base_url') ? base_url('projects') : 'projects.php' ?>">All Projects</a>
            <a href="<?= function_exists('base_url') ? base_url('projects/web-applications') : 'projects-web-applications.php' ?>">Web Applications</a>
            <a href="<?= function_exists('base_url') ? base_url('projects/web-design') : 'projects-web-design.php' ?>">Web Design &amp; Dev</a>
            <a href="<?= function_exists('base_url') ? base_url('projects/mobile-apps') : 'projects-mobile-apps.php' ?>">Mobile Applications</a>
            <a href="<?= function_exists('base_url') ? base_url('projects/products') : 'projects-products.php' ?>">Products</a>
          </div>
          <div class="fcol">
            <h5>Contact</h5>
            <a href="tel:+923196935307">+92 319 6935307</a>
            <a href="mailto:info@amaanullah.com">info@amaanullah.com</a>
            <a href="<?= function_exists('base_url') ? base_url('contact') : 'contact.php' ?>">Send a message →</a>
          </div>
        </div>
        <div class="wm" aria-hidden="true">LET'S BUILD</div>
        <div class="fbar">
          <span>© <span id="yr"><?= date('Y') ?></span> Amaanullah | Custom Software Business Solutions. All Rights Reserved.</span>
          <span class="hand">made with ♥ &amp; clean code</span>
          <span><a href="javascript:void(0)" style="color:inherit">Privacy</a> · <a href="javascript:void(0)" style="color:inherit">Terms</a></span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <?php if (!empty($page_js)): ?>
    <?php if (is_array($page_js)): ?>
      <?php foreach ($page_js as $js): ?>
        <script <?= !empty($js_module) ? 'type="module"' : '' ?> src="<?= function_exists('base_url') ? base_url($js) : $js ?>" defer></script>
      <?php endforeach; ?>
    <?php else: ?>
      <script <?= !empty($js_module) ? 'type="module"' : '' ?> src="<?= function_exists('base_url') ? base_url($page_js) : $page_js ?>" defer></script>
    <?php endif; ?>
  <?php endif; ?>

  <!-- AK Chatbot Widget -->
  <?php if (empty($disable_chatbot)): ?>
  <link rel="stylesheet" href="<?= function_exists('asset_url') ? asset_url('css/chatbot.css') : 'css/chatbot.css' ?>">
  <script>
    window.AK_CHATBOT_CONFIG = {
      endpoint: null,
      leadEndpoint: null,
      botName: 'Amaanullah AI',
      whatsapp: 'https://wa.me/923196935307',
      poweredBy: 'Amaanullah',
      poweredUrl: 'javascript:void(0)'
    };
  </script>
  <script src="<?= function_exists('asset_url') ? asset_url('js/chatbot.js') : 'js/chatbot.js' ?>" defer></script>
  <?php endif; ?>
</body>
</html>
