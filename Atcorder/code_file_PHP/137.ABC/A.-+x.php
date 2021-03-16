<?php
fscanf(STDIN, "%d%d", $a,$b);
$array=array(($a+$b),($a-$b),($a*$b));

echo max($array);

?>
