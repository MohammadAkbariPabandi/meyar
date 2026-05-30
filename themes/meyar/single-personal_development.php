<?php
/**
 * The template for displaying single Personal Development posts
 */
get_header(); ?>
<div class="singlePersonalDevelopment">
    <section class="container spd-header">
        <?php if ( get_field('personaldevelopmentsheroimage') ) : ?>
            <img src="<?php echo get_field('personaldevelopmentsheroimage')['url']; ?>" alt="">
        <?php endif; ?>   
    </section>
    <section class="container spd-content">
        <div class="spd-content-text">
            <div class="singleService-pointTitle">
                <div class="singleService-pointTitle-farsi">
                    <span></span>
                    <h1 class="singleService-text-title Dana-Black"><?php the_title(); ?></h1>
                </div>
                <h2 class="Dana-Bold">
                    <?php if ( get_field('personaldevelopmentsenglishtitle') ) : ?>
                        <?php echo get_field('personaldevelopmentsenglishtitle'); ?>
                    <?php endif; ?>
                </h2>
            </div>
            <!-- bayad matn bashad ba ghabliyat text ya list ya ... -->
            <?php the_content(); ?>
        </div>
    </section>
    <section class="container spd-parts">
        <?php
        $current_id = get_the_ID();

        // سطح دوم (بچه‌های صفحه فعلی)
        $level2_posts = get_posts(array(
            'post_type'      => 'personal_development',
            'post_parent'    => $current_id,
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ));

        if ($level2_posts) :
            echo '<ul class="level-2">';
            $level2_index = 0;
            foreach ($level2_posts as $level2) :
        ?>
            <div class="spd-parts-items">
                <div class="spd-parts-items-title">
                    <div class="Dana-Bold spd-parts-items-title-number"><?php echo $level2_index +1 ?></div>
                    <div class="Dana-Bold spd-parts-items-title-body">
                        <p class="m-0"><?php echo esc_html($level2->post_title); ?></p>                       
                        <svg class="spd-parts-items-title-body-Icon1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="13" cy="13" r="13" fill="#75EABA"/>
                            <path d="M9 16.5356L12.5355 20.0712L16.0711 16.5356" stroke="#1B3281" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9 9.53564L12.5355 13.0712L16.0711 9.53564" stroke="#1B3281" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <svg class="spd-parts-items-title-body-Icon2" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="13" cy="13" r="13" fill="#75EABA"/>
                            <path d="M10.0361 9.5L6.5006 13.0355L10.0361 16.5711" stroke="#1B3281" stroke-width="2" stroke-linecap="round"/>
                            <path d="M17.0361 9.5L13.5006 13.0355L17.0361 16.5711" stroke="#1B3281" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="spd-dashLine"></div>
                    <div class="spd-dashPoint"></div>
                </div>
                <div class="spd-parts-items-body">
                    <!-- bayad matn bashad ba ghabliyat text ya list ya ... -->
                    <div class="Dana-Medium spd-parts-items-content">
                       <?php 
    $content = apply_filters('the_content', $level2->post_content);
    echo wp_kses_post($content); 
