<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Barbacco
 * @since Barbacco 1.0
 * @author Tridaz 
 */
?>
<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<div class="barbacco-giant-background">
				<?php echo do_shortcode("[metaslider id=366]"); ?>
			</div><!-- end of barbacco-giant-background -->
			
		</div><!-- end of #header-wrap -->
		<div class="clear"></div><!-- end of clear -->
		
	<?php endwhile; endif; ?>

<?php get_footer(); ?>