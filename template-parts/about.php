<?php
$about = get_page_by_path('o-nas');
$img = $about && has_post_thumbnail($about) ? get_the_post_thumbnail($about, 'large', ['class'=>'about__img']) : '';
?>
<section class="section about" id="o-nas" aria-labelledby="about-title">
    <div class="container section__inner about__inner">
        <div class="section__content">
            <h2 class="section__title" id="about-title"><?php _e('O nas','super'); ?></h2>
            <div class="section__text">
                <?php echo $about ? apply_filters('the_content', $about->post_content) : '<p>'.esc_html__('Jesteśmy kameralną stajnią nastawioną na dobrostan koni i przyjazną atmosferę.','super').'</p>'; ?>
            </div>
        </div>
        <div class="section__media">
            <?php echo $img ?: '<div class="media-placeholder" role="img" aria-label="Zdjęcie stajni"></div>'; ?>
        </div>
    </div>
</section>