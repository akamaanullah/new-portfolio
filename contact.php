<?php
$page_title = "Contact Amaanullah Khan — Web Developer & Software Solutions";
$page_desc = "Get in touch with Amaanullah Khan, a Karachi-based PHP, Laravel & Full-Stack developer, about a CRM, SaaS, automation, web or mobile project. Email, WhatsApp, call or send a project brief.";
$canonical_url = "https://example.com/contact";
$og_image = "images/og-contact.png";
$page_css = "css/contact.css";
$active_nav = "contact";
$page_js = "js/contact.js";

$extra_head = '
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact Amaanullah Khan — Web Developer & Software Solutions",
    "url": "https://example.com/contact",
    "description": "Get in touch with Amaanullah Khan, a Karachi-based PHP & Laravel developer, about a CRM, SaaS, automation, web or mobile project.",
    "mainEntity": {
      "@type": "Person",
      "name": "Amaanullah Khan",
      "jobTitle": "Full-Stack Web & Software Developer",
      "email": "mailto:info@amaanullah.com",
      "telephone": "+923196935307",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Karachi",
        "addressCountry": "PK"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer support",
        "email": "info@amaanullah.com",
        "telephone": "+923196935307",
        "areaServed": "Worldwide",
        "availableLanguage": ["English", "Urdu"]
      }
    }
  }
  </script>
';

