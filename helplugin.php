<?php
/**
* Plugin Name: Hel Plugin
* Plugin URl: https://www.facebook.com/
* Description: Bukan punyaku
* Author: HellQii
* Author URI: https://www.facebook.com/
* License: GPLv2
* License URl: https://www.gnu.org/licenses/gpl-2.0.html
*/

function HelloWorldShortcode()
{
    return 'Hello world';
} 
add_shortcode('hello_world','HelloWorldShortcode');