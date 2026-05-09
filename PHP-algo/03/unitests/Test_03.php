<?php
use PHPUnit\Framework\TestCase;

class Test_03 extends TestCase {
    public function testReverseChar() {
        $this->assertEquals('H', strrev('H'));
    }
    public function testReverseString() {
        $this->assertEquals('olleH', strrev('Hello'));
    }
    public function testReverseStringWithSpace() {
        $this->assertEquals('! ereht olleH', strrev('Hello there !'));
    }
    public function testReverseEmptyString() {
        $this->assertEquals('', strrev(''));
    }
}