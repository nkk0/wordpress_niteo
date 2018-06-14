<?php

/*
  Plugin Name: Niteo Interview Text Highlighter
  Version: 1.0
  Author: nkk0
  Author URI: github.com/nkk0
*/

function highlight_code_syntax($source) {
  // use the geshi backend to highlight any text for the desired language
  include_once plugin_dir_path(__FILE__) . 'geshi.php';
  $geshi = new GeSHi($source[2], trim($source[1]));

  return $geshi->parse_code();
}

function find_code_blocks_in_text($input) {
  // lazily match any text between 2 sets of ``` and capture specified language
  $pattern='~```(.*)([\s\S]*?)```~';

  // call highlight_code_syntax() on every regex match in the $input
  $newstring = preg_replace_callback($pattern,'highlight_code_syntax',strip_tags($input));

  // replace the invisible 'nbsp' character with an empty string
  $newstring = str_replace("&nbsp;", '', $newstring);

  return trim($newstring);
}

add_filter('the_content', 'find_code_blocks_in_text');

?>
