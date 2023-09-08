<?php
fscanf(STDIN, "%d%d", $n, $m);

$mul = $n * $m;
if ($mul % 2 == 0) {
    echo 'Even';
} else {
    echo 'Odd';
}
?>