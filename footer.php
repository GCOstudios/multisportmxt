<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fitcoach
 */
?>

	</section><!-- #content --> 

	<footer id="colophon" class="site-footer" role="contentinfo" style="background: url('<?php echo esc_url( get_theme_mod( 'footer_background', (get_stylesheet_directory_uri() . '/images/footer-bg.png') )); ?>') no-repeat scroll center bottom;"> 
    
    	<div class="grid grid-pad"> 
        	
            <div class="col-1-1">
        		
                <p class="top-footer-text">
                	<a href="#go-to-top">
                		<i class="fa fa-angle-up"></i> 
                	</a>
                </p>
                
				<?php if ( get_theme_mod( 'fitcoach_footer_logo' ) ) : ?>
        			
                    <img src="<?php echo esc_url( get_theme_mod( 'fitcoach_footer_logo' ) ); ?>" class="site-footer-image aligncenter" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">  
                
                <?php endif; ?>
                 
        	</div><!-- col-1-1 -->
			
			<?php
				if ( is_active_sidebar( 'footer-sidebar' ) ) {
					dynamic_sidebar( 'footer-sidebar' );
				} else {
					// do not display anything
				}
			?>

        </div><!-- grid --> 
        
        <div class="site-info">
        
        	<?php if ( get_theme_mod( 'fitcoach_footerid' ) ) : ?>
        			<?php echo wp_kses_post( get_theme_mod( 'fitcoach_footerid' )); ?>  
				<?php else : ?>  
    				<?php printf( __( 'Theme: %1$s by %2$s', 'fitcoach' ), 'fitcoach', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?>
			<?php endif; ?> 

		</div><!-- .site-info -->
	
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
