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
<!-- greg's grid added 3/28/19 -->

<!-- greg's grid post -->
<div class="post">
	<!-- This will output of the featured image thumbnail  -->
	<div>
		<a class="image-link-shadow" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array('class' => 'img img-responsive image-shadow') ); ?></a>
	</div>
	<!-- 	This outputs the post TITLE -->
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	
	<!-- 	This outputs the post EXCERPT.  To display full content including images and html, 
		replace the_excerpt(); with the_content();  below. -->
	<!--<div style="font-size: 18px; font-weight: 400;">-->
	<div>
		<a href="<?php the_permalink(); ?>">Read more...</a>
	</div>

	<!--	This outputs the post META information -->
	<div class="entry-utility">
		<i class="icon-clock"></i><span class="entry-date"><?php echo get_the_date(); ?></span>
		<?php if ( count( get_the_category() ) ) : ?>
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s"><i class="icon-folder"></i></span> %2$s', 'posts-in-page' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ' / ' ) ); ?>
			</span>
			<!--<span class="meta-sep">|</span>-->
		<?php endif; ?>
		<?php
			$tags_list = get_the_tag_list( '', ', ' );
			if ( $tags_list ):	?>
			<span class="tag-links">
				<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'posts-in-page' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
			</span>
			<!--<span class="meta-sep">|</span>-->
		<?php endif; ?>		
		<?php if ( 'categories' == $section ) { ?>
			<li class="meta-cat"><i class="icon-folder"></i><?php the_category( ' / ', get_the_ID() ); ?></li>	
		<?php } ?>	
	</div>

</div><!-- /greg's grid post -->

<!-- // Post Wrap End -->