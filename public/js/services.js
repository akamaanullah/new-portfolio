/* ============================================================================
   SERVICES PAGE SCRIPTS
   Amaanullah — Web Developer & Software Solutions
   ============================================================================ */

document.addEventListener('DOMContentLoaded', () => {
  const RM = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // 1. Current Copyright Year
  const yrEl = document.getElementById('yr');
  if (yrEl) {
    yrEl.textContent = new Date().getFullYear();
  }

  // 2. Fade-in & Counter IntersectionObserver
  function cu(el) {
    const t = el.dataset.to;
    const n = parseFloat(t);
    if (RM || isNaN(n)) return;
    const d = t.includes('.') ? 1 : 0;
    const t0 = performance.now();
    (function f(now) {
      const p = Math.min(1, (now - t0) / 1400);
      const e = 1 - Math.pow(1 - p, 3);
      el.textContent = (n * e).toFixed(d);
      if (p < 1) requestAnimationFrame(f);
      else el.textContent = t;
    })(t0);
  }

  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
        entry.target.querySelectorAll('.cu').forEach(cu);
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('.fade, .proc2').forEach((el, i) => {
    el.style.transitionDelay = (i % 3) * 80 + 'ms';
    io.observe(el);
  });

  // 3. Back to Top Button
  const btt = document.getElementById('btt');
  if (btt) {
    btt.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // 4. Dark Mode Toggle & Persistence (Default: Dark)
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

  // 5. Consulting Tabs
  const tabs = [...document.querySelectorAll('.tab')];
  function selectTab(i, focus = false) {
    tabs.forEach((t, j) => {
      const isSelected = i === j;
      t.setAttribute('aria-selected', isSelected ? 'true' : 'false');
      t.tabIndex = isSelected ? 0 : -1;
      const targetPanel = document.getElementById(t.getAttribute('aria-controls'));
      if (targetPanel) {
        targetPanel.hidden = !isSelected;
      }
    });
    if (focus && tabs[i]) tabs[i].focus();
  }

  tabs.forEach((t, i) => {
    t.addEventListener('click', () => selectTab(i));
    t.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowDown' || e.key === 'ArrowRight') {
        e.preventDefault();
        selectTab((i + 1) % tabs.length, true);
      } else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') {
        e.preventDefault();
        selectTab((i + tabs.length - 1) % tabs.length, true);
      }
    });
  });

  // 6. Reviews Track Carousel
  const rt = document.getElementById('rt');
  const rp = document.getElementById('rp');
  const rn = document.getElementById('rn');
  if (rt && rp && rn) {
    const getStep = () => {
      const card = rt.querySelector('.rv');
      return card ? card.offsetWidth + 18 : 340;
    };
    rp.addEventListener('click', () => rt.scrollBy({ left: -getStep(), behavior: RM ? 'auto' : 'smooth' }));
    rn.addEventListener('click', () => rt.scrollBy({ left: getStep(), behavior: RM ? 'auto' : 'smooth' }));
  }

  // 7. Hover Glow & 3D Tilt (Desktops / Fine Pointers)
  if (!RM && window.matchMedia('(hover: hover)').matches) {
    document.querySelectorAll('.bc').forEach(card => {
      card.addEventListener('pointermove', (e) => {
        const rect = card.getBoundingClientRect();
        card.style.setProperty('--mx', (e.clientX - rect.left) + 'px');
        card.style.setProperty('--my', (e.clientY - rect.top) + 'px');
      });
    });

    const stageEl = document.querySelector('.stage');
    const codeEl = stageEl && stageEl.querySelector('.code');
    if (stageEl && codeEl) {
      stageEl.addEventListener('pointermove', (e) => {
        const rect = stageEl.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;
        codeEl.style.transform = `perspective(900px) rotateY(${x * 8}deg) rotateX(${-y * 8}deg) rotate(-2deg)`;
      });
      stageEl.addEventListener('pointerleave', () => {
        codeEl.style.transform = '';
      });
    }
  }

  // 8. Live Interactive Mockups
  if (!RM) {
    const vis = new IntersectionObserver((entries) => {
      entries.forEach(e => e.target.classList.toggle('on-screen', e.isIntersecting));
    }, { threshold: 0.05 });

    document.querySelectorAll('.live').forEach(el => vis.observe(el));
    const isOn = el => el.classList.contains('on-screen') && !document.hidden;
    const intervalRunner = (el, ms, fn, delay = 0) => setTimeout(() => setInterval(() => { if (isOn(el)) fn(); }, ms), delay);
    const fmt = n => n.toLocaleString('en-US');

    // A. CRM Pipeline & KPIs
    const crm = document.querySelector('[data-anim=crm]');
    if (crm) {
      const bars = [...crm.querySelectorAll('.bars i')];
      const pills = [...crm.querySelectorAll('.pipe span')];
      const ks = [...crm.querySelectorAll('[data-c]')];
      let pIdx = 0;

      intervalRunner(crm, 2600, () => {
        bars.forEach(b => b.style.height = (30 + (Math.random() * 65 | 0)) + '%');
      });

      intervalRunner(crm, 1800, () => {
        if (pills.length) {
          pills[pIdx].classList.remove('on');
          pIdx = (pIdx + 1) % pills.length;
          pills[pIdx].classList.add('on');
        }
      }, 300);

      ks.forEach((k, i) => {
        intervalRunner(crm, 1300 + i * 500, () => {
          let v = +k.dataset.c + 1 + (Math.random() * +k.dataset.r | 0);
          k.dataset.c = v;
          k.textContent = fmt(v);
          k.classList.add('tick');
          setTimeout(() => k.classList.remove('tick'), 350);
        }, i * 300);
      });
    }

    // B. SaaS Multi-tenant billing switcher
    const ss = document.querySelector('[data-anim=saas]');
    if (ss) {
      const rows = [...ss.querySelectorAll('.ten')];
      const plans = ['Pro', 'Team', 'Starter', 'Business'];
      let hi = 2;
      let count = 0;

      intervalRunner(ss, 2400, () => {
        count++;
        rows.forEach(r => r.style.setProperty('--y', (+r.style.getPropertyValue('--y') + 1) % 3));
        rows[hi].classList.remove('on');
        const oldSpan = rows[hi].querySelector('span');

        hi = (hi + 1) % 3;
        const r = rows[hi];

        if (oldSpan) {
          oldSpan.classList.add('sw');
          setTimeout(() => {
            oldSpan.className = '';
            oldSpan.textContent = plans[count % plans.length];
          }, 250);
        }

        const sp = r.querySelector('span');
        if (sp) {
          sp.classList.add('sw');
          setTimeout(() => {
            sp.className = 'bill';
            sp.innerHTML = 'Billing <i>✓</i>';
            r.classList.add('on');
          }, 300);
        }
      }, 900);
    }

    // C. Live Chat Simulator
    const ch = document.querySelector('[data-anim=chat]');
    if (ch) {
      const msgs = [
        ['l', 'Order #482 shipped?'],
        ['r', 'Yes — tracking sent ✓'],
        ['l', 'Can I add a teammate?'],
        ['r', 'Done, invite sent 🎉'],
        ['l', 'Thanks!']
      ];
      let msgIdx = 0;

      intervalRunner(ch, 2200, () => {
        const ty = ch.querySelector('.typing');
        if (!ty) return;
        const [side, text] = msgs[msgIdx % msgs.length];
        msgIdx++;

        const bub = document.createElement('div');
        bub.className = 'bub ' + side;
        bub.textContent = text;
        ch.insertBefore(bub, ty);

        const allBubbles = ch.querySelectorAll('.bub:not(.typing)');
        if (allBubbles.length > 2) {
          allBubbles[0].remove();
        }
        ty.classList.toggle('r', side === 'l');
        ty.classList.toggle('l', side !== 'l');
      }, 600);
    }
  }
});
