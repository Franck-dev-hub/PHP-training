<?php
use PHPUnit\Framework\TestCase;

function addChar(string $text, string $char): bool {
    return implode($char, str_split($text));
}

class Test_02 extends TestCase {
    public function testAddChar() {
        $this->assertTrue(addChar("Hello", '*'));
    }
    public function testEmptyString() {
        $this->assertFalse(addChar('', '*'));
    }
    public function testEmptyChar() {
        $this->assertTrue(addChar("Hello", ''));
    }
}