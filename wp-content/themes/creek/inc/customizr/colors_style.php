<?php
function creek_color_changer() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  $primary_color = get_theme_mod( 'primary_color' ); //E.g. #FF0000
  if( !empty($primary_color) ){
    $primary = "
            a:hover,
            .a-primary a,
            .a-white a:hover,
            .a-meta a:hover,
            footer .menu li:after, #menu .menu li:after,
            #header-menu .current-menu-item a,
            .color-primary { color: $primary_color; }


            ::-moz-selection,
            ::selection{background-color: $primary_color}
            ";

    wp_add_inline_style( 'main-style', $primary );
  };

  $meta_color = get_theme_mod( 'meta_color' ); //E.g. #FF0000
  if( !empty($meta_color) ){
    $meta = "
            .a-meta a,
            .logo .tagline,
            #comments .comment.bypostauthor .thecomment .comment-header .comment-header-text .author,
            .color-meta { color: $meta_color; }
            ";

    wp_add_inline_style( 'main-style', $meta );
  };

  $dark_color = get_theme_mod( 'dark_color' ); //E.g. #FF0000
  if( !empty($dark_color) ){
    $dark = "
            
            a,
            .a-primary a:hover,
            body,
            .color-dark{ color: $dark_color; }

            input[type=submit]:hover, button:hover,
            #header-menu .menu-item-has-children .sub-menu,
            .navigation.pagination .nav-links .current,
            .background-dark { background-color: $dark_color; }

            #sidebar .box .box-title:after,
            #sidebar .box .box-title:before,
            blockquote, pre, address{border-color: $dark_color; }
            ";

    wp_add_inline_style( 'main-style', $dark );
  };

  $white_color = get_theme_mod( 'white_color' ); //E.g. #FF0000
  if( !empty($white_color) ){
    $white = "
    				.a-white a,
    				input[type=submit]:hover, button:hover,
    				.mean-container a.meanmenu-reveal,
    				#slider .item .text a:hover,
    				.navigation.pagination .nav-links .current,
            .color-white { color: $white_color; }

            .background-white,
            body{background: $white_color; }
            ";

    wp_add_inline_style( 'main-style', $white );
  };

  $border_color = get_theme_mod( 'border_color' ); //E.g. #FF0000
  if( !empty($border_color) ){
    $border = "
    				,
            .color-border { color: $border_color; }

            .border-top,
            .border-right,
            .border-left,
            hr,
            input, textarea, select,
            input[type=submit], button,
            #sidebar .tagcloud a,
            #sidebar ul li,
            #sidebar ul.menu li a,
            table,
            table caption, table th,
            table td, table th,
            .border-bottom{border-color: $border_color; }

            input[type=submit], button,
            blockquote, pre, address,
            .navigation.pagination .nav-links .page-numbers,
            mark{background-color: $border_color}

            #article-list{ box-shadow: 1px 0 0 $border_color, -1px 0 0 $border_color; }
            #article-list .article-grid:nth-of-type(odd) { box-shadow: 1px 0 0 $border_color; }
            ";

    wp_add_inline_style( 'main-style', $border );
  };

} add_action( 'wp_enqueue_scripts', 'creek_color_changer' );
?>