<?php
/**
 * Description: Get site url for links 
 * Plugin Name: Get Home URL
 * Author: Dillyn Barber
 * Author URI: https://www.caveconsulting.com
 */
function url_shortcode() {
return get_bloginfo('url');
}
add_shortcode('url','url_shortcode');