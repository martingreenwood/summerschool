<?php
/**
 * Template Name: Protect
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package summerschool
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php 
			if ( is_user_logged_in() ):
			?>

			<?php if (have_posts()): ?>
			<div class="container maincopy left">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
			</div>
			<?php endif ?>

			<?php
			//user is logged in, put your regular codes
			else:

				if (have_posts()): ?>
				<div class="container maincopy">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part ( 'template-parts/content', 'login' );

				endwhile; // End of the loop.
				?>
				</div>
				<?php endif;
			
			endif;
			?>

		</main>
	</div>

<?php
get_footer();
