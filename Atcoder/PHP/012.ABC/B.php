<?php
fscanf(STDIN, '%d', $time);

$h = $time / 3600;
$m = ($time % 3600) / 60;
$s = ($time % 3600) % 60;


echo date("H:i:s", mktime($h, $m, $s)) . "\n";