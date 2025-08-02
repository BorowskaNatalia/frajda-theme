<footer class="footer" aria-label="Stopka serwisu">
    <div class="footer__container">
        <div class="footer__logo">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-logo.png" alt="Stajnia Frajda - logo" />
        </div>
        <span class="footer__copyright">
            © <?= date('Y'); ?> Stajnia Frajda. Wszelkie prawa zastrzeżone.
        </span>
        <a class="footer__privacy" href="<?= home_url('/polityka-prywatnosci'); ?>">
            Polityka prywatności
        </a>
    </div>
    <?php wp_footer(); ?>

</footer>