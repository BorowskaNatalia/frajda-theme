<?php
$hipo = get_page_by_path('hipoterapia');
$img = $hipo && has_post_thumbnail($hipo) ? get_the_post_thumbnail($hipo, 'large', ['class'=>'section__img']) : '';
?>
<section class="section section--alt hipoterapia" id="hipoterapia" aria-labelledby="hipoterapia-title">
    <div class="container section__inner">
        <div class="section__content">
            <h2 class="section__title" id="hipoterapia-title"><?php _e('Hipoterapia','super'); ?></h2>
            <div class="section__text">
                <?php echo $hipo ? apply_filters('the_content', $hipo->post_content) : '<p>'.esc_html__('Zajęcia z hipoterapii prowadzone przez wykwalifikowanych terapeutów.','super').'</p>'; ?>
            </div>
        </div>
        <div class="section__media">
            <?php echo $img ?: '<div class="media-placeholder" role="img" aria-label="Zdjęcie z zajęć"></div>'; ?></div>
    </div>
</section>