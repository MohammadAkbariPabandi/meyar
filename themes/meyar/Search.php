<?php
get_header(); ?>

<section class="contactUs meyarsearch">
    <div class="container">
        <div class="row contactUs-header">
            <div class="col-md-6 contactUs-title">
                <h1 class="Dana-Black">جستجو</h1>
                <h2 class="Dana-Regular">Search</h2>
            </div>
            <div class="col-md-6 contactUs-image">
                <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/contactUs.png" alt="">
            </div>
        </div>
        <div class="container c-filter">
            <div class="row">
                <div class="c-filter-search">
                    <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                        <div class="c-filter-input-group ">
                            <h2 class="Dana-Bold">لطفا متن مورد نظر راد در کادر جستجو وارد کرده و روی آیکن </h2>
                            <input type="text" name="s" class="c-filter-form-control" value="<?php echo get_search_query(); ?>" placeholder="جستجو کنید..."/>
                            <button type="submit">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19.799" cy="13.435" r="8" transform="rotate(45 19.799 13.435)" stroke="#999999" stroke-width="3"/>
                                    <rect x="13.4347" y="17.6777" width="4" height="11" rx="2" transform="rotate(45 13.4347 17.6777)" fill="#999999"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row meyarsearch-items">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="c-card">
                        <div class="row">
                            <div class="col-12 c-card-info">
                                <div class="row c-card-info-title">
                                    <h1 class="col-12 Dana-Black">
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                                <div class="c-card-info-desc">
                                    <?php if ( get_field('coursessummary') ) : ?>
                                        <?php echo get_field('coursessummary'); ?>
                                    <?php else : ?>
                                        <?php the_excerpt(); ?>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>نتیجه‌ای پیدا نشد.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>