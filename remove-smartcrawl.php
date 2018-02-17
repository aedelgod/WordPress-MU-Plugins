<?php
/**
 * Description: Remove SmartCrawl Node
 * Plugin Name: Remove SmartCrawl Node
 * Author: Dillyn Barber
 * Author URI: https://www.caveconsulting.com
 */
function CaveConsulting_remove_smartcrawl_node($wp_admin_bar) {

	$wp_admin_bar->remove_node('wds-root');	
}
add_action('admin_bar_menu', 'CaveConsulting_remove_smartcrawl_node', 999);