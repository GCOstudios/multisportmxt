<?php
/**
Template Name: FW No Sidebar
 *
 * @package fitcoach
 */

get_header(); ?>

  <div id="primary" class="fw-no-sidebar">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>


      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php
            the_content();
          ?>
        </div><!-- .entry-content -->
      </article><!-- #post-## --> 

      <?php endwhile; ?>

      <?php fitcoach_paging_nav(); ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
	<?php get_footer(); ?>