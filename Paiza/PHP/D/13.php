<?php

fscanf(STDIN, "%d%d", $a, $b);

$divide = $a / $b;
$remainder = $a % $b;

echo floor($divide) . ' ' . $remainder;