<?php get_header(); ?>

<main id="main">
    <section class="basePages">
        <div class="container basePages-header">
            <div class="row contactUs-header mb-0">
                <div class="col-md-4 contactUs-title">
                    <h1 class="Dana-Black">دانشنامه</h1>
                    <h2 class="Dana-Regular">Articles</h2>
                </div>
                <div class="col-md-8 contactUs-image">
                     <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/singleArtivleHero.png" alt="">
                </div>
            </div>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="singleArticle">
                    <div class="singleArticle-image">
                        <?php if ( get_field('articleheroimage') ) : ?>
                            <img src="<?php echo get_field('articleheroimage')['url']; ?>" alt="">
                        <?php endif; ?> 
                    </div>     
                    <h1 class="Dana-Black"><?php the_title(); ?></h1>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="article-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- baraye content style kamel bede -->
                    <div class="Dana-Medium article-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php
            endwhile;
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
