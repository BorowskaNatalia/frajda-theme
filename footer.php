<?php ?></main>

<footer class="footer">
    <div class="container footer__inner" id="kontakt">
        <div class="footer__col">
            <h2 class="footer__title"><?php _e('Kontakt','super'); ?></h2>
            <ul class="footer__list">
                <li><strong>Telefon:</strong> <a href="tel:+48123456789">+48 123 456 789</a></li>
                <li><strong>Email:</strong> <a href="mailto:kontakt@frajda.pl">kontakt@frajda.pl</a></li>
                <li><strong>Adres:</strong> Przykładowa 1, 00-000 Frajda</li>
                <li><strong>Godziny:</strong> Pon–Pt 8:00–18:00, Sob 9:00–14:00</li>
            </ul>
        </div>
        <div class="footer__col">
            <?php wp_nav_menu(['theme_location'=>'footer','container'=>false,'menu_class'=>'menu menu--footer','fallback_cb'=>'__return_empty_string','depth'=>1]); ?>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>