<?php
fscanf(STDIN, "%d%d%d", $x,$y,$z);

$x=strval($x);
$y=strval($y);
$z=strval($z);
$connect=$x.$y.$z;

$connect_int=intval($connect);
 if($connect_int%4==0)
 {echo "YES";}else
 {echo "NO";}