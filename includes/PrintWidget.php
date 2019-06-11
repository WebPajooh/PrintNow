<?php

class PrintWidget extends WP_Widget
{
	function __construct()
	{
		parent::__construct(false, 'PrintNow');
	}

	function widget($args, $instance)
	{
		$title = apply_filters( 'widget_title', $instance['title'] );

		if (! is_single() && ! is_page()) {
			return;
		}

		$printLink = get_bloginfo('home') . '/print?post_id=' . get_the_id();

		echo $args['before_widget'];
		if (! empty($title))
		echo $args['before_title'] . $title . $args['after_title'];

		echo '<div id="sidebarPrintNowWidget">
			<button onclick="window.open(' . withQuotes($printLink) . ')">Print!</button>
		</div>';

		echo $args['after_widget'];
	}

	function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		return $instance;
	}

	function form($instance)
	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		}
		else {
			$title = 'Print';
		}
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
}

function registerPrintWidget() {
	register_widget('PrintWidget');
}