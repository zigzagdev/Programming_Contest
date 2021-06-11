<?php
fscanf(STDIN, "%d", $a);
$b =explode(" ",trim(fgets(STDIN)));

rsort($b);
$alice=array_map('current', array_chunk($b, 2));
$bob=array_map('current', array_chunk(array_slice($b, 1), 2));

echo array_sum($alice)-array_sum($bob);