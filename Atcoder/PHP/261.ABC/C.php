<?php
fscanf(STDIN, "%d", $times);

$array = [];
for ($i = 1; $i <= $times; $i++) {
    $key = trim(fgets(STDIN));
    if (array_key_exists($key, $array)) {
        $array[$key] += 1;
        echo $key . "(" . $array[$key] . ")" . "\n";
    } else {
        $array[$key] = 0;
        echo $key . "\n";
    }
}