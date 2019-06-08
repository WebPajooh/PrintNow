<?php
/*
Plugin Name: PrintNow
Description: Wordpress Print Plugin
Version: 0.0.1
Author: WebPajooh
Author URI: http://webpajooh.github.io/WebPajooh
*/

require 'includes/config.php';
require 'includes/Install.php';
require 'includes/PrintPage.php';

add_action('activated_plugin', 'Install::createPrintPage');
