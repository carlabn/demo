<?php get_header(); ?>

<div class="wrap">

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <h1>
        <?php 
          the_archive_title( '<h1 class="page-title">', '</h1>' );
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

      <?php endwhile; 
      
      echo paginate_links();
      
      else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>      

      <p>Template: archive.php</p>

    </main>

  </div><!-- .content-area -->

  <?php get_sidebar(); ?>

</div><!-- .wrap -->

<?php get_footer(); 