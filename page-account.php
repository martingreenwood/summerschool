<?php
/**
 * The account pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package summerschool
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if (have_posts()): ?>
			<div class="container maincopy">
				<?php 
				if (isset($_GET['action'])) {
					$section_title = $_GET['action'];
				} else {
					$section_title = 'account-details';
				}

				switch ($section_title) {
					case 'account-details':
						$title = 'Account Details';
						break;

					case 'personal-information':
						$title = 'Personal Information';
						break;

					case 'home':
						$title = 'Account Details';
						break;

					case 'subscriptions':
						$title = 'Subscription Details';
						break;
					
					case 'payments':
						$title = 'Payment Details';
						break;

					case 'member-assets':
						$title = 'Member Assets';
						break;
					
					default:
						$title = 'Account Details';
						break;
				}
				?>
				<h1><?php echo $title; ?></h1>
				<p>If any of the information on file is incorrect, please <a href="mailto:hello@nsso.org?subject=Account information update request.">contact us</a> to get it amended.</p>
			</div>
			<?php endif ?>

			<div class="accinfo container">
				<div class="row">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
					<div class="btnhlder">
  						<a class="button" href="<?php echo home_url( '/enrol' ); ?>">Enrol another instrumentalist</a>
					</div>
				</div>
			</div>

			<?php
			// rows
			if( have_rows('page_builder') ):
			?>
			<div class="sections">
				<div class="container">
				<?php
				while ( have_rows('page_builder') ) : the_row();
				?>
					<div class="row">
					<?php
						// items
						if( have_rows('element') ):
							while ( have_rows('element') ) : the_row();
								$element_width = get_sub_field( 'element_width' );
								?>
								<div class="element columns <?php echo $element_width ?>">

									<?php
									if( have_rows('item') ):
										while ( have_rows('item') ) : the_row();

											if( get_row_layout() == 'image' ):

												$file = get_sub_field('image');

												?>
												<img src="<?php echo $file['url'] ?>" alt="">
												<?php

											elseif( get_row_layout() == 'text' ): 

												?>
												<div class="text">
													<div class="table">
														<div class="cell middle">
															<?php the_sub_field('text'); ?>	
														</div>
													</div>
												</div>
												<?php
											
											elseif( get_row_layout() == 'link' ): 

												?>
												<div class="text">
													<a class="link" href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('link_text'); ?>"><?php the_sub_field('link_text'); ?></a>
												</div>
												<?php

											elseif( get_row_layout() == 'file' ): 

												?>
												<div class="text">
													<?php $file = get_sub_field( 'file' ); ?>
													<a target="_blank" class="link" href="<?php echo $file['url']; ?>" title="<?php the_sub_field('link_text'); ?>"><?php the_sub_field('link_text'); ?></a>
												</div>
												<?php

											elseif( get_row_layout() == 'map' ): 

												$location = get_sub_field('map');
												if( !empty($location) ):
												?>
												<div class="map">
													<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
												</div>
												<?php 
												endif; 

											endif;

										endwhile;
									endif;
									?>

								</div>
								<?php
							// end while for items
							endwhile;
						endif;

					?>
					</div>
					<?php
					// end while for rows
					endwhile;
				?>
				</div>
			</div>
			<?php
			endif;
			?>

		</main>
	</div>

<?php
get_footer();
