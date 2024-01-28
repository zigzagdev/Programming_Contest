<?php

$result = 0;
for ($i = 0; $i < 3; $i++) {
    fscanf(STDIN, '%d%d', $score, $dec);
    $result += $score * ($dec * 0.1);
}
echo $result . "\n";