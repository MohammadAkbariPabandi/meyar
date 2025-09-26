<?php get_header(); ?>

<main id="main" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'my-custom-theme'); ?></h1>
        </header>
        
        <div class="page-content">
            <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'my-custom-theme'); ?></p>
            
            <?php get_search_form(); ?>
            
            <div class="widget">
                <h2><?php _e('Recent Posts', 'my-custom-theme'); ?></h2>
                <ul>
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 5,
                        'post_status' => 'publish',
                    ));
                    foreach ($recent_posts as $post) : ?>
                        <li>
                            <a href="<?php echo get_permalink($post['ID']); ?>">
                                <?php echo $post['post_title']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>