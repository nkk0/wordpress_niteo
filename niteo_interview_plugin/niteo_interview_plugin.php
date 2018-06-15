<?php

/*
  Plugin Name: Niteo Interview Text Highlighter
  Version: 1.0
  Author: nkk0
  Author URI: github.com/nkk0
*/
class SyntaxHighlighter {
public static function highlight_code_block($source) {
  // use the geshi backend to highlight any text for the desired language
  include_once plugin_dir_path(__FILE__) . 'geshi.php';
  $geshi = new GeSHi(strip_tags($source[2]), trim(strip_tags($source[1])));

  return $geshi->parse_code();
}

public static function find_code_blocks_to_highlight($input) {
	// regex to lazily match any text between 2 sets 
	// of ``` and capture specified language
	$pattern='~```(.*)([\s\S]*?)```~';

	// call highlight_code_block() on every regex match in the $input
	$newstring = preg_replace_callback($pattern,'self::highlight_code_block',$input);

	// replace the invisible 'nbsp' character with an empty string
	$newstring = str_replace("&amp;</span>gt", '></span>', $newstring);
	$newstring = str_replace("&nbsp;", '', $newstring);

	return trim($newstring);
}
}

add_filter('the_content', 'SyntaxHighlighter::find_code_blocks_to_highlight');

?>
