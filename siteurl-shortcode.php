<?php
/**
 * Description: Gets current site URL with a shortcode. Add to /wp-content/mu-plugins/ (create if doesn't exist)
 * Plugin Name: Get Home URL
 * Author: Dillyn Barber
 * Author URI: https://www.caveconsulting.com
 */
function make_url_shortcode() {
return get_bloginfo('url');
}
add_shortcode('url','url_shortcode');
