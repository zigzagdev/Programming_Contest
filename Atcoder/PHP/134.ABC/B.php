<?php
fscanf(STDIN, '%d%d', $n, $d);


$total = 2 * $d + 1;

echo ceil($n / $total);