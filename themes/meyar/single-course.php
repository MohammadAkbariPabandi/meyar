<?php
/**
 * Single Course Template
 * Template for individual course pages
 */

get_header();?>

<section class="singleCourse">
    <div class="c-body">
        <div class="container">
            <div class="row">
                <h1 class="col-md-4 col-6 Dana-Black">دوره‌هــای آموزشی</h1>
            </div>
        </div>
        <div class="c-body-image">
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/chi.png" alt="">
        </div>
    </div>
    <div class="container singleCourse-body">
        <div class="singleCourse-body-title">
            <div class="singleService-pointTitle">
                <span></span>
                <h1 class="singleService-text-title Dana-Black"><?php the_title(); ?></h1>
            </div>
            <div class="Dana-Bold singleCourse-body-title-techer">
                <h2>
                    <?php if ( get_field('coursesteachername') ) : ?>
                        <?php echo get_field('coursesteachername')?>
                    <?php endif; ?> 
                </h2>
            </div>
        </div>
        <!-- content bayad kamel style dade shavad h1 li ui p ....  -->
        <div class="row singleCourse-body-content">
            <div class="col-md-7 Dana-Medium singleCourse-body-content-text">
                 <?php the_content(); ?>
            </div>
            <div class="col-md-5 singleCourse-body-content-image">
                <?php if ( get_field('coursesheroimage') ) : ?>
                    <img src="<?php echo get_field('coursesheroimage')['url']; ?>" alt="">
                <?php endif; ?> 
            </div>
        </div>
    </div>
    <div class="container singleCourse-index">
        <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <input class="radio" id="four" name="group" type="radio">
            <input class="radio" id="five" name="group" type="radio">
            <input class="radio" id="six" name="group" type="radio">
            <div class="tabs">
                <label class="tab Dana-Bold" id="one-tab" for="one">اهداف</label>
                <label class="tab Dana-Bold" id="two-tab" for="two">سرفصلها</label>
                <label class="tab Dana-Bold" id="three-tab" for="three">شیوه برگزاری</label>
                <label class="tab Dana-Bold" id="four-tab" for="four">گواهی</label>
                <label class="tab Dana-Bold" id="five-tab" for="five">مخاطبین</label>
            </div>
            <!-- baraye hameye taghaye momkene rech text bayad style bedam -->
            <div class="panels">
                <div class="panel" id="one-panel">
                    <?php if ( get_field('coursestarget') ) : ?>
                        <?php echo get_field('coursestarget')?>
                    <?php endif; ?> 
                </div>
                <div class="panel" id="two-panel">
                    <div class="panel-title">
                        <?php if ( get_field('coursesindex') ) : ?>
                            <?php echo get_field('coursesindex')?>
                        <?php endif; ?> 
                    </div>
                </div>
                <div class="panel" id="three-panel">
                    <div class="panel-title">
                        <?php if ( get_field('coursesformat') ) : ?>
                            <?php echo get_field('coursesformat')?>
                        <?php endif; ?> 
                    </div>
                </div>
                <div class="panel" id="four-panel">
                    <div class="panel-title">
                        <?php if ( get_field('coursescertificate') ) : ?>
                            <?php echo get_field('coursescertificate')?>
                        <?php endif; ?> 
                    </div>
                </div>
                <div class="panel" id="five-panel">
                    <div class="panel-title">
                        <?php if ( get_field('coursesfollowers') ) : ?>
                            <?php echo get_field('coursesfollowers')?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if ( get_field('coursestizer') ) : ?>   
    <div class="container singleService-tizer">
        <div class="container singleService-tizer-header">
            <div class="singleService-header-title">
                <span class="titlePoint"></span>
                <h1 class="Dana-Black">تیز معرفی سرویس</h1>
            </div>
        </div>

        <?php 
        $aparat_url =  get_field('coursestizer');
        if ($aparat_url && preg_match('/aparat\.com\/v\/([a-zA-Z0-9]+)/', $aparat_url, $matches)) :
            $video_id = $matches[1];
        ?>
            <div class="singleService-tizer-video aparat-responsive">
                <iframe
                    src="https://www.aparat.com/video/video/embed/videohash/<?php echo esc_attr($video_id); ?>/vt/frame"
                    allowfullscreen
                    webkitallowfullscreen
                    mozallowfullscreen>
                </iframe>
            </div>
        <?php endif; ?>
    </div>
    <?php endif; ?> 
    <div class="container singleCourse-faq">
        <div class="FAQSection">
            <h1 class="sectionTitle Dana-Black mb-4">سوالات متداول</h1>
            <div class="FAQSection-items container">
                <?php if ( get_field('coursesfaqq1') ) : ?>
                <div class="FAQSection-item Dana-DemiBold">
                    <h4 class="FAQSection-item-question">
                        <?php echo get_field('coursesfaqq1')?>
                    </h4>
                    <div class="FAQSection-item-answer">
                        <p>
                            <?php if ( get_field('coursesfaqa1') ) : ?>
                                <?php echo get_field('coursesfaqa1')?>
                            <?php endif; ?> 
                        </p>
                    </div>
                </div>
                <?php endif; ?> 
                <?php if ( get_field('coursesfaqq2') ) : ?>
                <div class="FAQSection-item Dana-DemiBold">
                    <h4 class="FAQSection-item-question">
                        <?php echo get_field('coursesfaqq2')?>
                    </h4>
                    <div class="FAQSection-item-answer">
                        <p>
                            <?php if ( get_field('coursesfaqa2') ) : ?>
                                <?php echo get_field('coursesfaqa2')?>
                            <?php endif; ?> 
                        </p>
                    </div>
                </div>
                <?php endif; ?> 
                <?php if ( get_field('coursesfaqq3') ) : ?>
                <div class="FAQSection-item Dana-DemiBold">
                    <h4 class="FAQSection-item-question">
                        <?php echo get_field('coursesfaqq3')?>
                    </h4>
                    <div class="FAQSection-item-answer">
                        <p>
                            <?php if ( get_field('coursesfaqa3') ) : ?>
                                <?php echo get_field('coursesfaqa3')?>
                            <?php endif; ?> 
                        </p>
                    </div>
                </div>
                <?php endif; ?> 
                <?php if ( get_field('coursesfaqq4') ) : ?>
                <div class="FAQSection-item Dana-DemiBold">
                    <h4 class="FAQSection-item-question">
                        <?php echo get_field('coursesfaqq4')?>
                    </h4>
                    <div class="FAQSection-item-answer">
                        <p>
                            <?php if ( get_field('coursesfaqa4') ) : ?>
                                <?php echo get_field('coursesfaqa4')?>
                            <?php endif; ?> 
                        </p>
                    </div>
                </div>
                <?php endif; ?> 
                <?php if ( get_field('coursesfaqq5') ) : ?>
                <div class="FAQSection-item Dana-DemiBold">
                    <h4 class="FAQSection-item-question">
                        <?php echo get_field('coursesfaqq5')?>
                    </h4>
                    <div class="FAQSection-item-answer">
                        <p>
                            <?php if ( get_field('coursesfaqa5') ) : ?>
                                <?php echo get_field('coursesfaqa5')?>
                            <?php endif; ?> 
                        </p>
                    </div>
                </div>
                <?php endif; ?> 
            </div>
        </div>
    </div>
    <div class="container otherService">
        <div class="singleService-pointTitle">
            <span></span>
            <h1 class="singleService-text-title Dana-Black">دوره‌های مرتبط</h1>
        </div>
        <div class="otherService-items">
            <div class="row">
                <?php
                    $current_post_id = get_the_ID();
                    
                    $terms = wp_get_post_terms( $current_post_id, 'category', array(
                        'fields' => 'ids'
                    ));
                    
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
                    
                        $args = array(
                            'post_type'      => 'course',
                            'posts_per_page' => 6,
                            'orderby'        => 'menu_order',
                            'order'          => 'ASC',
                            'post__not_in'   => array( $current_post_id ),
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'term_id',
                                    'terms'    => $terms,
                                )
                            )
                        );
                    
                        $services_query = new WP_Query( $args );
                    
                        if ( $services_query->have_posts() ) :
                            while ( $services_query->have_posts() ) : $services_query->the_post();
                    ?>
                                <div class="col-md-2 col-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="otherService-card">
                                            <?php if ( get_field('coursesicon') ) : ?>
                                                <img src="<?php echo get_field('coursesicon')['url']; ?>" alt="">
                                            <?php endif; ?>
                                            <h1 class="Dana-ExtraBlack"><?php the_title(); ?></h1>
                                        </div>
                                    </a>
                                </div>
                    <?php
                            endwhile;
                        endif;
                    
                        wp_reset_postdata();
                    
                    endif;
                    ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>