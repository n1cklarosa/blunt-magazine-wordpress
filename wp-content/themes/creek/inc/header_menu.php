
<?php 
	$c_menu_position_2 = get_theme_mod('c_menu_position');
	$c_menu_width = get_theme_mod('c_menu_width');

	if( isset($_GET['c_menu_position_2']) && !empty($_GET['c_menu_position_2'] )) {
	  $c_menu_position_2 =  $_GET['c_menu_position_2'];
	}if( isset($_GET['c_menu_width']) && !empty($_GET['c_menu_width'] )) {
	  $c_menu_width =  $_GET['c_menu_width'];
	}

?>


<?php if (  $c_menu_position_2 == 'top_fixed') : ?><div class="divider"></div><?php endif; ?>
<div id="menu" class="row <?php if (  $c_menu_position_2 == 'top_fixed') : ?>sticky-header<?php endif; if (  $c_menu_width == 'full') : ?> background-dark<?php endif; ?>">
	<div id="menu-container" class="container relative a-white meta  color-white <?php if (  $c_menu_width == 'small' || $c_menu_width == '') : ?>background-dark cf<?php endif; ?>">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'header-menu', 'menu_class' => 'left menu padding-left', 'container_class' => 'meanmenu' ) ); ?>

		<div id="menu-search" class="right padding-horizonal"><a class="fa fa-search"><!-- search --></a></div>
		<?php wp_nav_menu( array( 'theme_location' => 'social-menu', 'menu_id' => 'social-menu', 'menu_class' => 'right menu' ) ); ?>
	</div>
</div>