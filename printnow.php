<?php
/*
Plugin Name: PrintNow
Description: Wordpress Print Plugin
Version: 1.0.0
Author: WebPajooh
Author URI: http://webpajooh.github.io/WebPajooh
*/

require 'config.php';
require 'includes/helpers.php';
require 'includes/Plugin.php';
require 'includes/PrintWidget.php';
require 'includes/PrintPage.php';

add_action('activated_plugin', 'Plugin::createPrintPage');
add_filter('query_vars', 'Plugin::addPostIDVar');
add_filter('widgets_init', 'registerPrintWidget');
add_filter('page_template', 'PrintPage::setTheTemplate');
