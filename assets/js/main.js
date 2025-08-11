(function () {
    const burger = document.getElementById('js-burger');
    const nav = document.querySelector('.header__nav');

    if (burger && nav) {
        burger.addEventListener('click', () => {
            const expanded = burger.getAttribute('aria-expanded') === 'true';
            burger.setAttribute('aria-expanded', String(!expanded));
            document.body.classList.toggle('nav-open');
        });
        nav.addEventListener('click', (e) => {
            const link = e.target.closest('a');
            if (link && document.body.classList.contains('nav-open')) {
                burger.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('nav-open');
            }
        });
    }

    // Smooth scroll (WCAG-friendly – nie blokuje klawiatury)
    document.addEventListener('click', (e) => {
        const a = e.target.closest('a[href^="#"]');
        if (!a) return;
        const id = a.getAttribute('href').slice(1);
        const el = id ? document.getElementById(id) : null;
        if (el) {
            e.preventDefault();
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }, { passive: false });
})();
