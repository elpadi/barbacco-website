<?php get_header();
$featuredImage = wp_get_attachment_url( get_post_thumbnail_id( 48 ) ); ?>
?><div class="barbacco-giant-background">
	</div><!-- end of barbacco-giant-background -->
	<style>
		.barbacco-giant-background { background:url('<?php echo $featuredImage; ?>') center center; background-size:cover; }
	</style>
</div>		<!-- end of headerWrapper -->
<div class="clear"></div>
<div id="section-post-index" class="barbacco-sec-content">
	<div class="container-fluid">
		<?php if ( have_posts() && current_user_can('edit_post', 48) ) : while ( have_posts() ) : the_post(); for ($i = 0; $i < 12; $i++): ?>
		<article class="post">
			<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
			<h2><?php the_title(); ?></h2>
			<p><?php the_date(); ?></p>
		</article>
		<?php endfor; endwhile; else: ?>
		<div class="row">
			<div class="col-xs-12 barbacco-section-content barbacco-main-color">
				<div class="barbacco-the-content">
					<div class="the-submenu-page-title">
						<h2 class="text-uppercase">Nothing To Show</h2>
					</div><!-- end of the-submenu-page-title -->
					<div class="the-submenu-page-content">
						<div class="the-submenu-content-box">
							<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyseventeen' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- end of the-submenu-content-box -->
					</div><!-- end of the-submenu-page-content -->
				</div><!-- end of tab-pane -->
			</div><!-- end of the-submenu-page-content -->
		</div><!-- end of tab-pane -->
		<?php endif; ?>
	</div><!-- end of container -->
</div><!-- end of barbacco-sec-content -->
<div class="clear"></div><!-- end of clear -->
<?php get_footer();
