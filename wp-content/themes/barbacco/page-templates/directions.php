<?php
/**
 * Template Name: Directions, Map Page
 *
 * @package WordPress
 * @subpackage Barbacco
 * @since Barbacco 1.0
 * @author Tridaz 
 */
?>
<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			$featuredImage = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
			
			<div class="barbacco-giant-background">
			</div><!-- end of barbacco-giant-background -->
			<style>
				.barbacco-giant-background { background:url('<?php echo $featuredImage; ?>') center center; background-size:cover; }
			</style>
		
		</div>		<!-- end of headerWrapper -->
		<div class="clear"></div>

		<div id="section-<?php the_ID(); ?>" class="barbacco-sec-content">
			<div class="container-fluid">
				<div class="row">
				
					<div class="col-xs-12 col-md-4 barbacco-section-sidebar barbacco-main-color">
						<div class="barbacco-sidebar-content">
							<?php dynamic_sidebar( 'map-direction-widget' ); ?>
						</div><!-- end of the-page-subtitles -->
					</div><!-- end of barbacco-section-header -->
					
					<div class="col-xs-12 col-md-8 barbacco-section-content barbacco-main-color">
						<div class="barbacco-the-content">
							<?php the_content(); ?>
						</div>
					</div><!-- end of barbacco-section-content -->
							
				</div><!-- end of row -->
			</div><!-- end of container -->
		</div><!-- end of barbacco-sec-content -->
		<div class="clear"></div><!-- end of clear -->
		
	<?php endwhile; endif; ?>

<?php get_footer(); ?>