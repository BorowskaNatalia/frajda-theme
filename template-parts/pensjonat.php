<?php
$pens = get_page_by_path('pensjonat');
$img = $pens && has_post_thumbnail($pens) ? get_the_post_thumbnail($pens, 'large', ['class'=>'section__img']) : '';
?>
<section class="section pensjonat" id="pensjonat" aria-labelledby="pensjonat-title">
    <div class="container section__inner">
        <div class="section__content">
            <h2 class="section__title" id="pensjonat-title"><?php _e('Pensjonat','super'); ?></h2>
            <div class="section__text">
                <?php echo $pens ? apply_filters('the_content', $pens->post_content) : '<p>'.esc_html__('Boksy, wybieg i całodobowa opieka – komfort dla Twojego konia.','super').'</p>'; ?>
            </div>
        </div>
        <div class="section__media">
            <?php echo $img ?: '<div class="media-placeholder" role="img" aria-label="Zdjęcie pensjonatu"></div>'; ?>
        </div>
    </div>
</section>