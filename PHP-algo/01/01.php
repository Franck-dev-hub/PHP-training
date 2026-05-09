<?php
$found = (bool)false;
$char = (string)"e";
$response = (string)"Character '$char' ";

$text_input = (string)readline("Enter a text : ");

for ($i = 0; $i < strlen($text_input); $i++) {
    if ($text_input[$i] === $char) {
        $found = true;
        $response .= "as been found.";
        break;
    }
}

if (!$found) {
    $response .= "hasn't been found.";
}

echo $response;