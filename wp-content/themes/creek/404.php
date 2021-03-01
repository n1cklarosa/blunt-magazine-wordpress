<?php get_header() ?>


<div id="content" class="container border-top"><div class="row">
	 
	<div id="error404" class="col col-12" >
		<div class="row col-10 margin-center">

			<h1 class="border-bottom padding-vertical"><?php esc_html_e( 'Sorry, nothing to display.', 'creek' ); ?></h1>
			<p><?php esc_html_e( 'Try to search something.', 'creek' ); ?></p>
			<div class="col-10 margin-center">
				<?php get_search_form() ?>
			</div>
			
		</div>
	</div>

</div></div>

<?php get_footer() ?>