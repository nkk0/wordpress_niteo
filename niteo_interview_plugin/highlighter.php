<?php

/*
Plugin Name: Niko Highlighter
*/


function highlight_text($source) {
    include_once plugin_dir_path(__FILE__) . 'geshi.php';
    $geshi = new GeSHi($source[1], 'python3');

    return $geshi->parse_code();
}

function parse_text($input) {
    $pattern='~```([\s\S]*?)```~';
    $newstring = preg_replace_callback($pattern,'highlight_text',trim(strip_tags($input)));

    return $newstring;
}

add_filter('the_content', 'parse_text');

?>
