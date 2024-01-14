<?php
fscanf(STDIN, "%d", $times);
$sizes = explode(' ', trim(fgets(STDIN)));

for ($i = 0; $i <= $times; $i++) {
    if ($sizes[$i] >= $sizes[$i + 1]) {
        echo $sizes[$i];
        exit;
    }
}