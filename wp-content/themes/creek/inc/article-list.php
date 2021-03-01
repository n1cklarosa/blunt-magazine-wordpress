<article id="post-<?php the_ID(); ?>" <?php post_class('article-item article-list border-bottom row inner'); ?>>
	<div class="featured-image col col-3 col-md-6" data-mh="list-group">
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" class="bg-img block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>')"></a>
		<?php endif; ?>
	</div>
	<div class="text col col-9 col-md-6 relative padding-bottom" data-mh="list-group">

			<div class="inner-middle text-vertical padding-left">
				<span class="categories a-meta meta border-bottom"><?php the_category(', '); ?></span>
				<h2 class="title padding-vertical h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>

			<div class="meta color-meta a-meta meta-meta">
				<span class="author"><?php esc_html_e( 'By', 'creek' ) ?> <?php the_author_posts_link(); ?></span>
				<span class="date"><?php esc_html_e( 'On', 'creek' ) ?> <time datetime="<?php echo get_the_date('Y-m-d'); ?>"> <?php echo get_the_date(); ?> </time></span>
			</div>
			

	</div>
</article>