<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;


$title = get_the_archive_title();

if (strlen($title) > 12):
    $class = 'large-heading';
else:
    $class = '';
endif;
?>

<div class="archive-header <?php echo $class; ?>">
    <div class="container">
        <div class="row archive-header-container align-items-end">
            <div class="floating-header">
                <header class="page-header">
                    <h1 class="page-title"><?php echo $title; ?>
                    </h1>
                </header>
            </div>

            <?php if (have_posts()) { ?>
            <!-- .page-header -->
            <?php
                        $cnt = 0;
                        // Start the loop.
                        while (have_posts()) {
                            the_post();

                            /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                            if ($cnt == 0): ?>

            <div class="col-12 col-md-6">
                <div class="px-3 px-lg-0">
                    <a
                        href="<?php echo esc_url(get_permalink()); ?>">
                        <div class="image-div mb-3 mb-lg-0">
                            <?php echo get_the_post_thumbnail($post->ID, 'video-image', array('class' => 'd-block home-image')); ?>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <div class="px-3 px-lg-0">
                    <a
                        href="<?php echo esc_url(get_permalink()); ?>">
                        <div class="entry-meta pl-lg-2">
                            <div class="subtitle mb-2 mb-lg-3">LATEST</div>
                            <?php
                                                                the_title(
                                sprintf('<h2 class="entry-title mb-3"><a href="%s" rel="bookmark" data-index="%d" class="slider-step">', esc_url(get_permalink()), $cnt),
                                '</a></h2>'
                            ); ?>
                            <div class="excerpt mb-3">
                                <?php echo str_replace(" [...]", "", wp_trim_excerpt()); ?>
                            </div>
                            <?php show_cats(); ?>
                            <?php show_author(); ?>
                        </div>
                    </a>
                </div>
            </div>

            <?php endif;
                            $cnt++;
                        }
                }?>

        </div>
    </div>
</div>
<div class="px-3 px-lg-0">
    <div class="container">
        <div class="row">
            <?php
    if (have_posts()) {
        $cnt = 0;
        while (have_posts()) {
            the_post();
            if (($cnt > 0) && ($cnt < 9)):
                get_template_part('loop-templates/tease-tall-post');
            endif;
            $cnt++;
        }
    } else {
        get_template_part('loop-templates/content', 'none');
    } ?>

        </div>
    </div>
</div>
<div class="join-blunt-mag-archive mb-5">
    <div class="px-2 px-lg-0">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="pr-lg-4 w-100">
                        <h3>JOIN BLUNT MAG</h3>
                        <p class="pr-lg-1 pb-5">
                            Blunt Mag has become the cultural heartbeat for content off the beaten track. Covering
                            music, news, pop culture, film and gaming, Blunt offers an array of content from
                            light-hearted and fun, to important and urgent.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group mb-5 mt-5">
                        <input type="text" class="form-control" placeholder="Enter Email Address"
                            aria-label="Enter Email Address" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary pl-4 pr-4" type="button"
                                id="button-addon2">JOIN</button>
                        </div>
                        <p class="join-subtext">
                            By signing up, you agree to our privacy policy and terms of use, and to receive
                            messages
                            from
                            Blunt Magazine.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="px-3 px-lg-0">
    <div class="container">
        <div class="row">
            <?php
    if (have_posts()) {
        $cnt = 0;
        while (have_posts()) {
            the_post();
            if (($cnt > 8) && ($cnt < 17)):
                get_template_part('loop-templates/tease-tall-post');
            endif;
            $cnt++;
        }
    } ?>

        </div>
    </div>
</div>


<?php get_template_part('ad-templates/archive-row'); ?>


<div class="px-3 px-lg-0">
    <div class="container mt-2">
        <div class="row">
            <?php
    if (have_posts()) {
        $cnt = 0;
        while (have_posts()) {
            the_post();
            if ($cnt > 16) :
                get_template_part('loop-templates/tease-tall-post');
            endif;
            $cnt++;
        }
    } ?>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="ml-auto mr-auto">
                <?php understrap_pagination(); ?>
            </div>

        </div>
    </div>
</div>