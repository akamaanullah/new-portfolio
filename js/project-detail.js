/* ============================================================================
   PROJECT DETAIL / CASE STUDY SCRIPT
   Amaanullah — Web Developer & Software Solutions
   ============================================================================ */

document.addEventListener('DOMContentLoaded', () => {
  const RM = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // 1. Current Copyright Year
  const yrEl = document.getElementById('yr');
  if (yrEl) {
    yrEl.textContent = new Date().getFullYear();
  }

  // 2. Dark Theme Toggle & Persistence
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

  // 3. Reading Time Calculation
  const contentEl = document.getElementById('content');
  const rtimeEl = document.getElementById('rtime');
  if (contentEl && rtimeEl) {
    const wordCount = contentEl.innerText.trim().split(/\s+/).length;
    rtimeEl.textContent = Math.max(1, Math.round(wordCount / 230)) + ' min read';
  }

  // 4. Reading Progress Bar & TOC Scrollspy
  const progBar = document.getElementById('prog');
  const tocBar = document.getElementById('tbar');
  const pctEl = document.getElementById('pct');
  const mcurEl = document.getElementById('mcur');
  const tocLinks = [...document.querySelectorAll('.toc a')];
  const sections = tocLinks.map(a => document.querySelector(a.getAttribute('href'))).filter(Boolean);

  function updateScrollProgress() {
    if (!contentEl) return;
    const rect = contentEl.getBoundingClientRect();
    const progress = Math.min(1, Math.max(0, -rect.top / (rect.height - window.innerHeight)));
    const percent = Math.round(progress * 100);

    if (progBar) progBar.style.width = percent + '%';
    if (tocBar) tocBar.style.width = percent + '%';
    if (pctEl) pctEl.textContent = percent + '%';

    let activeIdx = 0;
    sections.forEach((sec, idx) => {
      if (sec.getBoundingClientRect().top < 150) {
        activeIdx = idx;
      }
    });

    tocLinks.forEach((link, idx) => {
      link.classList.toggle('on', idx === activeIdx);
    });

    if (mcurEl && tocLinks[activeIdx]) {
      mcurEl.textContent = tocLinks[activeIdx].textContent;
    }
  }

  window.addEventListener('scroll', updateScrollProgress, { passive: true });
  updateScrollProgress();

  // 5. Close Mobile TOC details on click
  document.querySelectorAll('.mtoc a').forEach(a => {
    a.addEventListener('click', () => {
      const details = a.closest('details');
      if (details) details.open = false;
    });
  });

  // 6. Staggered Scroll Reveal
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      }
    });
  }, { rootMargin: '0px 0px -8% 0px' });

  document.querySelectorAll('.rv').forEach(el => io.observe(el));

  // 7. Image Lightbox
  const lb = document.getElementById('lb');
  if (lb) {
    const lbImg = lb.querySelector('img');
    const lbCap = lb.querySelector('p');

    document.querySelectorAll('.gi').forEach(btn => {
      btn.addEventListener('click', () => {
        const thumb = btn.querySelector('img');
        if (thumb && lbImg) {
          lbImg.src = thumb.src;
          lbImg.alt = thumb.alt || '';
        }
        if (lbCap) {
          lbCap.textContent = btn.dataset.cap || '';
        }
        lb.classList.add('on');
      });
    });

    lb.addEventListener('click', (e) => {
      if (e.target !== lbImg) {
        lb.classList.remove('on');
      }
    });

    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        lb.classList.remove('on');
      }
    });
  }

  // 8. Copy Link to Clipboard
  const copyBtn = document.getElementById('copy');
  if (copyBtn) {
    copyBtn.addEventListener('click', () => {
      if (navigator.clipboard) {
        navigator.clipboard.writeText(window.location.href);
        const originalText = copyBtn.textContent;
        copyBtn.textContent = 'Copied! ✓';
        setTimeout(() => copyBtn.textContent = originalText, 2000);
      }
    });
  }
});
