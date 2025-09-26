<?php get_header(); ?>

<main id="main" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                
                <div class="entry-meta">
                    <span class="posted-on">
                        <?php echo get_the_date(); ?>
                    </span>
                    <span class="byline">
                        by <?php the_author(); ?>
                    </span>
                    <span class="cat-links">
                        <?php the_category(', '); ?>
                    </span>
                </div>
            </header>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            
            <div class="entry-content">
                <?php the_content(); ?>
                
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'my-custom-theme'),
                    'after'  => '</div>',
                ));
                ?>
            </div>
            
            <footer class="entry-footer">
                <?php the_tags('<div class="post-tags"><span class="tags-label">Tags:</span> ', ', ', '</div>'); ?>
                
                <?php if (get_edit_post_link()) : ?>
                    <div class="edit-link">
                        <?php
                        edit_post_link(
                            __('Edit Post', 'my-custom-theme')
                        );
                        ?>
                    </div>
                <?php endif; ?>
            </footer>
        </article>
        
        <?php
        // Previous/next post navigation
        the_post_navigation(array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'my-custom-theme') . '</span> ' .
                '<span class="screen-reader-text">' . __('Next post:', 'my-custom-theme') . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'my-custom-theme') . '</span> ' .
                '<span class="screen-reader-text">' . __('Previous post:', 'my-custom-theme') . '</span> ' .
                '<span class="post-title">%title</span>',
        ));
        
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
        
    <?php endwhile; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>