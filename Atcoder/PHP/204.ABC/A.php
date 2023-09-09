<?php
$moriyama = explode(' ', trim(fgets(STDIN)));

sort($moriyama);
if ($moriyama[0] == '0' && $moriyama[1] == '1') {
    echo '2';
} elseif ($moriyama[0] == '1' && $moriyama[1] == '2') {
    echo '0';
} elseif ($moriyama[0] == '0' && $moriyama[1] == '2') {
    echo '1';
} else {
    echo $moriyama[0];
}