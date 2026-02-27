<?php
/**
 * Template Name: newEvents
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
        <div class="contactUs-image">
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/newEvents.png" alt="">
        </div>
    </div>
    <div class="container events-items">
        <?php
        $args = array(
            'post_type'      => 'event',
            'posts_per_page' => -1,
            'category_name'  => 'newEvents',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );
        $newEvents_query = new WP_Query($args);
        if ( $newEvents_query->have_posts() ) :
        ?>
            <?php while ( $newEvents_query->have_posts() ) : $newEvents_query->the_post(); ?>
                <div class="events-card">
                    <div class="row">
                        <div class="col-md-2 col-4">
                            <!-- ACF Fields -->
                            <?php if ( get_field('eventsimage') ) : ?>
                                <img  src="<?php echo get_field('eventsimage')['url']; ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-10 col-8">
                            <h1 class="Dana-Black"><?php the_title(); ?></h1>
                            <div class="events-card-summary">
                                <p class="Dana-Regular"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>