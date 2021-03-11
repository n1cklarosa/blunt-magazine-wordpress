<div id="popupMenu">
    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar">
        <nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-black" aria-labelledby="main-nav-label">
            <div class="container header-container">
                <button style="min-width:76px;opacity:0;" class="enable-related text-left  d-lg-none pl-0" type="button"
                    data-toggle="related" data-target="#realtedItems" aria-controls="relatedItemsControls"
                    aria-expanded="false"
                    aria-label="<?php esc_attr_e('Toggle related items', 'understrap'); ?>">
                    <img style='width:18px;height:auto;'
                        src="<?php echo get_template_directory_uri(); ?>/img/reading.svg"
                        class="img-fluid" alt="My reading List">
                </button>
                <div class="site-branding  ml-auto mr-auto ml-lg-none mr-lg-4">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/blunt-logo.svg"
                            class="img-fluid" alt="Blunt Mag">
                    </a>
                </div>
                <!-- end custom logo -->
                <div class="col-auto d-lg-none">
                    <button class='toggle-menu' type="button"
                        aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
                        <img style='width:20px;height:auto;'
                            src="<?php echo get_template_directory_uri(); ?>/img/close-white.svg"
                            class="img-fluid" alt="Site Menu">
                    </button>
                </div>

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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="search-form mt-3 mt-lg-2 mb-4" method="get" id="searchform"
                    action="<?php echo esc_url(home_url('/')); ?>"
                    role="search">
                    <div class="row align-items-center">
                        <div class="col-8 col-md-10">
                            <input id="s" name="s" type="text" class="form-control" placeholder="Search Blunt"
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                        <div class="col-4 col-md-2 text-right">
                            <button class="btn btn-block btn-outline-white">SEARCH</button>
                        </div>
                    </div>

                </form>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'd-lg-none',
                        'container_id'    => 'navbarMobile',
                        'menu_class'      => 'nav flex-column',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 1,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
                <ul class="navbarMobileDub mt-2 mb-5 d-lg-none nav flex-column">
                    <li class="list-item">
                        <a href="/about" class="nav-link">About Blunt Mag</a>
                    </li>
                    <li class="list-item">
                        <a href="/privacy" class="nav-link">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>