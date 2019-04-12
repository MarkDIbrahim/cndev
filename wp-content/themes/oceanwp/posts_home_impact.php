<?php
/**
 * @package Posts_in_Page
 * @author Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2017, IvyCat, Inc.
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */ 
?>

<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<!-- Post Wrap Start-->


<div class="col-md-5 col-sm-12 col-push-6">
	<!-- This will output of the featured image thumbnail  -->
	<a class="page-scroll image-link-shadow" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array('class' => 'img img-responsive image-shadow') ); ?></a>
	<!-- 	This outputs the post TITLE -->
	<h3 class="impact-headers"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
</div>
<!-- // Post Wrap End -->
