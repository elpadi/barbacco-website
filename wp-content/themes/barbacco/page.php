<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="section-<?php the_ID(); ?>" class="barbacco-sec-content">
			<div class="container-fluid">
				<div class="row">
				
					<div class="col-xs-12 barbacco-section-header">
						<?php the_title(); ?>
					</div>
					<div class="col-xs-12 barbacco-section-content">
						<?php the_content(); ?>
					</div><!-- end of barbacco-section-content -->
				
				</div><!-- end of row -->
			</div><!-- end of container -->
		</div><!-- end of barbacco-sec-content -->
		<div class="clear"></div><!-- end of clear -->
		
	<?php endwhile; endif; ?>

<?php get_footer(); ?>