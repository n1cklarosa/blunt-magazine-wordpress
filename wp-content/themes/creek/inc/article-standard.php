<article id="post-<?php the_ID(); ?>" <?php post_class('article-item article-standard row inner border-bottom'); ?>>
<div class="row">
	<div class="featured-image">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php if( is_single() || is_page() ) : ?>
				<div class="bg-img block" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></div>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>" class="bg-img block" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<div class="text padding-top row ">

		<div class="article-header text-center padding-vertical border-bottom col-10 col-md-12 margin-center">
			<span class="categories meta a-meta border-bottom"><?php the_category(', '); ?></span>
			<?php if(is_single() || is_page() ) : ?>
				<h1 class="padding-vertical article-title"><?php the_title(); ?></h1>
			<?php else : ?>
				<h2 class="padding-vertical article-title h1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>
			<div class="meta color-meta a-meta padding-vertical">
				<span class="author"><?php esc_html_e( 'By', 'creek' ) ?> <?php the_author_posts_link(); ?></span>
				<span class="date"><?php esc_html_e( 'On', 'creek' ) ?> <time datetime="<?php echo get_the_date('Y-m-d'); ?>"> <?php echo get_the_date(); ?> </time></span>
			</div>
		</div>

		<div class="row article-share-buttons">
			<div class="buttons">
				<a href="#" data-href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" onclick="javascript:window.open(this.dataset.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="facebook button border-left border-right border-bottom border-top background-white"><span class="fa fa-facebook"></span></a>
				<a href="#" data-href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" onclick="javascript:window.open(this.dataset.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="twitter button  border-left border-right border-bottom border-top background-white"><span class="fa fa-twitter"></span></a>
			</div>
		</div>

		<div class="article-content excerpt padding-vertical">
			<?php the_content(); ?>
		</div>
		<?php
			wp_link_pages( array(
			'before'      => '<div class="post-pagination border-top row text-center color-meta meta padding-vertical col-10 col-md-12 margin-center"><span class="page-links-title">' . esc_html__( 'Pages', 'creek' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			) );
		?>

		<div class="article-meta border-top row text-center color-meta meta padding-vertical col-10 col-md-12 margin-center">
			<div class="col-6 col col-md-12 meta-comments text-left"><?php comments_popup_link( '<span>0</span> Comments', '<span>1</span> Comment', '<span>%</span> Comments', '', ''); ?></div>
			<div class="col-6 col col-md-12 meta-author text-right right"><?php the_tags(); ?></div>
		</div>
	</div>
</div>
</article>