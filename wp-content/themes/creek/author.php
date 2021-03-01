<?php get_header() ?>

<?php get_template_part('inc/header_ad') ?>

<div id="content" class="container border-top"><div class="row">

	<?php	if(get_theme_mod('c_sidebar_side') == 'left' || get_theme_mod('c_sidebar_side') == ''){ get_sidebar(); } ?>
	 
	<div id="article-list"  data-mh="article-list-height" <?php	if(get_theme_mod('c_sidebar_side') == 'none') { ?>class="col col-12"<?php }else{ ?>class="col col-8 col-md-8" <?php } ?> >
		<div id="archive-title" class="row inner text-center border-bottom">
			<h1 class="page-title"><span class="padding-bottom text-center block"><?php the_author_link(); ?></span></h1>
			<div class="archive-description border-top">
				<div class="row social">
					<div class="buttons">
						<?php if(get_the_author_meta('email')){  ?>
							<a href="mailto:<?php the_author_meta('email'); ?>" class="facebook button border-left border-right border-bottom border-top background-white"><i class="fa fa-envelope" aria-hidden="true"></i></a>
						<?php } if(get_the_author_meta('user_url')){  ?>
							<a href="<?php the_author_meta('user_url'); ?>" class="twitter button  border-left border-right border-bottom border-top background-white"><i class="fa fa-link" aria-hidden="true"></i></a>
						<?php }  ?>
					</div>
				</div>
				<p><?php the_author_meta('description'); ?></p>
			</div>
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