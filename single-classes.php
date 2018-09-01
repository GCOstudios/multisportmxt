<?php
/**
 * The template for displaying all single posts.
 *
 * @package fitcoach
 */

get_header(); ?>

	<div class="grid grid-pad page-area">
		<div id="primary" class="page-wrapper col-1-1 custom_border_top">
			<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header fc-single-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' );

						// if( get_field('workout_title') ) {
						// 	echo '<span class="posted-on workout_title">';
						// 	the_field('workout_title');
						// 	echo '</span>';
						// }

						$workout_date = get_field('date', false, false);

						$workout_date = new DateTime($workout_date);

						if( get_field('workout_date') ) {
							echo '<p class="workout_date">Posted on ';
							echo $workout_date->format('M j, Y');
							echo ' by ';
							the_author();
							echo '</p>';
						}
					?>

				</header><!-- .entry-header -->

				<div class="entry-content">

					<?php

					// echo '<h4 class="details">'.__( 'Workout Details', 'fitcoach' ).'</h4>';

					// echo '<div class="class-content">';

					// 	echo '<div class="grid class-table">';

					// 		echo '<div class="class-third"><h3>Date</h3>';
					// 			if( get_field('workout_date') ) { the_field('workout_date'); }
					// 		echo '</div>';

					// 		echo '<div class="class-third"><h3>Type</h3>';
					// 			if( get_field('workout_type') ) { the_field('workout_type'); }
					// 		echo '</div>';

					// 		echo '<div class="class-third-last"><h3>Time</h3>';
					// 			if( get_field('workout_time') ) { the_field('workout_time'); }
					// 		echo '</div>';

					// 	echo '</div>'; // End of grid class-table

					// 	echo '<div class="class-address">'; // Workout Title
					// 		if( get_field('workout_title') ) { the_field('workout_title'); }
					// 	echo '</div>';

					// echo '</div>'; // End of class-content
					?>

				<?php
					if( have_rows('featured_content_section') ):
						while( have_rows('featured_content_section') ):the_row();
							if( get_row_layout() == 'featured_image'):
								$image = get_sub_field('image');
								$alt = get_sub_field('alt');
								echo '<img src="' . $image . '" alt="'.$alt.'" >';
							elseif( get_row_layout() == 'featured_video'):
								// do something
								echo '<div class="embed-container">';
								the_sub_field('video');
								echo '</div>';
							elseif( get_row_layout() == 'featured_slider'):
								echo '<div id="sequence" style="height:541px;">';
									echo '<span class="sequence-prev hide-on-mobile" alt="Previous" ><i class="fa fa-angle-left"></i></span>';
									echo '<span class="sequence-next hide-on-mobile" alt="Next" ><i class="fa fa-angle-right"></i></span>';

									if( have_rows('image_slides') ):

										echo '<ul class="sequence-canvas">';

										// loop through the rows of data
										while ( have_rows('image_slides') ) : the_row();

											// display a sub field value
											$slide = get_sub_field('slide');
											$image_url = $slide[url]; ?>

											<li>
												<div class="bg" style="background: url('<?php echo $image_url?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -ms-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
											</li>

									<?php
										endwhile;

										echo '</ul>';

									else :

										// no rows found
										echo '<p>No Slides Yet.</p>';

									endif;
								echo '</div>';
							endif;
						endwhile;
					else:
						// the_post_thumbnail('large', array('class' => 'fc-class-image'));
					endif;
				?>

				<?php
					global $post;

					echo '<h4 class="overview">'.__( 'Workout Overview', 'fitcoach' ).'</h4><p>';
						if( get_field('workout_description') ) { the_field('workout_description'); }
					echo '</p>';

					// echo '<h4 class="location">'.__( 'Workout Gallery', 'fitcoach' ).'</h4>';

					$images = get_field('workout_gallery');

					if( $images ): ?>
						<div class="gallery galleryid-1 gallery-columns-4 gallery-size-thumbnail">
							<?php foreach( $images as $image ): ?>
								<figure class="gallery-item">
									<div class="gallery-icon landscape">
									<a href="<?php echo $image['url']; ?>">
										 <img class="attachment-thumbnail size-thumbnail" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
									</a>
									<p><?php echo $image['caption']; ?></p>
									</div>
								</figure>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>

				<?php
					if ( get_field('workout_exercises') ) :
						echo '<div class="workout-section">';
						echo '<h4 class="details">'.__( 'Workout Exercises', 'fitcoach' ).'</h4>';
						the_field('workout_exercises');
						echo '</div>';
					endif;
				?>

				<?php
					if ( get_field('workout_cardio') ) :
						echo '<div class="workout-section">';
						echo '<h4 class="details">'.__( 'Workout Cardio', 'fitcoach' ).'</h4>';
						echo '<div class="cardio-entry">';
						the_field('workout_cardio');
						echo '</div></div>';
					endif;
				?>

				<?php
					if ( get_field('downloads_files') ) :
						echo '<div class="workout-section">';
						echo '<h4 class="details">'.__( 'Download files', 'fitcoach' ).'</h4>';
						echo '<div class="downloads-entry">';
						the_field('downloads_files');
						echo '</div></div>';
					endif;
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'fitcoach' ),
						'after'  => '</div>',
					) );
				?>
					

				</div><!-- .entry-content -->

			</article><!-- #post-## -->
			
			<?php echo do_shortcode( '[cptapagination custom_post_type="Classes" post_limit="1"]' ); ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<!-- <div id="secondary" class="widget-area col-3-12" role="complementary">
			<?php // dynamic_sidebar('sidebar-class'); ?>
		</div>#secondary -->

	</div><!-- grid -->

<?php get_footer(); ?>
