<?php

class Install
{
	public static function createPrintPage()
	{
		if (!get_page_by_path('print')) {
			$page = [
				'post_type'   => 'page',
				'post_title'  => 'نسخه چاپی',
				'post_status' => 'publish',
				'post_author' => 1,
				'post_name'   => 'print'
			];
			wp_insert_post($page);
		}
	}
}