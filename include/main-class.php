<?php

// Block direct access to file
defined( 'ABSPATH' ) or die( 'Not Authorized!' );

class WordPress_Plugin_Starter {

    public function __construct() {

        // Plugin uninstall hook
        register_uninstall_hook( WPS_FILE, array('WordPress_Plugin_Starter', 'plugin_uninstall') );

        // Plugin activation/deactivation hooks
        register_activation_hook( WPS_FILE, array($this, 'plugin_activate') );
        register_deactivation_hook( WPS_FILE, array($this, 'plugin_deactivate') );


    }

    public static function plugin_uninstall() { }

    /**
     * Plugin activation function
     * called when the plugin is activated
     * @method plugin_activate
     */
    public function testFunction()
    {
        return 'Blog by Shiam';
    }

    public function plugin_activate()
    {
        add_shortcode('my-sc', 'testFunction');
    }

    /**
     * Plugin deactivate function
     * is called during plugin deactivation
     * @method plugin_deactivate
     */
    public function plugin_deactivate() { }




}

new WordPress_Plugin_Starter();