<?php
$page_title = "About Amaanullah Khan — Software Developer & Systems Architect | CRM, SaaS & Automation";
$page_desc = "Amaanullah Khan is a Karachi-based software developer and systems architect building custom CRM systems, SaaS applications and workflow automation for businesses in Pakistan, the US, UK, UAE and Saudi Arabia.";
$canonical_url = "https://example.com/about";
$og_image = "images/profile-avatar.png";
$page_css = "css/about.css";
$active_nav = "about";
$page_js = "js/about.js";

$extra_head = '
  <!-- JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Amaanullah Khan",
    "jobTitle": "PHP & Laravel Developer",
    "description": "Karachi-based software developer and systems architect building custom CRM systems, SaaS applications and workflow automation.",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Karachi",
      "addressCountry": "PK"
    },
    "email": "mailto:info@amaanullah.com",
    "telephone": "+92 319 6935307",
    "worksFor": {
      "@type": "Organization",
      "name": "Richmond Tech Group"
    },
    "alumniOf": {
      "@type": "EducationalOrganization",
      "name": "Aptech Learning"
    },
    "knowsAbout": [
      "PHP", "Laravel", "MySQL", "MongoDB", "Node.js", "React.js", "Python", "Flutter", "CRM", "SaaS", "Workflow automation"
    ],
    "url": "https://example.com/about"
  }
  </script>
';

