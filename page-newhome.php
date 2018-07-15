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
        <h2 class="services-title-top">MXT <span>Bike Fit Services</span></h2>
        <p>We accomodate all level riders from the enthusiast trying to find the right bike to the seasoned athlete looking to maximise performance</p>
    </div>

    <div class="item-container">
        <div class="jm-item second">
            <div class="jm-item-wrapper">
                <div class="jm-item-image">
					<img src="https://multisport-xt.com/wp-content/uploads/2018/05/mxt-bikefit1-homepage-380x300.jpg" alt="Cycling Analysis" />
				<div class="jm-item-description">
					<ol>
						<li>Video analysis with both physio & fitter</li>
						<li>Musculo-skeletal screening assessment</li>
						<li>Identify asymmetries, injuries and problem areas</li>
						<li>Adjustments made to your bike to improve comfort</li>
						<li>Treatment plan and exercise program prescribed</li>
					</ol>
                  <div class="jm-item-button"><a href="https://multisport-xt.com/bike-fitting/">View</a></div>
                </div>
                </div>
                <div class="jm-item-title">Physio Cycling Analysis £125</div>
            </div>
        </div>
        <div class="jm-item second">
            <div class="jm-item-wrapper">
                <div class="jm-item-image">
                    <img src="https://multisport-xt.com/wp-content/uploads/2018/05/mxt-bikefit2-homepage-380x300.jpg" alt="3D Road & TT BikeFit" />
				<div class="jm-item-description">
					<ol>
						<li>Retul 3D motion capture system</li>
						<li>Improve performance, position & power</li>
						<li>Streamed data in real time whilst you ride</li>
						<li>Detailed report of body angles & bike set up</li>
						<li>Dial you into your perfect ride position</li>
					</ol>
                    <div class="jm-item-button"><a href="https://multisport-xt.com/bike-fitting/">View</a></div>
                </div>
                </div>
                <div class="jm-item-title">3D Road & TT BikeFit £250</div>
            </div>
        </div>
        <div class="jm-item second">
            <div class="jm-item-wrapper">
                <div class="jm-item-image">
                    <img src="https://multisport-xt.com/wp-content/uploads/2018/05/mxt-bikefit3-homepage-380x300.jpg" alt="New Bike Fit" />
                <div class="jm-item-description">
					<ol>
						<li>Bike chat and body assessment</li>
						<li>3D Retul bikefit using adjustable fitting bike</li>
						<li>Present perfect bike options based on your fit</li>
						<li>Help with ordering bike and additional parts</li>
						<li>All adjustments made to new bike in final fitting</li>
					</ol>
                    <div class="jm-item-button"><a href="https://multisport-xt.com/bike-fitting/">View</a></div>
                </div>
                </div>
                <div class="jm-item-title">New Bike Fit & Consultation £350</div>
            </div>
        </div>
    </div>

    <!-- 4 boxes services section -->
    <div class="services-container">
        <div class="services-title">
            <h2>MXT Coaching Services</h2>
            <p>We specialise in bespoke fitness preparation for all ability athletes participating in cycling, triathlon and ironman events</p>
        </div>
        <div class="services-items">
            <div class="service-item">
				<i class="fa fa-heartbeat"></i>
                <h2 class="service-item-title">Assessments</h2>
                <p>We offer video analysis in swimming, cycing and running helping improve technique and prevent injury. We also use physiological testing to benchmark and determine your training zones.</p>
            </div>
            <div class="service-item">
				<i class="fa fa-laptop"></i>
                <h2 class="service-item-title">Programs</h2>
                <p>Training plans individually designed to suit your ability level, event goals and available training time. Professionally structured workouts delivered to you online with coaches feedback.</p>
            </div>
            <div class="service-item">
				<i class="fa fa-bicycle"></i>
                <h2 class="service-item-title">121 Training</h2>
                <p>This is the quickest way to improve your knowledge, skill and fitness. We target speed, power and endurance to get you in the best possible shape for your chosen event.</p>
            </div>
            <div class="service-item">
				<i class="fa fa-users"></i>
                <h2 class="service-item-title">Community</h2>
                <p>Connect with like minded endurance athletes via our forum and social pages. We also have a vast number of partners offering special promotions to our community members.</p>
            </div>
        </div>
    </div>

    <!-- Start here the Workouts Section -->
<div class="services_top_mn">
        <h2 class="services-title-top">MXT <span>Workouts & Downloads</span></h2>
        <p>We regularly share motivating FREE workouts to help with your training and provide a comprehensive exercise database for your reference </p>
    </div>

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
