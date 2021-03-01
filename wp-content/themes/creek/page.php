<?php get_header();

$c_article_sidebar_side = get_theme_mod('c_article_sidebar_side');

?>

<?php get_template_part('inc/header_ad') ?>

<div id="content" class="container border-top"><div class="row">
	
	<?php	if( $c_article_sidebar_side == 'left' || $c_article_sidebar_side == ''){ get_sidebar(); } ?>
	
	<div id="article-list"  data-mh="article-list-height" <?php	if( $c_article_sidebar_side == 'none') { ?>class="col col-12"<?php }else{ ?>class="col col-8 col-md-8" <?php } ?> >
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

	     get_template_part('inc/article-standard');
			  
			endwhile; endif; ?>
		</div>
		<div class="row">
			<?php get_template_part('inc/pager'); ?>
		</div>
		<div class="row">
			<?php comments_template( '', true );  ?>
		</div>
	</div>

	<?php	if( $c_article_sidebar_side == 'right'){ get_sidebar(); } ?>

</div></div>

<?php get_footer() ?>