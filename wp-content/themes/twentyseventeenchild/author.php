<?php get_header(); ?>

<div class="wrap">

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <div class="author-bio">
        <h1>
            <?php the_archive_title(); ?>
        </h1>
        <p>
          <?php echo the_author_meta( 'description', $post->post_author ); ?>
        </p>
      </div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

      <?php endwhile; endif; ?>

      <?php echo paginate_links(); ?>

      <p>Template: author.php</p>

    </main>

  </div><!-- .content-area -->

  <?php get_sidebar(); ?>

</div><!-- .wrap -->

<?php get_footer(); ?>
