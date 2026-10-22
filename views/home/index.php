<?php
$page_title = "Amaanullah — Web Developer & Software Solutions";
$page_desc = "Full-Stack Web Developer & Software Architect in Karachi specializing in CRM systems, SaaS platforms, AI automation, and high-performance applications.";
$canonical_url = "https://example.com/";
$og_image = "images/og-image.png";
$page_css = "css/style.css";
$active_nav = "home";
$has_sound_btn = true;
$has_splash = true;
$has_dots = true;
$nav_attr = 'class="rev" style="animation-delay: 0.05s"';
$page_js = "js/main.js";
$js_module = true;

$extra_head = '
  <!-- Three.js Import Map -->
  <script type="importmap">
  {
    "imports": {
      "three": "https://unpkg.com/three@0.160.0/build/three.module.js",
      "three/addons/": "https://unpkg.com/three@0.160.0/examples/jsm/"
    }
  }
  </script>
';

include dirname(__DIR__) . '/layouts/header.php';
?>

  <!-- ========================================================================
       1. HERO SECTION (3D GLASS REACTOR & ORBIT)
       ======================================================================== -->
  <section class="hero" id="home">
    <div class="left">
      <div class="pill rev" style="animation-delay: 0.2s">
        <span class="pill-dot"></span>
        <span>My Services</span>
      </div>
      <h1 class="rev" style="animation-delay: 0.35s">
        I build systems<br>that work <em>harder.</em>
      </h1>
      <p class="lead rev" style="animation-delay: 0.5s">
        From custom web applications to automation and team collaboration tools — I turn ideas into scalable digital solutions.
      </p>

      <div class="chips rev" style="animation-delay: 0.65s">
        <button class="chip on" data-i="0">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="16 18 22 12 16 6"/>
            <polyline points="8 6 2 12 8 18"/>
          </svg>
          <span>Web Apps</span>
        </button>
        <button class="chip" data-i="1">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
          <span>CRM</span>
        </button>
        <button class="chip" data-i="2">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
          </svg>
          <span>Chat</span>
        </button>
        <button class="chip" data-i="3">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
          </svg>
          <span>Automation</span>
        </button>
      </div>

      <div class="tech rev" style="animation-delay: 0.8s">
        <span><i style="background:#7a86b8"></i>PHP</span>
        <span><i style="background:#ff2d20"></i>Laravel</span>
        <span><i style="background:#00758f"></i>MySQL</span>
        <span><i style="background:#61dafb"></i>React</span>
        <span><i style="background:#539e43"></i>Node.js</span>
        <span><i style="background:#47c5fb"></i>Flutter</span>
      </div>
    </div>

    <div class="stage" id="stage">
      <canvas id="c"></canvas>
      <svg id="lines"></svg>
    </div>
  </section>

  <!-- ========================================================================
       4. ABOUT ME & DELIVERY PROCESS
       ======================================================================== -->
  <svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <defs>
      <clipPath id="cpPortrait" clipPathUnits="objectBoundingBox">
        <path d="M0.04,0.12 Q0.04,0.05 0.12,0.04 L0.78,0 Q0.86,0 0.88,0.04 L0.92,0.09 Q0.94,0.11 0.97,0.11 Q1,0.12 1,0.17 V0.86 Q1,0.93 0.93,0.94 L0.55,0.98 Q0.48,1 0.42,0.97 Q0.36,0.94 0.28,0.95 L0.08,0.96 Q0,0.96 0,0.89 V0.2 Q0,0.15 0.04,0.12Z"/>
      </clipPath>
      <clipPath id="cpPhoto" clipPathUnits="objectBoundingBox">
        <path d="M0,0.08 L0.08,0 H0.86 Q0.92,0 0.95,0.05 L1,0.12 V0.9 L0.9,1 H0.1 Q0,1 0,0.92Z"/>
      </clipPath>
      <clipPath id="cpJourney" clipPathUnits="objectBoundingBox">
        <path d="M0,0.12 Q0,0.02 0.03,0.02 L0.3,0.02 Q0.34,0.02 0.36,0 H0.97 Q1,0 1,0.08 V0.86 Q1,0.98 0.97,0.98 H0.62 Q0.58,0.98 0.55,1 H0.03 Q0,1 0,0.9Z"/>
      </clipPath>
    </defs>
  </svg>

  <section class="abt" id="about">
    <div class="cube3" style="--s:30px;right:3%;top:70px"><i></i><i></i><i></i><i></i><i></i><i></i></div>
    <svg class="crystal" style="left:36%;top:60px" width="40" height="52" viewBox="0 0 54 70">
      <polygon points="27,0 54,24 40,70 6,62 0,22" fill="url(#gCry)"/>
      <polygon points="27,0 54,24 27,30" fill="#fff" opacity=".35"/>
    </svg>

    <div class="agrid">
      <div class="pframe av" id="pframe">
        <div class="shape"></div>
        <div class="photo">
          <video autoplay loop muted playsinline src="images/profile.mp4" alt="Portrait of Amaanullah"></video>
        </div>
        <div class="avail"><i></i>Available for projects</div>
        <div class="tbadge"><b>&lt;/&gt; Full-stack</b><span>Laravel</span><span>React</span><span>Flutter</span></div>
        <div class="sig">
          Amaanullah
          <svg width="170" height="16" viewBox="0 0 170 16">
            <path d="M2 10 Q60 0 120 8 T168 4" fill="none" stroke="#f26a1b" stroke-width="2.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="cube3" style="--s:20px;right:24px;top:-14px;animation-duration:7s"><i></i><i></i><i></i><i></i><i></i><i></i></div>
      </div>

      <div class="atext" style="position:relative">
        <div class="av">
          <span class="pill2">About Me</span>
          <div class="hand hnote">Clean code,<br>real results ↘</div>
          <h2>Turning <em>complex problems</em><br>into simple, <em>scalable software</em></h2>
          <p class="bio">
            I'm Amaanullah, a web developer focused on software solutions that actually move a business forward. I design and build custom web apps, CRMs, chat platforms, automations and mobile apps, from the first idea to a secure, scalable product. I care about clean architecture, fast interfaces and software that's simple for the people who use it every day.
          </p>
        </div>

        <div class="skills av" style="transition-delay: 0.15s">
          <a class="sk" href="https://www.php.net/" target="_blank" rel="noopener noreferrer" title="PHP Official Website">
            <div class="h">
              <span class="lg">
                <svg width="22" height="22" viewBox="0 0 32 32">
                  <path d="M16 4C7.163 4 0 9.373 0 16s7.163 12 16 12 16-5.373 16-12S24.837 4 16 4z" fill="#777BB4"/>
                  <path d="M9.2 12.8h-2.1l-1.5 6.4h1.7l.4-1.8h1.2c1.7 0 2.8-.8 3.2-2.3.4-1.5-.3-2.3-1.9-2.3zm-.6 2.8H7.5l.4-1.6h1.1c.7 0 1 .3.8 1-.2.4-.4.6-.8.6zm6.8-2.8h-2.1l-1.5 6.4h1.7l.4-1.8h1.2c1.7 0 2.8-.8 3.2-2.3.4-1.5-.3-2.3-1.9-2.3zm-.6 2.8h-1.1l.4-1.6h1.1c.7 0 1 .3.8 1-.2.4-.4.6-.8.6zm6.8-2.8h-2.1l-1.5 6.4h1.7l.4-1.8h1.2c1.7 0 2.8-.8 3.2-2.3.4-1.5-.3-2.3-1.9-2.3zm-.6 2.8h-1.1l.4-1.6h1.1c.7 0 1 .3.8 1-.2.4-.4.6-.8.6z" fill="#fff"/>
                </svg>
              </span>
              <b>PHP</b>
              <svg class="ext" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
            <div class="bar"><i style="--w:95%"></i></div>
            <span class="lv">Expert</span>
          </a>

          <a class="sk" href="https://laravel.com/" target="_blank" rel="noopener noreferrer" title="Laravel Official Website">
            <div class="h">
              <span class="lg">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="#FF2D20">
                  <path d="M23.6 7.2l-9-5.2c-.4-.2-.8-.2-1.2 0l-9 5.2c-.4.2-.6.6-.6 1v10.4c0 .4.2.8.6 1l9 5.2c.2.1.4.2.6.2s.4-.1.6-.2l9-5.2c.4-.2.6-.6.6-1V8.2c0-.4-.2-.8-.6-1zM12 3.8l7.6 4.4-3.3 1.9L8.7 5.7 12 3.8zM4.6 9.3l7.6 4.4v7.6l-7.6-4.4V9.3zm9.2 12V13.7l3.3-1.9v4.5l4.3-2.5v-4.5l-3.3 1.9-4.3-2.5 7.6-4.4v7.6l-7.6 4.4z"/>
                </svg>
              </span>
              <b>Laravel</b>
              <svg class="ext" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
            <div class="bar"><i style="--w:95%"></i></div>
            <span class="lv">Expert</span>
          </a>

          <a class="sk" href="https://dotnet.microsoft.com/" target="_blank" rel="noopener noreferrer" title="Microsoft .NET Official Website">
            <div class="h">
              <span class="lg">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <rect width="24" height="24" rx="6" fill="#512BD4"/>
                  <circle cx="5.5" cy="16.5" r="1.5" fill="#fff"/>
                  <path d="M8.2 18V8h2.2l2.8 5.8V8h2v10h-2.2l-2.8-5.8V18H8.2zm8.5 0V8h4.5v1.8H18.7v2.2h2.2v1.8h-2.2v2.4h2.5V18h-4.5z" fill="#fff"/>
                </svg>
              </span>
              <b>.NET</b>
              <svg class="ext" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
            <div class="bar"><i style="--w:75%"></i></div>
            <span class="lv">Advanced</span>
          </a>

          <a class="sk" href="https://www.python.org/" target="_blank" rel="noopener noreferrer" title="Python Official Website">
            <div class="h">
              <span class="lg">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M11.9 2c-4.4 0-4.1 1.9-4.1 1.9l.01 2h4.2v.6H6.1S3.4 6.2 3.4 10.6c0 4.4 2.4 4.2 2.4 4.2h1.4v-2c0-2.3 2-2.2 2-2.2h4.2c2.1 0 2-2 2-2V4s.3-2-3.5-2zm-2.3 1.3c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.3-.7-.7.3-.7.7-.7z" fill="#387EB8"/>
                  <path d="M12.1 22c4.4 0 4.1-1.9 4.1-1.9l-.01-2H12v-.6h5.9s2.7.3 2.7-4.1c0-4.4-2.4-4.2-2.4-4.2h-1.4v2c0 2.3-2 2.2-2 2.2H10.6c-2.1 0-2 2-2 2V20s-.3 2 3.5 2zm2.3-1.3c-.4 0-.7-.3-.7-.7s.3-.7.7-.7.7.3.7.7-.3.7-.7.7z" fill="#FFE873"/>
                </svg>
              </span>
              <b>Python</b>
              <svg class="ext" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
            <div class="bar"><i style="--w:70%"></i></div>
            <span class="lv">Advanced</span>
          </a>

          <a class="sk" href="https://www.mysql.com/" target="_blank" rel="noopener noreferrer" title="MySQL Official Website">
            <div class="h">
              <span class="lg">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <rect width="24" height="24" rx="6" fill="#00758F"/>
                  <path d="M6 17c.5-1.5 1.5-2.8 2.8-3.5 1.5-.8 3.2-.8 4.7-.2.8.3 1.5.8 2.2 1.4.6.5 1.3.8 2.1.8.8 0 1.6-.3 2.2-.9l.7.7c-.8.8-1.9 1.3-3 1.3-1 0-2-.4-2.8-1-.6-.5-1.2-1-1.9-1.2-1.2-.5-2.6-.5-3.8.1-1 .6-1.8 1.6-2.2 2.7L6 17z" fill="#F29111"/>
                  <path d="M19 8c-.4-.5-1-.9-1.6-1.1-.9-.3-1.9-.1-2.8.4-.7.4-1.3.9-1.9 1.5-.7.7-1.5 1.3-2.3 1.7-.8.4-1.7.5-2.5.4-.7-.1-1.4-.4-2-.9-.4-.4-.7-.8-.9-1.3l.9-.4c.2.4.4.7.7 1 .5.4 1 .6 1.6.7.7.1 1.4 0 2.1-.3.7-.4 1.4-.9 2.1-1.5.7-.6 1.4-1.2 2.2-1.7 1.1-.6 2.4-.8 3.6-.5.9.3 1.7.9 2.3 1.6L19 8z" fill="#fff"/>
                </svg>
              </span>
              <b>MySQL</b>
              <svg class="ext" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
            <div class="bar"><i style="--w:90%"></i></div>
            <span class="lv">Expert</span>
          </a>

          <a class="sk" href="https://react.dev/" target="_blank" rel="noopener noreferrer" title="React Official Website">
            <div class="h">
              <span class="lg">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="12" r="2.2" fill="#61DAFB"/>
                  <g stroke="#61DAFB" stroke-width="1.3">
                    <ellipse cx="12" cy="12" rx="10" ry="3.8"/>
                    <ellipse cx="12" cy="12" rx="10" ry="3.8" transform="rotate(60 12 12)"/>
                    <ellipse cx="12" cy="12" rx="10" ry="3.8" transform="rotate(120 12 12)"/>
                  </g>
                </svg>
              </span>
              <b>React</b>
              <svg class="ext" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
            <div class="bar"><i style="--w:82%"></i></div>
            <span class="lv">Advanced</span>
          </a>

          <a class="sk" href="https://nodejs.org/" target="_blank" rel="noopener noreferrer" title="Node.js Official Website">
            <div class="h">
              <span class="lg">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 2 3.5 6.9v9.8L12 21.6l8.5-4.9V6.9L12 2z" fill="#339933"/>
                  <path d="M12 4.4 5.3 8.3v7.4L12 19.6l6.7-3.9V8.3L12 4.4z" fill="#215732" opacity=".2"/>
                  <path d="M10.2 15.5c-1.8 0-3-1.1-3-2.7 0-1.7 1.3-2.8 3.2-2.8 1.1 0 1.9.4 2.4.9l-.9.9c-.4-.4-1-.7-1.5-.7-1 0-1.7.6-1.7 1.6 0 1 .6 1.6 1.6 1.6.7 0 1.2-.3 1.5-.6v-.6h-1.5v-1.1h2.8v2.3c-.6.8-1.7 1.2-2.9 1.2z" fill="#fff"/>
                </svg>
              </span>
              <b>Node.js</b>
              <svg class="ext" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
            <div class="bar"><i style="--w:80%"></i></div>
            <span class="lv">Advanced</span>
          </a>

          <a class="sk" href="https://flutter.dev/" target="_blank" rel="noopener noreferrer" title="Flutter Official Website">
            <div class="h">
              <span class="lg">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M14.3 2 4.8 11.5l2.9 2.9L17.2 2h-2.9z" fill="#54C5F8"/>
                  <path d="M14.3 9.4 8.7 15l2.9 2.9 5.6-5.6-2.9-2.9z" fill="#29B6F6"/>
                  <path d="M11.6 17.9 14.3 20.6h2.9l-4.2-4.2-1.4 1.5z" fill="#01579B"/>
                  <path d="M14.3 12.3 8.7 17.9l1.5 1.5 7-7h-2.9z" fill="#02569B"/>
                </svg>
              </span>
              <b>Flutter</b>
              <svg class="ext" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg>
            </div>
            <div class="bar"><i style="--w:78%"></i></div>
            <span class="lv">Advanced</span>
          </a>
        </div>

        <div class="actas av" style="transition-delay: 0.3s">
          <a class="cv" href="javascript:void(0)">⤓ Download CV</a>
          <a class="lt2" href="#contact">Let's Talk &nbsp;→</a>
          <span class="hand" style="color:var(--o);transform:rotate(-5deg)">↖ let's work together!</span>
        </div>
      </div>
    </div>

    <!-- 4-Step Journey Process -->
    <div class="journey av">
      <div class="jbg"></div>
      <h3>My <em>Approach</em></h3>
      <p>A simple, transparent process from idea to launch.</p>
      <div class="steps">
        <div class="stp"><span class="n">01</span><b>Discover</b><small>Understand your business, users and goals before writing a single line of code.</small></div>
        <div class="stp"><span class="n">02</span><b>Design</b><small>Plan the architecture and craft clean, intuitive UI/UX flows.</small></div>
        <div class="stp"><span class="n">03</span><b>Develop</b><small>Build secure, scalable software with regular demos and feedback.</small></div>
        <div class="stp"><span class="n">04</span><b>Deliver</b><small>Launch, monitor and keep improving with ongoing support.</small></div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       2. SERVICES SECTION (HOLO-PEDESTAL & 3D INTERACTIVE MATRIX)
       ======================================================================== -->
  <section class="svc" id="services">
    <div class="shead sv">
      <span class="pill2">Our Services</span>
      <h2><em>Smart Digital Solutions</em><br>for Your Business</h2>
      <p class="sub">
        We build custom software, automate workflows and create digital solutions that help your business grow, scale and stay ahead in the digital world.
      </p>
    </div>

    <div class="sgrid">
      <!-- Interactive Service List -->
      <nav class="slist sv" style="transition-delay: 0.15s">
        <a class="srow on" href="javascript:void(0)" data-service="web">
          <span class="ic" style="background:linear-gradient(135deg,#f26a1b,#ff9a4a)">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
            </svg>
          </span>
          <span><b>Custom Web Apps</b><small>Tailored web applications with PHP, Laravel, .NET and more.</small></span>
          <span class="ch">›</span>
        </a>
        <a class="srow" href="javascript:void(0)" data-service="crm">
          <span class="ic" style="background:rgba(91,124,255,0.18);color:#7aa2ff">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/>
            </svg>
          </span>
          <span><b>CRM Development</b><small>Manage leads, customers and operations with smart CRM systems.</small></span>
          <span class="ch">›</span>
        </a>
        <a class="srow" href="javascript:void(0)" data-service="chat">
          <span class="ic" style="background:rgba(19,163,122,0.18);color:#22c55e">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
            </svg>
          </span>
          <span><b>Chat Applications</b><small>Real-time chat, team collaboration and communication tools.</small></span>
          <span class="ch">›</span>
        </a>
        <a class="srow" href="javascript:void(0)" data-service="auto">
          <span class="ic" style="background:rgba(192,40,122,0.18);color:#f472b6">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
            </svg>
          </span>
          <span><b>Business Process Automation</b><small>Save time with smart workflows and automation systems.</small></span>
          <span class="ch">›</span>
        </a>
        <a class="srow" href="javascript:void(0)" data-service="mobile">
          <span class="ic" style="background:rgba(125,76,255,0.18);color:#a78bfa">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/>
            </svg>
          </span>
          <span><b>Mobile App Development</b><small>Cross-platform apps with Flutter, Firebase and modern tech.</small></span>
          <span class="ch">›</span>
        </a>
        <a class="srow" href="javascript:void(0)" data-service="ui">
          <span class="ic" style="background:rgba(224,123,0,0.18);color:#fb923c">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.563-2.512 5.563-5.563C22 6.5 17.5 2 12 2Z"/>
            </svg>
          </span>
          <span><b>UI/UX &amp; Performance</b><small>Modern UI/UX, fast, responsive and optimized performance.</small></span>
          <span class="ch">›</span>
        </a>
      </nav>

      <!-- 3D Pedestal Stage -->
      <div class="sstage sv" id="sstage" style="transition-delay: 0.05s">
        <canvas id="sc"></canvas>
      </div>

      <!-- Detail Card with Smooth Content Transitions -->
      <div class="fcard sv" id="fcard" style="transition-delay: 0.3s">
        <span class="tag">Featured Service</span>
        <div class="fx">
          <h3 id="ft"></h3>
          <p id="fd"></p>
          <ul id="fl"></ul>
        </div>
        <a class="fbtn" href="#contact">Get a Free Consultation →</a>
      </div>
    </div>

    <!-- Features Bar -->
    <div class="feats sv" style="transition-delay: 0.45s">
      <div class="feat">
        <span class="fi">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/>
          </svg>
        </span>
        <div><b>Fast Delivery</b><small>On-time project delivery with agile process.</small></div>
      </div>
      <div class="feat">
        <span class="fi">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </span>
        <div><b>Secure Solutions</b><small>Your data and business are always protected.</small></div>
      </div>
      <div class="feat">
        <span class="fi">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </span>
        <div><b>Expert Team</b><small>Skilled developers with real-world experience.</small></div>
      </div>
      <div class="feat">
        <span class="fi">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>
          </svg>
        </span>
        <div><b>24/7 Support</b><small>We're always here when you need us.</small></div>
      </div>
      <div class="note">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" stroke="#f26a1b" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
          <path d="M 46 50 C 46 28, 30 15, 11 12"/>
          <path d="M 29 8 L 11 12 L 23 27"/>
        </svg>
        <span>Let's Build<br>Something Great</span>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SVG CLIP PATH DEFINITIONS FOR CYBERNETIC GEOMETRY
       ======================================================================== -->
  <svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <defs>
      <clipPath id="cpFeat" clipPathUnits="objectBoundingBox">
        <path d="M0,0.16 Q0,0.1 0.02,0.08 L0.07,0.02 Q0.09,0 0.12,0 H0.84 Q0.87,0 0.88,0.03 Q0.895,0.07 0.93,0.07 H0.975 Q1,0.07 1,0.11 V0.86 Q1,0.93 0.97,0.94 L0.93,0.96 Q0.9,0.97 0.86,0.97 H0.52 Q0.45,0.97 0.43,0.92 Q0.41,0.86 0.35,0.86 Q0.25,0.88 0.17,0.84 Q0.1,0.8 0.05,0.86 Q0.02,0.9 0,0.86Z"/>
      </clipPath>
      <clipPath id="cpFeatM" clipPathUnits="objectBoundingBox">
        <path d="M0,0.05 Q0,0.02 0.04,0.01 L0.12,0 H0.96 Q1,0 1,0.03 V0.95 Q1,0.98 0.95,0.98 H0.5 Q0.3,1 0.2,0.97 Q0.08,0.94 0.03,0.97 Q0,0.98 0,0.95Z"/>
      </clipPath>
      <clipPath id="cpCardA" clipPathUnits="objectBoundingBox">
        <path d="M0,0.1 Q0,0.05 0.06,0.045 L0.78,0 L0.9,0 L1,0.06 V0.94 Q1,0.99 0.94,0.99 L0.08,1 Q0,1 0,0.95Z"/>
      </clipPath>
      <clipPath id="cpCardB" clipPathUnits="objectBoundingBox">
        <path d="M0,0.04 Q0,0 0.06,0 L0.94,0.05 Q1,0.055 1,0.1 V0.95 Q1,1 0.94,1 L0.12,0.99 L0,0.9Z"/>
      </clipPath>
      <clipPath id="cpPanel" clipPathUnits="objectBoundingBox">
        <path d="M0,0.12 Q0,0.04 0.06,0.04 L0.62,0 Q0.68,0 0.72,0.05 L0.78,0.12 H0.94 Q1,0.12 1,0.2 V0.92 Q1,1 0.94,1 H0.06 Q0,1 0,0.92Z"/>
      </clipPath>
      <clipPath id="cpPanelB" clipPathUnits="objectBoundingBox">
        <path d="M0,0.2 Q0,0.12 0.06,0.12 H0.24 L0.3,0.04 Q0.33,0 0.38,0 L0.94,0.04 Q1,0.04 1,0.12 V0.92 Q1,1 0.94,1 H0.06 Q0,1 0,0.92Z"/>
      </clipPath>
      <linearGradient id="gCry" x1="0" y1="0" x2="1" y2="1">
        <stop offset="0" stop-color="#b8c8ff"/>
        <stop offset="0.5" stop-color="#5b6cff"/>
        <stop offset="1" stop-color="#1e2a8a"/>
      </linearGradient>
    </defs>
  </svg>

  <!-- ========================================================================
       3. FEATURED PROJECTS SECTION
       ======================================================================== -->
  <section class="prj" id="projects">
    <div class="cube3" style="--s:34px;left:-14px;top:330px"><i></i><i></i><i></i><i></i><i></i><i></i></div>
    <div class="cube3" style="--s:26px;left:22%;top:600px;animation-duration:12s"><i></i><i></i><i></i><i></i><i></i><i></i></div>

    <div class="phead pv">
      <div>
        <span class="pill3"><i>✦</i>My Recent Work</span>
        <h2>Featured <em>Projects</em></h2>
        <p>Real solutions. Built with modern technologies to help businesses grow and operate more efficiently.</p>
      </div>
      <div class="hand">Ideas<br>→ Code<br>→ Real Impact</div>
      <a class="vall" href="#contact">View All Projects &nbsp;→</a>
    </div>

    <!-- Featured Slide Showcase -->
    <div class="feat-wrap pv" id="featWrap" style="transition-delay: 0.1s">
      <div class="fshape"></div>
      <svg class="crystal" style="left:30%;top:20%" width="54" height="70" viewBox="0 0 54 70">
        <polygon points="27,0 54,24 40,70 6,62 0,22" fill="url(#gCry)"/>
        <polygon points="27,0 54,24 27,30" fill="#fff" opacity=".35"/>
        <polygon points="27,30 40,70 6,62" fill="#0d1460" opacity=".35"/>
      </svg>
      <div class="cube3" style="--s:22px;left:31%;top:76%;animation-duration:7s"><i></i><i></i><i></i><i></i><i></i><i></i></div>

      <div class="ftext fslide">
        <span class="ftag">✦ Featured Project</span>
        <h3 id="fpT">Multi-tenant<br><span>CRM System</span></h3>
        <p id="fpD">A powerful multi-tenant CRM platform with lead management, analytics, real-time updates and 7-level RBAC. Built for scale and security.</p>
        <div class="tchips" id="fpC">
          <span>PHP</span><span>MySQL</span><span>Laravel</span><span>WebSockets</span>
        </div>
        <a class="vcs" id="fpL" href="javascript:void(0)">View Case Study <b>→</b></a>
      </div>

      <svg class="rock" viewBox="0 0 400 200" preserveAspectRatio="none">
        <defs>
          <radialGradient id="rk" cx=".5" cy=".3">
            <stop offset="0" stop-color="#4a4038"/>
            <stop offset="1" stop-color="#15120f"/>
          </radialGradient>
        </defs>
        <path d="M20,70 Q60,20 140,30 Q220,5 300,28 Q380,30 390,80 Q400,150 330,180 Q200,200 80,185 Q0,160 20,70Z" fill="url(#rk)"/>
        <path d="M60,60 Q140,40 200,50 M220,40 Q300,35 350,60" stroke="#ff7a2a" stroke-opacity=".35" fill="none"/>
      </svg>

      <svg class="wire" viewBox="0 0 400 300" preserveAspectRatio="none">
        <path d="M10,250 C80,180 40,80 160,120 S300,260 390,150"/>
        <path d="M30,280 C120,240 200,300 260,220 S350,120 395,60"/>
      </svg>

      <div class="laptop fslide">
        <div class="lscreen">
          <img id="fpI" src="images/crm-1.svg" alt="CRM dashboard screenshot">
        </div>
        <div class="lbase"></div>
      </div>

      <div class="stat">
        <i>👥</i>
        <div>Multi-tenant</div>
        <b>5M – 10M+</b>
        <div>Leads Capacity</div>
      </div>

      <div class="flist fslide" id="fpF">
        <div>Lead Management</div>
        <div>Real-time Analytics</div>
        <div>7-Level RBAC</div>
        <div>Secure &amp; Scalable</div>
      </div>

      <div class="thumbs">
        <a href="javascript:void(0)" class="on" data-i="0"><img src="images/crm-1.svg" alt="CRM screen 1"></a>
        <a href="javascript:void(0)" data-i="1"><img src="images/crm-2.svg" alt="CRM screen 2"></a>
        <a href="javascript:void(0)" data-i="2"><img src="images/crm-3.svg" alt="CRM screen 3"></a>
        <a href="javascript:void(0)" data-i="3"><img src="images/crm-4.svg" alt="CRM screen 4"></a>
      </div>

      <div class="pager">
        <span id="fpN">01 / 04</span>
        <button id="fpPrev" aria-label="Previous Project">←</button>
        <button id="fpNext" aria-label="Next Project">→</button>
      </div>
    </div>

    <!-- 4 Specialized Solution Cards -->
    <div class="pcards">
      <a class="pc dk pv" data-p="chatrox" href="javascript:void(0)" style="transition-delay: 0.15s">
        <div class="sh"></div><div class="bg"></div><div class="img"></div>
        <div class="dev" style="left:30%"><img src="images/chatrox.svg" alt="Chatrox screenshot"></div>
        <div class="phone"><img src="images/chatrox-mobile.svg" alt="Chatrox mobile screenshot"></div>
        <span class="badge" style="background:linear-gradient(135deg,#7d8cff,#4b52e8)">💬</span>
        <div class="panel">
          <span class="ty">💬 Chat Application</span>
          <h4>Chatrox</h4>
          <p>Slack-like chat application with channels, files, voice &amp; more. Built for real-time communication.</p>
          <div class="tc"><span>PHP</span><span>MySQL</span><span>Flutter</span></div>
          <span class="vp">View Project →</span>
        </div>
        <div class="hand">Connect<br>Collaborate<br>Achieve</div>
      </a>

      <a class="pc lt b pv" data-p="rtg" href="javascript:void(0)" style="transition-delay: 0.25s">
        <div class="sh"></div><div class="bg"></div><div class="img"></div>
        <div class="dev"><img src="images/rtg-workspace.svg" alt="RTG Workspace screenshot"></div>
        <span class="badge" style="background:linear-gradient(135deg,#ff9a4a,#f25a0a)">▤</span>
        <div class="panel">
          <span class="ty">◉ Web Application</span>
          <h4>RTG Workspace</h4>
          <p>A Trello-style project management tool for internal team collaboration with task tracking and file sharing.</p>
          <div class="tc"><span>PHP</span><span>MySQL</span><span>jQuery</span></div>
          <span class="vp">View Project →</span>
        </div>
        <div class="hand">Plan<br>Track<br>Deliver</div>
      </a>

      <a class="pc dk pv" data-p="it" href="javascript:void(0)" style="transition-delay: 0.35s">
        <div class="sh"></div><div class="bg"></div><div class="img"></div>
        <div class="dev"><img src="images/it-hardware-bin.svg" alt="IT Hardware Bin screenshot"></div>
        <span class="badge" style="background:linear-gradient(135deg,#5b9bff,#2f5bff)">🛒</span>
        <div class="panel">
          <span class="ty" style="background:rgba(242,106,27,.2)">● E-Commerce</span>
          <h4>IT Hardware Bin</h4>
          <p>A complete e-commerce platform for IT hardware with quote requests, product catalog and smooth checkout.</p>
          <div class="tc"><span>PHP</span><span>MySQL</span><span>Laravel</span></div>
          <span class="vp">View Project →</span>
        </div>
        <div class="hand">Hardware<br>Tech<br>Business</div>
      </a>

      <a class="pc lt b pv" data-p="landsfy" href="javascript:void(0)" style="transition-delay: 0.45s">
        <div class="sh"></div><div class="bg"></div><div class="img"></div>
        <div class="dev"><img src="images/landsfy.svg" alt="Landsfy screenshot"></div>
        <span class="badge" style="background:linear-gradient(135deg,#3fd08a,#13a36a)">⌂</span>
        <div class="panel">
          <span class="ty">◉ Web Application</span>
          <h4>Landsfy</h4>
          <p>Real estate portal with property listings, search filters and RBAC-based access control.</p>
          <div class="tc"><span>PHP</span><span>MySQL</span><span>Laravel</span></div>
          <span class="vp">View Project →</span>
        </div>
        <div class="hand">Find<br>Your<br>Dream Home</div>
      </a>
    </div>

    <div class="wave">
      <svg viewBox="0 0 1440 160" preserveAspectRatio="none">
        <defs>
          <linearGradient id="wv" x1="0" x2="1">
            <stop offset="0" stop-color="#14151d"/>
            <stop offset="0.5" stop-color="#22232e"/>
            <stop offset="1" stop-color="#14151d"/>
          </linearGradient>
        </defs>
        <path d="M0,60 C200,10 380,90 600,50 C820,10 980,80 1180,40 C1300,18 1380,30 1440,50 V160 H0Z" fill="url(#wv)"/>
        <path d="M0,60 C200,10 380,90 600,50 C820,10 980,80 1180,40 C1300,18 1380,30 1440,50" fill="none" stroke="#ff7a2a" stroke-width="2" stroke-opacity=".7" style="filter:drop-shadow(0 0 6px #ff6a1a)"/>
      </svg>
      <a class="more" href="#contact">
        <span class="mi">◆</span>
        <span><b>More Projects</b><small>Explore all my work and see how I turn ideas into real solutions.</small></span>
        <span class="ar">→</span>
      </a>
    </div>
  </section>

  

  <!-- ========================================================================
       5. TESTIMONIALS & REVIEWS SECTION
       ======================================================================== -->
  <svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <defs>
      <clipPath id="cpQuote" clipPathUnits="objectBoundingBox">
        <path d="M0,0.1 Q0,0.03 0.05,0.03 L0.55,0.03 Q0.6,0.03 0.63,0 H0.95 Q1,0 1,0.06 V0.84 Q1,0.9 0.96,0.92 L0.86,0.98 Q0.83,1 0.79,1 H0.05 Q0,1 0,0.94Z"/>
      </clipPath>
      <clipPath id="cpCta" clipPathUnits="objectBoundingBox">
        <path d="M0,0.14 Q0,0.04 0.04,0.04 L0.22,0.04 Q0.26,0.04 0.28,0 H0.96 Q1,0 1,0.08 V0.78 Q1,0.86 0.97,0.88 Q0.94,0.9 0.9,0.88 Q0.84,0.85 0.8,0.92 Q0.77,1 0.7,1 H0.04 Q0,1 0,0.92Z"/>
      </clipPath>
      <linearGradient id="gSw" x1="0" x2="1">
        <stop offset="0" stop-color="#f26a1b" stop-opacity="0"/>
        <stop offset="0.4" stop-color="#ff8a3d"/>
        <stop offset="1" stop-color="#ffd0a0"/>
      </linearGradient>
    </defs>
  </svg>

  <section class="tst" id="reviews">
    <div class="cube3" style="--s:28px;left:46%;top:90px"><i></i><i></i><i></i><i></i><i></i><i></i></div>
    <svg class="crystal" style="right:2%;top:120px" width="42" height="54" viewBox="0 0 54 70">
      <polygon points="27,0 54,24 40,70 6,62 0,22" fill="url(#gCry)"/>
      <polygon points="27,0 54,24 27,30" fill="#fff" opacity=".35"/>
    </svg>

    <div class="tgrid">
      <div class="tv">
        <span class="pill2">Client Reviews</span>
        <h2>What <em>clients say</em><br>about <em>working</em> with me</h2>
        <p class="sub">Feedback from the teams and businesses I've built software for. Drag or swipe the cards to read more.</p>

        <div class="agg">
          <span class="big">5.0</span>
          <div>
            <span class="stars">★★★★★</span>
            <small>Average rating · 25+ reviews</small>
          </div>
          <div class="avs">
            <img src="images/avatar-1.svg" alt="Client 1">
            <img src="images/avatar-2.svg" alt="Client 2">
            <img src="images/avatar-3.svg" alt="Client 3">
            <img src="images/avatar-4.svg" alt="Client 4">
          </div>
        </div>

        <div class="dctl">
          <button id="dPrev" aria-label="Previous review">←</button>
          <button id="dNext" aria-label="Next review">→</button>
          <div class="dots2" id="dDots"></div>
          <span class="hnt">drag me ↗</span>
        </div>
      </div>

      <!-- Draggable Stacked Cards Deck -->
      <div class="deck tv" id="deck" style="transition-delay: 0.15s">
        <div class="qc">
          <div class="qbg"></div>
          <span class="qm">“</span>
          <span class="pj">◆ Multi-tenant CRM</span>
          <div class="stars">★★★★★</div>
          <blockquote>The CRM completely transformed how our enterprise team manages leads. High speed, great RBAC permissions, and clean architecture.</blockquote>
          <div class="who">
            <img src="images/avatar-1.svg" alt="Client avatar">
            <div><b>Sarah Jenkins</b><small>COO, NextGen Sales</small></div>
          </div>
          <span class="smp">VERIFIED REVIEW</span>
        </div>

        <div class="qc">
          <div class="qbg"></div>
          <span class="qm">“</span>
          <span class="pj">◆ Chatrox</span>
          <div class="stars">★★★★★</div>
          <blockquote>Our company migrated internal communication to Chatrox. Channels, file attachments and real-time WebSockets perform flawlessly.</blockquote>
          <div class="who">
            <img src="images/avatar-2.svg" alt="Client avatar">
            <div><b>David Chen</b><small>CTO, CloudMatrix Inc.</small></div>
          </div>
          <span class="smp">VERIFIED REVIEW</span>
        </div>

        <div class="qc lite">
          <div class="qbg"></div>
          <span class="qm">“</span>
          <span class="pj">◆ RTG Workspace</span>
          <div class="stars">★★★★★</div>
          <blockquote>RTG Workspace unified task management, sprint tracking, and file sharing for our agile teams, replacing multiple paid subscriptions.</blockquote>
          <div class="who">
            <img src="images/avatar-3.svg" alt="Client avatar">
            <div><b>Marcus Sterling</b><small>Lead Project Manager</small></div>
          </div>
          <span class="smp">VERIFIED REVIEW</span>
        </div>

        <div class="qc">
          <div class="qbg"></div>
          <span class="qm">“</span>
          <span class="pj">◆ IT Hardware Bin</span>
          <div class="stars">★★★★★</div>
          <blockquote>The enterprise catalog, custom quote requests and checkout workflow were delivered ahead of schedule and are straightforward to maintain.</blockquote>
          <div class="who">
            <img src="images/avatar-4.svg" alt="Client avatar">
            <div><b>Robert Vance</b><small>Director of IT Infrastructure</small></div>
          </div>
          <span class="smp">VERIFIED REVIEW</span>
        </div>

        <div class="qc lite">
          <div class="qbg"></div>
          <span class="qm">“</span>
          <span class="pj">◆ Landsfy</span>
          <div class="stars">★★★★★</div>
          <blockquote>Landsfy simplified property listings and advanced search filtering. Role-based dashboards keep our agents and buyers perfectly aligned.</blockquote>
          <div class="who">
            <img src="images/avatar-5.svg" alt="Client avatar">
            <div><b>Elena Rostova</b><small>Principal Broker</small></div>
          </div>
          <span class="smp">VERIFIED REVIEW</span>
        </div>
      </div>
    </div>

    <!-- Infinite Dual Marquee -->
    <div class="mq tv" style="transition-delay: 0.25s">
      <div class="mrow" id="mr1">
        <div class="chipr"><img src="images/avatar-1.svg" alt=""><div><b>Sarah Jenkins · NextGen</b><small>"Fast, clear and reliable communication."</small></div><span class="s">★★★★★</span></div>
        <div class="chipr dk"><img src="images/avatar-2.svg" alt=""><div><b>David Chen · CloudMatrix</b><small style="color:#aaa">"Delivered exactly what we needed on budget."</small></div><span class="s">★★★★★</span></div>
        <div class="chipr"><img src="images/avatar-3.svg" alt=""><div><b>Marcus Sterling · Workspace</b><small>"Clean code architecture and responsive support."</small></div><span class="s">★★★★★</span></div>
        <div class="chipr"><img src="images/avatar-4.svg" alt=""><div><b>Robert Vance · IT Bin</b><small>"Our workflows run themselves automatically."</small></div><span class="s">★★★★★</span></div>
      </div>
      <div class="mrow rev2" id="mr2">
        <div class="chipr dk"><img src="images/avatar-5.svg" alt=""><div><b>Elena Rostova · Landsfy</b><small style="color:#aaa">"The cross-platform app feels native on iOS &amp; Android."</small></div><span class="s">★★★★★</span></div>
        <div class="chipr"><img src="images/avatar-1.svg" alt=""><div><b>Alexander Meyer · FinTech</b><small>"Real-time dashboards that our leadership team loves."</small></div><span class="s">★★★★★</span></div>
        <div class="chipr"><img src="images/avatar-2.svg" alt=""><div><b>Jessica Brown · HealthFlow</b><small>"High security standards, responsive, scalable."</small></div><span class="s">★★★★★</span></div>
        <div class="chipr"><img src="images/avatar-3.svg" alt=""><div><b>Liam Wilson · DataCore</b><small>"Anticipates edge cases and builds robust APIs."</small></div><span class="s">★★★★★</span></div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       6. CALL TO ACTION (CTA) SECTION
       ======================================================================== -->
  <section class="cta" id="cta">
    <div class="cblock tv" id="cblock">
      <div class="cbg"></div>
      <div class="spot"></div>

      <svg class="swoosh" viewBox="0 0 1200 460" preserveAspectRatio="none">
        <path d="M-20,380 C220,300 380,440 620,330 S980,120 1220,170"/>
        <path class="b" d="M-20,420 C260,360 420,470 660,370 S1000,180 1220,230"/>
      </svg>

      <div class="cube3" style="--s:24px;left:46%;top:-12px;animation-duration:8s"><i></i><i></i><i></i><i></i><i></i><i></i></div>

      <div class="cin">
        <span class="pill2">✦ Let's work together</span>
        <h2>Have an idea?<br><em>Let's build something great.</em></h2>
        <p class="cs">Tell me about your project, whether it's a web app, CRM, chat platform, automation or mobile app, and I'll turn it into a scalable product.</p>

        <div class="cbtns">
          <a class="mag" id="mag" href="#contact">Start a Project <span>→</span></a>
          <a class="bcall" href="#contact">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            Book a Call
          </a>
        </div>

        <div class="cchips">
          <a href="#contact">
            <i style="background:rgba(242,106,27,.22)">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#f26a1b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
              </svg>
            </i>
            contact@example.com
          </a>
          <a href="https://wa.me/" target="_blank" rel="noopener">
            <i style="background:rgba(37,211,102,.22)">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="#22c55e">
                <path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.2 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.3-.7-2.8-1.1-4.5-4-4.7-4.2-.1-.2-1.1-1.5-1.1-2.9s.7-2 1-2.3c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.9 2.1c.1.2.1.4 0 .5l-.4.6-.4.4c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.4 2.4 1.5.3.1.5.1.6-.1l.9-1c.2-.3.4-.2.7-.1l2 1c.3.1.5.2.5.3.1.2.1.7-.1 1.3z"/>
              </svg>
            </i>
            WhatsApp
          </a>
        </div>
      </div>

      <div class="ficons">
        <span class="fi2" style="left:8%;top:16%;color:#ff8a3d;border-color:rgba(255,138,61,0.3);box-shadow:0 14px 30px rgba(0,0,0,0.4),0 0 18px rgba(255,138,61,0.18)">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
          </svg>
          <small>Web Apps</small>
        </span>
        <span class="fi2" style="left:52%;top:8%;color:#7aa2ff;border-color:rgba(122,162,255,0.3);box-shadow:0 14px 30px rgba(0,0,0,0.4),0 0 18px rgba(122,162,255,0.18);animation-delay:-1s">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/>
          </svg>
          <small>CRM</small>
        </span>
        <span class="fi2" style="left:80%;top:36%;color:#22c55e;border-color:rgba(34,197,94,0.3);box-shadow:0 14px 30px rgba(0,0,0,0.4),0 0 18px rgba(34,197,94,0.18);animation-delay:-2s">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
          </svg>
          <small>Chat</small>
        </span>
        <span class="fi2" style="left:30%;top:46%;color:#f472b6;border-color:rgba(244,114,182,0.3);box-shadow:0 14px 30px rgba(0,0,0,0.4),0 0 18px rgba(244,114,182,0.18);animation-delay:-3s">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
          </svg>
          <small>Automation</small>
        </span>
        <span class="fi2" style="left:64%;top:66%;color:#a78bfa;border-color:rgba(167,139,250,0.3);box-shadow:0 14px 30px rgba(0,0,0,0.4),0 0 18px rgba(167,139,250,0.18);animation-delay:-4s">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/>
          </svg>
          <small>Mobile</small>
        </span>
        <span class="fi2" style="left:4%;top:72%;color:#fb923c;border-color:rgba(251,146,60,0.3);box-shadow:0 14px 30px rgba(0,0,0,0.4),0 0 18px rgba(251,146,60,0.18);animation-delay:-5s">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.563-2.512 5.563-5.563C22 6.5 17.5 2 12 2Z"/>
          </svg>
          <small>UI/UX</small>
        </span>
      </div>

      <div class="cnote">
        <svg width="60" height="44" viewBox="0 0 60 44" fill="none" stroke="#f26a1b" stroke-width="2.4" stroke-linecap="round">
          <path d="M58 40C40 38 18 30 8 6M4 16l4-11 10 5"/>
        </svg>
        Let's talk!
      </div>
    </div>
  </section>

  <!-- ========================================================================
       7. CONTACT SECTION & LEAD FORM
       ======================================================================== -->
  <svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <defs>
      <clipPath id="cpInfo" clipPathUnits="objectBoundingBox">
        <path d="M0,0.08 Q0,0.02 0.06,0.02 L0.5,0.02 Q0.56,0.02 0.6,0 H0.94 Q1,0 1,0.05 V0.8 Q1,0.86 0.96,0.88 Q0.9,0.9 0.9,0.95 Q0.89,1 0.82,1 H0.06 Q0,1 0,0.95Z"/>
      </clipPath>
      <clipPath id="cpForm" clipPathUnits="objectBoundingBox">
        <path d="M0,0.04 Q0,0 0.03,0 H0.7 Q0.74,0 0.76,0.015 L0.79,0.03 H0.975 Q1,0.03 1,0.06 V0.97 Q1,1 0.975,1 H0.03 Q0,1 0,0.97Z"/>
      </clipPath>
    </defs>
  </svg>

  <section class="cnt" id="contact">
    <div class="cube3" style="--s:26px;left:40%;top:70px"><i></i><i></i><i></i><i></i><i></i><i></i></div>
    <svg class="crystal" style="left:-10px;top:52%" width="40" height="52" viewBox="0 0 54 70">
      <polygon points="27,0 54,24 40,70 6,62 0,22" fill="url(#gCry)"/>
      <polygon points="27,0 54,24 27,30" fill="#fff" opacity=".35"/>
    </svg>

    <div class="chead cv2">
      <span class="pill2">Get In Touch</span>
      <h2>Let's start your <em>next project</em><br>and make it <em>real</em></h2>
      <p class="sub">Share a few details about what you need and I'll get back to you with ideas, a timeline and a clear estimate.</p>
      <div class="reply">
        I usually reply within 24 hours
        <svg width="60" height="44" viewBox="0 0 60 44" fill="none" stroke="#f26a1b" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
          <path d="M56 4C46 20 30 34 6 38M14 30l-9 8 11 4"/>
        </svg>
      </div>
    </div>

    <div class="cgrid">
      <!-- Contact Information Card -->
      <aside class="icard cv2" style="transition-delay: 0.1s">
        <div class="ibg"></div>
        <span class="avail2"><i></i>Available for projects</span>
        <h3>Contact Information</h3>
        <p>Prefer a direct line? Reach me on any of these, whichever suits you best.</p>

        <div class="irows">
          <a class="irow" href="mailto:contact@example.com">
            <span class="ii">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
              </svg>
            </span>
            <span><small>Email</small><b>contact@example.com</b></span>
          </a>
          <a class="irow" href="https://wa.me/" target="_blank" rel="noopener">
            <span class="ii">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
            </span>
            <span><small>Phone / WhatsApp</small><b>+92 300 1234567</b></span>
          </a>
          <div class="irow">
            <span class="ii">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
              </svg>
            </span>
            <span><small>Location</small><b>Islamabad, Pakistan (Remote Global)</b></span>
          </div>
          <div class="irow">
            <span class="ii">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
              </svg>
            </span>
            <span><small>Working Hours</small><b>Mon – Fri, 9:00 – 18:00 PKT</b></span>
          </div>
        </div>

        <div class="socials">
          <a href="https://github.com" target="_blank" rel="noopener" aria-label="GitHub">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 .5a11.5 11.5 0 0 0-3.6 22.4c.6.1.8-.3.8-.6v-2c-3.2.7-3.9-1.5-3.9-1.5-.5-1.3-1.3-1.7-1.3-1.7-1-.7.1-.7.1-.7 1.2.1 1.8 1.2 1.8 1.2 1 1.8 2.8 1.3 3.5 1 .1-.8.4-1.3.7-1.6-2.6-.3-5.3-1.3-5.3-5.7 0-1.3.5-2.3 1.2-3.1-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.2 1.2a11 11 0 0 1 5.8 0c2.2-1.5 3.2-1.2 3.2-1.2.6 1.6.2 2.8.1 3.1.8.8 1.2 1.9 1.2 3.1 0 4.4-2.7 5.4-5.3 5.7.4.4.8 1.1.8 2.2v3.2c0 .3.2.7.8.6A11.5 11.5 0 0 0 12 .5z"/>
            </svg>
          </a>
          <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9h4v12H3zM9 9h3.8v1.7h.1c.5-1 1.8-2 3.8-2 4 0 4.8 2.6 4.8 6V21h-4v-5.6c0-1.3 0-3-1.9-3s-2.1 1.4-2.1 2.9V21H9z"/>
            </svg>
          </a>
          <a href="https://x.com" target="_blank" rel="noopener" aria-label="X">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M18.2 2h3.4l-7.4 8.5L23 22h-6.8l-5.3-7-6.1 7H1.4l7.9-9L1 2h7l4.8 6.4zm-1.2 18h1.9L7.1 3.9H5.1z"/>
            </svg>
          </a>
          <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="3" width="18" height="18" rx="5"/>
              <circle cx="12" cy="12" r="4"/>
              <circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
            </svg>
          </a>
          <a href="https://wa.me/" target="_blank" rel="noopener" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.2 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.3-.7-2.8-1.1-4.5-4-4.7-4.2-.1-.2-1.1-1.5-1.1-2.9s.7-2 1-2.3c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.9 2.1c.1.2.1.4 0 .5l-.4.6-.4.4c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.4 2.4 1.5.3.1.5.1.6-.1l.9-1c.2-.3.4-.2.7-.1l2 1c.3.1.5.2.5.3.1.2.1.7-.1 1.3z"/>
            </svg>
          </a>
        </div>
      </aside>

      <!-- Glassmorphic Lead Intake Form -->
      <div style="position:relative" class="cv2">
        <div class="fglow"></div>
        <div class="fglass" id="fglass" style="transition-delay: 0.2s">
          <form id="cform" method="POST" action="javascript:void(0)" novalidate>
            <!-- Honeypot field for anti-bot filtering -->
            <div class="hp" aria-hidden="true">
              <label>Leave this empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
            </div>

            <div class="frow">
              <div class="fl">
                <input id="f_name" name="name" type="text" placeholder=" " autocomplete="name" required minlength="2">
                <label for="f_name">Your Name *</label>
                <span class="err">Please enter your name.</span>
              </div>
              <div class="fl">
                <input id="f_email" name="email" type="email" placeholder=" " autocomplete="email" required>
                <label for="f_email">Email Address *</label>
                <span class="err">Please enter a valid email.</span>
              </div>
            </div>

            <div class="frow">
              <div class="fl">
                <input id="f_phone" name="phone" type="tel" placeholder=" " autocomplete="tel" pattern="[0-9+ ()\-]{7,20}">
                <label for="f_phone">Phone (optional)</label>
                <span class="err">Please enter a valid phone number.</span>
              </div>
              <div class="fl">
                <select id="f_service" name="service" required>
                  <option value="">Choose a service…</option>
                  <option value="web_apps">Custom Web Apps</option>
                  <option value="crm">CRM Development</option>
                  <option value="chat">Chat Applications</option>
                  <option value="automation">Business Process Automation</option>
                  <option value="mobile">Mobile App Development</option>
                  <option value="ui_ux">UI/UX &amp; Performance</option>
                </select>
                <label for="f_service">Service *</label>
                <span class="err">Please choose a service.</span>
              </div>
            </div>

            <span class="glab">Quick pick a service</span>
            <div class="chs" id="svcChips">
              <button type="button" data-v="web_apps">Web Apps</button>
              <button type="button" data-v="crm">CRM</button>
              <button type="button" data-v="chat">Chat</button>
              <button type="button" data-v="automation">Automation</button>
              <button type="button" data-v="mobile">Mobile</button>
              <button type="button" data-v="ui_ux">UI/UX</button>
            </div>


            <div class="fl">
              <textarea id="f_message" name="message" placeholder=" " required minlength="10"></textarea>
              <label for="f_message">Tell me about your project *</label>
              <span class="err">Please write at least 10 characters.</span>
            </div>

            <div class="fsend">
              <button class="sbtn" id="sbtn" type="submit">
                <span class="tx">Send Message &nbsp;→</span>
                <span class="sp"></span>
              </button>
              <span class="fnote">🔒 Your details stay private.</span>
            </div>
          </form>

          <!-- Interactive Success Message Feedback -->
          <div class="success" role="status" aria-live="polite">
            <span class="ck">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21l7 7 15-16"/>
              </svg>
            </span>
            <h4>Message sent!</h4>
            <p>Thanks for reaching out. I'll get back to you within 24 hours.</p>
            <button type="button" id="fagain">Send another message</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       8. FOOTER SECTION
       ======================================================================== -->
<?php include dirname(__DIR__) . '/layouts/footer.php'; ?>
