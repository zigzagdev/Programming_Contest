<?php
fscanf(STDIN, "%d%d", $a,$b);
$c= explode(" ",fgets(STDIN));

rsort($c);

$sum=0;
for($i = 0; $i < $b; $i++){
$sum +=$c[$i];
}
echo $sum ;
