<?php

// =============================================================================
// VIEWS/ETHOS/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Ethos.
// =============================================================================

?>

	<?php x_get_view( 'global', '_header', 'widget-areas' ); ?>
	<?php x_get_view( 'global', '_footer', 'scroll-top' ); ?>
	<?php x_get_view( 'global', '_footer', 'widget-areas' ); ?>

	<?php if ( x_get_option( 'x_footer_bottom_display' ) == '1' ) : ?>
	
	<footer class="x-colophon bottom" role="contentinfo">
	  <div class="x-container max width">
	  	
	  	<div class="x-column x-sm x-3-5">
		    <?php if ( x_get_option( 'x_footer_menu_display' ) == '1' ) : ?>
		      <?php x_get_view( 'global', '_nav', 'footer' ); ?>
		    <?php endif; ?>
	  	</div>
	    
	    <div class="x-column x-sm x-2-5 last">
		   	<?php if ( x_get_option( 'x_footer_social_display' ) == '1' ) : ?>
		    	<?php x_social_global(); ?>
		    <?php endif; ?>
	    </div>
			
			
		<div class="x-column x-sm x-1-1 footer-contact">
		    <?php if ( x_get_option( 'x_footer_content_display' ) == '1' ) : ?>
		      <div class="x-colophon-content">
		        <?php echo do_shortcode( x_get_option( 'x_footer_content' ) ); ?>
		      </div>
		    <?php endif; ?>
		</div>
	    
	  </div>
	</footer>
	
	<div id="footer-copyrights">
		<div class="x-container max width">
			<div class="x-column x-sm x-1-1">
				
				<?php
					// DECLAIRING ACF FIELDS
					//========================================
					$copyrights = get_field('footer_copyrights', 'options' );
				?>
				
			    Copyright &copy; <?php echo date('Y'); ?> <?php echo $copyrights ?>
			    
		    </div>
		</div>
	</div>

	
	<?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>