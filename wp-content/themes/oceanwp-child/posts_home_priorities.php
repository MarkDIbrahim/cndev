<?php
/**
 * @package Posts_in_Page
 * @author Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2017, IvyCat, Inc.
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */ 
?>

<div class="equalHW" style="padding:0;">
	<div class="ih-item square effect6 from_top_and_bottom" style="display:flex; flex-wrap:wrap;">
		<a href="<?php the_permalink(); ?>">
	    	<div class="img"><?php the_post_thumbnail( 'large' ); ?></div>
	    	<div class="info">
	      		<h3><?php the_title(); ?></h3>
	      		<p> <?php echo get_post_custom($post_id)["homepage-summary"][0] ?> </p>
	    	</div>
	    </a>
	</div>
	<a href="<?php the_permalink(); ?>"><div class="visible-xs text-center"></div></a>
</div>