include 'includes/header.php';
?>

  <main id="main">
    <section class="ch">
      <div class="wrap">
        <nav class="crumb" aria-label="Breadcrumb">
          <a href="index.php">Home</a>
          <span aria-hidden="true">/</span>
          <b aria-current="page">Contact</b>
        </nav>
        <span class="eyebrow rv3">✦ Contact</span>
        <h1 class="rv3">Let's build something <em>that works.</em></h1>
        <p class="lead2 rv3">Have a CRM, SaaS product, automation or app in mind? Share a few details and I'll come back with clear next steps — no jargon, no pressure.</p>
        
        <div class="badges rv3">
          <span class="bdg"><span class="dot"></span>Available for new projects</span>
          <span class="bdg">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--o)"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Usually replies within 24 hours
          </span>
          <span class="bdg">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--o)"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Karachi, Pakistan (UTC+5)
          </span>
        </div>

        <!-- Contact Methods Quick Grid -->
        <div class="methods">
          <a class="mc rv3" href="mailto:info@amaanullah.com">
            <span class="ic">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="3"/><path d="m4 7 8 6 8-6"/></svg>
            </span>
            <b>Email</b>
            <small>Best for briefs and detailed requirements.</small>
            <span class="v">info@amaanullah.com</span>
            <button type="button" class="cp" data-copy="info@amaanullah.com" aria-label="Copy email address">Copy</button>
          </a>

          <a class="mc rv3" href="https://wa.me/923196935307" target="_blank" rel="noopener">
            <span class="ic">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 21l1.6-4.6A8.5 8.5 0 1 1 8 19.6z"/><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1-1.6-2-1-1 1a4 4 0 0 1-2-2l1-1-1-2z"/></svg>
            </span>
            <b>WhatsApp</b>
            <small>Quick questions and voice notes.</small>
            <span class="v">Chat on WhatsApp →</span>
          </a>

          <a class="mc rv3" href="tel:+923196935307">
            <span class="ic">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"/></svg>
            </span>
            <b>Call</b>
            <small>Talk it through directly.</small>
            <span class="v">+92 319 6935307</span>
            <button type="button" class="cp" data-copy="+92 319 6935307" aria-label="Copy phone number">Copy</button>
          </a>

          <a class="mc dk rv3" href="https://wa.me/923196935307" target="_blank" rel="noopener">
            <span class="ic">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="3"/><path d="M3 10h18M8 3v4M16 3v4"/></svg>
            </span>
            <b>Book a call</b>
            <small>Pick a slot for a short intro discovery call.</small>
            <span class="v" style="color:var(--o)">Choose a time →</span>
          </a>
        </div>

        <!-- Form + Aside Layout -->
        <div class="cl">
          <div class="fc rv3" id="fc" aria-live="polite">
            <div class="fhead">
              <h2>Tell me about your project</h2>
              <p>Fields marked <b style="color:var(--o)">*</b> are required. Takes about 2 minutes.</p>
            </div>

            <form id="cf" action="#" method="post" enctype="multipart/form-data" novalidate>
              <div class="sumerr" id="sumerr" role="alert" aria-live="assertive"></div>
              <div class="hp" aria-hidden="true">
                <label for="website">Website</label>
                <input id="website" name="website" tabindex="-1" autocomplete="off">
              </div>

              <!-- About You -->
              <fieldset>
                <legend>About you</legend>
                <div class="kg2">
                  <div class="f">
                    <label for="name">Full name <i>*</i></label>
                    <input id="name" name="name" autocomplete="name" required minlength="2" placeholder="e.g. Alex Miller" aria-describedby="name-e">
                    <span class="err" id="name-e"></span>
                  </div>
                  <div class="f">
                    <label for="email">Email <i>*</i></label>
                    <input id="email" name="email" type="email" autocomplete="email" required placeholder="alex@company.com" aria-describedby="email-e">
                    <span class="err" id="email-e"></span>
                  </div>
                </div>
                <div class="kg2">
                  <div class="f">
                    <label for="phone">Phone / WhatsApp <small>(optional)</small></label>
                    <input id="phone" name="phone" type="tel" autocomplete="tel" placeholder="+92 300 1234567" aria-describedby="phone-e">
                    <span class="err" id="phone-e"></span>
                  </div>
                  <div class="f">
                    <label for="company">Company <small>(optional)</small></label>
                    <input id="company" name="company" autocomplete="organization" placeholder="e.g. Acme Studio">
                  </div>
                </div>
              </fieldset>

              <!-- Your Project -->
              <fieldset>
                <legend>Your project</legend>
                <div class="kg2">
                  <div class="f">
                    <label for="service">Service needed <i>*</i></label>
                    <select id="service" name="service" required aria-describedby="service-e">
                      <option value="">Select a service</option>
                      <option value="Custom CRM Development">Custom CRM Development</option>
                      <option value="AI Automation Services">AI Automation Services</option>
                      <option value="Chat App Development">Chat App Development</option>
                      <option value="Web App & CMS Development">Web App &amp; CMS Development</option>
                      <option value="SaaS Application Development">SaaS Application Development</option>
                      <option value="Mobile App Development">Mobile App Development</option>
                      <option value="Business Process Automation">Business Process Automation</option>
                      <option value="SaaS Product Strategy">SaaS Product Strategy</option>
                      <option value="Performance Tuning">Performance Tuning</option>
                      <option value="Free Technical Audit">Free Technical Audit</option>
                      <option value="Not sure yet">Not sure yet</option>
                    </select>
                    <span class="err" id="service-e"></span>
                  </div>
                  <div class="f">
                    <label for="ptype">Project type</label>
                    <select id="ptype" name="project_type">
                      <option value="">Select type</option>
                      <option>New build from scratch</option>
                      <option>Redesign / rebuild existing</option>
                      <option>Improve & scale an existing system</option>
                      <option>Ongoing maintenance & support</option>
                      <option>Technical consultation only</option>
                    </select>
                  </div>
                </div>



                <div class="f" role="radiogroup" aria-labelledby="tl-l">
                  <span class="lb" id="tl-l">Timeline</span>
                  <div class="chips">
                    <label class="chip"><input type="radio" name="timeline" value="ASAP"><span>ASAP</span></label>
                    <label class="chip"><input type="radio" name="timeline" value="Within 1 month"><span>Within 1 month</span></label>
                    <label class="chip"><input type="radio" name="timeline" value="1 – 3 months"><span>1 – 3 months</span></label>
                    <label class="chip"><input type="radio" name="timeline" value="3+ months"><span>3+ months</span></label>
                    <label class="chip"><input type="radio" name="timeline" value="Flexible"><span>Flexible</span></label>
                  </div>
                </div>

                <div class="f">
                  <label for="msg">Project details <i>*</i></label>
                  <textarea id="msg" name="message" required minlength="20" maxlength="2000" aria-describedby="msg-e msg-c" placeholder="What are you building, who is it for, and what does success look like?"></textarea>
                  <div style="display:flex;justify-content:space-between;gap:10px;margin-top:4px">
                    <span class="err" id="msg-e"></span>
                    <span class="cnt" id="msg-c" aria-live="polite">0 / 2000</span>
                  </div>
                </div>

                <div class="f">
                  <span class="lb" id="att-l">Attachments <small>(brief, docs, screenshots — optional)</small></span>
                  <div class="drop" id="drop">
                    <input id="att" name="attachments[]" type="file" multiple accept=".pdf,.doc,.docx,.txt,.png,.jpg,.jpeg,.zip" aria-labelledby="att-l" aria-describedby="att-e">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#f26a1b" stroke-width="1.8" aria-hidden="true"><path d="M12 16V4m0 0-4 4m4-4 4 4M4 16v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/></svg>
                    <b>Drop files here or <u>browse</u></b>
                    <small>PDF, DOC, TXT, PNG, JPG, ZIP · up to 5 files, 10 MB each</small>
                  </div>
                  <ul class="files" id="files"></ul>
                  <span class="err" id="att-e"></span>
                </div>
              </fieldset>

              <!-- Communication Preferences -->
              <fieldset>
                <legend>How should I reach you?</legend>
                <div class="f" role="radiogroup" aria-label="Preferred contact method">
                  <div class="chips">
                    <label class="chip"><input type="radio" name="preferred_contact" value="Email" checked><span>Email</span></label>
                    <label class="chip"><input type="radio" name="preferred_contact" value="WhatsApp"><span>WhatsApp</span></label>
                    <label class="chip"><input type="radio" name="preferred_contact" value="Phone call"><span>Phone call</span></label>
                  </div>
                </div>
                <div class="f">
                  <label class="cons">
                    <input type="checkbox" id="consent" name="consent" value="1" required aria-describedby="consent-e">
                    <span>I agree that my submitted details are used only to reply to this project enquiry. <i style="color:var(--o);font-style:normal">*</i></span>
                  </label>
                  <span class="err" id="consent-e"></span>
                </div>
              </fieldset>

              <div class="sub2">
                <button class="send" id="send" type="submit">
                  <span class="ksp" aria-hidden="true"></span>
                  <span class="klbl">Send enquiry</span>
                  <span class="karr" aria-hidden="true">→</span>
                </button>
                <small>
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="vertical-align:-2px"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                  Your details stay private and confidential.
                </small>
              </div>
            </form>

            <div class="okp" role="status">
              <div class="ck">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>
              </div>
              <h2>Thanks — message received!</h2>
              <p>I'll review your project details and reply within 24 hours with clear next steps. Need an immediate response? Drop me a line on WhatsApp.</p>
              <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap">
                <a class="bo pri" href="https://wa.me/923196935307" target="_blank" rel="noopener">WhatsApp me</a>
                <button type="button" class="bo sec" id="again" style="cursor:pointer;font-family:inherit">Send another</button>
              </div>
            </div>
          </div>

          <!-- Aside Information -->
          <aside class="aside2" aria-label="Contact information">
            <div class="pn dk rv3">
              <h3 style="position:relative;z-index:1">What happens next</h3>
              <ol class="steps" style="z-index:1">
                <li>
                  <em>1</em>
                  <div>
                    <b>I review your message</b>
                    <small>Read your brief and attachments carefully to understand your requirements.</small>
                  </div>
                </li>
                <li>
                  <em>2</em>
                  <div>
                    <b>Short discovery call</b>
                    <small>We align on project goals, scope, and non-negotiables.</small>
                  </div>
                </li>
                <li>
                  <em>3</em>
                  <div>
                    <b>Clear proposal &amp; roadmap</b>
                    <small>Scope, timeline, and phased cost — in plain, honest language.</small>
                  </div>
                </li>
              </ol>
            </div>

            <div class="pn rv3">
              <h3>Why clients reach out</h3>
              <div class="tp">
                <div>
                  <span class="g">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  </span>
                  <span><b>4.8 ★ Google Rating</b><small>From 27+ real verified client reviews</small></span>
                </div>
                <div>
                  <span class="g">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                  </span>
                  <span><b>Global Remote Clients</b><small>UK, US, UAE, Saudi Arabia, Pakistan</small></span>
                </div>
                <div>
                  <span class="g">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                  </span>
                  <span><b>Full-Stack Engineering</b><small>Laravel, PHP, Vue, React, Flutter &amp; AI</small></span>
                </div>
              </div>
            </div>
          </aside>
        </div>



        <!-- FAQ Section -->
        <section class="faq2" aria-labelledby="faq-h">
          <div class="rv3">
            <span class="eyebrow">✦ Before you write</span>
            <h2 id="faq-h">Questions people ask first</h2>
            <p class="sub">Still unsure? Just drop a line — there's no wrong way to start.</p>
          </div>
          <div class="rv3">
            <details>
              <summary>How quickly will you reply?</summary>
              <p>I usually reply within 2 to 24 hours on working days. For urgent queries or quick questions, messaging via WhatsApp is the fastest route.</p>
            </details>
            <details>
              <summary>Do you work with clients outside Pakistan?</summary>
              <p>Yes, more than 70% of my clients are based in the UK, USA, UAE, and Saudi Arabia. We collaborate seamlessly via Slack, WhatsApp, Google Meet, and Jira/Linear.</p>
            </details>
            <details>
              <summary>What should I include in my initial message?</summary>
              <p>Share a brief summary of what problem you want to solve, what tools or tech you are currently using, your desired timeline, and approximate budget.</p>
            </details>
            <details>
              <summary>Can you sign an NDA before we discuss details?</summary>
              <p>Absolutely. If your idea is proprietary or contains sensitive business data, I am happy to sign your standard non-disclosure agreement before any discovery call.</p>
            </details>
            <details>
              <summary>Do you offer fixed-price quotes?</summary>
              <p>Yes. For well-defined scopes (CRMs, web apps, portals), I provide fixed-price milestone contracts so you have 100% cost predictability.</p>
            </details>
            <details>
              <summary>Can you take over and refactor an existing Laravel project?</summary>
              <p>Yes. I frequently perform technical code audits on legacy PHP/Laravel codebases, resolve bottlenecks, and upgrade architectures cleanly.</p>
            </details>
          </div>
        </section>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta2">
      <div class="band rv2">
        <div>
          <h2>Prefer a quick chat first?</h2>
          <p>Send a WhatsApp message or email — whichever is more convenient for you.</p>
        </div>
        <div class="btns" style="margin:0">
          <a class="bo w" href="https://wa.me/923196935307" target="_blank" rel="noopener">WhatsApp →</a>
          <a class="bo g" href="mailto:info@amaanullah.com">Email me</a>
        </div>
      </div>
    </section>
  </main>

<?php include 'includes/footer.php'; ?>
