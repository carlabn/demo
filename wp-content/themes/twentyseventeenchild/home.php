<?php get_header(); ?>

<div class="wrap">

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <h1><?php wp_title( '' ); ?></h1>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

            <?php endwhile; endif; ?>

            <?php echo paginate_links(); ?>

            <p>Template: home.php</p>

        </main>

    </div>

<?php get_sidebar(); ?>

</div><!-- .wrap -->

<?php get_footer(); ?>
