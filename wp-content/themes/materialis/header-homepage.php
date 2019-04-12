<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="http://conservationnation.org/wp-content/themes/materialis/custom-style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="header-top homepage">
	<?php materialis_print_header_top_bar(); ?>
	<?php materialis_get_navigation(); ?>
</div>


<div id="page" class="site">
    <div class="header-wrapper">
        <div class="video-container hidden-sm hidden-xs" style="background-color:#333;">
            <video preload="true" autoplay loop 0 poster="/img/headers/asian-elephant-1.jpg" title="asian elephant" class="vid-full-width" id="video-background">

	            <source src="/videos/bg/asian-elephant.mp4" type="video/mp4" />
	            <source src="/videos/bg/asian-elephant.webm" type="video/webm; codecs=vp8, vorbis" />
	            <source src="/videos/bg/asian-elephant.ogv" type="video/ogg; codecs=theora, vorbis" />
		
            </video> 
        <div>Test</div>
    </div>
