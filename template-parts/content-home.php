<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package summerschool
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content columns eight">
		<?php
			the_content();
		?>
	</div>

	<div class="entry-imagem columns four">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/allan-feature-pod.jpg" width="500" height="auto" alt="Allan Walker">
	</div>

</article>
