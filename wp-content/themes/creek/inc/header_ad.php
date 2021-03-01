<?php 
if ( get_theme_mod( 'want_header_ad') != 0 ){ ?>
	<div id="header_ad" class="container padding-vertical row border-top">
		<?php echo get_theme_mod( 'header_ad', '<img src="http://placehold.it/1024x90/333/fff?text=Advertise" alt="">' );	?>
	</div>
<?php } ?>