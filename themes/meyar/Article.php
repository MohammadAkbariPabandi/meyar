<?php
/**
 * Template Name: article
 */
get_header(); ?>


<section class="basePages">
    <div class="container basePages-header">
        <div class="row contactUs-header">
            <div class="col-md-6 contactUs-title">
                <h1 class="Dana-Black"><?php the_title(); ?></h1>
                <h2 class="Dana-Regular"><?php the_excerpt(); ?></h2>
            </div>
            <div class="col-md-6 contactUs-image">
                <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/articleHeroImage.png" alt="">
            </div>
        </div>
        <div class="row basePages-cards">
            <?php
            $args = array(
                'post_type'      => 'Article',  // MUST be lowercase
                'posts_per_page' => -1,          // get all posts
                'orderby'        => 'menu_order', // uses page-attributes
                'order'          => 'ASC'
            );
            $services_query = new WP_Query($args);
            if ( $services_query->have_posts() ) :
            ?>
                <?php $index = 1;
                 while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                    <div class="col-md-6 basePage-item">
                        <div class="basePages-card-shadow" style="background-color: <?php if ( $index % 3 === 1 ) {
                                                                            echo '#1E45E0';
                                                                        } elseif ( $index % 3 === 2 ) {
                                                                            echo '#FDB913';
                                                                        } else { // $index % 3 === 0
                                                                            echo '#75EABA';
                                                                        } ?>">
                        </div>
                        <div class="basePages-card">
                            <div class="basePages-card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <?php if ( get_field('articleheroimage') ) : ?>
                                            <img src="<?php echo get_field('articleheroimage')['url']; ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-8 basePages-card-content">
                                        <h1 class="Dana-Black basePages-card-title"><?php the_title(); ?></h1>
                                        <p class="Dana-Regular basePages-card-des">
                                            <?php if ( get_field('articlesummary') ) : ?>
                                                <?php echo get_field('articlesummary', false, false); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="basePages-card-icon" style="background-color: <?php if ( $index % 3 === 1 ) {
                                                                            echo '#1E45E0';
                                                                        } elseif ( $index % 3 === 2 ) {
                                                                            echo '#FDB913';
                                                                        } else { // $index % 3 === 0
                                                                            echo '#75EABA';
                                                                        } ?>">
                                 <a href="<?php the_permalink(); ?>">
                                    <div class="bacePages-card-image"> 
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.8818 6.10352e-05C13.9815 0.012608 15.6735 1.72455 15.6611 3.82428L15.6357 8.03619L19.8447 8.06158C21.9445 8.07393 23.6372 9.78606 23.625 11.8858C23.6127 13.9857 21.8997 15.6784 19.7998 15.6661L15.5918 15.6407L15.5674 19.8438C15.555 21.9435 13.8428 23.6362 11.7432 23.6241C9.64339 23.6117 7.95071 21.8996 7.96289 19.7999L7.9873 15.5958L3.78027 15.5714C1.68041 15.559 -0.0123339 13.847 0 11.7471C0.0123782 9.64731 1.72536 7.95549 3.8252 7.96783L8.03125 7.99225L8.05664 3.77936C8.0691 1.67961 9.78205 -0.0122802 11.8818 6.10352e-05Z" fill="white"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php 
                $index++; // increment index    
                endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>