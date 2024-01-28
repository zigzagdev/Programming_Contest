<?php
fscanf(STDIN, "%d%d%d%d", $a, $b, $c, $d);

$avicii = max($a, $c);
$zedd = min($b, $d);

if ($zedd - $avicii > 0) {
    echo $zedd - $avicii;
} else {
    echo '0';
}
