<?php
$text_input = (string)readline("Enter a text : ");

$text_output = implode('*', str_split($text_input));

echo $text_output . PHP_EOL;