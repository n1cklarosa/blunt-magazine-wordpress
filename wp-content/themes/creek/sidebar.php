<div id="sidebar" class="col col-4 col-md-4"  data-mh="article-list-height">
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<div class="footer-sidebar">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	<?php endif; ?>
</div>