?>
                    </div>
                    <div class="spd-parts-item">
                        <div class="row">
                             <?php
                            // سطح سوم
                            $level3_posts = get_posts(array(
                                'post_type'      => 'personal_development',
                                'post_parent'    => $level2->ID,
                                'posts_per_page' => -1,
                                'orderby'        => 'menu_order',
                                'order'          => 'ASC',
                            ));

                            if ($level3_posts) :
                                $level3_index = 1;

                                foreach ($level3_posts as $level3) :
                            ?>
                                <div class="mb-4 col-md-3">
                                    <div class="spd-parts-item-card">
                                        <div class="spd-parts-item-card-title">     
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.03613 0C7.1026 0.006402 7.96232 0.875879 7.95605 1.94238L7.94336 4.08203L10.0801 4.09473C11.1467 4.101 12.0063 4.97052 12 6.03711C11.9937 7.10355 11.1241 7.96319 10.0576 7.95703L7.91992 7.94434L7.9082 10.0791C7.90194 11.1455 7.03222 12.0051 5.96582 11.999C4.89925 11.9928 4.03967 11.1232 4.0459 10.0566L4.05762 7.9209L1.91992 7.90918C0.853662 7.90268 -0.0060603 7.03307 0 5.9668C0.00626477 4.90021 0.876773 4.04061 1.94336 4.04688L4.08105 4.05859L4.09375 1.91992C4.10001 0.853336 4.96955 -0.00626873 6.03613 0Z" fill="#FDB913"/>
                                            </svg>
                                            <h1 class="Dana-DemiBold"><?php echo  esc_html($level3->post_title) ?></h1>
                                        </div>
                                        <p class="Dana-DemiBold">
                                            <?php if ( get_field('personaldevelopmentssummary', $level3->ID) ) : ?>
                                                <?php echo get_field('personaldevelopmentssummary', $level3->ID); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <div class="showTizerPopup">
                                        <div class="popup-content">
                                            <div class="popup-loader active"><span></span></div>
                                            <button class="popup-close" aria-label="بستن">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10" cy="10" r="10" fill="#FDB913"/>
                                                <path d="M11.5945 6.32227C12.2853 5.63148 13.4055 5.63168 14.0964 6.32227C14.7873 7.01314 14.7873 8.13334 14.0964 8.82422L12.7097 10.21L14.0945 11.5947C14.7854 12.2856 14.7854 13.4058 14.0945 14.0967C13.4036 14.7871 12.2833 14.7874 11.5925 14.0967L10.2078 12.7119L8.82593 14.0947C8.13505 14.7856 7.01485 14.7856 6.32397 14.0947C5.63339 13.4038 5.6332 12.2836 6.32397 11.5928L7.70581 10.21L6.32202 8.8252C5.63141 8.1343 5.63123 7.01403 6.32202 6.32324C7.01282 5.63253 8.1331 5.63265 8.82397 6.32324L10.2078 7.70801L11.5945 6.32227Z" fill="white"/>
                                                </svg>
                                            </button>
                                            <div class="spd-parts-item-card-popup">
                                                <h1 class="Dana-DemiBold"><?php echo esc_html($level3->post_title); ?></h1>
                                                <div class="Dana-Medium">
                                                    <?php echo apply_filters('the_content', $level3->post_content); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                    $level3_index++;
                                endforeach;
                            endif;
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
             <?php
                $level2_index++;
            endforeach;
        endif;
        ?>
    </section>

    <?php if ( get_field('personaldevelopmentstizerurl') ) : ?>  
    <section class="container singleService-tizer">
        <div class="container singleService-tizer-header">
            <div class="singleService-header-title">
                <span></span>
                <h1 class="Dana-Black">تیز معرفی سرویس</h1>
            </div>
        </div>
        <?php 
        $aparat_url =  get_field('personaldevelopmentstizerurl');
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
    </section>
    <?php endif; ?> 

    <section class="container otherService">
        <div class="singleService-header-title">
            <span></span>
            <h1 class="Dana-Black">سایر خدمات در حوزه فرآیندهای سازمانی</h1>
        </div>
        <div class="otherService-items">
            <div class="row">
                <?php
                $current_post_id = get_the_ID(); // دریافت ID پست فعلی
                $args = array(
                    'post_type'      => 'service',  // MUST be lowercase
                    'posts_per_page' => -1,          // get all posts
                    'orderby'        => 'menu_order', // uses page-attributes
                    'order'          => 'ASC',
                    'post__not_in'   => array($current_post_id) // حذف پست فعلی از نتایج
                );
                $services_query = new WP_Query($args);
                if ( $services_query->have_posts() ) :
                ?>
                    <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                        <div class="col-md-2 col-4">
                            <div class="otherService-card">
                                <?php if ( get_field('servicesicon') ) : ?>
                                    <img  src="<?php echo get_field('servicesicon')['url']; ?>" alt="">
                                <?php endif; ?>
                                <h1 class="Dana-ExtraBlack"><?php the_title(); ?></h1>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>