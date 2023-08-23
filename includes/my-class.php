<?php

// my-class.php

class My_Class {

    public function my_function() {
//        echo 'Function in My_Class called.';
//        add_shortcode('my-new', 'helloFun');

        $output = 'Function in My_Class called.';

        add_shortcode('my_shortcode', array($this, 'my_shortcode_function'));

        return $output;
    }

    public function helloFun(){
        $message = '<h3>Shiam\'s Blog<h3/>';

        return $message;
    }

    public function my_shortcode_function($atts, $content = null) {
        return 'Shortcode content goes here.';
    }


}
