<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('col-12 col-md-4 tease tease-tall-long-read mb-5 mb-md-0'); ?> id="post-<?php the_ID(); ?>">
    <a href="<?php echo esc_url( get_permalink() ); ?>">
	<header class="entry-header">
		
        <?php echo get_the_post_thumbnail( $post->ID, 'tile' ); ?>
        <div class="read-length text-center text-gold">6 MIN READ</div>
		<div class="title w-100 text-center mt-4 pl-md-3 pr-md-3">
			<?php
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?> 
		</div>
	</header><!-- .entry-header --> 
</a> 
</article><!-- #post-## -->
