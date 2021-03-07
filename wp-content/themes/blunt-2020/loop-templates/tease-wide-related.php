<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$size = 'col-md-4';
if (isset($args['size'])):
    $size = $args['size'];
endif;
?>

<article <?php post_class('col-12 '.$size.' tease  tease-related'); ?>
    id="post-<?php the_ID(); ?>">
    <div class="tile-wrapper">
        <div class="d-flex w-100 align-items-start">
            <div class="tile-image mr-2">
                <?php echo get_the_post_thumbnail($post->ID, 'baby-tile', ['class' => 'img-fluid']); ?>
            </div>
            <div class="article-content d-block">
                <header class="entry-header">
                    <?php
                    the_title(
    sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
    '</a></h2>'
);
                    ?>


                </header><!-- .entry-header -->
            </div>

        </div>



    </div>
</article><!-- #post-## -->