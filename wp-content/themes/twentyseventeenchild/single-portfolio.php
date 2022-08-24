<?php get_header(); ?>

<div class="wrap">

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

                    <header class="entry-header">

                        <span class="dashicons dashicons-portfolio"></span>

                        <div class="entry-meta">
                            <?php the_date(); edit_post_link(); ?>
                        </div>
                        <?php the_title( '<h2>', '</h2>' ); ?>

                        <div class="byline">
                            <?php esc_html_e( 'Author:' ); ?> <?php the_author_posts_link(); ?>
                        </div>

                    </header>

                    <div class="entry-content">

                        <a href="<?php the_permalink(); ?>" >
                            <?php the_post_thumbnail( 'full' ); ?>
                        </a>

                        <?php the_content(); ?>

                        <p>
                            <a class="button" href="<?php the_field( 'url' ); ?>" target="_blank">
                                <?php esc_html_e( 'Visit the Site', 'twentyseventeenchild' ); ?>
                            </a>
                        </p>

                    </div>

                </article>

            <?php endwhile; endif; ?>

            <p>Template: single-portfolio.php</p>

        </main>

    </div>

<?php get_sidebar(); ?>

</div><!-- .wrap -->

<?php get_footer(); ?>