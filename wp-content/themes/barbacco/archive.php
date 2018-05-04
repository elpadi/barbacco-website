<?php 
if (!current_user_can('edit_post', 48)) {
	include(__DIR__.'/404.php');
	exit();
}
get_header();
$archive_settings_pages = [
	'barbacco_news' => 673,
];
$archive_name = get_query_var('post_type');
if (isset($archive_settings_pages[$archive_name])) $settingsPage = get_post($archive_settings_pages[$archive_name]);
?>
<?php if (isset($settingsPage)): ?>
<div class="barbacco-giant-background">
	</div><!-- end of barbacco-giant-background -->
	<style>
		.barbacco-giant-background { background:url('<?php echo  wp_get_attachment_url( get_post_thumbnail_id( $settingsPage->ID ) ); ?>') center center; background-size:cover; }
	</style>
</div>		<!-- end of headerWrapper -->
<div class="clear"></div>
<?php endif; ?>
<div id="section-post-index" class="barbacco-sec-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 barbacco-section-header">
				<h1 class="barbacco-main-color"><?php echo isset($settingsPage) ? $settingsPage->post_title : str_replace('Archives: ', '', get_the_archive_title()); ?></h1>
			</div><!-- end of barbacco-section-header -->
			<div class="col-xs-12 barbacco-section-content barbacco-main-color">
				<div class="barbacco-the-content">
					<div class="the-submenu-page-content">
						<?php if ( have_posts() ) : ?>
						<div class="the-submenu-content-box">
							<?php while ( have_posts() ) : the_post(); ?>
							<article class="post">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt=""></a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php the_field('news_article_headline'); ?></p>
							</article>
							<?php endwhile; ?>
						</div><!-- end of the-submenu-content-box -->
						<?php else: ?>
						<div>
							<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyseventeen' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- end of the-submenu-content-box -->
						<?php endif; ?>
					</div><!-- end of the-submenu-page-content -->
				</div><!-- end of tab-content -->
			</div><!-- end of barbacco-section-content -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</div><!-- end of barbacco-sec-content -->
<div class="clear"></div><!-- end of clear -->
<?php get_footer();
