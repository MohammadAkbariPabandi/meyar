<?php
/**
 * Template Name: courses
 */
get_header(); ?>
<section class="courses">
    <div class="c-body">
        <div class="container">
            <div class="row">
                <h1 class="col-md-4 Dana-Black">دوره‌هــای آموزشی</h1>
            </div>
        </div>
        <div class="c-body-image">
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/coursesHeroImage.png" alt="">
        </div>
    </div>
    <div class="container c-filter">
        <div class="row">
            <div class="c-filter-search">
                <div class="c-filter-input-group ">
                    <h2 class="Dana-Bold">جستجو</h2>
                    <input type="text" class="c-filter-form-control"/>
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="19.799" cy="13.435" r="8" transform="rotate(45 19.799 13.435)" stroke="#999999" stroke-width="3"/>
                        <rect x="13.4347" y="17.6777" width="4" height="11" rx="2" transform="rotate(45 13.4347 17.6777)" fill="#999999"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="container c-cards">
        <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <input class="radio" id="four" name="group" type="radio">
            <input class="radio" id="five" name="group" type="radio">
            <input class="radio" id="six" name="group" type="radio">
            <div class="tabs">
                <label class="tab Dana-Bold" id="one-tab" for="one">رهبری و توسعه سازمانی</label>
                <label class="tab Dana-Bold" id="two-tab" for="two">مهارت‌های زندگی سازمانی</label>
                <label class="tab Dana-Bold" id="three-tab" for="three"> شخصیت شناسی سازمانی</label>
                <label class="tab Dana-Bold" id="four-tab" for="four">رفتار سازمانی</label>
                <label class="tab Dana-Bold" id="five-tab" for="five">کل دوره‌ها</label>
            </div>
            <!-- baraye hameye taghaye momkene rech text bayad style bedam -->
            <div class="panels">
                <div class="panel" id="one-panel">
                    <?php
                        $args = array(
                            'post_type'      => 'course',
                            'posts_per_page' => -1,
                            'category_name'  => 'rahbari-va-tosee-sazmani', // slug دسته
                            'orderby'        => 'menu_order', // uses page-attributes
                            'order'          => 'ASC'
                        );
                        $services_query = new WP_Query($args);
                        if ( $services_query->have_posts() ) :
                        ?>
                            <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                <div class="c-card">
                                    <div class="row">
                                        <div class="col-md-9 col-8 c-card-info">
                                            <div class="c-card-info-title">
                                                <h1 class="Dana-Black"><?php the_title(); ?></h1>
                                                <div class="c-card-actions">
                                                    <a class="Dana-Bold meyar-orange-btn" href="<?php the_permalink(); ?>">مشاهده دوره</a>
                                                </div>
                                            </div>
                                            <div class="c-card-info-thicher">
                                                <h2 class="Dana-Bold">
                                                    <?php if ( get_field('coursesteachername') ) : ?>
                                                        <?php echo get_field('coursesteachername')?>
                                                    <?php endif; ?>   
                                                </h2>
                                            </div>
                                            <div class="c-card-info-desc">
                                                    <?php if ( get_field('coursessummary') ) : ?>
                                                        <?php echo get_field('coursessummary')?>
                                                    <?php endif; ?> 
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4 c-card-image">
                                            <?php if ( get_field('coursesheroimage') ) : ?>
                                                <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                                            <?php endif; ?>   
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
                <div class="panel" id="two-panel">
                    <?php
                        $args = array(
                            'post_type'      => 'course',
                            'posts_per_page' => -1,
                            'category_name'  => 'shakhsiyat-shenasi-sazmani', // slug دسته
                            'orderby'        => 'menu_order', // uses page-attributes
                            'order'          => 'ASC'
                        );
                        $services_query = new WP_Query($args);
                        if ( $services_query->have_posts() ) :
                        ?>
                            <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                <div class="c-card">
                                    <div class="row">
                                        <div class="col-md-9 col-8 c-card-info">
                                            <div class="c-card-info-title">
                                                <h1 class="Dana-Black"><?php the_title(); ?></h1>
                                                <div class="c-card-actions">
                                                    <a class="Dana-Bold meyar-orange-btn" href="<?php the_permalink(); ?>">مشاهده دوره</a>
                                                </div>
                                            </div>
                                            <div class="c-card-info-thicher">
                                                <h2 class="Dana-Bold">
                                                    <?php if ( get_field('coursesteachername') ) : ?>
                                                        <?php echo get_field('coursesteachername')?>
                                                    <?php endif; ?>   
                                                </h2>
                                            </div>
                                            <div class="c-card-info-desc">
                                                <p class="Dana-Regular">
                                                    <?php if ( get_field('coursessummary') ) : ?>
                                                        <?php echo get_field('coursessummary')?>
                                                    <?php endif; ?> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4 c-card-image">
                                            <?php if ( get_field('coursesheroimage') ) : ?>
                                                <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                                            <?php endif; ?>   
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
                <div class="panel" id="three-panel">
                    <?php
                        $args = array(
                            'post_type'      => 'course',
                            'posts_per_page' => -1,
                            'category_name'  => 'maharathaye-zendegi-sazmani', // slug دسته
                            'orderby'        => 'menu_order', // uses page-attributes
                            'order'          => 'ASC'
                        );
                        $services_query = new WP_Query($args);
                        if ( $services_query->have_posts() ) :
                        ?>
                            <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                <div class="c-card">
                                    <div class="row">
                                        <div class="col-md-9 col-8 c-card-info">
                                            <div class="c-card-info-title">
                                                <h1 class="Dana-Black"><?php the_title(); ?></h1>
                                                <div class="c-card-actions">
                                                    <a class="Dana-Bold meyar-orange-btn" href="<?php the_permalink(); ?>">مشاهده دوره</a>
                                                </div>
                                            </div>
                                            <div class="c-card-info-thicher">
                                                <h2 class="Dana-Bold">
                                                    <?php if ( get_field('coursesteachername') ) : ?>
                                                        <?php echo get_field('coursesteachername')?>
                                                    <?php endif; ?>   
                                                </h2>
                                            </div>
                                            <div class="c-card-info-desc">
                                                <p class="Dana-Regular">
                                                    <?php if ( get_field('coursessummary') ) : ?>
                                                        <?php echo get_field('coursessummary')?>
                                                    <?php endif; ?> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4 c-card-image">
                                            <?php if ( get_field('coursesheroimage') ) : ?>
                                                <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                                            <?php endif; ?>   
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>                    
                </div>
                <div class="panel" id="four-panel">
                    <?php
                        $args = array(
                            'post_type'      => 'course',
                            'posts_per_page' => -1,
                            'category_name'  => 'raftare-sazmani', // slug دسته
                            'orderby'        => 'menu_order', // uses page-attributes
                            'order'          => 'ASC'
                        );
                        $services_query = new WP_Query($args);
                        if ( $services_query->have_posts() ) :
                        ?>
                            <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                <div class="c-card">
                                    <div class="row">
                                        <div class="col-md-9 col-8 c-card-info">
                                            <div class="c-card-info-title">
                                                <h1 class="Dana-Black"><?php the_title(); ?></h1>
                                                <div class="c-card-actions">
                                                    <a class="Dana-Bold meyar-orange-btn" href="<?php the_permalink(); ?>">مشاهده دوره</a>
                                                </div>
                                            </div>
                                            <div class="c-card-info-thicher">
                                                <h2 class="Dana-Bold">
                                                    <?php if ( get_field('coursesteachername') ) : ?>
                                                        <?php echo get_field('coursesteachername')?>
                                                    <?php endif; ?>   
                                                </h2>
                                            </div>
                                            <div class="c-card-info-desc">
                                                <p class="Dana-Regular">
                                                    <?php if ( get_field('coursessummary') ) : ?>
                                                        <?php echo get_field('coursessummary')?>
                                                    <?php endif; ?> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4 c-card-image">
                                            <?php if ( get_field('coursesheroimage') ) : ?>
                                                <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                                            <?php endif; ?>   
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>                    
                </div>
                <div class="panel" id="five-panel">
                    <?php
                        $args = array(
                            'post_type'      => 'course',
                            'posts_per_page' => -1,
                            'orderby'        => 'menu_order', // uses page-attributes
                            'order'          => 'ASC'
                        );
                        $services_query = new WP_Query($args);
                        if ( $services_query->have_posts() ) :
                        ?>
                            <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                                <div class="c-card">
                                    <div class="row">
                                        <div class="col-md-9 col-8 c-card-info">
                                            <div class="c-card-info-title">
                                                <h1 class="Dana-Black"><?php the_title(); ?></h1>
                                                <div class="c-card-actions">
                                                    <a class="Dana-Bold meyar-orange-btn" href="<?php the_permalink(); ?>">مشاهده دوره</a>
                                                </div>
                                            </div>
                                            <div class="c-card-info-thicher">
                                                <h2 class="Dana-Bold">
                                                    <?php if ( get_field('coursesteachername') ) : ?>
                                                        <?php echo get_field('coursesteachername')?>
                                                    <?php endif; ?>   
                                                </h2>
                                            </div>
                                            <div class="c-card-info-desc">
                                                <p class="Dana-Regular">
                                                    <?php if ( get_field('coursessummary') ) : ?>
                                                        <?php echo get_field('coursessummary')?>
                                                    <?php endif; ?> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4 c-card-image">
                                            <?php if ( get_field('coursesheroimage') ) : ?>
                                                <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                                            <?php endif; ?>   
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>