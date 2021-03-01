<?php

////////////////////////////////////////////////////////////
// first run setup
if ( ! function_exists( 'creek_setup' ) ) :

	function creek_setup() {
		load_theme_textdomain( 'creek', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		add_theme_support( 'custom-background', apply_filters( 'creek_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'custom-logo', array(
			'height'        => 300,
	    'width'         => 600,
			'flex-height' 	=> true,
	    'flex-widht'    => true,
			'header-text' 	=> array( 'site-title', 'site-description' )
		) );
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Header Menu', 'creek' ),
			'social-menu' => esc_html__( 'social Menu', 'creek' ),
		) );
	}

endif;
add_action( 'after_setup_theme', 'creek_setup' );



////////////////////////////////////////////////////////////
// Widgets, and sidebars
add_action( 'widgets_init', 'creek_widgets_init' );
function creek_widgets_init() {
  if ( function_exists('register_sidebar') ) {

		register_sidebar( array(
			'name' => esc_html__( 'Sidebar', 'creek' ),
			'id' => 'sidebar',
			'before_widget' => '<div id="%1$s" class="%2$s box inner">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="box-title  a-white text-center background-dark color-white meta text-normal">',
			'after_title'   => '</h4>',
		) );

	}
}
include('inc/widget/latest_posts.php');


////////////////////////////////////////////////////////////
// Set the content width in pixels, based on the theme's design and stylesheet.
// @global int $content_width
function creek_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'creek_content_width', 820 );
}
add_action( 'after_setup_theme', 'creek_content_width', 0 );



////////////////////////////////////////////////////////////
// google fonts import the right way
if ( ! function_exists( 'creek_fonts_url' ) ) :

function creek_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = '';
    if ( 'off' !== esc_html_x( 'on', 'Montserrat font: on or off', 'creek' ) ) {
        $fonts[] = 'Montserrat';
    }
    if ( 'off' !== esc_html_x( 'on', 'Lora font: on or off', 'creek' ) ) {
        $fonts[] = 'Droid Serif';
    }
    if ( 'off' !== esc_html_x( 'on', 'Lora font: on or off', 'creek' ) ) {
        $fonts[] = 'Playfair Display:700';
    }
    if ( 'off' !== esc_html_x( 'on', 'Lora font: on or off', 'creek' ) ) {
        $fonts[] = 'Lora';
    }
    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }
    return $fonts_url;
}
endif;



////////////////////////////////////////////////////////////
// Enqueue scripts and styles.
function creek_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.min.css', array(), null  );	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/font-awesome.min.css', array(), null  );
	wp_enqueue_style( 'creek-fonts', creek_fonts_url(), array(), null );
  wp_enqueue_style( 'looper-css', get_template_directory_uri() . '/assets/css/looper.css', array(), null  );
	wp_enqueue_style( 'modernscale-css', get_template_directory_uri() . '/assets/css/modernscale.css', array(), null  );
	

  wp_enqueue_script( 'matchheight', get_template_directory_uri() . '/assets/js/jquery.matchHeight-min.js', array( 'jquery' ), null, true );
  wp_enqueue_script( 'looper-js', get_template_directory_uri() . '/assets/js/looper.min.js', array( 'jquery' ), null, true );
  wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'creek-main-script', get_template_directory_uri() . '/assets/js/creek.js', array( 'jquery' ), null, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_action( 'wp_enqueue_scripts', 'creek_scripts' );



////////////////////////////////////////////////////////////
//video embed responsive
function creek_oembed_filter($html) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}
add_filter( 'embed_oembed_html', 'creek_oembed_filter', 10, 4 ) ;
add_filter( 'video_embed_html', 'creek_oembed_filter' ); // Jetpack



////////////////////////////////////////////////////////////
//excerts 
function creek_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'creek_excerpt_length', 999 );
function creek_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'creek_excerpt_more' );



////////////////////////////////////////////////////////////
//related blogposts
function creek_related_posts() {
    global $post;
    $categories = get_the_category($post->ID);
    if($categories) {
      $category_ids = array();
      foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
      $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 4, // Number of related posts that will be shown.
        'ignore_sticky_posts'=>1
      );
      $related_posts = get_posts( $args );
      if($related_posts) {
        foreach ( $related_posts as $post ) : setup_postdata( $post );
          if( get_theme_mod('c_related_layout') == "list" || get_theme_mod('c_related_layout') == '' ) : get_template_part( 'inc/article-list'); 
          elseif( get_theme_mod('c_related_layout') == "grid" ) : get_template_part( 'inc/article-grid');
          elseif( get_theme_mod('c_related_layout') == "standard" ) : get_template_part( 'inc/article-standard');
          endif;
      endforeach; }
    }
    wp_reset_postdata();
}



//////////////////////////////////////////////////////////////////
// COMMENTS LAYOUT
function creek_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  ?>
  <li <?php comment_class('border-top'); ?> id="comment-<?php comment_ID() ?>">
    <div class="thecomment padding-vertical">
      <div class="comment-header cf">
        <div class="author-img left padding-right"> <?php echo get_avatar($comment,$args['avatar_size']); ?> </div>
        <div class="left comment-header-text">
          <h6 class="author meta"><?php echo get_comment_author_link(); ?> <span class="reply meta a-meta"><?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span></h6>
          <span class="date meta a-meta color-meta"><?php printf('%1$s at %2$s', get_comment_date(),  get_comment_time()) ?></span>
        </div>
      </div>
      
      <div class="comment-text">
        <?php if ($comment->comment_approved == '0') : ?>
          <p><i class="icon-info-sign"></i> <?php esc_html__('Comment awaiting approval', 'creek'); ?></p>
        <?php endif; ?>
        <?php comment_text(); ?>
      </div>

    </div>
  </li>
  <?php 
}



////////////////////////////////////////////////////////////
//customizr

function creek_customizer( $wp_customize ) {

	//BLOCKS
  require_once( get_parent_theme_file_path( '/inc/customizr/sections.php') );

  //ADSENSE
  require_once( get_parent_theme_file_path( '/inc/customizr/adsense.php') );

  //LAYOUTs
  require_once( get_parent_theme_file_path( '/inc/customizr/header_footer_layout.php') );
  require_once( get_parent_theme_file_path( '/inc/customizr/article_layout.php') );

  //COLORS
  require_once( get_parent_theme_file_path( '/inc/customizr/colors.php') );
	
  //SANITIZE
  require_once( get_parent_theme_file_path( '/inc/customizr/sanitize.php') );
}add_action( 'customize_register', 'creek_customizer' );

//EXECUTE THE CUSTUMIZER COLOR CHANGES
require get_template_directory().'/inc/customizr/colors_style.php';