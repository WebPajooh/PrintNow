<?php

class PrintWidget extends WP_Widget
{
	function __construct()
	{
		parent::__construct(false, 'PrintNow');
	}

	function widget($args, $instance)
	{
		if (! is_single() && ! is_page()) {
			return;
		}

		$printLink = get_bloginfo('home') . '/print?post_id=' . get_the_id();

		echo '<div id="sidebarPrintNowWidget">
			<button onclick="window.open(' . withQuotes($printLink) . ')">Print!</button>
		</div>';
	}

	function update($new_instance, $old_instance)
	{
		// Save widget options
	}

	// function form($instance)
	// {
	// 	//
	// }
}

function registerPrintWidget() {
	register_widget('PrintWidget');
}