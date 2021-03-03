<?php


function pull_front_featured(){ 
    $posts = get_posts(array( 'category_name' => 'features', 'posts_per_page' => 3 ));
    return $posts;
}

function latest_without_featured($featured){

    $ignore = array_column($featured, 'ID');
 
    $posts = get_posts(array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 7, "post__not_in" => $ignore ));
    return $posts;
}