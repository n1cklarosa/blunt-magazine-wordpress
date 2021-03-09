<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="tag-wrapper">

    <div class="w-100" id="content" tabindex="-1">
        <main class="site-main" id="main">
            <?php get_template_part('global-templates/tag-page'); ?>

        </main><!-- #main -->
    </div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
