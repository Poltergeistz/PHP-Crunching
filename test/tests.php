<?php
require __DIR__.'/../pages/dico.php';
$GLOBALS['string'] = file_get_contents("./../data/dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$GLOBALS['dico'] = explode("\n", $GLOBALS['string']);

class tests extends \PHPUnit\Framework\TestCase
{
    function testEx1() {
        $result = ex1();
        $this->assertEquals(336532,$result);
    }
    function testEx2() {
        $result = ex2();
        $this->assertEquals(12298,$result);
    }
    function testEx3() {
        $result = ex3();
        $this->assertEquals(539,$result);
    }
    function testEx4() {
        $result = ex4();
        $this->assertEquals(8,$result);
    }
    
}