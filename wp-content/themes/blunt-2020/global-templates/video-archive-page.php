<?php

$title = get_the_archive_title();
 
?>

<div class="archive-header-video mb-5">
    <div class="container">
        <div class="row archive-header-container  ">

            <h1 class="sr-only page-title"><?php echo $title; ?>
            </h1>


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

            <div class="col-12">
                <?php $youtube = get_field('youtube_url');
                            $embed = getYoutubeEmbedUrl($youtube);
                            echo createEmbedCode($embed); ?>

            </div>
            <div class="col-12 mt-5">
                <div class="subtitle mb-2 mb-lg-3">LATEST VIDEO</div>
            </div>
            <div class="col-12 col-lg-7">

                <?php
                                                                the_title(
                                sprintf('<h2 class="entry-title mb-3"><a href="%s" rel="bookmark" data-index="%d" class="slider-step">', esc_url(get_permalink()), $cnt),
                                '</a></h2>'
                            ); ?>
                <div class="excerpt mb-3">
                    <?php echo str_replace(" [...]", "", wp_trim_excerpt()); ?>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <?php show_cats(); ?>
                <?php show_author(); ?>
                <div class="mt-4 w-100">
                    <a href="/category/video" class="btn btn-outline-white">READ THE ARTICLE</a>

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
            if (($cnt > 0) && ($cnt < 5)):
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

<?php get_template_part('ad-templates/video-archive-row'); ?>


<div class="px-3 px-lg-0">
    <div class="container">
        <div class="row">
            <?php
    if (have_posts()) {
        $cnt = 0;
        while (have_posts()) {
            the_post();
            if (($cnt > 4) && ($cnt < 9)):
                get_template_part('loop-templates/tease-tall-post');
            endif;
            $cnt++;
        }
    } ?>

        </div>
    </div>
</div>


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