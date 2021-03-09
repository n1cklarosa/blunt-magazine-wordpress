<?php
global $tag_filter;

$title = get_the_archive_title();
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
                <div class="subtitle mb-4">TAG</div>
                <header class="page-header">
                    <h1 class="page-title text-capitalize mb-5"><?php echo $title; ?>
                    </h1>
                </header>
                <ul class="nav cat-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase active"
                            href="/tag/<?php echo $slug; ?>">
                            SHOWING &nbsp &nbsp/&nbsp &nbsp <?php if ($tag_filter == null): echo 'ALL'; else: echo $tag_filter->name; endif; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($tag_filter->slug == 'music'): echo 'active'; endif;?>"
                            href="/tag/<?php echo $slug; ?>?filter=music">MUSIC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($tag_filter->slug == 'film'): echo 'active'; endif;?>"
                            href="/tag/<?php echo $slug; ?>?filter=film">FILM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($tag_filter->slug == 'gaming'): echo 'active'; endif;?>"
                            href="/tag/<?php echo $slug; ?>?filter=gaming">GAMING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($tag_filter->slug == 'culture'): echo 'active'; endif;?>"
                            href="/tag/<?php echo $slug; ?>?filter=culture">CULTURE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($tag_filter->slug == 'video'): echo 'active'; endif;?>"
                            href="/tag/<?php echo $slug; ?>?filter=video">VIDEO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($tag_filter->slug == 'news'): echo 'active'; endif;?>"
                            href="/tag/<?php echo $slug; ?>?filter=news">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($tag_filter->slug == 'features'): echo 'active'; endif;?>"
                            href="/tag/<?php echo $slug; ?>?filter=features">FEATURES</a>
                    </li>
                    <?php if ($tag_filter != null):?>
                    <li class="nav-item">
                        <a class="nav-link  "
                            href="/tag/<?php echo $slug; ?>">RESET</a>
                    </li>
                    <?php endif; ?>
                </ul>
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