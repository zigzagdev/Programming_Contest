<?php
list($s, $t) = explode(" ", trim(fgets(STDIN)));
fscanf(STDIN, "%d%d", $x,$y);
$u = trim(fgets(STDIN));

if($u==$s) {
    $x--;} else {
    $y-- ;}
echo "$x $y" ;
?>