<?php
fscanf(STDIN, "%d", $a);
$c =explode(" ",trim(fgets(STDIN)));
$changes =array_map('intval', $c);

sort($changes);
$last=end($changes);