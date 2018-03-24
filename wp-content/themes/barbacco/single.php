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
				
					<div class="col-xs-12 barbacco-section-content barbacco-main-color">
						<div class="barbacco-the-content">
							
							<div id="fd-<?php echo $post_slug; ?>" class="tab-pane fade in active">
								<div class="the-submenu-page-title">
									<h2 class="text-uppercase"><?php the_title(); ?></h2>
								</div><!-- end of the-submenu-page-title -->
								<div class="the-submenu-page-content">
									<div class="the-submenu-content-box">
										<?php the_content(); ?>
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
<?php include(__DIR__.'/page.php');
