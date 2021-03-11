<?php
global $tag_filter;
 
$post_type = get_queried_object();
$slug = $post_type->slug;

if ($tag_filter) {
    $filter = $tag_filter->slug;
}
 
?>

<div class="tag-header mb-5 <?php echo $class; ?>">
    <div class="container">
        <div class="row tag-header-container align-items-end">
            <div class="col-12">
                <div class="subtitle mb-3">YOU SEARCHED FOR</div>
                <header class="page-header">

                    <h1 class="page-title mb-4">
                        <?php
                            printf(
                            /* translators: %s: query term */
                            esc_html__('\'%s\'', 'understrap'),
    get_search_query()
);
                                ?>
                    </h1>

                </header>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="swiper-container swiper-filter">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul class="nav cat-nav ">
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase active"
                                        href="/tag/<?php echo $slug; ?>">
                                        SHOWING &nbsp &nbsp/&nbsp &nbsp <?php if ($tag_filter == null): echo 'ALL'; else: echo $tag_filter->name; endif; ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($tag_filter->slug == 'music'): echo 'active'; endif;?>"
                                        href="/?s=<?php  printf(esc_html__('%s', 'understrap'), get_search_query()); ?>&filter=music">MUSIC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($tag_filter->slug == 'film'): echo 'active'; endif;?>"
                                        href="/?s=<?php  printf(esc_html__('%s', 'understrap'), get_search_query()); ?>&filter=film">FILM</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($tag_filter->slug == 'gaming'): echo 'active'; endif;?>"
                                        href="/?s=<?php  printf(esc_html__('%s', 'understrap'), get_search_query()); ?>&filter=gaming">GAMING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($tag_filter->slug == 'culture'): echo 'active'; endif;?>"
                                        href="/?s=<?php  printf(esc_html__('%s', 'understrap'), get_search_query()); ?>&filter=culture">CULTURE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($tag_filter->slug == 'video'): echo 'active'; endif;?>"
                                        href="/?s=<?php  printf(esc_html__('%s', 'understrap'), get_search_query()); ?>&filter=video">VIDEO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($tag_filter->slug == 'news'): echo 'active'; endif;?>"
                                        href="/?s=<?php  printf(esc_html__('%s', 'understrap'), get_search_query()); ?>&filter=news">NEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($tag_filter->slug == 'features'): echo 'active'; endif;?>"
                                        href="/?s=<?php  printf(esc_html__('%s', 'understrap'), get_search_query()); ?>&filter=features">FEATURES</a>
                                </li>
                                <?php if ($tag_filter != null):?>
                                <li class="nav-item pr-5">
                                    <a class="nav-link  "
                                        href="/?s=<?php  printf(esc_html__('%s', 'understrap'), get_search_query()); ?>">RESET</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="swiper-slide d-lg-none">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </div>
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
            get_template_part('loop-templates/tease-tall-post');
            $cnt++;
        }
    } else {
        get_template_part('loop-templates/content', 'none');
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