<?php

fscanf(STDIN, "%d %d %d", $N, $K, $X);
$A = array_map('intval', preg_split('/\s+/', trim(fgets(STDIN))));

array_splice($A, $K, 0, [$X]);
echo implode(' ', $A) . PHP_EOL;