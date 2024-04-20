<?php
fscanf(STDIN, '%d', $n);
$p = explode(' ', trim(fgets(STDIN)));
$cnt = 0;

while ($n != 1) {
    $n = $p[$n - 2];
    $cnt += 1;
}
echo $cnt;