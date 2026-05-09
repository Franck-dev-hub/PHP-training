<?php
use PHPUnit\Framework\TestCase;

function hasChar(string $text, string $char): bool {
    return str_contains($text, $char);
}

class Test extends TestCase {
    public function testCharExist() {
        $this->assertTrue(hasChar("Hello", 'e'));
    }
    public function testCharDoesNotExist() {
        $this->assertFalse(hasChar("Animal", 'e'));
    }
    public function testEmptyString() {
        $this->assertFalse(hasChar('', 'e'));
    }
    public function testEmptyChar() {
        $this->assertTrue(hasChar("Hello", ''));
    }
}