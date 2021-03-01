<!-- SLIDER -->
<div id="slider" class="container padding-vertical">
	<div id="controlLooper" data-looper="go" class="looper slide">
    <div class="looper-inner">

        <?php 

          global $post;
          $args = array(
            'tag' => 'featured',
            'numberposts' => 4, 
          );
          $featured_posts = get_posts( $args );
          if($featured_posts) {
            foreach ( $featured_posts as $post ) : setup_postdata( $post );
            ?>
            <div class="item">
              <div class="relative">
                <div class="img" style="background-image: url('<?php if ( has_post_thumbnail()) : the_post_thumbnail_url( 'full' ); endif; ?>'); "><div class="img-inner"></div></div>
                <div class="text">
                  <div class="middle a-white">
                    <a href="<?php the_permalink(); ?>">
                      <span class="categories meta border-bottom a-meta"><?php foreach((get_the_category()) as $category) {echo esc_attr( $category->cat_name . ' ') ;}?></span>
                      <h2 class="title h1"><?php the_title(); ?></h2>
                      <span class="meta a-meta read-more">read more</span>
                    </a>
                    <div class="cross-tl"></div>
                    <div class="cross-br"></div>
                  </div>
                </div>
              </div>
            </div>
          <?php
          endforeach; }
          wp_reset_postdata();
        ?>
        
    </div>
    <nav>
      <a class="looper-control" data-looper="prev" href="#controlLooper">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="looper-control right" data-looper="next" href="#controlLooper">
        <i class="fa fa-angle-right"></i>
      </a>
    </nav>
	</div>
</div>
<!-- /SLIDER -->