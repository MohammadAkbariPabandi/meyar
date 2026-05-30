<?php get_header(); ?>

<main id="primary" class="site-main">

    <div class="services-main">
        <div class="services-head">
            <div class="container">
                 <div class="row services-head-right">
                    <div class="col-md-6 col-7">
                        <h1 class="Dana-Black">مدیریت منابع انسانــی و بهبود سازمانــی</h1>
                        <h2 class="Dana-Regular">Human resource managment and organizational improvement</h1>
                    </div>
                </div>
            </div>
            <div class="services-heroImage">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ServicesHeroImage.png" alt="">
            </div>
        </div>
        <div class="services-items">
            <span class="services-items-line"></span>
            <div class="container">
                <?php
                $args = array(
                    'post_type'      => 'service',  // MUST be lowercase
                    'posts_per_page' => -1,          // get all posts
                    'orderby'        => 'menu_order', // uses page-attributes
                    'order'          => 'ASC'
                );
                $services_query = new WP_Query($args);
                if ( $services_query->have_posts() ) :
                ?>
                    <?php $i = 0; // Initialize counter ?>
                    <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                    <div class="row margin-mines">
                        <div class="col-6">
                            <?php if ($i % 2 == 0) { ?>
                                <div class="services-item">
                                    <span class="services-item-line"></span>
                                    <span class="services-item-point" style="background-color: 
                                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                                    #FDB913
                                                                                <?php } else { ?>
                                                                                    #75EABA 
                                                                                <?php } ?>
                                                                              ">
                                    </span>
                                    <div class="services-item-card">
                                            <div class="services-item-card-right" style="background-color: 
                                                                                    <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                                        #FDB913
                                                                                    <?php } else { ?>
                                                                                        #75EABA 
                                                                                    <?php } ?>
                                                                                ">
                                                <h1 class="Dana-ExtraBold"><?php echo $i+1 ?></h1>
                                                <h2 class="mt-3 Dana-ExtraBlack"><?php the_title(); ?></h2>
                                            </div>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="Dana-Regular services-item-card-left">
                                                <p>
                                                    <?php if ( get_field('servicessummary') ) : ?>
                                                        <?php echo get_field('servicessummary'); ?>
                                                    <?php endif; ?>
                                                </p>
                                                <div class="services-item-card-left-icons">

                                                    <div class="services-item-card-left-iconbox"> 
                                                        <div class="iconbox-img">  
                                                            <?php if ( get_field('servicetizer') ) : ?>
                                                            <a>
                                                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1066)"/>
                                                                    <ellipse cx="22.7207" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.7207 22.721)" fill="url(#paint1_linear_3795_1066)"/>
                                                                    <path d="M40.6219 22.721C40.6219 32.6077 32.6072 40.6224 22.7205 40.6224C12.8338 40.6224 4.81909 32.6077 4.81909 22.721C4.81909 12.8343 12.8338 4.81958 22.7205 4.81958C32.6072 4.81958 40.6219 12.8343 40.6219 22.721Z" 
                                                                    fill="
                                                                        <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                            #FDB913
                                                                        <?php } else { ?>
                                                                            #75EABA 
                                                                        <?php } ?>
                                                                    "/>
                                                                    <path d="M17.6653 22.5856L24.4376 17.4526L24.4376 27.7185L17.6653 22.5856Z" fill="white" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <defs>
                                                                    <linearGradient id="paint0_linear_3795_1066" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"/>
                                                                    <stop offset="1" stop-color="#A7A7A7"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3795_1066" x1="43.3762" y1="13.4261" x2="4.13081" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"/>
                                                                    <stop offset="1" stop-color="#A7A7A7"/>
                                                                    </linearGradient>
                                                                    </defs>
                                                                </svg>
                                                            </a>
                                                            <?php else : ?>
                                                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1066)"/>
                                                                    <ellipse cx="22.7207" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.7207 22.721)" fill="url(#paint1_linear_3795_1066)"/>
                                                                    <path d="M40.6219 22.721C40.6219 32.6077 32.6072 40.6224 22.7205 40.6224C12.8338 40.6224 4.81909 32.6077 4.81909 22.721C4.81909 12.8343 12.8338 4.81958 22.7205 4.81958C32.6072 4.81958 40.6219 12.8343 40.6219 22.721Z" 
                                                                    fill="
                                                                        <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                            #FDB913
                                                                        <?php } else { ?>
                                                                            #75EABA 
                                                                        <?php } ?>
                                                                    "/>
                                                                    <path d="M17.6653 22.5856L24.4376 17.4526L24.4376 27.7185L17.6653 22.5856Z" fill="white" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <defs>
                                                                    <linearGradient id="paint0_linear_3795_1066" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"/>
                                                                    <stop offset="1" stop-color="#A7A7A7"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3795_1066" x1="43.3762" y1="13.4261" x2="4.13081" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"/>
                                                                    <stop offset="1" stop-color="#A7A7A7"/>
                                                                    </linearGradient>
                                                                    </defs>
                                                                </svg>
                                                            <?php endif; ?> 
                                                        </div>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1071)"/>
                                                                <ellipse cx="22.721" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.721 22.721)" fill="url(#paint1_linear_3795_1071)"/>
                                                                <path d="M40.6222 22.721C40.6222 32.6077 32.6074 40.6224 22.7208 40.6224C12.8341 40.6224 4.81934 32.6077 4.81934 22.721C4.81934 12.8343 12.8341 4.81958 22.7208 4.81958C32.6074 4.81958 40.6222 12.8343 40.6222 22.721Z" 
                                                                    fill="
                                                                        <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                            #FDB913
                                                                        <?php } else { ?>
                                                                            #75EABA 
                                                                        <?php } ?>
                                                                    "/>
                                                                <path d="M17.1664 21.766L28.8088 21.8345C29.7827 21.8402 30.5678 22.6346 30.5621 23.6085C30.5562 24.5822 29.7619 25.3665 28.7881 25.3608L17.1457 25.2923C16.172 25.2866 15.3869 24.4931 15.3924 23.5193C15.3982 22.5454 16.1926 21.7603 17.1664 21.766Z" fill="white" stroke="white" stroke-width="2"/>
                                                                <path d="M24.7758 17.7493L24.7074 29.3916C24.7017 30.3655 23.9073 31.1506 22.9334 31.1449C21.9597 31.139 21.1754 30.3447 21.1811 29.3709L21.2495 17.7285C21.2552 16.7548 22.0488 15.9697 23.0225 15.9753C23.9964 15.981 24.7815 16.7754 24.7758 17.7493Z" fill="white" stroke="white" stroke-width="2"/>
                                                                <defs>
                                                                <linearGradient id="paint0_linear_3795_1071" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="white"/>
                                                                <stop offset="1" stop-color="#929292"/>
                                                                </linearGradient>
                                                                <linearGradient id="paint1_linear_3795_1071" x1="43.3765" y1="13.4261" x2="4.13105" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="white"/>
                                                                <stop offset="1" stop-color="#929292"/>
                                                                </linearGradient>
                                                                </defs>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="showTizerPopup">
                                                    <div class="popup-overlay"></div>
                                                    <div class="popup-content">
                                                        <div class="popup-loader"><span></span></div>
                                                        <button class="popup-close" aria-label="بستن">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#FDB913"/>
                                                            <path d="M11.5945 6.32227C12.2853 5.63148 13.4055 5.63168 14.0964 6.32227C14.7873 7.01314 14.7873 8.13334 14.0964 8.82422L12.7097 10.21L14.0945 11.5947C14.7854 12.2856 14.7854 13.4058 14.0945 14.0967C13.4036 14.7871 12.2833 14.7874 11.5925 14.0967L10.2078 12.7119L8.82593 14.0947C8.13505 14.7856 7.01485 14.7856 6.32397 14.0947C5.63339 13.4038 5.6332 12.2836 6.32397 11.5928L7.70581 10.21L6.32202 8.8252C5.63141 8.1343 5.63123 7.01403 6.32202 6.32324C7.01282 5.63253 8.1331 5.63265 8.82397 6.32324L10.2078 7.70801L11.5945 6.32227Z" fill="white"/>
                                                            </svg>
                                                        </button>
                                                        <?php 
                                                        $aparat_url =  get_field('servicetizer');
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
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>  
                            <?php } ?>
                        </div>
                        <div class="col-6">
                            <?php if ($i % 2 != 0) { ?>
                                <div class="services-item leftSide-card">
                                    <span class="services-item-line"></span>
                                    <span class="services-item-point" style="background-color: 
                                                                                <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                                    #FDB913
                                                                                <?php } else { ?>
                                                                                    #75EABA 
                                                                                <?php } ?>
                                                                              ">
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="services-item-card">
                                            <div class="ana-Regular services-item-card-left">
                                                <p>
                                                    <?php if ( get_field('servicessummary') ) : ?>
                                                        <?php echo get_field('servicessummary'); ?>
                                                    <?php endif; ?>
                                                </p>
                                                <div class="services-item-card-left-icons">
                                                    <div class="services-item-card-left-iconbox">
                                                        <div class="iconbox-img">  
                                                            <?php if ( get_field('servicetizer') ) : ?>
                                                            <a>
                                                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1066)"/>
                                                                    <ellipse cx="22.7207" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.7207 22.721)" fill="url(#paint1_linear_3795_1066)"/>
                                                                    <path d="M40.6219 22.721C40.6219 32.6077 32.6072 40.6224 22.7205 40.6224C12.8338 40.6224 4.81909 32.6077 4.81909 22.721C4.81909 12.8343 12.8338 4.81958 22.7205 4.81958C32.6072 4.81958 40.6219 12.8343 40.6219 22.721Z" 
                                                                    fill="
                                                                        <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                            #FDB913
                                                                        <?php } else { ?>
                                                                            #75EABA 
                                                                        <?php } ?>
                                                                    "/>
                                                                    <path d="M17.6653 22.5856L24.4376 17.4526L24.4376 27.7185L17.6653 22.5856Z" fill="white" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <defs>
                                                                    <linearGradient id="paint0_linear_3795_1066" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"/>
                                                                    <stop offset="1" stop-color="#A7A7A7"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3795_1066" x1="43.3762" y1="13.4261" x2="4.13081" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"/>
                                                                    <stop offset="1" stop-color="#A7A7A7"/>
                                                                    </linearGradient>
                                                                    </defs>
                                                                </svg>
                                                            </a>
                                                            <?php else : ?>
                                                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1066)"/>
                                                                    <ellipse cx="22.7207" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.7207 22.721)" fill="url(#paint1_linear_3795_1066)"/>
                                                                    <path d="M40.6219 22.721C40.6219 32.6077 32.6072 40.6224 22.7205 40.6224C12.8338 40.6224 4.81909 32.6077 4.81909 22.721C4.81909 12.8343 12.8338 4.81958 22.7205 4.81958C32.6072 4.81958 40.6219 12.8343 40.6219 22.721Z" 
                                                                    fill="
                                                                        <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                            #FDB913
                                                                        <?php } else { ?>
                                                                            #75EABA 
                                                                        <?php } ?>
                                                                    "/>
                                                                    <path d="M17.6653 22.5856L24.4376 17.4526L24.4376 27.7185L17.6653 22.5856Z" fill="white" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <defs>
                                                                    <linearGradient id="paint0_linear_3795_1066" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"/>
                                                                    <stop offset="1" stop-color="#A7A7A7"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3795_1066" x1="43.3762" y1="13.4261" x2="4.13081" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"/>
                                                                    <stop offset="1" stop-color="#A7A7A7"/>
                                                                    </linearGradient>
                                                                    </defs>
                                                                </svg>
                                                            <?php endif; ?> 
                                                        </div>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="22.721" cy="22.721" r="22.721" fill="url(#paint0_linear_3795_1071)"/>
                                                                <ellipse cx="22.721" cy="22.721" rx="20.6555" ry="20.6555" transform="rotate(90 22.721 22.721)" fill="url(#paint1_linear_3795_1071)"/>
                                                                <path d="M40.6222 22.721C40.6222 32.6077 32.6074 40.6224 22.7208 40.6224C12.8341 40.6224 4.81934 32.6077 4.81934 22.721C4.81934 12.8343 12.8341 4.81958 22.7208 4.81958C32.6074 4.81958 40.6222 12.8343 40.6222 22.721Z" 
                                                                    fill="
                                                                        <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                            #FDB913
                                                                        <?php } else { ?>
                                                                            #75EABA 
                                                                        <?php } ?>
                                                                    "/>
                                                                <path d="M17.1664 21.766L28.8088 21.8345C29.7827 21.8402 30.5678 22.6346 30.5621 23.6085C30.5562 24.5822 29.7619 25.3665 28.7881 25.3608L17.1457 25.2923C16.172 25.2866 15.3869 24.4931 15.3924 23.5193C15.3982 22.5454 16.1926 21.7603 17.1664 21.766Z" fill="white" stroke="white" stroke-width="2"/>
                                                                <path d="M24.7758 17.7493L24.7074 29.3916C24.7017 30.3655 23.9073 31.1506 22.9334 31.1449C21.9597 31.139 21.1754 30.3447 21.1811 29.3709L21.2495 17.7285C21.2552 16.7548 22.0488 15.9697 23.0225 15.9753C23.9964 15.981 24.7815 16.7754 24.7758 17.7493Z" fill="white" stroke="white" stroke-width="2"/>
                                                                <defs>
                                                                <linearGradient id="paint0_linear_3795_1071" x1="22.721" y1="-1.72129" x2="29.9505" y2="51.6387" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="white"/>
                                                                <stop offset="1" stop-color="#929292"/>
                                                                </linearGradient>
                                                                <linearGradient id="paint1_linear_3795_1071" x1="43.3765" y1="13.4261" x2="4.13105" y2="43.3765" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="white"/>
                                                                <stop offset="1" stop-color="#929292"/>
                                                                </linearGradient>
                                                                </defs>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="showTizerPopup">
                                                    <div class="popup-overlay"></div>
                                                    <div class="popup-content">
                                                        <div class="popup-loader"><span></span></div>
                                                        <button class="popup-close" aria-label="بستن">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#FDB913"/>
                                                            <path d="M11.5945 6.32227C12.2853 5.63148 13.4055 5.63168 14.0964 6.32227C14.7873 7.01314 14.7873 8.13334 14.0964 8.82422L12.7097 10.21L14.0945 11.5947C14.7854 12.2856 14.7854 13.4058 14.0945 14.0967C13.4036 14.7871 12.2833 14.7874 11.5925 14.0967L10.2078 12.7119L8.82593 14.0947C8.13505 14.7856 7.01485 14.7856 6.32397 14.0947C5.63339 13.4038 5.6332 12.2836 6.32397 11.5928L7.70581 10.21L6.32202 8.8252C5.63141 8.1343 5.63123 7.01403 6.32202 6.32324C7.01282 5.63253 8.1331 5.63265 8.82397 6.32324L10.2078 7.70801L11.5945 6.32227Z" fill="white"/>
                                                            </svg>
                                                        </button>
                                                        <?php 
                                                        $aparat_url =  get_field('servicetizer');
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
                                                </div>
                                            </div>
                                            <div class="services-item-card-right" style="background-color: 
                                                                                    <?php if ($i == 0 || $i == 3 || $i == 4) { ?>
                                                                                        #FDB913
                                                                                    <?php } else { ?>
                                                                                        #75EABA 
                                                                                    <?php } ?>
                                                                                ">
                                                <h1 class="Dana-ExtraBold"><?php echo $i+1 ?></h1>
                                                <h2 class="mt-3 Dana-ExtraBlack"><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php $i++; // Increment counter ?>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
