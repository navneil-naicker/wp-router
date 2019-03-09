<?php
/*
Plugin Name: WordPress Router
Plugin URI: hhttp://www.navz.me
Description: A starter plugin example for WordPress
Version: 1.0.0
Author: Navneil Naicker
Author URI: http://www.navz.me
*/

class WP_Router{

    public $plugin_name = 'WP Router';
    public $plugin_slug = 'wp-router';
    public $plugin_version = '1.0.0';

    public function __construct(){
        require_once( dirname(__FILE__) . '/router.php');
    }

}

new WP_Router;

function wp_router_view( $view ){
    include(get_template_directory() . '/views/' . $view . '.php');
}

function wp_router_model( $model ){
    include(get_template_directory() . '/models/' . $model . '.php');
}