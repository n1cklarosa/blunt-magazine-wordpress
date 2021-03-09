<?php
/**
 * Stempalte foringle page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
 
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="page-header-wrapper  pt-4">
		<div class="header-wrapper-page container">
			<header class="entry-header row  ">
				<div class="col-12 col-md-7">
					<?php the_title('<h1 class="entry-title pl-2 pr-5 pl-md-0 pr-md-0">', '</h1>'); ?>
				</div>
			</header><!-- .entry-header -->
		</div>
	</div>

	<div class="entry-content container">
		<div class="row">
			<div class="col-12 col-md-2">
				<?php get_template_part('global-templates/article-sharing'); ?>
			</div>
			<div class="col-12 col-md-7">
				<div class="the-content">
					<?php the_content(); ?>
				</div>

			</div>

			<div class="col-12 col-md-3">
				<!-- Do the right sidebar check -->
				<?php get_template_part('sidebar-templates/sidebar-right'); ?>
			</div>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->