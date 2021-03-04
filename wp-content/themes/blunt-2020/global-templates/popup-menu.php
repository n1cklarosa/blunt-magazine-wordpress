<div id="popupMenu">
    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar">
        <nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-black" aria-labelledby="main-nav-label">
            <div class="container header-container">
                <button style="min-width:66px" class="enable-related text-left  d-lg-none pl-0" type="button"
                    data-toggle="related" data-target="#realtedItems" aria-controls="relatedItemsControls"
                    aria-expanded="false"
                    aria-label="<?php esc_attr_e('Toggle related items', 'understrap'); ?>">
                    <img style='width:18px;height:auto;'
                        src="<?php echo get_template_directory_uri(); ?>/img/reading.svg"
                        class="img-fluid" alt="My reading List">
                </button>
                <div class="site-branding ml-auto mr-auto ml-lg-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/blunt-logo.svg"
                        class="img-fluid" alt="Blunt Mag">
                </div>
                <!-- end custom logo -->

                <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
                    <img style='width:40px;height:auto;'
                        src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.svg"
                        class="img-fluid" alt="Site Menu">
                </button>

                <!-- The WordPress Menu goes here -->
                <?php
                wp_nav_menu(
    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav mr-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
);
                ?>
                <nav class="my-2 my-md-0 mr-md-0 collapse  justify-content-end navbar-collapse">
                    <a class='toggle-menu'><img style='width:20px;height:auto;'
                            src="<?php echo get_template_directory_uri(); ?>/img/close-white.svg"
                            class="img-fluid" alt="Site Menu"></a>
                </nav>

            </div><!-- .container -->


        </nav><!-- .site-navigation -->

    </div><!-- #wrapper-navbar end -->
</div>