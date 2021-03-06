<?php
/**
 * Template Name: Press Page
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
				
					<div class="col-xs-12 barbacco-section-header">
						<!-- <div class="the-page-main-title">
							<h1 class="barbacco-main-color">about</h1>
						</div>end of the-page-main-title -->
						<div class="the-page-submenu-titles">
							<ul class="text-lowercase">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'about-subnav',
										'container' => '',
										'items_wrap' => '%3$s'
									) );
								?>
							</ul>
						</div><!-- end of the-page-subtitles -->
					</div><!-- end of barbacco-section-header -->
					
					<div class="col-xs-12 barbacco-section-content barbacco-main-color">
						<div class="barbacco-the-content">
							
							<div class="the-submenu-page-title">
								<h2 class="text-uppercase"><?php the_title(); ?></h2>
							</div><!-- end of the-submenu-page-title -->
							<div class="the-submenu-press-content">
							<?php // !!! THE SECOND NESTED LOOP FOR PRESS POST TYPE - START !!!
								$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								$args = array( 'post_type' => 'barbacco_press', 'post_status' => 'publish', 'posts_per_page' => 5, 'caller_get_posts' => 1, 'paged' => $paged );
								
								$barbacco_press_posts_query = new WP_Query( $args );
								if ( $barbacco_press_posts_query->have_posts() ) :
							?>
								<div class="the-submenu-content-box">
									
									<?php while ( $barbacco_press_posts_query->have_posts() ) : $barbacco_press_posts_query->the_post();
											$press_quote = get_post_meta( $post->ID, 'press_quote', true );
											$press_date = get_post_meta( $post->ID, 'press_date', true );
											$press_link = get_post_meta( $post->ID, 'press_link', true ); ?>
									
										<div class="press-content">
											<h3 class="text-uppercase"><a href="<?php echo esc_url( $press_link ); ?>" target="_blank"><?php the_title(); ?></a></h3>
											<div class="press-quote">
												<p><em><?php echo $press_quote; ?></em></p>
											</div>
											<div class="press-info"><?php echo $press_date; ?></div>
										</div>
															
									<?php endwhile; ?>

									<div id="pagination">
										<?php next_posts_link('&laquo; view older posts', $barbacco_press_posts_query->max_num_pages) ?>
										<?php previous_posts_link('view newer posts &raquo;') ?>
									</div>

								</div><!-- end of the-submenu-content-box -->
							<?php 
								endif; wp_reset_postdata(); // !!! THE SECOND NESTED LOOP FOR PRESS POST TYPE - FINISH !!!
							?>
							</div><!-- end of the-submenu-page-title -->
							<div class="the-submenu-page-content">
								<div class="the-submenu-content-box">
									<?php the_content(); ?>
								</div><!-- end of the-submenu-content-box -->
							</div><!-- end of the-submenu-page-title -->
								
						</div><!-- end of tab-content -->
					</div><!-- end of barbacco-section-content -->
							
				</div><!-- end of row -->
			</div><!-- end of container -->
		</div><!-- end of barbacco-sec-content -->
		<div class="clear"></div><!-- end of clear -->
		
	<?php endwhile; endif; ?>
					
<?php get_footer(); ?>