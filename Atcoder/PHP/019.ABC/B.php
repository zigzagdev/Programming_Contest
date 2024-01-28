<?php
fscanf(STDIN, '%s', $string);

$divide = str_split($string);
$array = [];
$num = 1;

for ($i = 0; $i < count($divide); $i++) {
    if ($divide[$i] == $divide[$i + 1]) {
        $num++;
    } else {
        array_push($array, $divide[$i], $num);
        $num = 1;
    }
}
echo implode("", $array) . "\n";