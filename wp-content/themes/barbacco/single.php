<?php get_header(); the_post(); ?>

		<div id="section-<?php the_ID(); ?>" class="barbacco-sec-content">
			<div class="container-fluid">
				<div class="row">
				
					<div class="col-xs-12 barbacco-section-content barbacco-main-color">
						<div class="barbacco-the-content">
							
							<div id="fd-<?php echo $post_slug; ?>" class="tab-pane fade in active">
								<div class="the-submenu-page-title">
									<h2 class="text-uppercase"><?php the_title(); ?></h2>
									<h3 class="text-uppercase"><?php the_field('news_article_headline'); ?></h2>
								</div><!-- end of the-submenu-page-title -->
								<div class="the-submenu-page-content">
									<div class="the-submenu-content-box">
										<p><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt=""></p>
										<?php while (have_rows('news_article_images')): the_row(); ?>
										<p><img src="<?php echo get_sub_field('news_article_image')['url']; ?>" alt=""></p>
										<p><?php echo get_sub_field('news_article_image')['alt']; ?></p>
										<?php endwhile; ?>
									</div><!-- end of the-submenu-content-box -->
								</div><!-- end of the-submenu-page-title -->
							</div><!-- end of tab-pane -->
								
						</div><!-- end of tab-content -->
					</div><!-- end of barbacco-section-content -->
							
				</div><!-- end of row -->
			</div><!-- end of container -->
		</div><!-- end of barbacco-sec-content -->
		<div class="clear"></div><!-- end of clear -->
					
<?php get_footer(); ?>
<?php include(__DIR__.'/page.php');
