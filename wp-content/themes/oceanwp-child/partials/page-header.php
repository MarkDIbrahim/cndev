<?php
/**
 * The template for displaying the page header.
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Return if page header is disabled
if ( ! oceanwp_has_page_header() ) {
	return;
}

// Classes
$classes = array( 'page-header' );

// Get header style
$style = oceanwp_page_header_style();

// Add classes for title style
if ( $style ) {
	$classes[$style .'-page-header'] = $style .'-page-header';
}

// Visibility
$visibility = get_theme_mod( 'ocean_page_header_visibility', 'all-devices' );
if ( 'all-devices' != $visibility ) {
	$classes[] = $visibility;
}

// Turn into space seperated list
$classes = implode( ' ', $classes );

// Heading tag
$heading = get_theme_mod( 'ocean_page_header_heading_tag', 'h1' );
$heading = $heading ? $heading : 'h1';
$heading = apply_filters( 'ocean_page_header_heading', $heading ); ?>

<?php do_action( 'ocean_before_page_header' ); ?>

<header class="<?php echo esc_attr( $classes ); ?>">

	<?php
	if (is_page( 'home' ) ):
		  echo '<div class="video-container hidden-sm hidden-xs" style="background-color:#333;"><video preload="true" autoplay="" loop="" 0="" muted poster="/wp-content/uploads/2019/04/asian-elephant-1.jpg" title="asian elephant" class="vid-full-width" id="video-background">

		    <source src="/wp-content/uploads/2019/04/bubble-15sec.mp4" type="video/mp4">
		    <source src="/wp-content/uploads/2019/04/asian-elephant-loop.webm" type="video/webm; codecs=vp8, vorbis">
		    <source src="/wp-content/uploads/2019/04/asian-elephant-loop.ogv" type="video/ogg; codecs=theora, vorbis">
		    </video></div>
		    <div class="container-full-mobile visible-sm visible-xs">
			<img class="img img-responsive" alt="asian elephant" src="/wp-content/uploads/2019/04/asian-elephant-1.jpg">
			</div>
		    ';
	endif;
	?>


	<?php
	if (is_page( 'impact' ) ):
		echo '<div class="container-full-bg hidden-xs" style="background-image:url(\'/wp-content/uploads/2019/04/tiger-grass.jpg\');">
				<div class="container special">
			  		<div class="jumbotron">
			        
			        </div>
			        </div>
			    </div>';
	endif;
	?>

	

	<?php
	if (is_page( 'priorities' ) ):
		echo '<div class="container-full-bg hidden-xs" style="background-image:url(\'/wp-content/uploads/2019/04/two-asian-elephants-grass.jpg\');">
			<div class="container special">
		  		<div class="jumbotron">
		        	<!--<div id="take-action-overlay-main">
		            	<div id="take-action-overlay-div">
		                	<h1>Conservation Nation</h1>
		  					<h4 style="text-align:center;">Annual Conservation Fund</h4>
		                    <a class="btn btn-lg btn-block" href="https://give.conservationnation.org/checkout/donation?eid=136473">Donate Now</a>   
		                </div>
		            </div>-->
		        </div>
		    </div>
		</div>';
	endif;
	?>
	


	<?php
	if (is_page( 'get-involved' ) ):
		echo '<div class="container-full-bg hidden-xs" style="background-image:url(\'/wp-content/uploads/2019/04/red-panda-close.jpg\');">
                <div class="container special">
                    <div class="jumbotron">
                    
                      <!--<div id="take-action-overlay-main">
                      <div id="take-action-overlay-div">
                      <h1>Donate Your Birthday!</h1>
                      <a class="btn btn-lg btn-block" href="https://give.conservationnation.org/campaign/conservation-nation-birthday/c135940">Sign Up</a>   
                      </div>
                      </div>-->
                      <!--<div id="take-action-overlay-main">
                      <div id="take-action-overlay-div">
                      <h1>You can make a difference!</h1>
                      <a class="btn btn-lg btn-block page-scroll" href="#ways-to-help">Find Out How</a>  
                      </div>
                      </div>-->
              
                    </div>
                </div>
    		</div>';
	endif;
	?>
	

	<?php
	if (is_page( 'fundraise' ) ):
		echo '<div class="container-full-bg hidden-xs" style="background-image:url(\'/wp-content/uploads/2019/04/giraffe-headshot.jpg\');">
				<div class="container special">
			  		<div class="jumbotron">
			        
			        </div>
			        </div>
			    </div>';
	endif;
	?>

	
	
	<?php do_action( 'ocean_before_page_header_inner' ); ?>

	<div class="container clr page-header-inner">

		<?php
		// Return if page header is disabled
		if ( oceanwp_has_page_header_heading() ) { ?>

			<<?php echo esc_attr( $heading ); ?> class="page-header-title clr"<?php oceanwp_schema_markup( 'headline' ); ?>><?php echo wp_kses_post( oceanwp_title() ); ?></<?php echo esc_attr( $heading ); ?>>

			<?php get_template_part( 'partials/page-header-subheading' ); ?>

		<?php } ?>

		<?php if ( function_exists( 'oceanwp_breadcrumb_trail' ) ) {
			oceanwp_breadcrumb_trail();
		} ?>

	</div><!-- .page-header-inner -->

	<?php oceanwp_page_header_overlay(); ?>

	<?php do_action( 'ocean_after_page_header_inner' ); ?>

</header><!-- .page-header -->

<?php do_action( 'ocean_after_page_header' ); ?>