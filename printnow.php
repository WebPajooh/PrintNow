<?php
/*
Plugin Name: PrintNow
Description: Wordpress Print Plugin
Version: 0.0.1
Author: WebPajooh
Author URI: http://webpajooh.github.io/WebPajooh
*/

require 'includes/Install.php';

add_action('activated_plugin', 'Install::createPrintPage');