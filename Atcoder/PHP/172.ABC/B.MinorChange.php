<?php
$s = str_split(trim(fgets(STDIN)));
$t = str_split(trim(fgets(STDIN)));

$sum=0;
for($i = 0; $i < count($s); $i++)
    if($s[$i]!=$t[$i]){
        $sum += 1;}
echo $sum;
?>
