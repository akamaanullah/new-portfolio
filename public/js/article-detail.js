/* ============================================================================
   ARTICLE DETAIL PAGE SCRIPT
   Amaanullah — Web Developer & Software Solutions
   ============================================================================ */

document.addEventListener('DOMContentLoaded', () => {
  const RM = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // 1. Current Copyright Year
  const yrEl = document.getElementById('yr');
  if (yrEl) {
    yrEl.textContent = new Date().getFullYear();
  }

  // 2. Back to Top Button
  const btt = document.getElementById('btt');
  if (btt) {
    btt.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: RM ? 'auto' : 'smooth' });
    });
  }

  // 3. Dark Theme Toggle & Persistence
  const dmBtn = document.getElementById('dm');
  const savedTheme = localStorage.getItem('theme');

  if (savedTheme === 'light') {
    document.body.classList.remove('dark');
  } else {
    document.body.classList.add('dark');
  }

  if (dmBtn) {
    dmBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark');
      const isDark = document.body.classList.contains('dark');
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
  }

  // 4. Reading Time Calculation
  const content = document.getElementById('content');
  const rtimeEl = document.getElementById('rtime');
  if (content && rtimeEl) {
    const text = content.innerText.trim();
    const words = text ? text.split(/\s+/).length : 0;
    const minutes = Math.max(1, Math.round(words / 230));
    rtimeEl.textContent = `${minutes} min read`;
  }

  // 5. Reading Progress & TOC Scrollspy
  const progBar = document.getElementById('prog');
  const tocBar = document.getElementById('tbar');
  const pctEl = document.getElementById('pct');
  const mcurEl = document.getElementById('mcur');

  const tocLinks = [...document.querySelectorAll('.toc a')];
  const sections = tocLinks.map(a => {
    const hash = a.getAttribute('href');
    return hash ? document.querySelector(hash) : null;
  }).filter(Boolean);

  function updateReadingProgress() {
    if (!content) return;
    const rect = content.getBoundingClientRect();
    const totalHeight = rect.height - window.innerHeight;
    const progress = totalHeight > 0 ? Math.min(1, Math.max(0, -rect.top / totalHeight)) : 0;
    const percentage = Math.round(progress * 100);

    if (progBar) progBar.style.width = `${progress * 100}%`;
    if (tocBar) tocBar.style.width = `${progress * 100}%`;
    if (pctEl) pctEl.textContent = `${percentage}%`;

    // Highlight active section in TOC
    let activeIndex = -1;
    sections.forEach((sec, idx) => {
      if (sec.getBoundingClientRect().top < 160) {
        activeIndex = idx;
      }
    });

    tocLinks.forEach((link, idx) => {
      link.classList.toggle('on', idx === activeIndex);
    });

    if (mcurEl) {
      mcurEl.textContent = activeIndex < 0 ? 'Introduction' : tocLinks[activeIndex].textContent;
    }
  }

  window.addEventListener('scroll', updateReadingProgress, { passive: true });
  updateReadingProgress();

  // 6. Mobile TOC auto-close on link click
  document.querySelectorAll('.mtoc a').forEach(a => {
    a.addEventListener('click', () => {
      const details = a.closest('details');
      if (details) details.open = false;
    });
  });

  // 7. Clipboard Utilities (Copy Code & Copy Article Link)
  function copyTextToClipboard(text, btn, successLabel = 'Copied ✓') {
    if (!navigator.clipboard) return;
    navigator.clipboard.writeText(text).then(() => {
      btn.classList.add('ok');
      const originalHtml = btn.innerHTML;
      if (btn.classList.contains('cp')) {
        btn.textContent = successLabel;
      }
      setTimeout(() => {
        btn.classList.remove('ok');
        btn.innerHTML = originalHtml;
      }, 2000);
    }).catch(err => console.warn('Could not copy:', err));
  }

  // Copy code blocks
  document.querySelectorAll('.cp').forEach(btn => {
    btn.addEventListener('click', () => {
      const codeEl = btn.closest('.code')?.querySelector('code');
      if (codeEl) {
        copyTextToClipboard(codeEl.innerText, btn, 'Copied ✓');
      }
    });
  });

  // Copy article link
  document.querySelectorAll('.copyl').forEach(btn => {
    btn.addEventListener('click', () => {
      copyTextToClipboard(window.location.href, btn);
    });
  });

  // 8. Newsletter Form Submit Feedback
  document.querySelectorAll('.news form').forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = form.querySelector('button');
      if (btn) {
        btn.textContent = 'Subscribed ✓';
        btn.style.background = '#22b07d';
      }
      form.reset();
    });
  });
});
