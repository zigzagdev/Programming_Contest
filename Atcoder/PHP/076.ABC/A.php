<?php
fscanf(STDIN, "%d", $x);
fscanf(STDIN, "%d", $z);

if ($x > $z)
    echo $z - ($x - $z);
else
    echo $z + ($z - $x);
?>