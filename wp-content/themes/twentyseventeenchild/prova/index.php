<?php get_header(); ?>

<div class="wrap">

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <p>Template: index.php</p>

    </main>

  </div>

  <?php get_sidebar(); ?>

</div><!-- .wrap -->

<?php get_footer(); ?>
