<?php
fscanf(STDIN, '%d', $time);

$cards = [];
for ($i = 0; $i < $time; $i++) {
    array_push($cards, trim(fgets(STDIN)));
}

$role = [];
foreach ($cards as $card => $value) {
    if ($value[0] == $value[1] && $value[1] == $value[2] && $value[2] == $value[3]) {
        array_push($role, 'Four Card');
    } elseif ($value[0] == $value[1] && $value[1] == $value[2] && $value[2] != $value[3] || $value[1] == $value[2] && $value[2] == $value[3] && $value[0] != $value[1]) {
        array_push($role, 'Three Card');
    } elseif ($value[0] == $value[1] && $value[2] == $value[3] && $value[1] != $value[2]) {
        array_push($role, 'Two Pair');
    } elseif ($value[0] == $value[1] || $value[1] == $value[2] || $value[2] == $value[3]) {
        array_push($role, 'One Pair');
    } else {
        array_push($role, 'No Pair');
    }
}
foreach ($role as $key => $value) {
    print_r($value . "\n");
}