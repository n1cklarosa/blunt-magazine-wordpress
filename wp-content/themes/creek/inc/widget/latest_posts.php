<?php
/**
 * Plugin Name: Latest posts
 */

add_action( 'widgets_init', 'creek_latest_posts' );

function creek_latest_posts() {
	register_widget( 'creek_latest_posts' );
}

class creek_latest_posts extends WP_Widget {

	//widget setup
	function creek_latest_posts() {
		$widget_ops = array( 'classname' => 'creek_latest_posts', 'description' => esc_html__('A widget that displays the latest posts.', 'creek') );
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'creek_latest_posts' );
		$this->__construct( 'creek_latest_posts', esc_html__('Creek: Latest Posts Widget', 'creek'), $widget_ops, $control_ops );
	}

	//display the widget
	function widget( $args, $instance ) {
		extract( $args );

		global $post;
		$title = apply_filters('widget_title', $instance['title'] );
		$number = $instance['number'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
		?>

		<?php $recent = new WP_Query(array( 'posts_per_page' => $number )); while($recent->have_posts()) : $recent->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="block row item padding-vertical border-bottom">
			  <div class="featured-image col col-3 col-md-3 col-xs-3" data-mh="creek_latest_posts_height">
			  	<div class="bg-img" style="background-image: url(<?php the_post_thumbnail_url( null, 'medium'); ?>);"></div>
			  </div>
			  <div class="text col col-9  col-md-9 col-xs-9" data-mh="creek_latest_posts_height">
			  	<div class="text-inner text-vertical">
			  		<h3 class="title"><?php the_title(); ?></h3>
			  		<div class="block meta color-meta"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"> <?php echo get_the_date(); ?></time></div>
			  	</div>
			  </div>
			</a>
		<?php endwhile; wp_reset_postdata(); ?>

		<?php

		/* After widget (defined by themes). */
		echo $after_widget;

	}

	//update widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['number'] = strip_tags( $new_instance['number'] );

		return $instance;
	}

	//form for update
	function form( $instance ) {
		//defaults
		$defaults = array( 'title' => 'Title', 'number' => 5, 'popular_days' => 30 );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p><!-- title -->
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:90%;" />
		</p><!-- title -->

		<p><!-- posts num -->
			<label for="<?php echo $this->get_field_id( 'number' ); ?>">Number of posts to display:</label>
			<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo $instance['number']; ?>" size="3" />
		</p><!-- posts num -->


	<?php
	}
}

?>