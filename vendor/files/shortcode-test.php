<?php


class ShortcodeTest
{
    public function getDesign()
    {
        add_shortcode('my-sc', 'testFunction');
    }

    function testFunction()
    {
        return 'Hello';
    }
}
