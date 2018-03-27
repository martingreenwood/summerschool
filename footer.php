<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package summerschool
 */

?>

	</div><!-- #content -->

	<section id="prefooter">
		<div class="before">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/splash-bottom.gif" alt="Light Green brush stroke">
		</div>

		<div class="container">
			<div class="row">

				<div class="four columns company-info">

					<?php $logo = get_field( 'logo', 'options' ); ?>
					<img src="<?php echo $logo['url']; ?>" alt="">

					<?php the_field( 'company_info', 'options' ); ?>

					<div class="sociallinks">
						<ul>
							<?php if (get_field( 'facebook', 'options' )): ?>
							<li><a href="<?php echo get_field( 'facebook', 'options' ); ?>" title="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<?php endif; ?>
							<?php if (get_field( 'twitter', 'options' )): ?>
							<li><a href="<?php echo get_field( 'twitter', 'options' ); ?>" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a></li>
							<?php endif; ?>
							<?php if (get_field( 'youtube', 'options' )): ?>
							<li><a href="<?php echo get_field( 'youtube', 'options' ); ?>" title="Follow us on YouTube"><i class="fab fa-youtube"></i></a></li>
							<?php endif; ?>
							<?php if (get_field( 'google', 'options' )): ?>
							<li><a href="<?php echo get_field( 'google', 'options' ); ?>" title="Follow us on google plus"><i class="fab fa-google-plus-g"></i></a></li>
							<?php endif; ?>
							<?php if (get_field( 'blogger', 'options' )): ?>
							<li><a href="<?php echo get_field( 'blogger', 'options' ); ?>" title="Follow us on blogger"><i class="fab fa-blogger"></i></a></li>
							<?php endif; ?>
							<?php if (get_field( 'flickr', 'options' )): ?>
							<li><a href="<?php echo get_field( 'flickr', 'options' ); ?>" title="Follow us on Flickr"><i class="fab fa-flickr"></i></a></li>
							<?php endif; ?>
							<?php if (get_field( 'linkedin', 'options' )): ?>
							<li><a href="<?php echo get_field( 'linkedin', 'options' ); ?>" title="Follow us on linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							<?php endif; ?>
							<?php if (get_field( 'vimeo', 'options' )): ?>
							<li><a href="<?php echo get_field( 'vimeo', 'options' ); ?>" title="Follow us on vimeo"><i class="fab fa-vimeo-v"></i></a></li>
							<?php endif; ?>
							<?php if (get_field( 'instagram', 'options' )): ?>
							<li><a href="<?php echo get_field( 'instagram', 'options' ); ?>" title="Follow us on instagram"><i class="fab fa-instagram"></i></a></li>
							<?php endif; ?>
						</ul>
					</div>
					
				</div>

				<div class="eight columns latest-news">

					<h2>Quick Links</h2>
					<div class="quicklink">
					<?php if( have_rows('quick_links_nav', 'options') ): ?>
						<ul class="links">

						<?php while( have_rows('quick_links_nav', 'options') ): the_row(); 

							// vars
							$image = get_sub_field('icon');
							$name = get_sub_field('name');
							$link = get_sub_field('link');

							?>

							<li class="link">

								<?php if( $link ): ?>
								<a href="<?php echo $link; ?>">
								<?php endif; ?>

									<div class="icon" style="background-image: url(<?php echo $image; ?>);"></div>
									<h3><?php echo $name ?></h3>

								<?php if( $link ): ?>
								</a>
								<?php endif; ?>

							</li>

						<?php endwhile; ?>

						</ul>
					<?php endif; ?>
					</div>

					<h2><?php the_field( 'signup_heading', 'options' ); ?></h2>
					<div id="mc_embed_signup" class="signup">
						<form action="https://nsso.us14.list-manage.com/subscribe/post?u=066b92659e50d8ba35b2bed25&amp;id=1fa3fc261a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
								<div id="mce-responses" class="clear"><div class="response" id="mce-error-response" style="display:none"></div><div class="response" id="mce-success-response" style="display:none"></div></div><div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_066b92659e50d8ba35b2bed25_1fa3fc261a" tabindex="-1" value=""></div>					    
							    <div class="mc-field-group"><input placeholder="Enter your email to sign up" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"></div>
						    	<div class="mc-button-group"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				</div>

			</div>
		</div>
		
	</section>

	<footer id="colophon" class="site-footer">
		
		<div class="container">
			<div class="row">

				<div class="copyright five columns">
					<p>2010 — <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?></p>
				</div>

				<div class="footer-nav seven columns">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
						) );
					?>
					<?php if( have_rows('accreditation_logos','options') ): ?>
						<div class="acred">
							<ul>
						<?php while ( have_rows('accreditation_logos','options') ) : the_row(); ?>
							<li>
								<a href="<?php the_sub_field( 'url' ); ?>">
									<?php $alogo = get_sub_field( 'logo' ); ?>
									<img src="<?php echo $alogo['url']; ?>" alt="">
								</a>
							</li>
						<?php endwhile; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
				
			</div>
		</div>

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
