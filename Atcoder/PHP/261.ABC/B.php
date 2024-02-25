<?php
fscanf(STDIN, "%d", $member);

$array = [];

for ($i = 0; $i < $member; $i++) {
    $array[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < $member; $i++) {
    for ($j = 0; $j < $member; $j++) {
        $now = $array[$i][$j];
        if ($array[$i][$j] == '-') {
            continue;
        } elseif ($now == 'L' && $array[$j][$i] != 'W' || 
            $now == 'W' && $array[$j][$i] != 'L' || $now == 'D' && $array[$j][$i] != 'D') {
            echo 'incorrect';
            exit;
        }
    }
}
echo 'correct';