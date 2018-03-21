<?php
/**
 * Template Name: Menus Page
 *
 * @package WordPress
 * @subpackage Barbacco
 * @since Barbacco 1.0
 * @author Tridaz 
 */
?>
<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
		<?php
			$args = array( 'post_type' 	=> 'restaurant_menus', 'order' => 'ASC' );
			$barbacco_menus_quer = new WP_Query( $args );
			if ( $barbacco_menus_quer->have_posts() ) :
		?>
			
			<div class="tab-content">
			<?php
				while ( $barbacco_menus_quer->have_posts() ) : $barbacco_menus_quer->the_post();
					$post_slug = $post->post_name;
					$featuredImage = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
			?>	
					<div id="fd-<?php echo $post_slug; ?>" class="barbacco-giant-background the-background-of-<?php echo $post_slug; ?> tab">
					</div><!-- end of barbacco-giant-background -->
					<style>
						.tab-content .the-background-of-<?php echo $post_slug; ?> { background:url('<?php echo $featuredImage; ?>') no-repeat center center; background-size:cover; }
					</style>
					
			<?php endwhile; ?>
			</div>		<!-- end of tab-content -->

		</div>		<!-- end of headerWrapper -->
		<div class="clear"></div>

		<div id="section-<?php the_ID(); ?>" class="barbacco-sec-content">
			<div class="container-fluid">
				<div class="row">
				
					<div class="col-xs-12 barbacco-section-header">
						<div class="the-page-main-title">
							<h1 class="barbacco-main-color">food + drink</h1>
						</div><!-- end of the-page-main-title -->
						<div class="the-page-submenu-titles">
							<ul class="nav nav-tabs text-lowercase">
							<?php while ( $barbacco_menus_quer->have_posts() ) : $barbacco_menus_quer->the_post();
									$post_slug = $post->post_name; ?>
								
								<li><a data-toggle="tab" href="#fd-<?php echo $post_slug; ?>"><?php the_title(); ?></a></li>
							
							<?php endwhile; ?>
							</ul>
						</div><!-- end of the-page-subtitles -->
					</div><!-- end of barbacco-section-header -->
					
					<div class="col-xs-12 barbacco-section-content barbacco-main-color">
						<div class="tab-content">
						
						<?php while ( $barbacco_menus_quer->have_posts() ) : $barbacco_menus_quer->the_post();
								$post_slug = $post->post_name; ?>
								
							<div id="fd-<?php echo $post_slug; ?>" class="tab">
								<div class="the-submenu-page-title">
									<h2 class="text-uppercase"><?php the_title(); ?></h2>
								</div><!-- end of the-submenu-page-title -->
								<div class="the-submenu-page-content">
									<div class="the-submenu-content-box">
										<?php if ( have_rows( 'barbacco_menu_sections' ) ) : ?>
											<?php while ( have_rows( 'barbacco_menu_sections' ) ) : the_row();
													$barbacco_section_title = get_sub_field( 'the_sections_title' );
													$barbacco_section_desc = get_sub_field( 'the_sections_description' ); ?>
												<div class="barbacco-menu">
													<h3><?php echo $barbacco_section_title; ?></h3>
													<div class="barbacco-excerpt"><?php echo $barbacco_section_desc; ?></div>
													<?php if ( have_rows( 'the_sections_menu_item' ) ) : ?>
														<?php while ( have_rows( 'the_sections_menu_item' ) ) : the_row();
																$barbacco_item_title = get_sub_field( 'menu_items_name' );
																$barbacco_item_desc = get_sub_field( 'menu_items_description' );
																$barbacco_item_price = get_sub_field( 'menu_items_price' ); ?>
															<div class="barbacco-menu-item">
																<h4><?php echo $barbacco_item_title; ?></h4>
																<div class="barbacco-excerpt"><?php echo $barbacco_item_desc; ?></div>
																<span class="barbacco-menu-item-price"><?php echo $barbacco_item_price; ?></span>
															</div>
															<div class="clear"></div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div><!-- end of barbacco-menu -->
												<div class="clear"></div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div><!-- end of the-submenu-content-box -->
								</div><!-- end of the-submenu-page-title -->
							</div><!-- end of tab-pane -->
							
						<?php endwhile; ?>
								
						</div><!-- end of tab-content -->
					</div><!-- end of barbacco-section-content -->
							
				</div><!-- end of row -->
			</div><!-- end of container -->
		</div><!-- end of barbacco-sec-content -->
		<div class="clear"></div><!-- end of clear -->
		
		<?php endif; wp_reset_postdata(); ?>
				
	<?php endwhile; endif; ?>
					
<?php get_footer(); ?>