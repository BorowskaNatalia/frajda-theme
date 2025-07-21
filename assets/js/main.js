document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector('.header__hamburger');
    const nav = document.querySelector('.header__nav');

    if (hamburger && nav) {
        hamburger.addEventListener('click', function () {
            nav.classList.toggle('active');
            hamburger.classList.toggle('is-active');
            // Opcjonalnie blokowanie scrolla body
            document.body.classList.toggle('menu-open');
        });

        // (opcjonalnie) Zamykanie menu po kliknięciu w link
        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
                hamburger.classList.remove('is-active');
                document.body.classList.remove('menu-open');
            });
        });
    }
});
