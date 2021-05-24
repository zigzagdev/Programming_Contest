<?php
fscanf(STDIN, "%d%d", $x,$y);

$A=array(1,3,5,7,8,10,12);
$B=array(4,6,9,11);
$C=array(2);

if(in_array($x,$A)&&in_array($y,$A))
 {echo "Yes";} elseif(in_array($x,$B)&&in_array($y,$B))
 {echo "Yes";}else
 {echo "No";}