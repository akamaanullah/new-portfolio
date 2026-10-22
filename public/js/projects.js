/* ============================================================================
   PROJECTS PAGE SCRIPT
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

  // 4. Staggered Reveal Observer
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  function reveal(root = document) {
    root.querySelectorAll('.pc').forEach((el, i) => {
      el.classList.add('rv2');
      el.style.transitionDelay = (i % 3) * 90 + 'ms';
    });
    root.querySelectorAll('.rv2:not(.in)').forEach(el => io.observe(el));
  }

  // 5. Sliding Pill Indicator for Filter Tabs
  function moveIndicator() {
    const ind = document.querySelector('.ind');
    const activeTab = document.querySelector('.ft[aria-selected="true"]');
    if (ind && activeTab) {
      ind.style.width = activeTab.offsetWidth + 'px';
      ind.style.transform = `translateX(${activeTab.offsetLeft}px)`;
      const container = activeTab.parentElement;
      if (container && container.scrollWidth > container.clientWidth) {
        container.scrollTo({
          left: activeTab.offsetLeft - (container.clientWidth - activeTab.offsetWidth) / 2,
          behavior: RM ? 'auto' : 'smooth'
        });
      }
    }
  }

  // 6. Custom Magnetic Floating Cursor
  const cur = document.getElementById('cur');
  let cursorOn = false;
  const finePointer = !RM && window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  function bindCursor(root = document) {
    if (!finePointer || !cur) return;
    root.querySelectorAll('.pl').forEach(link => {
      link.addEventListener('pointerenter', () => {
        cursorOn = true;
        cur.classList.add('on');
      });
      link.addEventListener('pointerleave', () => {
        cursorOn = false;
        cur.classList.remove('on');
      });
    });
  }

  if (finePointer && cur) {
    let curX = 0, curY = 0, targetX = 0, targetY = 0;
    window.addEventListener('pointermove', (e) => {
      targetX = e.clientX;
      targetY = e.clientY;
    });

    (function loop() {
      curX += (targetX - curX) * 0.18;
      curY += (targetY - curY) * 0.18;
      cur.style.transform = `translate(${curX}px, ${curY}px) scale(${cursorOn ? 1 : 0})`;
      requestAnimationFrame(loop);
    })();
  }

  // 7. Progressive Enhancement: AJAX Tab Swapping
  const cache = {};
  function getPage(url) {
    return cache[url] || (cache[url] = fetch(url, { credentials: 'same-origin' })
      .then(res => {
        if (!res.ok) throw new Error(res.status);
        return res.text();
      })
      .then(html => new DOMParser().parseFromString(html, 'text/html')));
  }

  function setMeta(doc) {
    document.title = doc.title;
    const metaPairs = [
      ['meta[name="description"]', 'content'],
      ['link[rel="canonical"]', 'href'],
      ['meta[property="og:title"]', 'content'],
      ['meta[property="og:description"]', 'content'],
      ['meta[property="og:url"]', 'content'],
      ['meta[name="twitter:title"]', 'content'],
      ['meta[name="twitter:description"]', 'content']
    ];

    metaPairs.forEach(([sel, attr]) => {
      const src = doc.querySelector(sel);
      const dst = document.querySelector(sel);
      if (src && dst) dst.setAttribute(attr, src.getAttribute(attr));
    });

    document.querySelectorAll('script.pld').forEach(s => s.remove());
    doc.querySelectorAll('script.pld').forEach(s => {
      const c = document.createElement('script');
      c.type = 'application/ld+json';
      c.className = 'pld';
      c.textContent = s.textContent;
      document.head.appendChild(c);
    });
  }

  const wait = ms => new Promise(resolve => setTimeout(resolve, ms));
  let isNavigating = false;

  async function goToCategory(url, push = true) {
    if (isNavigating) return;
    isNavigating = true;
    const mainEl = document.getElementById('main');
    if (!mainEl) {
      window.location.href = url;
      return;
    }

    try {
      const docPromise = getPage(url);
      const matchedTab = document.querySelector(`.ft[href="${url}"]`);
      const key = matchedTab?.dataset?.f;

      if (key) {
        document.querySelectorAll('.ft').forEach(t => {
          const isCurrent = t.dataset.f === key;
          t.setAttribute('aria-selected', isCurrent ? 'true' : 'false');
          if (isCurrent) {
            t.setAttribute('aria-current', 'page');
          } else {
            t.removeAttribute('aria-current');
          }
        });
        moveIndicator();
      }

      if (!RM) {
        mainEl.classList.add('leaving');
        await wait(280);
      }

      const doc = await docPromise;
      const newMain = doc.getElementById('main');
      if (!newMain) {
        window.location.href = url;
        return;
      }

      const ph = mainEl.querySelector('.ph');
      const newPh = newMain.querySelector('.ph');
      if (ph && newPh) {
        const oldCrumb = ph.querySelector('.crumb');
        const newCrumb = newPh.querySelector('.crumb');
        if (oldCrumb && newCrumb) oldCrumb.replaceWith(newCrumb.cloneNode(true));

        const oldEye = ph.querySelector('.eyebrow');
        const newEye = newPh.querySelector('.eyebrow');
        if (oldEye && newEye) oldEye.replaceWith(newEye.cloneNode(true));

        const oldRowDiv = ph.querySelector('.row > div');
        const newRowDiv = newPh.querySelector('.row > div');
        if (oldRowDiv && newRowDiv) oldRowDiv.replaceWith(newRowDiv.cloneNode(true));

        ph.querySelectorAll('.hc').forEach(h => {
          h.classList.toggle('act', h.dataset.f === newMain.dataset.page);
        });
      }

      const swapEl = document.getElementById('swap');
      const newSwap = newMain.querySelector('#swap');
      if (swapEl && newSwap) {
        swapEl.innerHTML = newSwap.innerHTML;
      }

      mainEl.dataset.page = newMain.dataset.page;
      setMeta(doc);

      if (push) {
        history.pushState({ url }, '', url);
      }

      reveal(mainEl);
      bindCursor(mainEl);

      const filterBar = document.querySelector('.fbar2');
      if (filterBar && filterBar.getBoundingClientRect().top < 0) {
        filterBar.scrollIntoView({ behavior: RM ? 'auto' : 'smooth' });
      }

      requestAnimationFrame(() => mainEl.classList.remove('leaving'));
    } catch (err) {
      console.warn('Tab navigation fallback:', err);
      window.location.href = url;
    } finally {
      isNavigating = false;
    }
  }

  // Intercept category tab links and quick card clicks
  document.addEventListener('click', (e) => {
    const link = e.target.closest('a.ft, a.hc');
    if (!link || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey || e.button !== 0) return;
    
    const url = link.getAttribute('href');
    if (!url || url.startsWith('#') || url.startsWith('javascript:')) return;

    const mainEl = document.getElementById('main');
    if (mainEl && mainEl.dataset.page === link.dataset.f) {
      e.preventDefault();
      return;
    }

    e.preventDefault();
    goToCategory(url, true);
  });

  // Prefetch category on hover
  document.addEventListener('pointerover', (e) => {
    const link = e.target.closest('a.ft, a.hc');
    if (link) {
      const url = link.getAttribute('href');
      if (url && !url.startsWith('#') && !url.startsWith('javascript:')) {
        getPage(url).catch(() => {});
      }
    }
  });

  // Handle browser back/forward buttons
  const currentPageFile = window.location.pathname.split('/').pop() || 'projects.html';
  history.replaceState({ url: currentPageFile }, '');
  window.addEventListener('popstate', (e) => {
    if (e.state && e.state.url) {
      goToCategory(e.state.url, false);
    }
  });

  // Initial runs
  reveal(document);
  bindCursor(document);
  requestAnimationFrame(moveIndicator);
  window.addEventListener('resize', moveIndicator);
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(moveIndicator);
  }
});
