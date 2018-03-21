<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	
	<?php if ( is_search() ) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<!-- Start of the modal for pictures used as background from wikimedia -->
	<div class="modal fade" id="modal-reservations">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">&nbsp;</h4>
				</div>
				<div class="modal-body">
					<h2 class="otw-widget-title text-uppercase text-center">Barbacco Reservations</h2>
					<?php dynamic_sidebar( 'open-table-widgets' ); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- End of the modal for pictures used as background from wikimedia -->
	
	<div id="main-wrapper">
	
		<div id="header-wrap">
		
			<nav class="navbar navbar-static barbacco-main-color barbacco-color-overlay text-center" role="navigation">
				<div class="container-fluid">
					
					<div class="col-xs-12 col-sm-2 navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<a href="<?php echo home_url(); ?>" class="navbar-brand">
							<div class="barbacco-logo">
								<img src="<?php bloginfo('template_directory'); ?>/img/barbacco-logo.png" alt="Barbacco Logo" />
							</div>
						</a>
					</div>
					<div id="main-navigation" class="col-xs-12 col-sm-10 collapse navbar-collapse">
						<ul class="nav navbar-nav text-lowercase" role="menu">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-navigation',
									'container' => '',
									'items_wrap' => '%3$s'
								) );
							?>
						</ul>
					</div><!-- end of navbar-collapse -->
								
				</div><!-- end of container -->
			</nav><!-- end of nav -->
			
			<div class="narrow-down">
				<span class="glyphicon icon-downarrow"></span>
			</div>
	