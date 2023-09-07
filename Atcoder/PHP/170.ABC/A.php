<?php
$x = explode(" ", trim(fgets(STDIN)));

$y = array_search(0, $x);

echo $y + 1;
