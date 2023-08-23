<?php
//Define Dirpath for hooks
//define( 'DIR_PATH', plugin_dir_path( __FILE__ ) );

/*
 * Plugin Name:       Fluent Shortcode
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.3
 * Author:            Shiam Chowdhury
 * Author URI:        https://shiamch.com/
 */


require_once plugin_dir_path(__FILE__) . 'includes/my-class.php';

$my_class_instance = new My_Class();

echo $my_class_instance->my_function();


//require __DIR__ . '/vendor/autoload.php';


//require_once plugin_dir_path( __FILE__ ) . 'include/ActivationHandler.php';

//$test = new ActivationHandler();
//
//$test->addShortcode();

//
//if ( ! class_exists( 'FluentShortcode' ) ) {
//    class FluentShortcode {
//
//        /**
//         * Constructor
//         */
//        public function __construct() {
//            $this->setup_actions();
//        }
//
//        /**
//         * Setting up Hooks
//         */
//        public function setup_actions() {
//            //Main plugin hooks
//            register_activation_hook( DIR_PATH, array( 'FluentShortcode', 'activate' ) );
//            register_deactivation_hook( DIR_PATH, array( 'FluentShortcode', 'deactivate' ) );
//        }
//
//        /**
//         * Activate callback
//         */
//        public function activate() {
//            //Activation code in here
//            new \FluentBoards\App\Hooks\Handlers\ActivationHandler();
//        }
//
//        /**
//         * Deactivate callback
//         */
//        public static function deactivate() {
//            //Deactivation code in here
//        }
//
//    }
//
//
//    // instantiate the plugin class
//    $wp_plugin_template = new FluentShortcode();
//}
