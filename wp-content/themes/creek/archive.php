<?php get_header() ?>

<?php get_template_part('inc/header_ad') ?>

<div id="content" class="container  border-top"><div class="row">

	<?php	if(get_theme_mod('c_sidebar_side') == 'left' || get_theme_mod('c_sidebar_side') == ''){ get_sidebar(); } ?>
	 
	<div id="article-list"  data-mh="article-list-height" <?php	if(get_theme_mod('c_sidebar_side') == 'none') { ?>class="col col-12"<?php }else{ ?>class="col col-8 col-md-8" <?php } ?> >
		<div id="archive-title" class="row inner text-center border-bottom">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description border-top">', '</div>' );
			?>
		</div>
		<div class="row al">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				if( $wp_query->current_post == 0 && !is_paged() || $wp_query->current_post == 1 && !is_paged() ){
					//higlighted posts layout
					if(get_theme_mod('c_two_post') == 'grid' ) : get_template_part('inc/article-grid'); 
				 	elseif(get_theme_mod('c_two_post') == 'list') : get_template_part('inc/article-list'); 
					elseif(get_theme_mod('c_two_post') == 'standard') : get_template_part('inc/article-standard');
					else : get_template_part('inc/article-grid');
				 	endif;	
				}else{
					//other posts layout
					if(get_theme_mod('c_archive_layout') == 'list' ) : get_template_part('inc/article-list'); 
				 	elseif(get_theme_mod('c_archive_layout') == 'grid') : get_template_part('inc/article-grid'); 
					elseif(get_theme_mod('c_archive_layout') == 'standard') : get_template_part('inc/article-standard');
				 	else : get_template_part('inc/article-list');
				 	endif;		
				} 
		    
			endwhile; endif; ?>
		</div>
		<div class="row">
			<?php get_template_part('inc/pager'); ?>
		</div>
	</div>

	<?php	if(get_theme_mod('c_sidebar_side') == 'right'){ get_sidebar(); } ?>

</div></div>


<?php get_footer() ?>