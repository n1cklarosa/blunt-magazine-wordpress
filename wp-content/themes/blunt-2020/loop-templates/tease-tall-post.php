<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class('col-12 col-md-6 col-lg-3 tease tease-tall'); ?>
	id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<div class="img-div text-center">
			<a href="<?php echo esc_url(get_permalink()); ?>">
				<?php echo get_the_post_thumbnail($post->ID, 'tile'); ?>
			</a>
		</div>
		<?php show_cats(); ?>
		<div class="title w-100">
			<?php
            the_title(
    sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
    '</a></h2>'
);
            ?>
		</div>
	</header><!-- .entry-header -->


	<footer class="entry-footer">

		<?php show_author(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->