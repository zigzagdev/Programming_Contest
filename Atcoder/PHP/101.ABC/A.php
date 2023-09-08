<?php
$s = (trim(fgets(STDIN)));

$A = substr_count($s, "+");
$B = substr_count($s, "-");

echo $A - $B;
?>
