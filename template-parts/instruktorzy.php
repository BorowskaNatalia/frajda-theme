<?php
$instructors = new WP_Query(['post_type'=>'instructor','posts_per_page'=>-1,'orderby'=>'menu_order title','order'=>'ASC']);
?>
<section class="section instruktorzy" id="instruktorzy" aria-labelledby="instruktorzy-title">
    <div class="container">
        <h2 class="section__title" id="instruktorzy-title"><?php _e('Instruktorzy','super'); ?></h2>
        <ul class="avatar-list">
            <?php if ($instructors->have_posts()) : while ($instructors->have_posts()) : $instructors->the_post(); ?>
            <li class="avatar">
                <figure class="avatar__figure">
                    <?php if (has_post_thumbnail()) the_post_thumbnail('avatar-round',['class'=>'avatar__img']); else echo '<div class="avatar__placeholder"></div>'; ?>
                    <figcaption class="avatar__caption"><span class="avatar__name"><?php the_title(); ?></span>
                    </figcaption>
                </figure>
            </li>
            <?php endwhile; wp_reset_postdata(); else: ?>
            <li class="avatar">
                <div class="avatar__placeholder"></div><span class="avatar__name"><?php _e('Wkrótce','super'); ?></span>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</section>