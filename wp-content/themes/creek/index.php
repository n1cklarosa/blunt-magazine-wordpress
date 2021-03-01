<?php get_header(); 

$c_two_post = get_theme_mod('c_two_post');
$c_home_layout = get_theme_mod('c_home_layout');
$c_sidebar_side = get_theme_mod('c_sidebar_side');

$want_header_ad = get_theme_mod('want_header_ad');
$want_two_post = get_theme_mod('want_two_post');

?>

<?php if( !is_paged() ) : 
	if( get_theme_mod('want_header_slider' ) == true ){
		get_template_part('inc/slider');
	}; 
endif; 

if( get_theme_mod('want_header_ad') == true ){
	get_template_part('inc/header_ad');
}; ?>

<div id="content" class="container border-top"><div class="row">

	<?php	if( $c_sidebar_side == 'left' || empty($c_sidebar_side) ){ get_sidebar(); } ?>
	 
	<div id="article-list"  data-mh="article-list-height" <?php	if($c_sidebar_side == 'none') { ?>class="col col-12"<?php }else{ ?>class="col col-8 col-md-8" <?php } ?> >
		<div class="row al">
			<?php 
			
			if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				
				if( $wp_query->current_post == 0 && !is_paged() || $wp_query->current_post == 1 && !is_paged() ){
					//higlighted posts layout
					if($c_two_post == 'grid' || empty( $c_two_post ) ) : get_template_part('inc/article-grid'); 
				 	elseif($c_two_post == 'list') : get_template_part('inc/article-list'); 
					elseif($c_two_post == 'standard') : get_template_part('inc/article-standard');
					else : get_template_part('inc/article-grid');
				 	endif;	
				}else{
					//other posts layout
					if($c_home_layout == 'list' ) : get_template_part('inc/article-list'); 
				 	elseif($c_home_layout == 'grid') : get_template_part('inc/article-grid'); 
					elseif($c_home_layout == 'standard') : get_template_part('inc/article-standard');
					else :  get_template_part('inc/article-list');
				 	endif;		
				} 
		    
			endwhile; endif; ?>
		</div>
		<div class="row">
			<?php get_template_part('inc/pager'); ?>
		</div>
	</div>

	<?php	if($c_sidebar_side == 'right'){ get_sidebar(); } ?>

</div></div>


<?php get_footer() ?>