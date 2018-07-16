<?php
/**
 * @package fitcoach
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="featured-image-container">
			<?php the_post_thumbnail('thumbnail', array('class' => 'fc-post-image')); ?>
		</div>
		<div class="content-container">
			<header class="entry-header">
				<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>
			
				<div class="entry-meta custom_color">
					<?php fitcoach_posted_on(); ?>
				</div><!-- .entry-meta -->
			
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				
				<?php
					if ( 'option2' == fitcoach_sanitize_index_content( get_theme_mod( 'fitcoach_post_content' ) ) ) :
					the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fitcoach' ) );
					else :
					the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fitcoach' ) );
					endif; 
				?> 
				
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'fitcoach' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<a href="<?php the_permalink(); ?>"><button><?php echo __( 'Read More', 'fitcoach' ); ?></button></a> 
			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-## --> 