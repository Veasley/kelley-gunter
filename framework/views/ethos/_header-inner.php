<?php
// Inner Page Headers

// Set ACF Variables
// ==============

//Background Image
$bg_url = '';

if( get_field( 'dfe_inner_header_bg' ) ){

	$bg = get_field( 'dfe_inner_header_bg' );
	$bg_url = $bg['url'];
	$bg_url = esc_url( $bg_url );

}

// Page Title

$title = esc_html( get_the_title() );

if( get_field( 'dfe_inner_header_title' ) ){

	$title = esc_html( get_field( 'dfe_inner_header_title' ) );

}

?>
<div id="inner-page-header" class="x-section cs-ta-center page-header bg-image" style="margin: 0px;padding: 100px 0px 300px; background-image: url( <?php echo $bg_url; ?> ); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">

	<div class="x-container max width" style="margin: 0px auto;padding: 0px;">
		<div class="x-column x-sm x-1-1" style="padding: 0px;">

			<div class="x-text _hero _glow -d-blue">
				<h1><?php echo $title ?></h1>
			</div>

		</div>
	</div>
</div>