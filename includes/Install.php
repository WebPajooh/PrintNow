<?php

class Install
{
	public static function createPrintPage()
	{
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