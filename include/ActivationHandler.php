<?php

namespace FluentShortcode\Include;

class ActivationHandler
{

    public function __construct()
    {

    }

    public function addShortcode(){
        add_shortcode('my-sc', 'twoFunction');
    }

    function twoFunction()
    {
        return 'Blog';

    }


}
