<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . "/../04.php";

class Test_04 extends TestCase {
    public function testStandard() {
        $input = "abcdef";
        $expected = ['a', "bc", "def"];
        $this->assertEquals($expected, Pyramid::generate($input));
    }
    public function testEmptyString() {
        $this->assertEquals([], Pyramid::generate(''));
    }
    public function testGenerateIncompleteLastRowIsIgnored()
    {
        $input = "abcde";
        $expected = ["a", "bc"];
        $this->assertEquals($expected, Pyramid::generate($input));
    }
    public function testGenerateWithSpaces()
    {
        $input = "1 23 456";
        $expected = ["1", " 2", "3 4"];
        $this->assertEquals($expected, Pyramid::generate($input));
    }
}