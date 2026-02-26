<?php
/**
 * Template Name: homeContent
 */
?>

<section class="heroSection">
    <div class="container">
    <div class="row">
        <div class="col-md-4 order-md-first order-last heroSection-content">
            <h1 class="Dana-ExtraBold">
                <?php if ( get_field('homepagetitele') ) : ?>
                    <?php echo get_field('homepagetitele'); ?>
                <?php else : ?>
                    (توسعــــــه انســانی تعــــــــالی سازمانی)
                <?php endif; ?>
            </h1>
            <div class="heroSection-content-btns">
                <a class="buttonTroy Dana-Bold meyar-yello-btn" href="#">درخواست دمو</a>
                <a class="mx-3 buttonTroy Dana-Bold meyar-white-btn" href="<?php echo get_template_directory_uri(); ?>/assets/Files/catalog.pdf"download>دریافت کاتالوگ</a>
            </div>
        </div>
        <div class="col-md-8 d-flex justify-content-center">
            <?php 
            $image = get_field('homepaleheroimage'); 
            if ( $image ) : ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.gif" alt="">
            <?php endif; ?>
        </div>
    </div>
    </div>
</section>
<section class="whySection" >
    <h1 class="Dana-Black">
        <?php if ( get_field('titlesection2') ) : ?>
            <?php echo get_field('titlesection2'); ?>
        <?php else : ?>
            (چرا معیار)
        <?php endif; ?>
    </h1>
    <div class="container">
        <div class="row whyCards-container">
            <?php
            $args = array(
                'post_type'      => 'whymeyar',  // MUST be lowercase
                'posts_per_page' => 6,          // get all posts
                'orderby'        => 'menu_order', // uses page-attributes
                'order'          => 'ASC'
            );
            $why_query = new WP_Query($args);
            if ( $why_query->have_posts() ) :
            ?>
                <?php while ( $why_query->have_posts() ) : $why_query->the_post(); ?>
                    <div class="col-md-2 col-4 whyCard">
                        <div class="whyCard-content">
                            <div class="whyCard-Icon">
                                <!-- ACF Fields -->
                                <?php if ( get_field('whymeyaroffimage') ) : ?>
                                    <img class="whyCard-image-f" src="<?php echo get_field('whymeyaroffimage')['url']; ?>" alt="">
                                <?php endif; ?>
                                <?php if ( get_field('whymeyaronimage') ) : ?>
                                    <img class="whyCard-image-h" src="<?php echo get_field('whymeyaronimage')['url']; ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <h3 class="whyCard-title Dana-DemiBold"><?php the_title(); ?></h3>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div> 
    </div>     
</section>
<section class="serviseSection">
    <h1 class="sectionTitle Dana-Black">ارائه خدمات</h1>
    <div class="container">
        <div class="row serviseSection-Items">
         <?php
           $args = array(
                'post_type' => array('service', 'personal_development'),
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'post_tag',
                        'field'    => 'slug',
                        'terms'    => 'home',
                    ),
                ),
            );
            $services_query = new WP_Query($args);
            if ( $services_query->have_posts() ) :
            ?>
                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                    <?php
                        $post_type = get_post_type();

                        if ( $post_type === 'personal_development' ) {
                            $bg_image = get_field('personaldevelopmentsbackground');
                            $icon     = get_field('personaldevelopmentsicone');
                        } else {
                            $bg_image = get_field('servicesbackimage');
                            $icon     = get_field('servicesicon');
                        }
                    ?>
                    <div class="col-md-3 col-4">
                        <div class="serviseCard">
                            <a href="<?php the_permalink(); ?>">
                                <div class="serviseContent">

                                    <?php if ( $bg_image ) : ?>
                                        <img class="serviseCard-image-n" src="<?php echo esc_url($bg_image['url']); ?>" alt="">
                                    <?php endif; ?>

                                    <?php if ( $icon ) : ?>
                                        <img class="serviseCard-image-f" src="<?php echo esc_url($icon['url']); ?>" alt="">
                                    <?php endif; ?>

                                    <h5 class="serviseTitle Dana-ExtraBold"><?php the_title(); ?></h5>

                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="newsSection">
