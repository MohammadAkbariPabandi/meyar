<?php
/**
 * Template Name: futureEvents
 */
get_header(); ?>
<section class="basePages">
    <div class="events">
        <div class="container">
            <div class="row contactUs-header">
                <div class="col-md-6 contactUs-title">
                    <h1 class="Dana-Black"><?php the_title(); ?></h1>
                    <h2 class="Dana-Regular"><?php the_excerpt(); ?></h2>
                </div>
            </div>
        </div>
        <div class="futureHero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/futureEvents.png" alt="">
        </div>
    </div>
    <div class="container events-items">
        <?php
        $args = array(
            'post_type'      => 'event',
            'posts_per_page' => -1,
            'category_name'  => 'futureEvents',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );
        $futureEvents_query = new WP_Query($args);
        if ( $futureEvents_query->have_posts() ) :
        ?>
             <?php while ( $futureEvents_query->have_posts() ) : $futureEvents_query->the_post(); ?>
                <div class="events-card">
                    <div class="row">
                        <div class="col-md-2 col-5">
                            <!-- ACF Fields -->
                            <?php if ( get_field('eventsimage') ) : ?>
                                <img  src="<?php echo get_field('eventsimage')['url']; ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-10 col-7">
                            <h1 class="Dana-Black"><?php the_title(); ?></h1>
                            <div class="Dana-Regular events-card-summary">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>