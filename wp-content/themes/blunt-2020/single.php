<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper w-100" id="single-wrapper"> 
		<main class="site-main w-100" id="main">
			<?php get_template_part( 'ad-templates/article', 'header' );?>

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/content', 'single' ); 
			}
			?>

		</main><!-- #main --> 
</div><!-- #single-wrapper -->

<?php
get_footer();