<div class="container">
    <div class="row">
    <div class="col-md-5">
        <div class="newsSection-event-card">
        <div class="newsSection-Event">
            <h2 class="Dana-Bold">رویدادهای معیار</h2>
            <div class="newsSection-Event-items">
                <div class="newsSection-Event-item">
                    <div class="newsSection-Event-item-title">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'pastEvents' ) ) ); ?>">
                            <h4>گذشته</h4>
                            <p>رویدادهای گذشته</p>
                        </a>
                    </div>
                    <div class="newsSection-Event-item-icon">
                        <svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.62573 2.62573L3.62574 7.62572L8.62573 12.6257" stroke="#20C4F4" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div> 
                <div class="newsSection-Event-item">
                    <div class="newsSection-Event-item-title">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'newEvents' ) ) ); ?>">
                            <h4>اکنون</h4>
                            <p>رویدادهای اکنون</p>
                        </a>
                    </div>
                    <div class="newsSection-Event-item-icon">
                        <svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.62573 2.62573L3.62574 7.62572L8.62573 12.6257" stroke="#20C4F4" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div> 
                <div class="newsSection-Event-item">
                    <div class="newsSection-Event-item-title">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'futureEvents' ) ) ); ?>">
                            <h4>آینده</h4>
                            <p>رویدادهای آینده</p>
                        </a>
                    </div>
                    <div class="newsSection-Event-item-icon">
                        <svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.62573 2.62573L3.62574 7.62572L8.62573 12.6257" stroke="#20C4F4" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div> 
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-7 newsSection-navTable">
        <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <div class="tabs">
            <label class="tab Dana-Bold" id="one-tab" for="one">دوره ها</label>
            <label class="tab Dana-Bold" id="two-tab" for="two">اخبار</label>
            <label class="tab Dana-Bold" id="three-tab" for="three">دانشنامه</label>
            </div>
            <div class="panels">
            <div class="panel" id="one-panel">
                <div class="panel-title dec">
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type'      => 'course',  // MUST be lowercase
                                'posts_per_page' => 3,          // get all posts
                                'orderby'        => 'menu_order', // uses page-attributes
                                'order'          => 'ASC'
                            );
                            $services_query = new WP_Query($args);
                            if ( $services_query->have_posts() ) :
                            ?>
                                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                    <div class="col-4">
                                        <div class="panelCard">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="panelContent">
                                                    <!-- ACF Fields -->
                                                    <?php if ( get_field('coursesheroimage') ) : ?>
                                                        <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                                                    <?php endif; ?>          
                                                    <h5 class="panelTitle Dana-ExtraBold"><?php the_title(); ?></h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="panel-title mobile">
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type'      => 'course',  // MUST be lowercase
                                'posts_per_page' => 2,          // get all posts
                                'orderby'        => 'menu_order', // uses page-attributes
                                'order'          => 'ASC'
                            );
                            $services_query = new WP_Query($args);
                            if ( $services_query->have_posts() ) :
                            ?>
                                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                    <div class="col-6">
                                        <div class="panelCard">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="panelContent">
                                                    <!-- ACF Fields -->
                                                    <?php if ( get_field('coursesheroimage') ) : ?>
                                                        <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                                                    <?php endif; ?>          
                                                    <h5 class="panelTitle Dana-ExtraBold"><?php the_title(); ?></h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="panel" id="two-panel">
                <div class="panel-title dec">
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type'      => 'news',  // MUST be lowercase
                                'posts_per_page' => 3,          // get all posts
                                'orderby'        => 'menu_order', // uses page-attributes
                                'order'          => 'ASC'
                            );
                            $services_query = new WP_Query($args);
                            if ( $services_query->have_posts() ) :
                            ?>
                                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                    <div class="col-4">
                                        <div class="panelCard">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="panelContent">
                                                    <!-- ACF Fields -->
                                                    <?php if ( get_field('newsheroimage') ) : ?>
                                                        <img src="<?php echo get_field('newsheroimage')['url']; ?>" alt="">
                                                    <?php endif; ?>          
                                                    <h5 class="panelTitle Dana-ExtraBold"><?php the_title(); ?></h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="panel-title mobile">
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type'      => 'news',  // MUST be lowercase
                                'posts_per_page' => 2,          // get all posts
                                'orderby'        => 'menu_order', // uses page-attributes
                                'order'          => 'ASC'
                            );
                            $services_query = new WP_Query($args);
                            if ( $services_query->have_posts() ) :
                            ?>
                                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                    <div class="col-6">
                                        <div class="panelCard">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="panelContent">
                                                    <!-- ACF Fields -->
                                                    <?php if ( get_field('newsheroimage') ) : ?>
                                                        <img src="<?php echo get_field('newsheroimage')['url']; ?>" alt="">
                                                    <?php endif; ?>          
                                                    <h5 class="panelTitle Dana-ExtraBold"><?php the_title(); ?></h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="panel" id="three-panel">
                <div class="panel-title dec">
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type'      => 'Article',  // MUST be lowercase
                                'posts_per_page' => 3,          // get all posts
                                'orderby'        => 'menu_order', // uses page-attributes
                                'order'          => 'ASC'
                            );
                            $services_query = new WP_Query($args);
                            if ( $services_query->have_posts() ) :
                            ?>
                                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                    <div class="col-4">
                                        <div class="panelCard">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="panelContent">
                                                    <!-- ACF Fields -->
                                                    <?php if ( get_field('articleheroimage') ) : ?>
                                                        <img src="<?php echo get_field('articleheroimage')['url']; ?>" alt="">
                                                    <?php endif; ?>          
                                                    <h5 class="panelTitle Dana-ExtraBold"><?php the_title(); ?></h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="panel-title mobile">
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type'      => 'Article',  // MUST be lowercase
                                'posts_per_page' =>  2,          // get all posts
                                'orderby'        => 'menu_order', // uses page-attributes
                                'order'          => 'ASC'
                            );
                            $services_query = new WP_Query($args);
                            if ( $services_query->have_posts() ) :
                            ?>
                                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                    <div class="col-6">
                                        <div class="panelCard">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="panelContent">
                                                    <!-- ACF Fields -->
                                                    <?php if ( get_field('articleheroimage') ) : ?>
                                                        <img src="<?php echo get_field('articleheroimage')['url']; ?>" alt="">
                                                    <?php endif; ?>          
                                                    <h5 class="panelTitle Dana-ExtraBold"><?php the_title(); ?></h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div> 
