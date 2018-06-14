<?php

/*
Plugin Name: Niko Highlighter
*/


function highlight_text($source) {
  include_once plugin_dir_path(__FILE__) . 'geshi.php';
  $geshi = new GeSHi($source[2], trim($source[1]));

  return $geshi->parse_code();
}

function parse_text($input) {
  $pattern='~```(.*)([\s\S]*?)```~';
  $newstring = preg_replace_callback($pattern,'highlight_text',strip_tags($input));
  $newstring = str_replace("&nbsp;", '', $newstring);

  return trim($newstring);
}

add_filter('the_content', 'parse_text');

?>
