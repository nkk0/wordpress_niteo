<?php
/**
 * Highlighter Integration Test
 *
 * @package Niteo_interview_plugin
 */

class HighlighterIntegrationTest extends WP_UnitTestCase {

    function test_finding_code_blocks() {
        include('inputs-code-block-finder.php');

        $codeblocks = SyntaxHighlighter::find_code_blocks_to_highlight($test1[0]);
        $this->assertEquals($test1[1], $codeblocks);
        $codeblocks = SyntaxHighlighter::find_code_blocks_to_highlight($test2[0]);
        $this->assertEquals($test2[1], $codeblocks);
        $codeblocks = SyntaxHighlighter::find_code_blocks_to_highlight($test3[0]);
        $this->assertEquals($test3[1], $codeblocks);

    }

}
?>