</section>
<section class="FAQSection">
    <h1 class="sectionTitle Dana-Black mb-4">سوالات متداول</h1>
    <div class="FAQSection-items container">
        <?php
        $args = array(
            'post_type'      => 'faq',  // MUST be lowercase
            'posts_per_page' =>  5,          // get all posts
            'orderby'        => 'menu_order', // uses page-attributes
            'order'          => 'ASC'
        );

        $faq_query = new WP_Query($args);

        if ( $faq_query->have_posts() ) :
        ?>
            <?php while ( $faq_query->have_posts() ) : $faq_query->the_post(); ?>
            <div class="FAQSection-item">
                <h4 class="FAQSection-item-question Dana-Bold"><?php the_title(); ?></h4>
                <div class="FAQSection-item-answer Dana-Medium">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</section>

<section class="customerSection">
    <h1 class="sectionTitle Dana-Black mb-4">مشتریان</h1>
    <div class="">
        <!-- <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Custumers.png" alt=""> -->
        <div class="customerSection-slider">
        <div class="customerSection-slide-track">
            <?php for ($i = 0; $i < 2; $i++): ?>
                 <?php
                $args = array(
                    'post_type'      => 'customers',  // MUST be lowercase
                    'posts_per_page' =>  -1,          // get all posts
                    'orderby'        => 'menu_order', // uses page-attributes
                    'order'          => 'ASC'
                );

                $customers_query = new WP_Query($args);

                if ( $customers_query->have_posts() ) :
                ?>
                    <?php while ( $customers_query->have_posts() ) : $customers_query->the_post(); ?>
                        <div class="customerSection-slide">
                            <?php if ( get_field('customerheroimage') ) : ?>
                                <img src="<?php echo get_field('customerheroimage')['url']; ?>" alt="">
                            <?php endif; ?> 
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            <?php endfor; ?>  
        </div>
        </div>
    </div>
</section>
