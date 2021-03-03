<?php
/**
 * The home template file 
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$featured = pull_front_featured();  
$latest = latest_without_featured($featured);
// var_dump($featured);
?>
 
<?php //get_template_part( 'global-templates/hero' ); ?>
 
<div class="wrapper" id="homepage-wrapper">

	<div class=" " id="content" tabindex="-1"> 

        <div class="home-page-leader bg-black"> 
            <div class="white-bottom"></div>
            <div class="container home-page-slider-wrapper">
                <div class="manual-stepper d-none d-lg-flex">
                    <div class="steps">
                        <?php $cnt = 0;
                        foreach ($featured as $key => $post) { 
                            setup_postdata($post); ?> 
                            <div class="step <?php echo $cnt == 0 ? 'active' : ''?>">
                                <span class="primary-cat">GAMING</span>
                                <?php
                                the_title(
                                    sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark" data-index="%d" class="slider-step">', esc_url( get_permalink()  ), $cnt ),
                                    '</a></h2>'
                                );
                                ?> 
                            </div>
                            <?php $cnt++;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-lg-10 col-12 pt-4">
                        <div id="homepageCarousel" class="swiper-container" >
                            <div class="swiper-wrapper"> 
                                <?php
                                $cnt = 0;
                                foreach ($featured as $key => $post) { 
                                    setup_postdata($post); ?> 
                                    <div class="swiper-slide">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            <div class="image-wrapper">
                                                <?php echo get_the_post_thumbnail( $post->ID, 'tile-mobile', array('class' => 'd-block home-image') );  ?>
                                                <div class="slider-meta">
                                                    <h5>GAMING</h5>
                                                     <?php
                                                        the_title(
                                                            sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark"  >', esc_url( get_permalink()  ) ),
                                                            '</a></h2>'
                                                        );
                                                        ?> 
                                                </div>
                                                <div class="gradient"></div>
                                            </div>
                                        </a> 
                                    </div>
                                    <?php $cnt++;
                                }
                                wp_reset_postdata(); ?> 
                            </div> 
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="spacer eighty"></div>

        <div class="container latest-posts mb-5">
            <div class="px-3 px-md-0">
                <div class="row pb-4"> 
                    <?php
                    $cnt = 0;
                    foreach ($latest as $key => $post) { 
                        setup_postdata($post); ?>  
                        <?php $cnt++;
                        if($cnt < 5){
                            get_template_part( 'loop-templates/tease-tall-post' );
                        } else {
                            get_template_part( 'loop-templates/tease-wide-post' ); 
                        }
                    }
                    wp_reset_postdata(); ?>  
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row more-div mb-5">
                <div class="col-12 mb-4"  role="complementary">
                    <div class="more-heading">
                        <h4>BLUNT LONG READS</h4> 
                    </div>
                </div>
            </div>
            <div class="row mt-5 pb-4">
                <div class="col-12">
                    
                    <div class="px-3 px-md-0 mb-5 mb-md-0">
                        <div class="row">
                            <?php
                            $cnt = 0;
                            foreach ($featured as $key => $post) { 
                                setup_postdata($post); 
                                $cnt++; 
                                get_template_part( 'loop-templates/tease-tall-long-read' ); 
                            }
                            wp_reset_postdata(); ?>  
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row more-div mb-5 mt-5">
                <div class="col-12"  role="complementary">
                    <div class="more-heading">
                        <h4>VIDEOS</h4> 
                    </div>
                </div>
            </div>
            <div class="row pb-5 front-videos">
                 <div class="col-12 col-md-10 primary-box">
                     <div class="px-3 px-md-0 mb-5 mb-md-0">
                        <?php
                        $post = $featured[0];
                        setup_postdata($post); ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <div class="image-div">
                                <?php echo get_the_post_thumbnail( $post->ID, 'video-image', array('class' => 'd-block home-image') );  ?>
                            </div>
                            <div class="entry-meta">
                                <div class="subtitle mb-3">LATEST</div>
                                <?php
                                the_title(
                                    sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark" data-index="%d" class="slider-step">', esc_url( get_permalink()  ), $cnt ),
                                    '</a></h2>'
                                );
                                ?> 
                            </div>
                        </a>
                        <?php wp_reset_postdata();
                     ?>
                     </div>
                     
                 </div>
                 <div class="col-12 col-md-2">
                     <div class="w-100 px-3 smaller d-none d-md-block">
                         <h5 class="subtitle ">
                             RECENT
                         </h5>
                          <?php
                            $cnt = 0;
                            foreach ($featured as $key => $post) { 
                                if($cnt == 0){
                                    $cnt++;  
                                    continue;
                                } 
                                setup_postdata($post); ?>
                               
                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                     
                                    <?php echo get_the_post_thumbnail( $post->ID, 'baby-tile', array('class' => 'd-block home-image') );  ?>
                                     
                                    <div class="entry-meta-small"> 
                                        <?php
                                        the_title(
                                            sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark" data-index="%d" class="slider-step">', esc_url( get_permalink()  ), $cnt ),
                                            '</a></h2>'
                                        );
                                        ?> 
                                    </div>
                                </a>
                                <?php $cnt++;  
                            }
                            wp_reset_postdata(); ?>  
                    </div>
                    <div class=" ml-3 mr-3 ml-md-0 mr-md-0">
                        <a href="/videos" class="btn btn-block btn-outline-secondary">MORE VIDEOS</a>
                    </div>
                 </div>
            </div>

            <div class="row mt-5"> 
                <div class="col-12 col-md-8">
            

                </div>
                
                <div class="col-12 col-lg-4 ">
                    <!-- Do the right sidebar check -->
                    <?php get_template_part( 'sidebar-templates/sidebar-right' ); ?>
                </div>

            </div><!-- .row -->
        </div>
	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
