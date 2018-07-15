<?php
/**
Template Name: New Home Page
 *
 * @package fitcoach
 */

get_header(); ?> 

    <!-- Start Slider Section -->
	<div id="sequence"> 
		<span class="sequence-prev hide-on-mobile" alt="Previous" ><i class="fa fa-angle-left"></i></span>
		<span class="sequence-next hide-on-mobile" alt="Next" ><i class="fa fa-angle-right"></i></span>

			<ul class="sequence-canvas"> 
              <?php query_posts( array ( 'post_type' => 'slider', 'posts_per_page' => -1 ) );
			
				while ( have_posts() ) : the_post(); ?> 
                    
                <li>
				<div class="slide-title">
					<span><?php the_title(); ?></span> 
				</div><!-- slide-title -->
                    
                <div class="slide-description">
                	<span><?php global $post; $text = get_post_meta( $post->ID, '_sr_slide_description', true ); echo $text; ?></span>
                	<a href="<?php global $post; $text = get_post_meta( $post->ID, '_sr_slider_url', true ); echo $text; ?>"><i class="fa fa-plus red-plus"></i></a>
                </div><!-- slide-description -->
                    
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?> 
                <div class="bg" style="background: url('<?php echo $url?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -ms-background-size: cover; -o-background-size: cover; background-size: cover;"> 
				</li> 
    
			  <?php endwhile; // end of the loop. ?>      
			</ul><!-- sequence-canvas -->
	</div><!-- sequence -->

    <!-- Start 3 thumbnail Section -->
    <div class="services_top_mn">
        <h2 class="services-title-top">MXT <span>Bike Fitting Packages</span></h2>
        <p>This is a phrase below the title</p>
    </div>

    <div class="item-container">
        <div class="jm-item second">
            <div class="jm-item-wrapper">
                <div class="jm-item-image">
                    <img src="http://doendurance.com/wp-content/uploads/2016/03/workshop_th.jpg" alt="Workshop" />
                <div class="jm-item-description">
                    Lorem ipsum dolor sit amet.<br>
                    1. Lorem<br>
                    2. Ipsum<br>
                    3. Dolor
                    <div class="jm-item-button"><a href="#">View</a></div>
                </div>
                </div>
                <div class="jm-item-title">Cycling Analysis £125</div>
            </div>
        </div>
        <div class="jm-item second">
            <div class="jm-item-wrapper">
                <div class="jm-item-image">
                    <img src="http://doendurance.com/wp-content/uploads/2016/03/workshop_th.jpg" alt="Workshop" />
                <div class="jm-item-description">
                    Lorem ipsum dolor sit amet.<br>
                    1. Lorem<br>
                    2. Ipsum<br>
                    3. Dolor
                    <div class="jm-item-button"><a href="#">View</a></div>
                </div>
                </div>
                <div class="jm-item-title">3D Road & TT BikeFit £250</div>
            </div>
        </div>
        <div class="jm-item second">
            <div class="jm-item-wrapper">
                <div class="jm-item-image">
                    <img src="http://doendurance.com/wp-content/uploads/2016/03/workshop_th.jpg" alt="Workshop" />
                <div class="jm-item-description">
                    Lorem ipsum dolor sit amet.<br>
                    1. Lorem<br>
                    2. Ipsum<br>
                    3. Dolor
                    <div class="jm-item-button"><a href="#">View</a></div>
                </div>
                </div>
                <div class="jm-item-title">New Bike Fit & Consultation £350</div>
            </div>
        </div>
    </div>

    <!-- 4 boxes services section -->
    <div class="services-container">
        <div class="services-title">
            <h2>Awesome Services</h2>
            <p>We are a group of passionate designers and developers who really love to create awesome wordpress themes & support</p>
        </div>
        <div class="services-items">
            <div class="service-item">
                <h2>Bike Fitting</h2>
                <p>Squadra Sports flag-ships the GURU Dynamic Fit Unit which is the worlds only fully motorized bike fitting system. Our fitting experts all hold the prestigious F.I.S.T. certification.</p>
            </div>
            <div class="service-item">
                <h2>Bike Fitting</h2>
                <p>Squadra Sports flag-ships the GURU Dynamic Fit Unit which is the worlds only fully motorized bike fitting system. Our fitting experts all hold the prestigious F.I.S.T. certification.</p>
            </div>
            <div class="service-item">
                <h2>Bike Fitting</h2>
                <p>Squadra Sports flag-ships the GURU Dynamic Fit Unit which is the worlds only fully motorized bike fitting system. Our fitting experts all hold the prestigious F.I.S.T. certification.</p>
            </div>
            <div class="service-item">
                <h2>Bike Fitting</h2>
                <p>Squadra Sports flag-ships the GURU Dynamic Fit Unit which is the worlds only fully motorized bike fitting system. Our fitting experts all hold the prestigious F.I.S.T. certification.</p>
            </div>
        </div>
    </div>







    <!-- This section allows for Call To Action section -->
    <?php if( get_theme_mod( 'active_cta' ) == '') : ?>
    
    <div class="side-pad">
    	<div class="grid cta" style="background: url('<?php echo esc_url( get_theme_mod( 'cta_background' ), (get_stylesheet_directory_uri() . '/images/cta.jpg')); ?>') center center no-repeat;">
    		<div class="col-1-1">
            	
                <h2> 
            	<?php if ( get_theme_mod( 'cta_text' ) ) : ?>
    				<?php echo esc_html( get_theme_mod( 'cta_text' )); ?> 
                <?php endif; ?>
                
                <?php if ( get_theme_mod( 'cta_button_text' ) ) : ?>
                	<a href="<?php echo esc_url( get_page_link(get_theme_mod('fitcoach_ctalink_url')))?>"><button class="alignright"><?php echo esc_html( get_theme_mod( 'cta_button_text', __( 'Book a Class', 'fitcoach' ) )); ?></button></a> 
                <?php endif; ?> 
                </h2>
                
    		</div><!-- col-1-1 -->
    	</div><!-- grid cta -->
    </div><!-- side-pad -->
    
    <?php endif; ?>
	<?php // end if ?>


    <!-- Start here the Workouts Section -->
    <?php if( get_theme_mod( 'active_classes' ) == '') : ?> 
    
    <div class="class-schedule-container side-pad">
    	<div class="grid home-class-grid">
    
    		<?php if ( get_theme_mod( 'class_title_text' ) ) : ?>
    			<div class="schedule-title">
    				<span><?php echo esc_html( get_theme_mod( 'class_title_text' )); ?></span>
    			</div><!-- schedule-title -->
    		<?php else : ?> 
			<?php endif; ?> 
    
    		<?php query_posts( array ( 'post_type' => 'classes', 'posts_per_page' => 5, 'order' => 'ASC' ) );
			
			while ( have_posts() ) : the_post(); ?> 
    
    		<a href="<?php the_permalink(); ?>">
    			<div class="col-1-5 class">
    				<?php the_post_thumbnail('class-image'); ?>
    				<h1><?php the_title(); ?></h1>
    				<h2><?php global $post; if ( get_post_meta( $post->ID, '_fc_class_day', true ) ) : 
       				$text = get_post_meta( $post->ID, '_fc_class_day', true ); echo $text; 
					echo '</br>';   
					else :   
    				$text = get_post_meta( $post->ID, '_fc_class_date', true ); echo $text;  
					endif; ?></h2>
    			<i class="fa fa-plus dark-plus"></i>
    			</div><!-- class --> 
   			</a>
    
	<?php endwhile; // end of the loop. ?>  
    
    	</div><!-- grid --> 
    </div><!-- class-schedule-container -->
    
    <?php endif; ?>
	<?php // end if ?>
    

    
 

<?php get_footer(); ?>
