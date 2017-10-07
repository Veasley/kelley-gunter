<?php

// =============================================================================
// VIEWS/ETHOS/WP-HEADER.PHP
// -----------------------------------------------------------------------------
// Header output for Ethos.
// =============================================================================

?>

<?php x_get_view( 'global', '_header' ); ?>

<!--
BEGIN #top.site
-->

<div id="top" class="site">
	
	
	<header class="<?php x_masthead_class(); ?>" role="banner">
		<?php x_get_view( 'global', '_topbar' ); ?>
		
		
		
		<!-- Home page -->		
		<?php if ( is_front_page() ) { ?>
		
			<?php
		
				// Set ACF Variables
				// ==============
				$home_title = get_field( 'home_header_title' );
				$home_subtitle = get_field( 'home_header_subtitle' );
				$home_bg = get_field( 'home_header_background' );
			
			?>
		
			<div id="home-hero" class="x-section _before _gradient-rl bg-image" style="margin: 0px; padding: 10% 0px 10%; background-image: url( <?php echo esc_url( $home_bg['url'] ); ?> ); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
				<div class="x-container max width" style="margin: 0px auto;padding: 0px;">
					<div class="x-column x-sm x-1-1" style="padding: 0px;">
						<div class="x-text -white mbl">
							<h1><?php echo $home_title ?></h1>
						</div>
						<div class="x-text -white _max-880">
							<p><?php echo $home_subtitle ?></p>
						</div>
					</div>
				</div>
			</div>
		
		<?php } ?>
		
		
		
		
		<!-- About page -->
		<?php if ( is_page( 23 ) ) { ?>
		      <img src="https://dummyimage.com/1920x490/9badc2/fff" alt="My Image" />
		<?php } ?>
		
		<!-- Shop page -->
		<?php if ( is_archive() ) { ?>
		      <img src="https://dummyimage.com/1920x490/9badc2/fff" alt="My Image" />
		<?php } ?>
		
		<!-- Ambassadors page -->
		<?php if ( is_page( 25 ) ) { ?>
		      <img src="https://dummyimage.com/1920x490/9badc2/fff" alt="My Image" />
		<?php } ?>
		
		<!-- News page -->
		<?php if ( is_home() ) { ?>
		      <img src="https://dummyimage.com/1920x490/9badc2/fff" alt="My Image" />
		<?php } ?>
		
		<!-- Contact page -->
		<?php if ( is_page( 29 ) ) { ?>
		      <img src="https://dummyimage.com/1920x490/9badc2/fff" alt="My Image" />
		<?php } ?>
	
		<?php x_get_view( 'global', '_navbar' ); ?>
		<?php x_get_view( 'ethos', '_breadcrumbs' ); ?>
	</header>
	
	<?php x_get_view( 'ethos', '_landmark-header' ); ?>