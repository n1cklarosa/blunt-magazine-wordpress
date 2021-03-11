<?php
/**
 * The home template file
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$featured = get_field('homepage_features', 'option');
$videos = get_field('homepage_videos', 'option');

$latest = latest_without_featured($featured);
// var_dump($featured);
?>

<?php //get_template_part( 'global-templates/hero' );?>

<div class="wrapper" id="homepage-wrapper">

    <div class="mb-5" id="content" tabindex="-1">

        <div class="home-page-leader bg-black">
            <div class="white-bottom"></div>
            <div class="container home-page-slider-wrapper">
                <div class="manual-stepper d-none d-lg-flex">
                    <div class="steps">
                        <?php $cnt = 0;
                        foreach ($featured as $key => $post) {
                            setup_postdata($post); ?>
                        <div
                            class="step <?php echo $cnt == 0 ? 'active' : ''?>">
                            <span class="primary-cat">GAMING</span>
                            <?php
                                the_title(
                                sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark" data-index="%d" class="slider-step">', esc_url(get_permalink()), $cnt),
                                '</a></h2>'
                            ); ?>
                        </div>
                        <?php $cnt++;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-lg-10 col-12 pt-4">
                        <div id="homepageCarousel" class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                $cnt = 0;
                                foreach ($featured as $key => $post) {
                                    setup_postdata($post); ?>
                                <div class="swiper-slide">
                                    <a
                                        href="<?php echo esc_url(get_permalink()); ?>">
                                        <div class="image-wrapper">
                                            <?php echo get_the_post_thumbnail($post->ID, 'tile-mobile', array('class' => 'd-block home-image')); ?>
                                            <div class="slider-meta">
                                                <h5>GAMING</h5>
                                                <?php
                                                        the_title(
                                        sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark"  >', esc_url(get_permalink())),
                                        '</a></h2>'
                                    ); ?>
                                            </div>
                                            <div class="gradient"></div>
                                        </div>
                                    </a>
                                </div>
                                <?php $cnt++;
                                }
                                wp_reset_postdata(); ?>
                            </div>
                            <div class="swiper-button-next swiper-button-white d-lg-none"></div>
                            <div class="swiper-button-prev swiper-button-white d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer eighty"></div>

        <div class="container latest-posts mb-lg-5">
            <div class="px-lg-0 px-3">
                <div class="row justify-content-center pb-4">
                    <?php
                    $cnt = 0;
                    foreach ($latest as $key => $post) {
                        setup_postdata($post); ?>
                    <?php $cnt++;
                        if ($cnt < 5) {
                            get_template_part('loop-templates/tease-tall-post');
                        } else {
                            get_template_part('loop-templates/tease-wide-post');
                        }
                    }
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row more-div mb-1 mb-lg-5">
                <div class="col-12 mb-lg-4" role="complementary">
                    <div class="more-heading">
                        <h4 class="mb-5 mb-lg-0"><span class='d-none d-lg-inline'>BLUNT</span> LONG READS</h4>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 pb-lg-4">
                <div class="col-12">

                    <div class="pt-0 pb-0 px-md-0 mb-lg-5 mb-md-0">
                        <div class="row">
                            <?php
                            $cnt = 0;
                            foreach ($featured as $key => $post) {
                                setup_postdata($post);
                                $cnt++;
                                get_template_part('loop-templates/tease-tall-long-read');
                            }
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row more-div my-lg-5  ">
                <div class="col-12" role="complementary">
                    <div class="more-heading">
                        <h4 class="mb-5 mb-lg-0">VIDEOS</h4>
                    </div>
                </div>
            </div>
            <div class="row pb-5 front-videos">
                <div class="col-12 col-lg-10 primary-box">
                    <div class="px-3 px-md-0 mb-5 mb-md-0">
                        <?php
                        $post = $videos[0];
                        setup_postdata($post); ?>
                        <a
                            href="<?php echo esc_url(get_permalink()); ?>">
                            <div class="image-div">
                                <?php echo get_the_post_thumbnail($post->ID, 'video-image', array('class' => 'd-block home-image'));  ?>
                            </div>
                            <div class="entry-meta">
                                <div class="subtitle mb-3">LATEST</div>
                                <?php
                                the_title(
                            sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark" data-index="%d" class="slider-step">', esc_url(get_permalink()), $cnt),
                            '</a></h2>'
                        );
                                ?>
                            </div>
                        </a>
                        <?php wp_reset_postdata();
                     ?>
                    </div>

                </div>
                <div class="col-12 col-lg-2">
                    <div class="w-100 px-3 smaller d-none d-lg-block">
                        <h5 class="subtitle ">
                            RECENT
                        </h5>
                        <?php
                            $cnt = 0;
                            foreach ($videos as $key => $post) {
                                if ($key == 0) {
                                    $cnt++;
                                    continue;
                                }
                                if ($key < 3):
                                setup_postdata($post);
                                endif; ?>

                        <a
                            href="<?php echo esc_url(get_permalink()); ?>">

                            <?php echo get_the_post_thumbnail($post->ID, 'baby-tile', array('class' => 'd-block home-image')); ?>

                            <div class="entry-meta-small">
                                <?php
                                        the_title(
                                    sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark" data-index="%d" class="slider-step">', esc_url(get_permalink()), $cnt),
                                    '</a></h2>'
                                ); ?>
                            </div>
                        </a>
                        <?php $cnt++;
                            }
                            wp_reset_postdata(); ?>
                    </div>
                    <div class="mt-4 mt-lg-0 ml-3 mr-3 ml-md-0 mr-md-0 text-center">
                        <a href="/category/video" class="btn btn-lg-block btn-outline-secondary">MORE VIDEOS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="join-blunt-mag-front mb-5">
            <div class="px-2 px-lg-0">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="pr-lg-4 w-100">


                                <h3>JOIN BLUNT MAG</h3>
                                <p class="pr-lg-1 pb-5">
                                    Blunt Mag has become the cultural heartbeat for content off the beaten track.
                                    Covering
                                    music,
                                    news, pop culture, film and gaming, Blunt offers an array of content from
                                    light-hearted
                                    and
                                    fun,
                                    to important and urgent.
                                </p>
                                <div class="input-group mb-5 mt-5">
                                    <input type="text" class="form-control" placeholder="Enter Email Address"
                                        aria-label="Enter Email Address" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary pl-4 pr-4" type="button"
                                            id="button-addon2">JOIN</button>
                                    </div>
                                </div>
                                <p class="join-subtext">
                                    By signing up, you agree to our privacy policy and terms of use, and to receive
                                    messages
                                    from
                                    Blunt Magazine.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <iframe src="https://open.spotify.com/embed/playlist/3Z50nXzZU9wGToBPOo6wKv" width="100%"
                                height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-music mt-5 mb-5 pl-3 pr-3 px-lg-0 ">
            <div class="container">
                <div class="row">
                    <?php
                        $cnt = 0;
                        foreach ($latest as $key => $post) {
                            setup_postdata($post);
                            $cnt++;
                            if ($cnt == 1) { ?>
                    <div class="col-12 col-lg-6 primary-col">
                        <a
                            href="<?php echo esc_url(get_permalink()); ?>">
                            <div class="image-div">
                                <?php echo get_the_post_thumbnail($post->ID, 'video-image', array('class' => ' '));  ?>
                                <div class="entry-meta">
                                    <div class="subtitle mb-0">MUSIC NEWS</div>
                                    <?php
                                    echo '<h2 class="entry-title">',wp_trim_words(get_the_title(), 8).'</h2>';
                             
                                    ?>

                                </div>
                            </div>

                        </a>
                    </div>
                    <?php
                        } elseif (($cnt == 2) || ($cnt == 3)) {
                            get_template_part('loop-templates/tease-tall-post');
                        } elseif ($cnt < 7) {
                            get_template_part('loop-templates/tease-wide-post');
                        }
                        }
                            wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
