<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php if ( is_front_page() && is_home() ) { ?>
	<script>
    window.googletag = window.googletag || {cmd: []};

    googletag.cmd.push(function() {
        googletag.defineSlot('/21901919444/complaints_department/blunt_mag', [[728, 90], [320, 100], [320, 50], [970, 250]], 'top-banner').addService(googletag.pubads()).setTargeting('position', 'a').setTargeting('section', 'home')
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    })

    googletag.cmd.push(function() {
        googletag.defineSlot('/21901919444/complaints_department/blunt_mag', [[300, 250], [300, 600]], 'top-mrec').addService(googletag.pubads()).setTargeting('position', 'a').setTargeting('section', 'home')
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    })

    googletag.cmd.push(function() {
        googletag.defineSlot('/21901919444/complaints_department/blunt_mag', [[728, 90], [320, 100], [320, 50], [970, 250]], 'bottom-banner').addService(googletag.pubads()).setTargeting('position', 'b').setTargeting('section', 'home')
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    })

    googletag.cmd.push(function() {
        googletag.defineSlot('/21901919444/complaints_department/blunt_mag', [[300, 250], [300, 600]], 'bottom-mrec').addService(googletag.pubads()).setTargeting('position', 'b').setTargeting('section', 'home')
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    })
</script>
	<?php
} else {
	?>
	<script>
    window.googletag = window.googletag || {cmd: []};

    googletag.cmd.push(function() {
        googletag.defineSlot('/21901919444/complaints_department/blunt_mag', [[728, 90], [320, 100], [320, 50], [970, 250]], 'top-banner').addService(googletag.pubads()).setTargeting('position', 'a').setTargeting('section', 'ros')
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    })

    googletag.cmd.push(function() {
        googletag.defineSlot('/21901919444/complaints_department/blunt_mag', [[300, 250], [300, 600]], 'top-mrec').addService(googletag.pubads()).setTargeting('position', 'a').setTargeting('section', 'ros')
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    })

    googletag.cmd.push(function() {
        googletag.defineSlot('/21901919444/complaints_department/blunt_mag', [[728, 90], [320, 100], [320, 50], [970, 250]], 'bottom-banner').addService(googletag.pubads()).setTargeting('position', 'b').setTargeting('section', 'ros')
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    })

    googletag.cmd.push(function() {
        googletag.defineSlot('/21901919444/complaints_department/blunt_mag', [[300, 250], [300, 600]], 'bottom-mrec').addService(googletag.pubads()).setTargeting('position', 'b').setTargeting('section', 'ros')
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    })
</script>

	<?php
} ?>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php 
	$c_menu_position = get_theme_mod('c_menu_position');
?>


<?php if (  $c_menu_position == 'top' || $c_menu_position == 'top_fixed') : get_template_part('inc/header_menu'); endif; ?>

<div id="header-logo" class="logo text-center container">
	<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		}else{	
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="tagline color-meta"><span><?php bloginfo( 'description' ); ?></span></p>
			<?php else : ?>
				<p class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<p class="tagline color-meta"><span><?php bloginfo( 'description' ); ?></span></p>
			<?php endif; ?>
	<?php } ?>
</div>

<?php if (  $c_menu_position == 'bottom' || get_theme_mod('c_menu_position') == '') : get_template_part('inc/header_menu'); endif; ?>
	
<div id='top-banner'>
    <script>
        googletag.cmd.push(function() { googletag.display('top-banner'); });
    </script>
</div>