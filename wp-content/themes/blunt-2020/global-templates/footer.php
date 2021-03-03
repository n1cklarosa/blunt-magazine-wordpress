
<div class="wrapper" id="wrapper-footer">

	<footer class="container site-footer"  id="colophon">

		<div class="row ">

			<div class="col-md-3 col-lg-2"> 
                <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footer-1',
						'container_class' => 'footer-menu-wrapper',
						'container_id'    => 'footer-menu-1-container',
						'menu_class'      => 'nav flex-column',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu-1',
						'depth'           => 1,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div><!--col end -->
			<div class="col-md-3 col-lg-2"> 
                <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footer-2',
						'container_class' => 'footer-menu-wrapper',
						'container_id'    => 'footer-menu-2-container',
						'menu_class'      => 'nav flex-column',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu-2',
						'depth'           => 1,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div><!--col end -->
			<div class="col-0 col-lg-3 d-md-none d-lg-block"> 
                 
			</div><!--col end -->
			<div class="col-md-6 col-lg-5 join-blunt-mag"> 
                <h5 class='mb-2'>JOIN BLUNT MAG</h5>
                <div class="input-group mb-5">
                    <input type="text" class="form-control" placeholder="Enter Email Address" aria-label="Enter Email Address" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary pl-4 pr-4" type="button" id="button-addon2">JOIN</button>
                    </div>
                </div>
                <ul class="nav social-links">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-facebook-square "></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-spotify"></i></a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-youtube"></i></a>
                    </li> 
                </ul>
			</div><!--col end -->
        </div>
        <div class="row mt-5 bottom-row">
            <div class="col-7 site-branding left">
                <img style="max-width:65px;height:auto;" src="<?php echo get_template_directory_uri(); ?>/img/blunt-logo.svg" class="mb-3 img-fluid" alt="Blunt Mag">
                <p>All content © The Complaints Department PTY LTD 2020-2021<br>unless otherwise stated.</p>  
            </div>
            <div class="col-5 right">
                <div class="d-flex align-top align-items-start">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flag.svg" class=" " alt="Torres Strait Islander Flag">
                    <p>Blunt Magazine acknowledges the Australian Aboriginal and Torres Strait Islander peoples as the first inhabitants of the nation and the traditional custodians of the lands where we live, learn and work.</p>
                </div>
                    </div>

        </div><!-- row end -->

    </footer><!-- container end -->

</div><!-- wrapper end -->
<?php //understrap_site_info(); 