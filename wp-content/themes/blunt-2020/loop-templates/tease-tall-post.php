<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('col-12 col-md-3 tease tease-tall'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php echo get_the_post_thumbnail( $post->ID, 'tile' ); ?>
		</a>
		<?php show_cats(); ?>
		<div class="title w-100">
			<?php
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?> 
		</div>
	</header><!-- .entry-header -->

	 
	<footer class="entry-footer">

		<?php show_author(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
