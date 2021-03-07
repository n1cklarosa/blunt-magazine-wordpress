<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="header-wrapper-bg pt-4">
		<div class="header-wrapper container">
			<header class="entry-header row no-gutters">
				<div class="col-12">
					<div class="image-bg">
						<?php echo get_the_post_thumbnail($post->ID, 'header-slider'); ?>
						<div class="gradient"></div>
					</div>
				</div>
				<div class="header-details">
					<div class="container">
						<div class="row  ">
							<div class="col-12 col-md-7">
								<h5 class="mt-1 mb-2  pl-2 pr-5 pl-md-0 pr-md-0">GAMING</h5>
								<?php the_title('<h1 class="entry-title pl-2 pr-5 pl-md-0 pr-md-0">', '</h1>'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="header-footer-details">
					<div class="container">
						<div class="row ">
							<div class="col-12">
								<div class=" pl-2 pr-5 pl-md-0 pr-md-0 w-100">
									<?php understrap_posted_on(); ?>
								</div>

							</div>
						</div>
					</div>
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
				<div class="content-footer">
					<?php understrap_entry_footer(); ?>
				</div>
				<?php $related = return_related(get_the_ID());
                if ($related):  ?>
				<div class="related-content" role="complementary">
					<h5 class='mb-3'>RELATED</h5>
				</div>
				<div class="row mb-5">
					<?php
                    foreach ($related as $key => $post) {
                        setup_postdata($post);
                        get_template_part('loop-templates/tease-wide-related', null, ['size' =>'col-lg-6']);
                    }
                    wp_reset_postdata();  ?>
				</div>
				<?php endif;?>

			</div>

			<div class="col-12 col-md-3">
				<!-- Do the right sidebar check -->
				<?php get_template_part('sidebar-templates/sidebar-right'); ?>
			</div>
		</div>
		<?php $more = return_more_from_category(get_the_ID());   ?>

		<?php if ($more): ?>
		<div class="more-div">
			<div class="row ">
				<div class="col-12 mb-3" role="complementary">
					<div class="more-heading">
						<h4 class='mb-4'>MORE IN GAMING</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
                    foreach ($related as $key => $post) {
                        setup_postdata($post);
                        get_template_part('loop-templates/tease-tall-post', );
                    }
                    wp_reset_postdata();  ?>
			</div>
		</div>
		<?php endif;
        wp_reset_postdata();  ?>


	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<!-- <?php understrap_entry_footer(); ?> -->

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->