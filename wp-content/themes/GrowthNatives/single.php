<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Porto
 * @since Porto
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			// get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

	<h2>this is writen in single.php</h2>

</main><!-- #site-content -->

<?php  ?>

<?php get_footer(); ?>