<?php
/*
Plugin Name: YouTube Subs
Plugin URI: https://shingiraibhengesa.000webhostapp.com/
Description: Display YouTube sub button and count
Version: 1.0.0
Author: Shingirai Bhengesa
Author URI: https://shingiraibhengesa.000webhostapp.com/
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

// Register Widget
function register_youtubesubs(){
  register_widget('Youtube_Subs_Widget');
}

// Hook in function
add_action('widgets_init', 'register_youtubesubs');