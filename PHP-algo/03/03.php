<?php
$text_input =(string)readline("Enter a text : ");
$text_output = "";

for ($i = strlen($text_input) - 1; $i >= 0; $i--) {
    $text_output .= $text_input[$i];
}

echo $text_output . PHP_EOL;