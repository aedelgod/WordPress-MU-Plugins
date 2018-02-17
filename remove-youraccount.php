<?php
/**
 * Description: Removes Pro Site's "Your Account" Node
 * Plugin Name: Remove "Your Account" Node
 * Author: Dillyn Barber
 * Author URI: https://www.caveconsulting.com
 */
function CaveConsulting_remove_youraccount_node($wp_admin_bar) {

	$wp_admin_bar->remove_node('pro-site');	
}
add_action('admin_bar_menu', 'CaveConsulting_remove_youraccount_node', 999);