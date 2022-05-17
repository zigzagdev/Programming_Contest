<?php
fscanf(STDIN, "%d", $t);

$sum=0;
for($i=0;$i<$t;$i++){
  fscanf(STDIN, "%d%d", $a,$b);
 $sum += $b-$a+1;
}
echo $sum ;
