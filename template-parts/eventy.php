<?php
$events = new WP_Query(['post_type'=>'event','posts_per_page'=>3,'orderby'=>'date','order'=>'DESC']);
?>
<section class="section eventy" id="eventy" aria-labelledby="eventy-title">
    <div class="container">
        <h2 class="section__title" id="eventy-title"><?php _e('Eventy','super'); ?></h2>
        <div class="grid grid--3">
            <?php if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post(); ?>
            <article class="card"><a href="<?php the_permalink(); ?>" class="card__link">
                    <div class="card__media">
                        <?php if (has_post_thumbnail()) the_post_thumbnail('card',['class'=>'card__img']); else echo '<div class="media-placeholder"></div>'; ?>
                    </div>
                    <div class="card__body">
                        <h3 class="card__title"><?php the_title(); ?></h3>
                        <p class="card__text"><?php echo get_the_excerpt(); ?></p>
                    </div>
                </a></article>
            <?php endwhile; wp_reset_postdata(); else: ?>
            <article class="card">
                <div class="card__body">
                    <h3 class="card__title"><?php _e('Wkrótce ogłosimy wydarzenia!','super'); ?></h3>
                </div>
            </article>
            <?php endif; ?>
        </div>
    </div>
</section>