include 'includes/header.php';
?>

  <main>
    <!-- 1. Hero Section -->
    <header class="wrap ahero">
      <aside class="card pcard fade">
        <div class="img-wrap">
          <img src="images/profile-avatar.png" alt="Amaanullah Khan, PHP and Laravel developer in Karachi" width="400" height="400" loading="eager">
        </div>
        <h2>Amaanullah Khan</h2>
        <div class="role">PHP &amp; Laravel Developer</div>
        <div class="meta">
          <span>📍 Karachi, Pakistan</span>
          <span>Also: Flutter mobile apps</span>
        </div>
        <a class="grate" href="javascript:void(0)">
          <span class="g">G</span>
          <span><b>4.8 ★ Google Rating</b><small>27 Google reviews</small></span>
        </a>
      </aside>

      <div class="fade">
        <span class="eyebrow">✦ About Amaanullah Khan</span>
        <h1>Hi, I'm <em>Amaanullah&nbsp;Khan</em>&nbsp;👋<br>Software Developer &amp; Systems Architect</h1>
        <p class="lead2">
          <b>Karachi-based</b> developer building custom <b>CRM systems</b>, <b>SaaS applications</b> and <b>workflow automation</b> for businesses across Pakistan, the US, UK, UAE and Saudi Arabia.
        </p>
        <p class="lead2" style="margin-top:14px;font-size:16px">
          Full-stack developer and team lead — turning messy day-to-day operations into systems that actually hold up under real use.
        </p>

        <div class="btns">
          <a class="bo pri" href="javascript:void(0)">⬇ Download CV</a>
          <a class="bo sec" href="contact.php">Let's work together →</a>
        </div>

        <div class="facts">
          <div><b>PHP &amp; Laravel</b><small>Daily stack</small></div>
          <div><b>React · Node · Flutter</b><small>Web to mobile</small></div>
          <div><b>1.5M+ leads</b><small>CRM built &amp; scaled</small></div>
        </div>

        <div class="vp">
          VERIFIED PROFILES 
          <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">LinkedIn</a>
          <a href="https://github.com" target="_blank" rel="noopener noreferrer">GitHub</a>
        </div>
      </div>
    </header>

    <!-- 2. Story / Journey -->
    <section class="wrap blk" id="story" aria-labelledby="h-story">
      <div class="fade">
        <span class="eyebrow">How I got here</span>
        <h2 id="h-story">From one small build to <em>real systems</em></h2>
        <p class="sub">I built something small, watched a stranger use it, and got hooked. My approach hasn't changed: understand what's slowing a business down first — the code comes after.</p>
      </div>

      <ol class="story" style="list-style:none">
        <li class="step fade">
          <div class="n">01</div>
          <div class="card">
            <h3>Shopify Developer</h3>
            <p>First paid role at a small software studio — customising Liquid themes, fixing slow store pages and tuning checkout flows. Lesson: a feature is done when it helps the business.</p>
          </div>
        </li>
        <li class="step fade">
          <div class="n">02</div>
          <div class="card">
            <h3>Frontend Development</h3>
            <p>Interfaces in HTML, CSS and JavaScript, with page speed and accessibility from day one — and growing curiosity about what happens behind them.</p>
          </div>
        </li>
        <li class="step fade">
          <div class="n">03</div>
          <div class="card">
            <h3>PHP &amp; MySQL</h3>
            <p>Secure server-side logic, proper database design, and what breaks when a system grows from 10 users to 1,000.</p>
          </div>
        </li>
        <li class="step fade">
          <div class="n">04</div>
          <div class="card">
            <h3>Senior Developer &amp; Team Lead</h3>
            <p>At Richmond Tech Group: planning architecture, reviewing code, and making sure the product solves the real problem.</p>
          </div>
        </li>
      </ol>
    </section>

    <!-- 3. Principles & Values -->
    <section class="wrap blk" id="values" aria-labelledby="h-val">
      <div class="fade">
        <span class="eyebrow">Principles</span>
        <h2 id="h-val">What I care about on <em>every project</em></h2>
        <p class="sub">Systems that solve real operational issues and deliver long-term business value.</p>
      </div>

      <div class="g2">
        <article class="card fade">
          <div class="ic">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12l5 5 9-10"/>
            </svg>
          </div>
          <h3>Understanding the problem first</h3>
          <p>I ask how a team actually works before suggesting a solution — no copy-paste setups.</p>
        </article>

        <article class="card fade">
          <div class="ic">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12l5 5 9-10"/>
            </svg>
          </div>
          <h3>Software that's easy to maintain</h3>
          <p>If it breaks the first time someone edits it, it isn't a win — for the client or for me.</p>
        </article>

        <article class="card fade">
          <div class="ic">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12l5 5 9-10"/>
            </svg>
          </div>
          <h3>Measuring results, not features</h3>
          <p>If a CRM should save a sales team time, I want to know it actually does.</p>
        </article>

        <article class="card fade">
          <div class="ic">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12l5 5 9-10"/>
            </svg>
          </div>
          <h3>Staying involved after launch</h3>
          <p>Documentation and a walkthrough, so your team isn't stuck waiting on me for basic changes.</p>
        </article>
      </div>
    </section>

    <!-- 4. Foundation & Tech Ecosystem -->
    <section class="wrap blk split" id="foundation" aria-labelledby="h-fnd">
      <div class="fade">
        <span class="eyebrow">Why the foundation matters</span>
        <h2 id="h-fnd">Trained engineer, <em>not just a prompt</em></h2>
        <div class="quote">
          <p>Anyone can describe an app and get AI to generate something that runs. I use AI tools too — but there's a difference between code that runs today and a system that still works after <b>300 people use it daily</b>, a surprise feature request, or a security review.</p>
          <p>My <b>3-year Aptech diploma</b> covered databases, system architecture and multiple languages. <b>AI speeds up how I write code. It doesn't replace understanding what that code does.</b></p>
        </div>
      </div>

      <div class="fade" id="stack">
        <span class="eyebrow">Tech ecosystem</span>
        <h2 style="font-size:28px">Tools I build with</h2>
        <div class="lbl">MASTERED ARCHITECTURE</div>
        <div class="chips2">
          <span>PHP / Laravel</span>
          <span>MySQL / MongoDB</span>
          <span>Node.js / React.js</span>
          <span>Python / API Design</span>
          <span>Flutter / Dart / Firebase</span>
          <span>JavaScript / HTML / CSS</span>
        </div>

        <div class="lbl">FUTURE FRONTIERS</div>
        <div class="chips2 fut">
          <span>AI / OpenAI / LangChain</span>
          <span>Go (Golang) / Rust</span>
          <span>Bun.js / Hono</span>
          <span>Web3 / Blockchain</span>
        </div>
      </div>
    </section>

    <!-- 5. Solutions -->
    <section class="wrap blk" id="solutions" aria-labelledby="h-sol">
      <div class="fade">
        <span class="eyebrow">CRM, SaaS &amp; Automation Solutions</span>
        <h2 id="h-sol">Software that <em>solves a business problem</em></h2>
        <p class="sub">I believe the best software doesn't just work — it solves a business problem.</p>
      </div>

      <div class="g3">
        <article class="card fade">
          <div class="ic">◆</div>
          <h3>Automation &amp; Efficiency</h3>
          <p>Eliminate manual work with custom workflow automation solutions.</p>
        </article>
        <article class="card fade">
          <div class="ic">◆</div>
          <h3>Multi-tenant Architectures</h3>
          <p>Secure custom CRM and SaaS systems capable of handling millions of records.</p>
        </article>
        <article class="card fade">
          <div class="ic">◆</div>
          <h3>Operational Visibility</h3>
          <p>Dashboards that improve performance and team productivity.</p>
        </article>
      </div>

      <div class="spec fade" aria-label="Specialized solutions">
        <a href="index.html#services">Custom CRM</a>
        <a href="index.html#services">Web Systems</a>
        <a href="index.html#services">SaaS &amp; Custom Products</a>
        <a href="index.html#services">Automation</a>
        <a href="index.html#services">Mobile Apps</a>
      </div>
    </section>

    <!-- 6. Career & Education -->
    <section class="wrap blk split" id="experience">
      <div class="fade" aria-labelledby="h-exp">
        <span class="eyebrow">Career</span>
        <h2 id="h-exp">Professional experience</h2>
        <div class="tl">
          <div class="it">
            <time>2024 – Present</time>
            <h3>Richmond Tech Group</h3>
            <p>Team Lead &amp; Senior Developer — overseeing project architecture, mentoring developers and managing delivery on client systems.</p>
          </div>
          <div class="it">
            <time>2023 – 2024</time>
            <h3>Skylink Elevators</h3>
            <p>Systems Administrator — maintained internal systems and infrastructure.</p>
          </div>
          <div class="it">
            <time>2023 – 2024</time>
            <h3>Master Travel &amp; Tours</h3>
            <p>Ticketing Agent — early experience that taught me how non-technical teams actually use software day to day.</p>
          </div>
        </div>
      </div>

      <div class="fade" aria-labelledby="h-edu">
        <span class="eyebrow">Learning</span>
        <h2 id="h-edu">Education &amp; training</h2>
        <div class="tl">
          <div class="it">
            <time>2022 – 2026</time>
            <h3>Aptech Learning <span class="tag">Graduated</span></h3>
            <p>Software Engineering Diploma — 3-year advanced program covering programming fundamentals, databases and multiple languages and frameworks.</p>
          </div>
          <div class="it">
            <time>2024 · 6 months</time>
            <h3>Design Station</h3>
            <p>Graphic Designing Short Course — helps me work with designers and understand UI decisions, not just implement them.</p>
          </div>
          <div class="it">
            <time>2021 – 2022</time>
            <h3>Science College (Pre-Engineering)</h3>
            <p>Intermediate in Pre-Engineering.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- 7. FAQ -->
    <section class="wrap blk" id="faq" aria-labelledby="h-faq" style="max-width:860px">
      <div class="fade" style="text-align:center">
        <span class="eyebrow">FAQ</span>
        <h2 id="h-faq">Frequently asked questions</h2>
      </div>

      <div class="fade" style="margin-top:30px">
        <details>
          <summary>Do you only work with Laravel, or do you handle full projects?</summary>
          <p>I handle end-to-end full-stack projects from UI/UX design and frontend architecture (React/Vue/Flutter) to backend databases and server DevOps. Laravel is my preferred framework for robust, scalable backends.</p>
        </details>
        <details>
          <summary>Do you work with clients outside Pakistan?</summary>
          <p>Yes, I work regularly with clients across the US, UK, UAE, Saudi Arabia, and Europe. I accommodate international time zones and communication platforms like Slack, Teams, and Zoom.</p>
        </details>
        <details>
          <summary>What kind of projects do you usually take on?</summary>
          <p>Custom multi-tenant CRMs, SaaS platforms, internal business operations portals, real-time chat applications, and workflow automation systems.</p>
        </details>
        <details>
          <summary>Do you use AI tools when building software?</summary>
          <p>Yes, AI tools enhance my speed and development efficiency. However, every architecture decision, security check, and database query is hand-crafted and thoroughly reviewed to ensure reliability under high production loads.</p>
        </details>
      </div>
    </section>

    <!-- 8. CTA -->
    <section class="wrap">
      <div class="cta fade">
        <div>
          <h2>Have a system that needs to <span style="color:var(--o2)">work harder?</span></h2>
          <p>Tell me what's slowing your business down.</p>
        </div>
        <div class="btns" style="margin:0">
          <a class="bo pri" href="contact.php">Start a project →</a>
          <a class="bo sec" href="javascript:void(0)">Download CV</a>
        </div>
      </div>
    </section>
  </main>

<?php include 'includes/footer.php'; ?>
