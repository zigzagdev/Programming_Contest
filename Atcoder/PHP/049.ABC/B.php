<?php
fscanf(STDIN, '%d%d', $h, $w);

for ($i = 0; $i < $h; $i++) {
    fscanf(STDIN, '%s', $c);
    $array[] = $c;
}

foreach ($array as $value) {
    for ($i = 0; $i < 2; $i++) {
        echo $value . "\n";
    }
}