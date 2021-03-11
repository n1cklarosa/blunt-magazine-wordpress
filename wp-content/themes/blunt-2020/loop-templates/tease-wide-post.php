<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$size = 'col-lg-4';
if (isset($args['size'])):
    $size = $args['size'];
endif;
?>

<article <?php post_class('col-12 col-md-6 mb-4 mb-lg-0 '.$size.' tease tease-wide'); ?>
    id="post-<?php the_ID(); ?>">
    <div class="tile-wrapper">
        <div class="d-flex w-100 align-items-start">
            <div class="tile-image mr-3">
                <?php echo get_the_post_thumbnail($post->ID, 'baby-tile', ['class' => 'img-fluid']); ?>
            </div>
            <div class="article-content d-block">
                <header class="entry-header">
                    <?php show_cats(); ?>

                    <?php
                    the_title(
    sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
    '</a></h2>'
);
                    ?>


                </header><!-- .entry-header -->
            </div>

        </div>


        <footer class="entry-footer mt-3">
            <?php show_author(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->