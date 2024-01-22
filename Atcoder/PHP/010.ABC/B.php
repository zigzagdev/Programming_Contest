<?php
fscanf(STDIN, '%d', $d);
$int = array_map('intval', explode(" ", trim(fgets(STDIN))));

$petal = 0;

for ($i = 0; $i < $d; $i++) {
    if ($int[$i] === 2 || $int[$i] === 4 || $int[$i] === 8) {
        $petal += 1;
    } elseif ($int[$i] === 5) {
        $petal += 2;
    } elseif ($int[$i] === 6) {
        $petal += 3;
    } else {
        $petal += 0;
    }
}
echo $petal . "\n";