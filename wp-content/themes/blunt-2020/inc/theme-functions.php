<?php


function pull_front_featured()
{
    $posts = get_posts(array( 'category_name' => 'features', 'posts_per_page' => 3 ));
    return $posts;
}

function latest_without_featured($featured)
{
    $ignore = array_column($featured, 'ID');
 
    $posts = get_posts(array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 7, "post__not_in" => $ignore ));
    return $posts;
}


// remove 'Category: " from the archive titles

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});


// update the excerpt length

function blunt_custom_excerpt_length($length)
{
    return 10;
}
add_filter('excerpt_length', 'blunt_custom_excerpt_length', 999);

add_filter('excerpt_more', '__return_empty_string');
