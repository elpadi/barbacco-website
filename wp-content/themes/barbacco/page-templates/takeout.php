<?php
/**
 * Template Name: TakeOut Page
 *
 * @package WordPress
 * @subpackage Barbacco
 * @since Barbacco 1.0
 * @author Tridaz 
 */
?>
<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			$featuredImage = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
			$the_takeout_button_url = get_field( 'barbacco_takeout_button_url' );
			$the_takeout_button_text = get_field( 'barbacco_takeout_button_text' );
			$the_delivery_button_url = get_field( 'barbacco_delivery_button_url' );
			$the_delivery_button_text = get_field( 'barbacco_delivery_button_text' ); ?>
			
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
				
					<div class="col-xs-12 barbacco-section-header">
						<div class="the-page-main-title">
							<h1 class="barbacco-main-color">takeout & catering</h1>
						</div><!-- end of the-page-main-title -->
						<div class="the-page-submenu-titles">
							<ul class="text-lowercase">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'takeout-subnav',
										'container' => '',
										'items_wrap' => '%3$s'
									) );
								?>
							</ul>
						</div><!-- end of the-page-subtitles -->
					</div><!-- end of barbacco-section-header -->
					
					<div class="col-xs-12 barbacco-section-content barbacco-main-color">
						<div class="barbacco-the-content">
							
							<div id="fd-<?php echo $post_slug; ?>" class="tab-pane fade in active">
								<div class="the-submenu-page-title">
									<h2 class="text-uppercase"><?php the_title(); ?></h2>
								</div><!-- end of the-submenu-page-title -->
								<div class="the-submenu-page-content">
									<div class="the-submenu-content-box">
										<?php the_content(); ?>
										<?php if ( $the_takeout_button_url && $the_takeout_button_text ) { ?>
											<div class="cart-menu-button">
												<a href="<?php echo esc_url( $the_takeout_button_url ); ?>" target="_blank" type="button" class="btn btn-primary btn-lg"><?php echo esc_html( $the_takeout_button_text ); ?></a>
											</div>
										<?php }
											  if ( $the_delivery_button_url && $the_delivery_button_text ) { ?>
											<div class="cart-menu-button">
												<a href="<?php echo esc_url( $the_delivery_button_url ); ?>" target="_blank" type="button" class="btn btn-primary btn-lg"><?php echo esc_html( $the_delivery_button_text ); ?></a>
											</div>
										<?php } ?>
									</div><!-- end of the-submenu-content-box -->
								</div><!-- end of the-submenu-page-title -->
							</div><!-- end of tab-pane -->
								
						</div><!-- end of tab-content -->
					</div><!-- end of barbacco-section-content -->
							
				</div><!-- end of row -->
			</div><!-- end of container -->
		</div><!-- end of barbacco-sec-content -->
		<div class="clear"></div><!-- end of clear -->
		
	<?php endwhile; endif; ?>
					
<?php get_footer(); ?>