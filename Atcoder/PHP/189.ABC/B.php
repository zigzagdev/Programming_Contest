<?php
fscanf(STDIN, '%d%d', $n, $x);

$now = 0;
$xx = $x * 100;

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d%d", $v, $p);
    $now += $v * $p;
    if ($now > $xx) {
        echo $i + 1;
        exit;
    }
}
echo -1;