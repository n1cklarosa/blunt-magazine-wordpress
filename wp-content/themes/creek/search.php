<?php get_header() ?>

<?php get_template_part('inc/header_ad') ?>

<div id="content" class="container border-top"><div class="row">

	<?php	if(get_theme_mod('c_sidebar_side') == 'left' || get_theme_mod('c_sidebar_side') == ''){ get_sidebar(); } ?>
	 
	<div id="article-list"  data-mh="article-list-height" <?php	if(get_theme_mod('c_sidebar_side') == 'none') { ?>class="col col-12"<?php }else{ ?>class="col col-8 col-md-8" <?php } ?> >
		<div id="archive-title" class="row inner text-center border-bottom">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'creek' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
		    
			endwhile; 
			else :
				echo '<div class="inner">';
				echo ('<p class="text-center">'.esc_html__( 'No posts with this criteria. Try to search something else.', 'creek' ).'</p>');
				get_search_form();
				echo '</div>';
			endif; ?>
		</div>
		<div class="row">
			<?php get_template_part('inc/pager'); ?>
		</div>
	</div>

	<?php	if(get_theme_mod('c_sidebar_side') == 'right'){ get_sidebar(); } ?>

</div></div>


<?php get_footer() ?>