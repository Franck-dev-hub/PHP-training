<?php
class Pyramid {
    public static function generate(string $input): array {
        $lines = [];
        $length = strlen($input);
        $position = 0;
        $step = 1;

        while ($position + $step <= $length) {
            $lines[] = substr($input, $position, $step);
            $position += $step;
            $step++;
        }
        return $lines;
    }
}