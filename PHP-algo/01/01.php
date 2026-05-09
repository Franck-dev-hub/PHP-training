<?php
$char = (string)"e";
$text_input = (string)readline("Enter a text : ");

$found = str_contains($text_input, $char);

$status = $found ? "has been found." : "hasn't been found.";

echo "Character '$char' $status";