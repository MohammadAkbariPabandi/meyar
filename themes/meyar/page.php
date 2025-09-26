<?php get_header(); ?>

<main id="main" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            
            <div class="entry-content">
                <?php the_content(); ?>
                
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'my-custom-theme'),
                    'after'  => '</div>',
                ));
                ?>
            </div>
            
            <?php if (get_edit_post_link()) : ?>
                <footer class="entry-footer">
                    <?php
                    edit_post_link(
                        sprintf(
                            __('Edit %s', 'my-custom-theme'),
                            the_title('<span class="screen-reader-text">"', '"</span>', false)
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </footer>
            <?php endif; ?>
        </article>
        
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
        
    <?php endwhile; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>