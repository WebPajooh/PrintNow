<?php
/*
Plugin Name: PrintNow
Description: Wordpress Print Plugin
Version: 0.0.1
Author: WebPajooh
Author URI: http://webpajooh.github.io/WebPajooh
*/

require 'config.php';
require 'includes/helpers.php';
require 'includes/Install.php';
require 'includes/PrintPage.php';

add_action('activated_plugin', 'Install::createPrintPage');
add_filter('query_vars', 'Install::addPostIDVar');
add_filter('page_template', 'PrintPage::setTheTemplate');