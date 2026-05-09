<?php
$char = (string)"*";
$text_input = (string)readline("Enter a text : ");
$text_output =(string)"";

for ($i = 0; $i < (strlen($text_input)); $i++) {
    $text_output .= $text_input[$i];

    if ($i < strlen($text_input) - 1) {
        $text_output .= "*";
    }
}

echo $text_output . PHP_EOL;