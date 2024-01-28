<?php
fscanf(STDIN, '%d', $first);
fscanf(STDIN, '%d', $second);
fscanf(STDIN, '%d', $third);

$array = array($first, $second, $third);
sort($array);
$revers = array_reverse($array);
$reverse = array_flip($revers);

echo ($reverse[$first] + 1) . "\n";
echo ($reverse[$second] + 1) . "\n";
echo ($reverse[$third] + 1) . "\n";