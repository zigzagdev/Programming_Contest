<?php
fscanf(STDIN, "%d", $x);

$max = 0;

for ($i = 0; $i < 50; $i++) {
    for ($j = 2; $j < 50; $j++) {
        if ($x >= pow($i, $j)) {
            $max = max($max, pow($i, $j));
        } else {
            break;
        }
    }
}
echo $max;
?>