<?php
class Blunt_Mag_Recent_Post_Widget extends WP_Widget
{

    // The construct part
    public function __construct()
    {
        parent::__construct(

            // Base ID of your widget
            'Blunt_Mag_Recent_Post_Widget',

            // Widget name will appear in UI
            __('Blunt Latest Widget', 'blunt-mag'),

            // Widget description
            array('description' => __('Custom widget for https://bluntmag.com.au/ displaying the latest posts.', 'blunt-mag'),)
        );
    }

    // Creating widget front-end

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
 
        // $cat = $instance['selected-category'];
        global $post;

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        // This is where you run the code and display the output
        if (!$post) :
            $posts = get_posts([
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 5
            ]); else :
            $posts = get_posts([
                'post_type' => 'post',
                'post__not_in' => [$post->ID],
                'post_status' => 'publish',
                'posts_per_page' => 5
            ]);
        endif; ?>
<div class="trending-widget">
    <?php
            foreach ($posts as $key => $value) {
                $post = $value;
                setup_postdata($post);
                if ($key == 0): ?>
    <div class="mr-5">
        <a href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail($post_id, 'tile', array('loading' => 'lazy', 'class' => "mb-4 ")); ?>
        </a>
    </div>
    <?php endif; ?>
    <div class="trending-widget-item d-flex item ">
        <div class="count-tend">
            <?php echo $key + 1; ?>
        </div>
        <a href="<?php the_permalink(); ?>" class='mr-3 <?php if ($key < count($posts) -1): echo 'mb-4';
                endif; ?>'><?php echo get_the_title(); ?></a>

    </div>
    <?php
            } ?>
</div>
<?php
        echo $args['after_widget'];
        wp_reset_postdata();
    }

    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'blunt-mag');
        }
 

        // Widget admin form?>
<p>
    <label
        for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
    <input class="widefat"
        id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>"
        type="text" value="<?php echo esc_attr($title); ?>" />
</p>
<?php
        $terms = get_terms(
            array(
                'taxonomy' => 'category',
                'hide_empty' => true,
            )
        ); ?>


<?php
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        // $instance['selected-category'] = (!empty($new_instance['selected-category'])) ? strip_tags($new_instance['selected-category']) : '';
 
        return $instance;
    }

    // Class wpb_widget ends here
}
