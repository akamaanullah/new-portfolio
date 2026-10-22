/**
 * Service Detail Page Interactions
 * Amaanullah — Web Developer & Software Solutions
 */

(() => {
  // Theme Toggle Button
  const dmBtn = document.getElementById('dm');
  if (dmBtn) {
    dmBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark');
      const isDark = document.body.classList.contains('dark');
      try {
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
      } catch (e) {}
    });
  }

  // Reading Progress Bar & TOC Scroll Spy
  const content = document.getElementById('content');
  const progBar = document.getElementById('prog');
  const tocBar = document.getElementById('tbar');
  const pctEl = document.getElementById('pct');
  const mtocCur = document.getElementById('mcur');
  
  const tocLinks = Array.from(document.querySelectorAll('.toc a[href^="#"]'));
  const sections = tocLinks.map(a => {
    try {
      return document.querySelector(a.getAttribute('href'));
    } catch (e) {
      return null;
    }
  }).filter(Boolean);

  function updateScroll() {
    if (!content) return;
    const rect = content.getBoundingClientRect();
    const scrollable = rect.height - window.innerHeight;
    const progress = scrollable > 0 ? Math.min(1, Math.max(0, -rect.top / scrollable)) : 0;
    const percent = Math.round(progress * 100);

    if (progBar) progBar.style.width = percent + '%';
    if (tocBar) tocBar.style.width = percent + '%';
    if (pctEl) pctEl.textContent = percent + '%';

    // Highlight active section in TOC
    let activeIdx = 0;
    sections.forEach((sec, idx) => {
      if (sec.getBoundingClientRect().top < 160) {
        activeIdx = idx;
      }
    });

    tocLinks.forEach((link, idx) => {
      link.classList.toggle('on', idx === activeIdx);
    });

    if (mtocCur && tocLinks[activeIdx]) {
      mtocCur.textContent = tocLinks[activeIdx].textContent;
    }
  }

  window.addEventListener('scroll', updateScroll, { passive: true });
  updateScroll();

  // Mobile TOC: Auto-close on link selection
  document.querySelectorAll('.mtoc a').forEach(link => {
    link.addEventListener('click', () => {
      const parentDetails = link.closest('details');
      if (parentDetails) {
        parentDetails.open = false;
      }
    });
  });

  // Reveal Animations on Scroll
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { rootMargin: '0px 0px -8% 0px' });

  document.querySelectorAll('.rv').forEach(el => revealObserver.observe(el));

  // Interactive Pipeline Animation in Hero Slot
  const slotEl = document.querySelector('.slot');
  if (slotEl) {
    const slotObserver = new IntersectionObserver((entries) => {
      const isVisible = entries[0].isIntersecting;
      slotEl.querySelectorAll('.mv, .bars i').forEach(item => {
        item.style.animationPlayState = isVisible ? 'running' : 'paused';
      });
    });
    slotObserver.observe(slotEl);
  }
})();
