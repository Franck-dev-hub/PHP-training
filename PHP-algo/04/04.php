<?php
$text_input = str_repeat("abcdefghijklmnopqrstuvwxyz", 10);
$text_length = strlen($text_input);
$position = 0;

for ($i = 1; $position + $i <= $text_length; $i++) {
    echo substr($text_input, $position, $i) . PHP_EOL;
    $position += $i;
}