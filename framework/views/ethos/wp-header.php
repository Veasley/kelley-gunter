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
		
		
		<!-- CUSTOM HEADER CODE START -->
		<!-- ========================================================================================= -->
		
		<?php if ( is_front_page()) { ?>
				
				<!-- HOME PAGE HEADER -->
				<?php
				
					// Set ACF Variables
					// ==============
					$home_title = get_field( 'home_header_title' );
					$home_subtitle = get_field( 'home_header_subtitle' );
					$home_bg = get_field( 'home_header_background' );
				
				?>
				
				
				<div id="home-hero" class="x-section _before _gradient-rl bg-image" style="margin: 0px; padding: 8% 0px 8%; background-image: url( <?php echo esc_url( $home_bg['url'] ); ?> ); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
					<div class="x-container max width" style="margin: 0px auto;padding: 0px;">
						<div class="x-column x-sm x-1-1" style="padding: 0px;">
							<div class="x-text -white mbl">
								<h1><?php echo $home_title ?></h1>
							</div>
							<div class="x-text -white _max-960">
								<p><?php echo $home_subtitle ?></p>
							</div>
						</div>
					</div>
				</div>
				
		
		<?php } elseif ( is_page() ) { ?>
			
			<!-- Inner page header -->		
			<?php
			
				// Set ACF Variables
				// ==============
				
				//Background Image
				$in_bg_url = '';
				
				if( get_field( 'inner_header_background' ) ){
				
					$in_hero_bg = get_field( 'inner_header_background' );
					$in_bg_url = $in_hero_bg['url'];
					$in_bg_url = esc_url( $in_bg_url );
				
				}
				
				// Page Title
				$title = esc_html( get_the_title() );
				
				if( get_field( 'inner_header_title' ) ){
				
					$title = esc_html( get_field( 'inner_header_title' ) );
				
				}
			
			?>
			
		
			<div id="inner-hero" class="x-section _before _overlay-grey bg-image" style="margin: 0px; padding: 8% 0px 8%; background-image: url( <?php echo $in_bg_url; ?> ); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
				<div class="x-container max width" style="margin: 0px auto;padding: 0px;">
					<div class="x-column x-sm x-1-1" style="padding: 0px;">
						<div class="x-text -white mbl">
							<h1><?php echo $title ?></h1>
						</div>
					</div>
				</div>
			</div>

			
		<?php } elseif ( is_woocommerce() ) { ?>
			
			<!-- Woocommerce product page heder -->
			<?php
				// DECLAIRING ACF FIELDS
				//========================================
				$shop_header_img = get_field('shop_header_img', 'options');
				$shop_header_title = get_field('shop_header_title', 'options');
			?>
		
			<!-- CUSTOME SHOP HEADER -->
			<div id="inner-hero" class="x-section _before _overlay-grey bg-image" style="margin: 0px; padding: 8% 0px 8%; background-image: url( <?php echo esc_url( $shop_header_img['url'] ); ?> ); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
				<div class="x-container max width" style="margin: 0px auto;padding: 0px;">
					<div class="x-column x-sm x-1-1" style="padding: 0px;">
						<div class="x-text -white mbl">
							<h1><?php echo $shop_header_title ?></h1>
						</div>
					</div>
				</div>
			</div>



		<?php } elseif ( is_home() || is_archive() || is_search() || is_single()  ){ ?>
			
			<!-- Blog/Archive page heder -->
			<?php
				// DECLAIRING ACF FIELDS
				//========================================
				$blog_header_img = get_field('blog_header_img', 'options');
				$blog_header_title = get_field('blog_header_title', 'options');
			?>
		
			<!-- CUSTOME SHOP HEADER -->
			<div id="inner-hero" class="x-section _before _overlay-grey bg-image" style="margin: 0px; padding: 8% 0px 8%; background-image: url( <?php echo esc_url( $blog_header_img['url'] ); ?> ); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
				<div class="x-container max width" style="margin: 0px auto;padding: 0px;">
					<div class="x-column x-sm x-1-1" style="padding: 0px;">
						<div class="x-text -white mbl">
							<h1><?php echo $blog_header_title ?></h1>
						</div>
					</div>
				</div>
			</div>
			
		<?php } ?>
		
				
		<!-- CUSTOM HEADER CODE END -->
		<!-- ========================================================================================= -->
		
		<?php x_get_view( 'global', '_navbar' ); ?>
		<?php x_get_view( 'ethos', '_breadcrumbs' ); ?>
	</header>
	
	<?php x_get_view( 'ethos', '_landmark-header' ); ?>