<?php


function pull_front_featured()
{
    $posts = get_posts(array( 'category_name' => 'features', 'posts_per_page' => 3 ));
    $articles = get_field('featured_articles', 'option');

    return $articles;
}


function filter_posts_for_id(&$item, $key)
{
    $item = $item->ID ;
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


// return posts with the same tags
function return_related($post_id)
{
    $tags = get_the_tags($post_id);
    if ($tags
        && !is_wp_error($tags)
    ) {
        array_walk($tags, 'convert_to_ids');
         
        $args = [
            'post__not_in'        => array( $post_id ),
            'post__not_in' => [$post_id],
            'post_type'    => 'post',
            'tag__in'      => $tags,
            'posts_per_page'      => 4,
        ];
        $my_query = get_posts($args);

        return $my_query;
    }
}

// use in array walk to extract the term ID
function convert_to_ids(&$item, $key)
{
    $item = $item->term_id ;
}


// return posts with the same tags
function return_more_from_category($post_id)
{
    $category = get_primary_taxonomy_term($post_id);
    if ($category
        && !is_wp_error($category)
    ) {
        array_walk($tags, 'convert_to_ids');
         
        $args = [
            'post__not_in'        => array( $post_id ),
            'post__not_in' => [$post_id],
            'post_type'    => 'post',
            'category__in'      => $category,
            'posts_per_page'      => 4,
        ];
        $my_query = get_posts($args);

        return $my_query;
    }
}


function get_primary_taxonomy_term($post = 0, $taxonomy = 'category')
{
    if (! $post) {
        $post = get_the_ID();
    }

    $terms        = get_the_terms($post, $taxonomy);
    $primary_term = array();

    if ($terms) {
        $term_display = '';
        $term_id = '';
        $term_slug    = '';
        $term_link    = '';
        if (class_exists('WPSEO_Primary_Term')) {
            $wpseo_primary_term = new WPSEO_Primary_Term($taxonomy, $post);
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term               = get_term($wpseo_primary_term);
            if (is_wp_error($term)) {
                $term_display = $terms[0]->name;
                $term_slug    = $terms[0]->slug;
                $term_id    = $terms[0]->term_id;
                $term_link    = get_term_link($terms[0]->term_id);
            } else {
                $term_display = $term->name;
                $term_slug    = $term->slug;
                $term_id    = $term->term_id;

                $term_link    = get_term_link($term->term_id);
            }
        } else {
            $term_display = $terms[0]->name;
            $term_slug    = $terms[0]->slug;
            $term_id    = $term->term_id;
            $term_link    = get_term_link($terms[0]->term_id);
        }
        $primary_term['url']   = $term_link;
        $primary_term['term_id']   = $term_id;
        $primary_term['slug']  = $term_slug;
        $primary_term['title'] = $term_display;
    }
    return $primary_term;
}


// convert yourtube link to embed code
function getYoutubeEmbedUrl($url)
{
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}


function createEmbedCode($url)
{
    return '<div class="videoWrapper"><iframe width="100%"  src="'.$url.'?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}



function fwp_archive_per_page($query)
{
    global $tag_filter;
    if (is_tag()) {
        if (isset($_GET['filter'])):
            $category_filter = sanitize_text_field($_GET['filter']);
        $category = get_category_by_slug($category_filter);

        if ($category) {
            $tag_filter = $category;
            $query->set('category__in', [$category->term_id]);
        }
        endif;
    }
}
add_filter('pre_get_posts', 'fwp_archive_per_page');


// lets add our custom admin page for our theme settings

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
    
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Ad Settings',
        'menu_title'	=> 'Ads',
        'parent_slug'	=> 'theme-general-settings',
    ));
}
