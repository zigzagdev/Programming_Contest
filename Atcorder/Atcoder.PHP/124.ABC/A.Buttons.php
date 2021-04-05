<?php
fscanf(STDIN, "%d%d", $n,$o);

$array=array(($n+$o),($n+($n-1)),($o+($o-1)));
echo max($array);
?>