<?php ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a class="skip-link" href="#main"><?php _e('Przejdź do treści', 'super'); ?></a>

    <header class="header" role="banner">
        <div class="container header__inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo"
                aria-label="<?php bloginfo('name'); ?>">
                <?php if ( has_custom_logo() ) the_custom_logo();
      else echo '<span class="header__text">'.esc_html(get_bloginfo('name')).'</span>'; ?>
            </a>

            <button class="header__burger" id="js-burger" aria-controls="primary-menu" aria-expanded="false"
                aria-label="<?php esc_attr_e('Otwórz menu','super'); ?>">
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
            </button>

            <nav class="header__nav" role="navigation" aria-label="<?php esc_attr_e('Menu główne','super'); ?>">
                <?php wp_nav_menu([
        'theme_location'=>'primary','menu_id'=>'primary-menu','container'=>false,
        'menu_class'=>'menu menu--primary','fallback_cb'=>'__return_empty_string','depth'=>1
      ]); ?>
            </nav>
        </div>
    </header>

    <main id="main" class="site-main" tabindex="-1">