		<?php
			// Barbacco Options
			$options = (array)get_option( 'footer_options' );
			if (!empty($options)) extract($options);
			/*
			$barbacco_address = $options['barbacco_address'];
			$barbacco_address_link = $options['barbacco_address_link'];
			$barbacco_page_link = $options['barbacco_page_link'];
			$barbacco_phone = $options['barbacco_phone'];
			$barbacco_takeout = $options['barbacco_takeout'];
			$first_row_days = $options['first_row_days'];
			$first_row_hours = $options['first_row_hours'];
			$second_row_days = $options['second_row_days'];
			$second_row_hours = $options['second_row_hours'];
			$third_row_days = $options['third_row_days'];
			$third_row_hours = $options['third_row_hours'];
			$fourth_row_days = $options['fourth_row_days'];
			$fourth_row_hours = $options['fourth_row_hours'];
			$fifth_row_days = $options['fifth_row_days'];
			$fifth_row_hours = $options['fifth_row_hours'];
			$twitter_url = $options['twitter_url'];
			$facebook_url = $options['facebook_url'];
			$instagram_url = $options['instagram_url'];
			$volta_url = $options['volta_url'];
			$perbacco_url = $options['perbacco_url'];
			$chronicles_link = $options['chronicles_link'];
			$chronicles_url = $options['chronicles_url'];
			 */
		?>
		<!-- The footer wrapper without the grid ! -->
		<div id="footer-wrapper">
			<!-- The footer grid ! -->
			<div class="container-fluid">
				<div class="row">
				
					<div class="col-xs-12 col-md-3 barbacco-reservations">
						<div class="reservations-wrap">
							<?php dynamic_sidebar( 'open-table-widgets' ); ?>
						</div><!-- end of barbacco-reservations -->
					</div><!-- end of col-xs-12 -->
					
					<div class="col-xs-12 col-md-3 barbacco-addresses">
						<div class="barbacco-contact-fields barbacco-main-color">
							<h2>Contact</h2>
							<div class="barbacco-address">
								<?php if( isset($barbacco_address) ) { ?>
									<a href="<?php echo esc_url( $barbacco_address_link ); ?>" target="_blank" class="the-address"><?php echo esc_html( $barbacco_address ); ?></a>
								<?php }
									  if( isset($barbacco_page_link) ) { ?>
									<a href="<?php echo esc_url( $barbacco_page_link ); ?>" class="underline the-directions">maps, directions, and parking</a>
								<?php } ?>
							</div><!-- end of barbacco-address -->
							<!-- <div class="clear"></div>end of clear -->
							
							<?php if( isset($barbacco_phone) || isset($barbacco_takeout) ) { ?>
								<div class="barbacco-phones">
									<a href="tel:<?php echo esc_html( $barbacco_phone ); ?>">[p] <?php echo esc_html( $barbacco_phone ); ?></a>
									<a href="tel:<?php echo esc_html( $barbacco_takeout ); ?>">[takeout] <?php echo esc_html( $barbacco_takeout ); ?></a>
								</div><!-- end of barbacco-phones -->
								<!-- <div class="clear"></div>end of clear -->
							<?php } ?>
							
							<div class="barbacco-primary-contact">
								<div class="barbacco-socials">
								<?php if( isset($facebook_url) || isset($twitter_url) || isset($instagram_url) ) { ?>
									<ul>
										<?php if( isset($facebook_url) ) { ?>
											<li><a href="<?php echo esc_url( $facebook_url ); ?>"><span class="flaticon-facebook55"></span></a></li>
										<?php }
											  if( isset($twitter_url) ) { ?>
											<li><a href="<?php echo esc_url( $twitter_url ); ?>"><span class="flaticon-twitter1"></span></a></li>
										<?php }
											  if( isset($instagram_url) ) { ?>
											<li><a href="<?php echo esc_url( $instagram_url ); ?>"><span class="flaticon-instagram12"></span></a></li>
										<?php } ?>
									</ul>
								<?php } ?>
								</div><!-- end of barbacco-socials -->
								<div class="barbacco-newsletter">
									<?php dynamic_sidebar( 'mailchimp-widget' ); ?>
								</div><!-- end of barbacco-newsletter -->
							</div><!-- end of barbacco-primary-contact -->
							<!-- <div class="clear"></div>end of clear -->
						</div><!-- end of barbacco-contact-fields -->
					</div><!-- end of col-xs-12 -->
					
					<div class="col-xs-12 col-md-3 barbacco-hours">
						<div class="barbacco-contact-fields barbacco-main-color">
							<h2>Hours</h2>
							<div class="barbacco-open-hours-socials">
								<div class="barbacco-open-hours">
								<?php if( isset($first_row_days) || isset($second_row_days) || isset($third_row_days) || isset($fourth_row_days) || isset($fifth_row_days) ) { ?>
									<div class="the-hours">
									<?php if( isset($first_row_days) ) { ?>
										<p><?php echo esc_html( $first_row_days ); ?></p>
									<?php } ?>
									<?php if( isset($first_row_hours) ) { ?>
										<p><?php echo esc_html( $first_row_hours ); ?></p>
									<?php } ?>
									<?php if( isset($second_row_days) ) { ?>
										<p><?php echo esc_html( $second_row_days ); ?></p>
									<?php } ?>
									<?php if( isset($second_row_hours) ) { ?>
										<p><?php echo esc_html( $second_row_hours ); ?></p>
									<?php } ?>
									<?php if( isset($third_row_days) ) { ?>
										<p><?php echo esc_html( $third_row_days ); ?></p>
									<?php } ?>
									<?php if( isset($third_row_hours) ) { ?>
										<p><?php echo esc_html( $third_row_hours ); ?></p>
									<?php } ?>
									<?php if( isset($fourth_row_days) ) { ?>
										<p><?php echo esc_html( $fourth_row_days ); ?></p>
									<?php } ?>
									<?php if( isset($fourth_row_hours) ) { ?>
										<p><?php echo esc_html( $fourth_row_hours ); ?></p>
									<?php } ?>
									<?php if( isset($fifth_row_days) ) { ?>
										<p><?php echo esc_html( $fifth_row_days ); ?></p>
									<?php } ?>
									<?php if( isset($fifth_row_hours) ) { ?>
										<p><?php echo esc_html( $fifth_row_hours ); ?></p>
									<?php } ?>
									</div><!-- end of the-hours -->
								<?php } ?>
								</div><!-- end of barbacco-open-hours -->
							</div><!-- end of barbacco-open-hours-socials -->
							<!-- <div class="clear"></div>end of clear -->
						</div><!-- end of barbacco-contact-fields -->
					</div><!-- end of col-xs-12 -->
					
					<div class="col-xs-12 col-md-3 barbacco-partners">
						<div class="barbacco-sister-restaurant">
							<h2>Visit our sister restaurant</h2>
							<!--<div class="the-recommendation text-uppercase barbacco-main-color">
								<a href="<?php //echo esc_url( $volta_url ); ?>" target="_blank"><span class="glyphicon icon-volta-id-web"></span></a>
							</div>-->
							<div class="the-perbacco-logo">
								<a href="<?php echo esc_url( $perbacco_url ); ?>" target="_blank"><span class="glyphicon icon-Perbacco_logo"></span></a>
							</div>
							<div class="bay-area-button">
								<a href="<?php echo esc_url( $chronicles_url ); ?>" target="_blank"><img src="<?php echo esc_url( $chronicles_link ); ?>" alt="Top Bay Area" /></a>
							</div>
						</div><!-- end of barbacco-sister-restaurant -->
					</div><!-- end of col-xs-12 -->
				
				</div><!-- end of row -->
			</div><!-- end of container -->
		</div><!-- end of #footer-wrapper -->
		<div class="clear"></div><!-- end of clear -->
		
	</div><!-- end of #main-wrapper -->

	<?php wp_footer(); ?>
	
	<script>
													Array.from(document.getElementsByClassName('back-button'))
													.filter(a => a.href == a.getAttribute('data-referrer'))
													.forEach(a => a.addEventListener('click', function(e) {
														e.preventDefault();
														history.back();
													}));
	</script>
	
	<!-- Don't forget analytics -->
	
</body>
</html>
