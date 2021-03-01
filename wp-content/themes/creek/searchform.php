<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="row container">
	<div class="close a-white"><a href="#search" class="fa fa-times"></a></div>
	<input type="search" class="search-field col-10 col-md-10 col-xs-10 col" placeholder="<?php esc_html_e( 'Search...', 'creek' ); ?>" value="" name="s">
	<button type="submit" class="search-submit col-2 col"><i class="fa fa-search"></i></button>
</div>
</form>