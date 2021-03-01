<div id='bottom-banner'>
    <script>
        googletag.cmd.push(function() { googletag.display('bottom-banner'); });
    </script>
</div>


<?php $c_footer_width = get_theme_mod('c_footer_width'); ?>

<footer id="footer" class="color-white <?php if ( get_theme_mod('c_footer_width') == '' || $c_footer_width == 'small') : ?>container<?php endif; ?>">
	
	<div id="footer-logo" class="logo text-center a-meta border-top">
		<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			}else{	?>
				<p class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php } ?>
	</div>

	<div class="<?php if ( $c_footer_width == '' || $c_footer_width == 'full') : ?> background-dark <?php else : ?>background-dark<?php endif; ?> a-white"><div class="padding-top">

		<div id="footer-social" class="meta">
			<?php wp_nav_menu( array( 'theme_location' => 'social-menu', 'menu_id' => 'footer-social-menu', 'menu_class' => 'menu text-center' ) ); ?>
		</div>
		<div id="copyright" class="text-center meta a-meta color-meta">
			<p><?php echo get_theme_mod( 'creek_copyright', esc_html__( '&copy; 2017 weartstudio', 'creek' ) ); ?></p>
		</div>

	</div></div>
</footer>

<div id="search_popup"><?php get_search_form() ?></div>



<?php wp_footer() ?>
</body>
</html>