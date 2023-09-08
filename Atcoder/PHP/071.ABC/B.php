<?php
$evis = str_split(trim(fgets(STDIN)));
sort($evis);

$jap = array_unique($evis);
$evija = range('a', 'z');
$evisjap = array_diff($evija, $jap);


if ($evisjap == []) {
    echo "None";
} else {
    echo current($evisjap);
}