<?php
/**
 * Syntax Highlighter Test
 *
 * @package Niteo_interview_plugin
 */

class SyntaxHighlighterTest extends WP_UnitTestCase {

    function test_highlighter() {
        // Test the highlight_code_block function
        // with some pre-written inputs
        include('inputs-text-syntax-highlighter.php');
        $highlighted_text = SyntaxHighlighter::highlight_code_block($test1[0]);
        $this->assertEquals($test1[1], $highlighted_text);
        $highlighted_text = SyntaxHighlighter::highlight_code_block($test2[0]);
        $this->assertEquals($test2[1], $highlighted_text);
        $highlighted_text = SyntaxHighlighter::highlight_code_block($test3[0]);
        $this->assertEquals($test3[1], $highlighted_text);
    }
}
?>
