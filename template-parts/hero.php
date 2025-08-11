<?php
$bg = has_post_thumbnail() ? get_the_post_thumbnail_url( get_queried_object_id(), 'hero' ) : '';
$title = get_the_title() ?: __('Witaj! Stajnia Frajda','super');
$subtitle = get_the_excerpt() ?: __('Miejsce, w którym koń i człowiek czują się dobrze.','super');
?>
<section class="hero" style="<?php echo $bg ? 'background-image:url(' . esc_url($bg) . ');' : ''; ?>">
    <div class="container hero__inner">
        <h1 class="hero__title"><?php echo esc_html($title); ?></h1>
        <p class="hero__subtitle"><?php echo esc_html($subtitle); ?></p>
        <div class="hero__cta">
            <a href="#kontakt" class="btn btn--primary"><?php _e('Umów wizytę','super'); ?></a>
            <a href="#oferta" class="btn btn--ghost"><?php _e('Zobacz ofertę','super'); ?></a>
        </div>
    </div>
</section>