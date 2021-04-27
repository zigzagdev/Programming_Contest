<?php
fscanf(STDIN, "%d%d", $a,$x);
$least = [];
for ($i=1; $i<=$a; $i++) {
    array_push($least, trim(fgets(STDIN)));
}
$sum=0;  #$ds_total
foreach($least as $val){
    $sum +=$val ;
}

$rest=$x-$sum;
$min=min($least);
$arsenal=floor($rest/$min);
$liverpool=count($least);

echo $liverpool+$arsenal;
?>
