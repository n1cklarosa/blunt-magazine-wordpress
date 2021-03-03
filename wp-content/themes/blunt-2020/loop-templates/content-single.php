<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="header-wrapper-bg pt-4">
		<div class="header-wrapper container"> 
			<header class="entry-header row no-gutters">
				<div class="col-12">
					<div class="image-bg">
						<?php echo get_the_post_thumbnail( $post->ID, 'header-slider' ); ?>
						<div class="gradient"></div>
					</div>
				</div>
				<div class="header-details">
					<div class="container">
						<div class="row  ">
							<div class="col-12 col-md-7">
								<h5 class="mt-1 mb-2  pl-2 pr-5 pl-md-0 pr-md-0">GAMING</h5>
								<?php the_title( '<h1 class="entry-title pl-2 pr-5 pl-md-0 pr-md-0">', '</h1>' ); ?>
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
				<?php get_template_part( 'global-templates/article-sharing' ); ?> 
			</div>
			<div class="col-12 col-md-6">
				<div class="the-content">
					<?php the_content(); ?>
				</div>
				<div class="content-footer">
					<?Php understrap_entry_footer(); ?>
				</div>
				<div class="related-content"  role="complementary">
					<h5>RELATED</h5>
				</div>
				
			</div>
			<div class="col-12 col-md-1"></div>
			<div class="col-12 col-md-3">
				<!-- Do the right sidebar check -->
				<?php get_template_part( 'sidebar-templates/sidebar-right' ); ?> 
			</div>
		</div>
		<div class="row more-div">
			<div class="col-12 mb-3"  role="complementary">
				<div class="more-heading">
					<h4>MORE IN GAMING</h4> 
				</div>
			</div>
		</div>

		

		<?php
		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<!-- <?php understrap_entry_footer(); ?> -->

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
