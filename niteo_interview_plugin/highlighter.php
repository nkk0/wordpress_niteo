<?php

/*
Plugin Name: Niko Highlighter
*/


function highlight_text($source) {
    include_once 'geshi.php';
    $geshi = new GeSHi($source[1], 'python');

    return $geshi->parse_code();
}

function parse_text($input) {
    $pattern='~```(.*?)```~';

    $newstring = preg_replace_callback($pattern,'highlight_text',$input);
    return $newstring;
}

add_filter('the_content', 'parse_text');

?>
