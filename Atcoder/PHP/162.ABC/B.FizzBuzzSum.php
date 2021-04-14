<?php
fscanf(STDIN, "%d", $n);

$count=0;
for($i=1; $i<=$n; $i++)
    if($i%15==0||$i%3==0||$i%5==0){
        $count +=0 ;} else {
        $count +=$i ;}
echo $count;
?>
