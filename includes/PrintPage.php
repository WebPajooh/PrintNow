<?php

class PrintPage
{
	public static function setTheTemplate($pageTemplate)
	{
		if (is_page('print')) {
			$pageTemplate = PLUGIN_DIR . '/../template.php';
		}
		return $pageTemplate;
	}
}