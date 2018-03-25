<?php get_header(); the_post();
?><div id="section-<?php the_ID(); ?>" class="barbacco-sec-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 barbacco-section-header">
				<h1 class="barbacco-main-color"><?php the_title(); ?></h1>
				<h2 class="barbacco-main-color"><?php the_field('news_article_headline'); ?></h2>
			</div><!-- end of barbacco-section-header -->
			<div class="col-xs-12 barbacco-section-content barbacco-main-color">
				<div class="barbacco-the-content">
					<div class="the-submenu-page-content">
						<div class="the-submenu-content-box">
							<figure>
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
								<figcaption><?php echo wp_get_attachment_caption(get_post_thumbnail_id($post->ID)); ?></figcaption>
							</figure>
							<?php while (have_rows('news_article_images')): the_row(); ?>
							<figure>
								<img src="<?php echo get_sub_field('news_article_image')['url']; ?>" alt="">
								<figcaption><?php echo get_sub_field('news_article_image')['alt']; ?></figcaption>
							</figure>
							<?php endwhile; ?>
						</div><!-- end of the-submenu-content-box -->
					</div><!-- end of the-submenu-page-content -->
				</div><!-- end of the-content -->
			</div><!-- end of barbacco-section-content -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</div><!-- end of barbacco-sec-content -->
<div class="clear"></div><!-- end of clear -->
<?php get_footer();
