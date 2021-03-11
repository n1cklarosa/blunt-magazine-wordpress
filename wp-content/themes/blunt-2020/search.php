<?php
/**
 * The template for displaying search results pages
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
 
?>


<div class="wrapper" id="search-wrapper">

	<div class="w-100" id="content" tabindex="-1">
		<main class="site-main" id="main">
			<?php get_template_part('global-templates/search-page'); ?>

		</main><!-- #main -->
	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
